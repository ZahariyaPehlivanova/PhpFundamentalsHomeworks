<?php

class Song{
    private $artist;
    private $songName;
    private $time;

    public function __construct(string $artist,string $songName,string $time)
    {
        $this->setArtist($artist);
        $this->setSongName($songName);
        $this->setTime($time);
    }

    public function setArtist(string $artist){
        if(strlen($artist) < 3 || strlen($artist) > 20){
            throw new InvalidArtistNameException();
        }
        $this->artist = $artist;
    }

    public function setSongName(string $songName){
        if(strlen($songName) < 3 || strlen($songName) > 20){
            throw new InvalidSongNameException();
        }
        $this->songName = $songName;
    }

    public function setTime(string $time){
        $splited = explode(':',$time);
        $mins = intval($splited[0]);
        $seconds = intval($splited[1]);

        if($mins < 0 || $mins > 15){
            throw new InvalidSongMinutesException();
        }
        if($seconds < 0 || $seconds > 59){
            throw new InvalidSongSecondsException();
        }
        if($mins < 0 && $seconds < 0 || $mins > 14){
            throw new InvalidSongLengthException('Invalid song length.');
        }
        $this->time = $seconds + ($mins * 60);
    }

    public function getTime(){
        return $this->time;
    }
}