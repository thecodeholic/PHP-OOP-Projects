<?php

require_once "Book.php";
require_once "Library.php";

$library = new Library();
$author = $library->addAuthor('Jack London');
$author->addBook("Martin Eden", 55);
$author->addBook("The Game", 35);
$library->addBookForAuthor('Jack London', new Book("A Son of the Sun", 25));

$author2 = $library->addAuthor('Mark Twain');
$author2->addBook('The Adventures of Tom Sawyer', 65);
$author2->addBook('Luck', 12);

$book = $library->search('Martin Eden'); // This must return instance of the book
$author = $book->getAuthor(); // This must return instance of the Author class
echo $author->getName(); // This must print "Jack London"

$library->print();
/*
Jack London
--------------------
Martin Eden - 55
The Game - 35
A Son of the Sun - 25

Mark Twain
--------------------
The Adventures of Tom Sawyer - 65
Luck - 12
*/