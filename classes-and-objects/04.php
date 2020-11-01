<?php

class Movie
{

    private string $title;
    private string $studio;
    private string $rating;

    public function __construct(string $title, string $studio, string $rating)
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getRating(): string
    {
        return $this->rating;
    }

    /**
     * @return string
     */
    public function getStudio(): string
    {
        return $this->studio;
    }

}

class PG
{
    public static function getPG(array $movies): array
    {
        $pgMovies = [];
        foreach ($movies as $movie) {
            if ($movie->getRating() == 'PG') {
                $pgMovies[] = $movie;
            }
        }
        return $pgMovies;
    }
}

$movies = [
    new Movie('Casino Royale', 'Eon Productions', 'PG13'),
    new Movie('Glass', 'Buena Vista International', 'PG13'),
    new Movie('Spider-Man', 'Spider-Verse', 'PG'),
    new Movie('Godzilla', 'Japan', 'PG')
];

$pgMovies = PG::getPG($movies);
echo "PG movies are ";
foreach ($pgMovies as $movie) {
    $print[] = $movie->getTitle();
}
echo join(", ", $print) . ".\n";