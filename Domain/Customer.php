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



    public function getMonthlyFee();

    public function getAmountToBorrow();

    public function getType();

 
}
