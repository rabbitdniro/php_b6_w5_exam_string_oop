<?php

class Book {

    // TODO: Add properties as Private
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies = 0) {
        // TODO: Initialize properties
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // TODO: Add getTitle method
    public function getTitle() {
        return $this->title;
    }

    // TODO: Add getAvailableCopies method
    public function getAvailableCopies() {
        return $this->availableCopies;
    }
 
    // TODO: Add borrowBook method
    public function borrowBook() {
        $this->availableCopies--;
    }

    // TODO: Add returnBook method
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    // TODO: Add properties as Private
    private $name;

    public function __construct($name) {
        // TODO: Initialize properties
        $this->name = $name;
    }

    // TODO: Add getName method
    public function getName() {
        return $this->name;
    }

    // TODO: Add borrowBook method
    public function borrowBook($book) {
        return $book->borrowBook();
    }

    // TODO: Add returnBook method
    public function returnBook($book) {
        return $book->returnBook();
    }
}


// Usage
// You have to create  2 books and 2 members. Members One should borrow  book 1 and Member Two should borrow  book 2.
// TODO: Create 2 books with the following properties
// Book 1 - Name: The Great Gatsby, Available Copies: 5.
// Book 2 - Name: To Kill a Mockingbird, Available Copies: 3.

$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// TODO: Create 2 members with the following properties
// Member 1 - Name: John Doe
// Member 2 - Name: Jane Smith

$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");


// TODO: Apply Borrow book method to each member
$member1->borrowBook($book1);
$member2->borrowBook($book2);
 

// TODO: Print Available Copies with their names:
print("Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}\n");
print("Available Copies of '{$book2->getTitle()}: {$book2->getAvailableCopies()}\n");

// Output must look like this:
// Available Copies of 'The Great Gatsby': 4
// Available Copies of 'To Kill a Mockingbird': 2
?>
