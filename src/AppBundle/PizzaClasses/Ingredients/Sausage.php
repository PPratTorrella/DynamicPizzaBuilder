<?php

namespace AppBundle\PizzaClasses\Ingredients;

use AppBundle\PizzaClasses\PizzaInterface;

class Sausage extends AbstractIngredient
{
	const COST = 2;
	const NAME = 'Sausage';

	public function __construct(PizzaInterface $pizza)
	{
		$this->setCost(self::COST);
		parent::__construct($pizza);
	}
	
}