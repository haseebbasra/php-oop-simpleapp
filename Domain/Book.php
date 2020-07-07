<?php

/*
 * @Package php-oop-simpleapp
 * @Author Haseeb Basra
 * https://www.shallibegin.com
 * Books class: Contains properties and methods for books class
 */

namespace BookStore\Domain;

class Book
{
    //Properties of book
    public $isbn;
    public $title;
    public $author;
    public $available;
    
    /*
     * This magic method would be called whenever we instantiate this class
     */
    public function __construct($isbn,$title,$author,$available = 1 ) {
       
        $this->isbn=$isbn;
        $this->title=$title;
        $this->author=$author;
        $this->available=$available;
        
    }
  
    /*
     * This magic method automatically returns the code when class is echoed out
     */
//    public function __toString() {
//        return $this->title;
//    }
    /*
     * Method to get the book details
     */
    public function getBookDetailsPrintable()
    {
      $bookDetails= $this->title . "is written by " . $this->author ; 
      
      $bookDetails .= $this->available ? " and is available in stock" : " and is currently out of stock" ;

      return $bookDetails;
        
    }
    
    
    
    
    
}