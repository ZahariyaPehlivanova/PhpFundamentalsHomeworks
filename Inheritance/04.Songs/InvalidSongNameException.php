<?php

class InvalidSongNameException extends InvalidSongException{
    public function __construct()
    {
        parent::__construct("Song name should be between 3 and 30 symbols.\n");
    }
}