<?php

/*
 * @Package php-oop-simpleapp
 * @Author Haseeb Basra
 * https://www.shallibegin.com
 * Index file to show the results of various functions of this application
 */

//Include required files

include "Book.php";

//If there is no magic method we have to set the properties individually

//$book= new book();
//
//$book->title="How to code";
//$book->author= "Haseeb";
//$book->available=1;
//$book->isbn= 2222;


//books class is instance is created and the properties are automatically set due to magic method
$book=new Book(12345,"How to code",'Haseeb',1);

//lets access different properties from $book object
var_dump($book->getBookDetailsPrintable());

exit;