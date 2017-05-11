<?php

namespace SmartPhone;

class Smartphone implements ICall, IBrowse
{
    public function browse(string $url) : string
    {
        if (preg_match("/\\d/", $url)) {
            throw new \Exception("Invalid URL!\n");
        }
        return "Browsing: {$url}\n";
    }

    public function call(string $number) : string 
    {
        if (preg_match("/\\D/", $number)) {
            throw new \Exception("Invalid number\n");
        }
        return "Calling... {$number}\n";
    }
}