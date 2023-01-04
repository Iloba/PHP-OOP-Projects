<?php
    class PlayList {
    public $title;
    public $songs = [];

    private $numberOfSongs;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function addSongs(Song $song){
        $this->songs[] = $song;
    }

    public function removeSong(Song $song){

    }

    public function getNumberOfSongs(): int{
        // return count($this->songs);
       return $this->numberOfSongs = count($this->songs);
    }


    
    }
