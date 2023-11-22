<?php
namespace Practicals;
class Song
{
    // Properties
    private $title;
    private $artist;
    private $genre;
    private $tempo;

    // Getter and setter methods for the 'title' property
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    // Getter and setter methods for the 'artist' property
    public function getArtist()
    {
        return $this->artist;
    }

    public function setArtist($artist)
    {
        $this->artist = $artist;
    }

    // Getter and setter methods for the 'genre' property
    public function getGenre()
    {
        return $this->genre;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    // Getter and setter methods for the 'tempo' property
    public function getTempo()
    {
        return $this->tempo;
    }

    public function setTempo($tempo)
    {
        $this->tempo = $tempo;
    }
}
?>

