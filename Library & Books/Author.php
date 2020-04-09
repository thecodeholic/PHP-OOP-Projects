<?php


class Author
{
    public string $name;
    public $books = [];

    // TODO Generate getters and setters of properties
    // TODO Generate constructor for all attributes. $books argument of the constructor can be optional

    /**
     * @param string $title
     * @param float  $price
     * @return \Book
     */
    public function addBook(string $title, float $price): Book
    {
        // TODO Create instance of the book. Add into $books array and return it
    }
}