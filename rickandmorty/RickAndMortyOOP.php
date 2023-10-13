<?php declare(strict_types=1);

class Application
{
    private EpisodeCollection $collection;

    public function __construct()
    {
        $this->collection = new EpisodeCollection();
    }

    public function run()
    {
        $this->loadEpisodes();

        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to list episodes\n";
            echo "Choose 2 to select and possibly rate an episode\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    $this->collection->saveRatings();
                    echo "Bye bye!";
                    exit;
                case 1:
                    $this->listEpisodes();
                    break;
                case 2:
                    $this->rateEpisode($this->selectedEpisode() ?? null);
                    break;
                default:
                    echo "Please follow the guidelines\n";
            }
        }
    }

    private function loadEpisodes(): void
    {
        $page = 1;
        while (true) {
            $response = json_decode(file_get_contents("https://rickandmortyapi.com/api/episode?page={$page}"));
            if (empty($response->results)) {
                break;
            }
            foreach ($response->results as $episode) {
                $this->collection->addEpisode(new Episode($episode->name, $episode->episode));
            }
            if (empty($response->info->next)) {
                break;
            }
            $page++;
        }
        $this->collection->loadRatings();
    }

    private function listEpisodes(): void
    {
        $this->collection->listEpisodes();
    }

    private function selectedEpisode(): ?Episode
    {
        $seasonNumber = (int)readline("Enter the season number: ");
        $episodeNumber = (int)readline("Enter the episode number: ");
        $selectedEpisode = $this->collection->findEpisodeBySeasonAndNumber($seasonNumber, $episodeNumber);

        if ($selectedEpisode) {
            echo "Selected episode: Season " . $selectedEpisode->getSeason() .
                ", Episode " . $selectedEpisode->getEpisodeNumber() . " - " . $selectedEpisode->getTitle() . "\n";
            return $selectedEpisode;
        } else {
            echo "Episode not found.\n";
            return null;
        }
    }

    private function rateEpisode(?Episode $selectedEpisode): void
    {
        if ($selectedEpisode === null) {
            echo "Episode not found.\n";
            return;
        }

        $choice = readline("Do you want to rate this episode? (yes/no) ");
        if (strtolower($choice) === 'yes') {
            $rating = (int)readline("Rate the episode (1 to 5): ");
            $this->collection->rateEpisode($selectedEpisode->getTitle(), $rating);
        }
    }
}

class EpisodeCollection
{
    private const SCRIPT_DIR = __DIR__;
    private const RATINGS_FILE = self::SCRIPT_DIR . '/ratings.json';

    private array $episodes = [];

    public function addEpisode(Episode $episode): void
    {
        $this->episodes[] = $episode;
    }

    public function listEpisodes(): void
    {
        foreach ($this->episodes as $episode) {
            /** @var Episode $episode */
            echo "Season: " . $episode->getSeason() . ", Episode: " . $episode->getEpisodeNumber() . " - " .
                $episode->getTitle() . " | Average Rating: " . $episode->averageRating() . "\n";
            echo "=====================\n";
        }
    }

    public function findEpisodeBySeasonAndNumber(int $seasonNumber, int $episodeNumber): ?Episode
    {
        foreach ($this->episodes as $episode) {
            if ($episode->getSeason() === $seasonNumber && $episode->getEpisodeNumber() === $episodeNumber) {
                return $episode;
            }
        }
        return null;
    }

    public function rateEpisode(string $title, int $rating): void
    {
        foreach ($this->episodes as $episode) {
            if ($episode->getTitle() === $title) {
                /** @var Episode $episode */
                $episode->rate($rating);
                echo "Episode rated successfully.\n";
                return;
            }
        }
        echo "Episode not found.\n";
    }

    public function loadRatings(): void
    {
        if (file_exists(self::RATINGS_FILE)) {
            $savedRatings = json_decode(file_get_contents(self::RATINGS_FILE), true);
            foreach ($this->episodes as $episode) {
                if (isset($savedRatings[$episode->getTitle()])) {
                    /** @var Episode $episode */
                    $episode->setRatings($savedRatings[$episode->getTitle()]);
                }
            }
        }
    }

    public function saveRatings(): void
    {
        $ratingsData = [];
        foreach ($this->episodes as $episode) {
            /** @var Episode $episode */
            $ratingsData[$episode->getTitle()] = $episode->getRatings();
        }
        file_put_contents(self::RATINGS_FILE, json_encode($ratingsData));
    }
}

class Episode
{
    private string $title;
    private string $episodeID;
    private array $ratings = [];

    public function __construct(string $title, string $episodeID)
    {
        $this->title = $title;
        $this->episodeID = $episodeID;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getSeason(): int
    {
        return (int)explode("E", explode("S", $this->episodeID)[1])[0];
    }

    public function getEpisodeNumber(): int
    {
        return (int)explode("E", $this->episodeID)[1];
    }

    public function rate(int $rating): void
    {
        if ($rating >= 1 && $rating <= 5) {
            $this->ratings[] = $rating;
        } else {
            echo "Rating should be between 1 and 5.\n";
        }
    }

    public function setRatings(array $ratings): void
    {
        $this->ratings = $ratings;
    }

    public function getRatings(): array
    {
        return $this->ratings;
    }

    public function averageRating(): string
    {
        if (count($this->ratings) === 0) {
            return "Not yet rated.";
        }
        return number_format(array_sum($this->ratings) / count($this->ratings), 1);
    }
}

$app = new Application();
$app->run();