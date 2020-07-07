<?php

/*
 * @Package php-oop-simpleapp
 * @Author Haseeb Basra
 * https://www.shallibegin.com
 * Payer Interface: Contains properties and methods for Payer class
 */
namespace Bookstore\Domain;

interface Payer{
    
    	public function pay(float $amount);
	public function isExtentOfTaxes();
}
