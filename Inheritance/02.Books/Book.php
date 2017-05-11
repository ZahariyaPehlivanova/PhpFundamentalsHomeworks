<?php
class Book
{
    private $title;
    private $author;
    private $price;

    public function __construct(string $author, string $title, float $price)
    {
        $this->setAuthor($author);
        $this->setTitle($title);
        $this->setPrice($price);
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        if(strlen($title) <= 3){
            throw new Exception('Title not valid!');
        }
        $this->title = $title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor(string $author)
    {
        if(preg_match("/[\w]+\s[0-9][\w]+/",$author)){
            throw new Exception('Author not valid!');
        }
        $this->author = $author;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice(float $price)
    {
        $price = floatval($price);
        if($price <= 0){
            throw new Exception('Price not valid!');
        }
        $this->price = $price;
    }

    public function __toString()
    {
        return "{$this->title} {$this->author} ({$this->price})";
    }
}



