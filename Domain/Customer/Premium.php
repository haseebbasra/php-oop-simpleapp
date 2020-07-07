<?php
/*
 * @Package php-oop-simpleapp
 * @Author Haseeb Basra
 * https://www.shallibegin.com
 * Premium Customer Class: Contains properties and methods for Premium customers class
 */

namespace Bookstore\Domain\Customer;

use Bookstore\Domain\Customer;
use Bookstore\Domain\Person;

class Premium extends Person implements Customer {
	
	public function getMonthlyFee() {
		return 10.0;
	}

	public function getAmountToBorrow() {
		return 10;
	}

	public function getType() {
		return 'Premium';
	}
        
        // adding thse methods because Customer implemented Payer interface
	public function pay($amount) {
		return "Paying $amount";
	}

	public function isExtentOfTaxes() {
		return 'Dont worry about paying tax!';
	}
}