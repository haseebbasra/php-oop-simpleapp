<?php

ini_set('display_errors', 'true');
/*
 * @Package php-oop-simpleapp
 * @Author Haseeb Basra
 * https://www.shallibegin.com
 * Index file to show the results of various functions of this application
 */


use Bookstore\Domain\Book;
use Bookstore\Domain\Customer;

use Bookstore\Domain\Customer\Basic;
use Bookstore\Domain\Customer\Premium;
// use manager
use Bookstore\Domain\Manager;


function autoloader($classname) {
    $lastSlash = strpos($classname, '\\') + 1;
    $classname = substr($classname, $lastSlash);
    $directory = str_replace('\\', '/', $classname);
    $filename = __DIR__ . '/' . $directory . '.php';
//    var_dump($classname);exit;
    require_once $filename;
}

spl_autoload_register('autoloader');


$book = new Book(12345, "How to code", 'Haseeb', 10);



$basicCustomer=new Basic(1,'Haseeb','Anwar','haseeb@shallibegin.com');

$premiumCustomer=new Premium(1,'John','Doe','haseeb@shallibegin.com');


var_dump($basicCustomer->getId()); // 5
var_dump($premiumCustomer->getId()); // 6

// TESTING TRAIT PART TWO

$manager = new Manager(); // 'use' manager on top
$manager->sign(); // sign is not in actual Manager but in the trait that is being used there

// trait second part testing
$manager->makeSign(); // signing in communicator - IN COMMUNICATOR

function checkIfValid(Customer $customer, $books) {
    

	return ($books >= $customer->getAmountToBorrow() ? "Books ready to be purchased" : "You cannot buy" );
}


//Polymorphism 

function processPayment(Customer $customer, float $amount) {
	// import Payer on top 'use'
	if ($customer->isExtentOfTaxes()) {
		// echo "You are a lucky one..";
		return $customer->isExtentOfTaxes();
	} else {
		$amount *= 1.50;
	}
	$customer->pay($amount);
}