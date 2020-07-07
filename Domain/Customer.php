<?php

/*
 * @Package php-oop-simpleapp
 * @Author Haseeb Basra
 * https://www.shallibegin.com
 * Customer Class: Contains properties and methods for customers class
 */

namespace BookStore\Domain;

//Customer is also a person lets extend customer from Person
interface customer extends Payer  {

//    //this variable is called static to get accessed by static function
//    private static $lastId = 2;
//    //This class has some private methods and its called encapsulation
//    private $id;
////    public $firstname;
////    private $surname;
//    private $email;

//    public function __construct($id, $firstname, $surname, $email) {
//
//        parent::__construct($firstname, $surname);
//        $this->id = $id;
////        $this->firstname = $firstname;
////        $this->surname = $surname;
//        $this->email = $email;
//    }

    // static method
//    public static function getLastId() {
//
//        //static methods are not attached to object to access the properties it should use self
//        return self::$lastId;
//    }

    //using from parent now it was initially here for testing purposes
//    // accessor - getter method
//    public function getFirstname() {
//        return $this->firstname;
//    }
//
//    // accessor - getter method
//    public function getSurname() {
//        return $this->surname;
//    }
    //these are abstract functions and should be implemented in classes that extend it
//    	abstract public function getMonthlyFee();
//	abstract public function getAmountToBorrow();
//	abstract public function getType();
    //this is now an interface

    public function getMonthlyFee();

    public function getAmountToBorrow();

    public function getType();

    //moved to Person class to make it interface
//    // accessor - getter method
//    public function getFullname() {
//        return strtoupper($this->firstname . ' ' . $this->surname);
//    }
//
//    // accessor - getter method
//    public function getEmail() {
//        return $this->email;
//    }
//
//    //mutator: Setter method
//
//    public function setEmail($email) {
//        $this->email = $email;
//    }
//
//    
//    //overrided method, this method is also in the parent class
//      public function sayHi() {
////         return parent::sayHi();
//        return 'Hi, Customer whats up? ' . $this->firstname;
//    }
}
