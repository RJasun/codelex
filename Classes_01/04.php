<?php declare(strict_types=1);

Class Movie {
    private string $title;
    private string $studio;
    private string $rating;

    public function __construct(string $title, string $studio, string $rating)
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }
    public function getRating(): string
    {
        return $this->rating;
    }
    public function getStudio(): string
    {
        return $this->studio;
    }
    public function getTitle(): string
    {
        return $this->title;
    }
}
function getPG(array $movies): array
{
$pgMovies = [];
foreach ($movies as $movie)
    {
    if ($movie->getRating() === "PG")
    {
    $pgMovies[] = $movie;
    }
}
return $pgMovies;
}
$movies = [
new Movie("Casino Royale", "Eon Productions", "PG-13"),
new Movie("Glass", "Buena Vista International", "PG-13"),
new Movie("Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG"),
];

$pgMovies = getPG($movies);
foreach ($pgMovies as $movie) {
    echo $movie->getTitle() . PHP_EOL;
}