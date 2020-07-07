<?php

/*
 * @Package php-oop-simpleapp
 * @Author Haseeb Basra
 * https://www.shallibegin.com
 * Customer Class: Contains properties and methods for customers class
 */

class Customer {

    //This class has some private methods and its called encapsulation
    private $id;
    public $firstname;
    private $surname;
    private $email;

    public function __construct($id, $firstname, $surname, $email) {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->surname = $surname;
        $this->email = $email;
    }
    
    // accessor - getter method
	public function getFirstname() {
		return $this->firstname;
	}

	// accessor - getter method
	public function getSurname() {
		return $this->surname;
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
    
    public function setEmail($email)
    {
        $this->email=$email;
    }
}
