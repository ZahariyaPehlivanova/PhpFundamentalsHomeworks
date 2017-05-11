<?php
require_once "Book.php";

class GoldenEditionBook extends Book
{
    public function __construct($author,$title, $price)
    {
        parent::__construct($author,$title, $price);
    }
    public function getPrice()
    {
        return parent::getPrice() * 1.3;
    }
}