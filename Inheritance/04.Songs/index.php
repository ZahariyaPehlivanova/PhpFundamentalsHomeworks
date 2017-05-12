<?php

require_once "Song.php";
require_once "InvalidSongException.php";
require_once "InvalidArtistNameException.php";
require_once "InvalidSongLengthException.php";
require_once "InvalidSongMinutesException.php";
require_once "InvalidSongNameException.php";
require_once "InvalidSongSecondsException.php";

$songs  = [];
$n = trim(fgets(STDIN));
$totalLength = 0;
try {
    for ($i = 0; $i < $n; $i++) {
        $line = explode(';', trim(fgets(STDIN)));

        if (count($line) < 3) {
            throw new InvalidSongException("Invalid song.");
        }
        $artist = $line[0];
        $name = $line[1];
        $time = $line[2];
        try {
            $song = new Song($artist, $name, $time);
            $songs[] = $song;
            $totalLength += $song->getTime();
            echo 'Song added.' . PHP_EOL;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
    echo 'Songs added: ' . count($songs) . PHP_EOL;
    $hours = floor(floor($totalLength / 60) / 60);
    $minutes = str_pad(floor($totalLength / 60) % 60, 2, "0", STR_PAD_LEFT);
    $seconds = str_pad($totalLength % 60, 2, "0", STR_PAD_LEFT);
    echo "Playlist length: {$hours}h {$minutes}m {$seconds}s";
}catch (Exception $ex){
    echo $ex->getMessage();
}
