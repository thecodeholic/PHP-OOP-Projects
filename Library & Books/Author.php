<?php


class Author
{
    public string $name;
    public $books = [];

    /**
     * Author constructor.
     *
     * @param string $name
     * @param array  $books
     */
    public function __construct(string $name, array $books = [])
    {
        $this->name = $name;
        $this->books = $books;
    }


    /**
     * @param string $title
     * @param float  $price
     * @return \Book
     */
    public function addBook(string $title, float $price): Book
    {
        $book = new Book($title, $price, $this);
        $this->books[] = $book;
        return $book;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return \Book[]
     */
    public function getBooks(): array
    {
        return $this->books;
    }

    /**
     * @param array $books
     */
    public function setBooks(array $books): void
    {
        $this->books = $books;
    }

}