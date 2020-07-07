<?php

/*
 * @Package php-oop-simpleapp
 * @Author Haseeb Basra
 * https://www.shallibegin.com
 * Person Class: Contains properties and methods for person class
 */

namespace BookStore\Domain;

// use trait
use Bookstore\Utils\Unique;

class Person {
use Unique;
    // protected visibility
    protected $firstname;
    protected $surname;
   
    // constructor
//    public function __construct($firstname, $surname) {
//        $this->firstname = $firstname;
//        $this->surname = $surname;
//    }

    public function __construct($id, $firstname, $surname, $email) {
        // $this->id = $id;

//        if ($id == null) {
//            $this->id = ++self::$lastId; // create getId accessor so that we can see
//        } else {
//            $this->id == $id;
//            if ($id > self::$lastId) {
//                self::$lastId = $id;
//            }
//        }
        
        $this->setId($id); // refering to trait
        $this->firstname = $firstname;
        $this->surname = $surname;
        $this->email = $email;
    }

    // methods
    public function getFirstname() {
        return $this->firstname;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function sayHi() {
        return 'Hi whats up? ' . $this->firstname;
    }

    // accessor - getter method
    public function getFullname() {
        return strtoupper($this->firstname . ' ' . $this->surname);
    }

    // accessor - getter method
    public function getEmail() {
        return $this->email;
    }

    //mutator: Setter method

    public function setEmail($email) {
        $this->email = $email;
    }

    public static function getLastId() {

        //static methods are not attached to object to access the properties it should use self
        return self::$lastId;
    }

}
