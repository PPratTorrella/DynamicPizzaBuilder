<?php

namespace AppBundle\PizzaClasses\Ingredients;

use AppBundle\PizzaClasses\PizzaInterface;

class Onion extends AbstractIngredient
{
	const COST = 1.50;
	const NAME = 'Onion';

	public function __construct(PizzaInterface $pizza)
	{
		$this->setCost(self::COST);
		parent::__construct($pizza);
	}
	
}