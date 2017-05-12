<?php

class InvalidSongLengthException extends InvalidSongException{
    public function __construct()
    {
        parent::__construct("Invalid song length.\n");
    }
}