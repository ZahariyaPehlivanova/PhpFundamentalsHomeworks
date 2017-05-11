<?php

class InvalidSongMinutesException extends InvalidSongLengthException{
    public function __construct()
    {
        parent::__construct("Song minutes should be between 0 and 14.\n");
    }
}