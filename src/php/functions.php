<?php

/*
Stub out functions that return true that will eventually do the following things:

- list all books
- delete a book
- add a book
- edit a book

Example stub function that will eventually calculate a total:

function sumTotal ($options) {
    return true;
}

*/

require 'db.php';

function addProduct($args) {
    $database = new Database();
    $database->query('INSERT INTO books (title, price, publication_date, genre, authorID) VALUES (:title, :price, :publication_date, :genre, :authorID)');
    $database->bind(':title', $args['title']);
    $database->bind(':price', $args['price']);
    $database->bind(':publication_date', $args['publication_date']);
    $database->bind(':genre', $args['genre']);
    $database->bind(':authorID', $args['authorID']);
    $database->execute();
    return $database->lastInsertId();
}

function editProduct($args) {
    $database = new Database();
    $database->query('SELECT * FROM ed_books WHERE ID = :id');
    $database->bind(':id', $args['id']);
    $row = $database->single();
    return $row;
}

function getAuthorList() {
 //tip: use $database->resultset() to get an array of authors   
    $database = new Database();
    $database->query('SELECT * FROM authors');
    $rows = $database->resultset();
    return $rows;
}




?>