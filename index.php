<?php
ini_set('display_errors', 'true');
/*
 * @Package php-oop-simpleapp
 * @Author Haseeb Basra
 * https://www.shallibegin.com
 * Index file to show the results of various functions of this application
 */

//Include required files

require_once __DIR__ . '/Book.php';
require_once __DIR__ . '/Customer.php';

//If there is no magic method we have to set the properties individually

//$book= new book();
//
//$book->title="How to code";
//$book->author= "Haseeb";
//$book->available=1;
//$book->isbn= 2222;



//books class is instance is created and the properties are automatically set due to magic method
$book=new Book(12345,"How to code",'Haseeb',0);

//to get result from __toString method
//echo $book;
//exit;


//lets access different properties from $book object

//var_dump($book->getBookDetailsPrintable());
//exit;

$customer=new Customer(1,'Haseeb','Anwar','haseeb@shallibegin.com');

//this will not show private properties
//var_dump($customer);exit;

//Lets try to access private property, we cannot because private properties are not accessible outside

//var_dump($customer->surname);exit;

//We can get firstname though
//var_dump($customer->firstname);exit;

//Using accessor
var_dump($customer->getFullname());
