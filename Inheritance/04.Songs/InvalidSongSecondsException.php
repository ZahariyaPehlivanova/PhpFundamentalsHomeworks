<?php

class InvalidSongSecondsException extends InvalidSongLengthException{
    public function __construct()
    {
        parent::__construct("Song seconds should be between 0 and 59.\n");
    }
}