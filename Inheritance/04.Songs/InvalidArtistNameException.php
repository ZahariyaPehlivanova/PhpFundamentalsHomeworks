<?php

class InvalidArtistNameException extends InvalidSongException{
    public function __construct()
    {
        parent::__construct("Artist name should be between 3 and 30 symbols.\n");
    }
}