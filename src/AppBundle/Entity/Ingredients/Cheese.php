<?php

namespace AppBundle\Entity\Ingredients;

use AppBundle\Entity\Ingredient;
use AppBundle\Entity\Pizza;

class Cheese extends Ingredient
{
	const COST = 1.5;
	const NAME = 'Cheese';

	public function __construct(Pizza $pizza)
	{
		$this->setCost(self::COST);
		parent::__construct($pizza);
	}
	
}