<?php

namespace AppBundle\PizzaClasses;

class BasePizza implements PizzaInterface
{
	
	const DOUGH = 'Italian dough';
	const BASE_COST = 0;

	public function ingredients()
	{
		return [self::DOUGH];
	}

	public function cost()
	{
		return self::BASE_COST;
	}


}