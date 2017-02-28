<?php

namespace AppBundle\PizzaClasses\Ingredients;

use AppBundle\PizzaClasses\PizzaInterface;

class MushRoom extends AbstractIngredient implements PizzaInterface
{
	const COST = 2.5;
	const NAME = 'Mushroom';

	public function __construct(PizzaInterface $pizza)
	{
		$this->setCost(self::COST);
		parent::__construct($pizza);
	}
	
}