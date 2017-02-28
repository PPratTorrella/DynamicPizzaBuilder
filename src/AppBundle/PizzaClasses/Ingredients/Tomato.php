<?php

namespace AppBundle\PizzaClasses\Ingredients;

use AppBundle\PizzaClasses\PizzaInterface;

class Tomato extends AbstractIngredient
{
	const COST = 2;
	const NAME = 'Tomato';

	public function __construct(PizzaInterface $pizza)
	{
		$this->setCost(self::COST);
		parent::__construct($pizza);
	}
	
}