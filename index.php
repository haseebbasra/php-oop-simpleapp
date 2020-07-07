<?php

ini_set('display_errors', 'true');
/*
 * @Package php-oop-simpleapp
 * @Author Haseeb Basra
 * https://www.shallibegin.com
 * Index file to show the results of various functions of this application
 */

//Include the namespaces because when class has namespace we cannot use them even if require is done

use BookStore\Domain\Book;
use BookStore\Domain\Customer;

use Bookstore\Domain\Customer\Basic;
use Bookstore\Domain\Customer\Premium;

//use BookStore\Domain\Customer as BookCustomers;  // you can use 'as' keyword - see bottom - do it at the end
//Include required files

//require_once __DIR__ . '/Domain/Book.php';
//require_once __DIR__ . '/Domain/Customer.php';

//Instead of requiring files all the time we can use autoloader to autload all the classes

function autoloader($classname) {
    $lastSlash = strpos($classname, '\\') + 1;
    $classname = substr($classname, $lastSlash);
    $directory = str_replace('\\', '/', $classname);
    $filename = __DIR__ . '/' . $directory . '.php';
//    var_dump($classname);exit;
    require_once $filename;
}

spl_autoload_register('autoloader');

//If there is no magic method we have to set the properties individually
//$book= new book();
//
//$book->title="How to code";
//$book->author= "Haseeb";
//$book->available=1;
//$book->isbn= 2222;
//books class is instance is created and the properties are automatically set due to magic method
$book = new Book(12345, "How to code", 'Haseeb', 10);

//to get result from __toString method
//echo $book;
//exit;
//lets access different properties from $book object
//var_dump($book->getBookDetailsPrintable());
//exit;
//$customer = new Customer(1, 'Haseeb', 'Anwar', 'haseeb@shallibegin.com');

//When using as keywrod with namespace
//$customer=new BookCustomers(1,'Haseeb','Anwar','haseeb@shallibegin.com');

//this will not show private properties
//var_dump($customer);exit;

//Lets try to access private property, we cannot because private properties are not accessible outside

//var_dump($customer->surname);exit;

//We can get firstname though
//var_dump($customer->firstname);exit;

//Using accessor
//var_dump($customer->getFullname());

//static method calling

//var_dump(Customer::getLastId());
//var_dump($customer::getLastId());

//var_dump($customer->sayHi());
//exit;


$basicCustomer=new Basic(1,'Haseeb','Anwar','haseeb@shallibegin.com');

$premiumCustomer=new Premium(1,'John','Doe','haseeb@shallibegin.com');

//var_dump($basicCustomer->getFullname());
//var_dump($premiumCustomer->getFullname());
//exit;

//var_dump(checkIfValid($basicCustomer, $book->available));
//var_dump($premiumCustomer->getType()); // ADDED JUST TO SHOW SOME TEXT ON SCREEN

var_dump($basicCustomer->pay(20));
var_dump($basicCustomer->isExtentOfTaxes());

var_dump($premiumCustomer->pay(20));
var_dump($premiumCustomer->isExtentOfTaxes());
exit;


function checkIfValid(Customer $customer, $books) {
    
//    var_dump($books);exit;
	// type hint Customer class
//    var_dump($books >= $customer->getAmountToBorrow());
//    exit;
	return ($books >= $customer->getAmountToBorrow() ? "Books ready to be purchased" : "You cannot buy" );
}