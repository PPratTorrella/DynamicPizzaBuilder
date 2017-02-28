<?php

namespace AppBundle\PizzaClasses\Ingredients;

use AppBundle\PizzaClasses\PizzaInterface;

class Cheese extends AbstractIngredient
{
	const COST = 1.5;
	const NAME = 'Cheese';

	public function __construct(PizzaInterface $pizza)
	{
		$this->setCost(self::COST);
		parent::__construct($pizza);
	}
	
}