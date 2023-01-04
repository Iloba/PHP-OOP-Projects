<?php

    class Song {
    public $title;
    public $artist;

    public function __construct(string $title, string $artist){
        $this->title = $title;
        $this->artist = $artist;
    }
   
    }


?>