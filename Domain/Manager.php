<?php

namespace Bookstore\Domain;
// use trait
use Bookstore\Utils\Communicator;
// add another trait - added later
use Bookstore\Utils\Contract;

class Manager {
	

	use Contract, Communicator {
		Contract::sign insteadof Communicator;
		Communicator::sign as makeSign; 
	}

}