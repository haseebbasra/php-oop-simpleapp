<?php

/*
 * @Package php-oop-simpleapp
 * @Author Haseeb Basra
 * https://www.shallibegin.com
 * Basic Customer Class: Contains properties and methods for Premium customers class
 */
namespace Bookstore\Domain\Customer;

use Bookstore\Domain\Customer;

class Basic implements Customer {
	// we already have all the properties and methods available in here
	// the ones that are defined in the Customer and Person

//	// lets add few more
	public function getMonthlyFee() {
		return 5.0;
	}

	public function getAmountToBorrow() {
		return 3;
	}

	public function getType() {
		return 'Basic';
	}
        // adding thse methods because Customer implemented Payer interface
	public function pay(float $amount) {
		return "Paying $amount";
	}

	public function isExtentOfTaxes() {
		return 'You gotta pay tax mate!';
	}
}
