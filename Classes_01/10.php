<?php

class Application
{
    private VideoStore $store;

    public function __construct()
    {
        $this->store = new VideoStore();
    }

    public function run()
    {
        $this->store->addVideo(new Video("The Matrix"));
        $this->store->addVideo(new Video("Godfather II"));
        $this->store->addVideo(new Video("Star Wars Episode IV: A New Hope"));

        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to list inventory\n";
            echo "Choose 5 to rate a video\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    echo $this->addMovies();
                    break;
                case 2:
                    echo $this->rentVideo();
                    break;
                case 3:
                    echo $this->returnVideo();
                    break;
                case 4:
                    echo $this->store->listInventory();
                    break;
                case 5:
                    echo $this->rateVideo();
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }

    private function addMovies(): string
    {
        $title = readline("Enter the title of the movie: ");
        $this->store->addVideo(new Video($title));
        return "Movie added successfully.\n";
    }

    private function rentVideo(): string
    {
        $title = readline("Enter the title of the movie to rent: ");
        return $this->store->checkOut($title);
    }

    private function returnVideo(): string
    {
        $title = readline("Enter the title of the movie to return: ");
        return $this->store->returnVideo($title);
    }

    private function rateVideo(): string
    {
        $title = readline("Enter the title of the video you want to rate: ");
        $rating = intval(readline("Rate the video $title (0 to 10): "));
        return $this->store->rateVideo($title, $rating);
    }
}

class VideoStore
{
    private array $videos = [];

    public function addVideo(Video $video): void
    {
        $this->videos[] = $video;
    }

    public function checkOut(string $title): string
    {
        foreach ($this->videos as $video) {
            if ($video->getTitle() === $title) {
                if ($video->getCheckedOut() == 1) {
                    return "Sorry, this video is already rented out.\n";
                } else {
                    $video->setCheckedOut(1);
                    return "Video checked out successfully.\n";
                }
            }
        }
        return "Video not found.\n";
    }

    public function returnVideo(string $title): string
    {
        foreach ($this->videos as $video) {
            if ($video->getTitle() === $title) {
                $video->setCheckedOut(0);
                return "Video returned successfully.\n";
            }
        }
        return "Video not found.\n";
    }

    public function rateVideo(string $title, int $rating): string
    {
        foreach ($this->videos as $video) {
            if ($video->getTitle() === $title) {
                $video->rate($rating);
                return "Video rated successfully.\n";
            }
        }
        return "Video not found.\n";
    }

    public function listInventory(): string
    {
        $inventory = "";
        foreach ($this->videos as $video) {
            $inventory .= "Title: " . $video->getTitle() .
                ", Average Rating: " . $video->averageRating() .
                ", Checked Out: " . ($video->getCheckedOut() == 1 ? "Yes" : "No") . PHP_EOL;
        }
        return $inventory;
    }
}

class Video
{
    private string $title;
    private int $checkedOut;
    private array $ratings = [];

    public function __construct(string $title)
    {
        $this->title = $title;
        $this->checkedOut = 0;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getCheckedOut(): int
    {
        return $this->checkedOut;
    }

    public function setCheckedOut(int $checkedOut): void
    {
        $this->checkedOut = $checkedOut;
    }

    public function rate(int $rating): void
    {
        if ($rating >= 0 && $rating <= 10) {
            $this->ratings[] = $rating;
        } else {
            echo "Rating should be between 0 and 10.\n";
        }
    }

    public function averageRating(): ?float
    {
        if (count($this->ratings) === 0) {
            return null;
        }
        return array_sum($this->ratings) / count($this->ratings);
    }
}

$app = new Application();
$app->run();