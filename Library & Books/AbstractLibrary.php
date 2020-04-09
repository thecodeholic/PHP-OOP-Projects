<?php
/**
 * User: TheCodeholic
 * Date: 4/8/2020
 * Time: 8:53 AM
 */

/**
 * Class AbstractLibrary
 */
abstract class AbstractLibrary
{
    /**
     * @var Author[]
     */
    private $authors = [];

     // TODO Generate getters and setters of properties

    /**
     * Method accepts the name of the author, creates instance of the Author class,
     * adds the instance in $authors array and returns created instance
     *
     * @param string $authorName
     * @return Author
     */
    abstract public function addAuthor(string $authorName): Author;

    /**
     * Method accepts author name and Book. Finds author in $authors array and adds book to this array.
     * The method must set $book's $author property with the found author also.
     * This method is equivalent of Author::addBook
     *
     * @param      $authorName
     * @param Book $book
     */
    abstract public function addBookForAuthor($authorName, Book $book);

    /**
     * Method returns books for given author
     *
     * @param $authorName
     */
    abstract public function getBooksForAuthor($authorName);

    /**
     * Method searches for book and returns instance of Book
     *
     * @param string $bookName
     * @return Book
     */
    abstract public function search(string $bookName): Book;

    /**
     * This method must print every author and for each author all its books in the following format
     * AuthorName
     * ----------------------
     * BookName - price
     * Book2Name - price
     * ...
     *
     * AnotherAuthorName
     * ----------------------
     * AnotherBookName - price
     * ...
     */
    abstract public function print();
}