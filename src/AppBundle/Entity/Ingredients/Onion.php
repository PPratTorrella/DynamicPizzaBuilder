<?php

namespace AppBundle\Entity\Ingredients;

use AppBundle\Entity\Ingredient;
use AppBundle\Entity\Pizza;

class Onion extends Ingredient
{
	const COST = 1.50;
	const NAME = 'Onion';

	public function __construct(Pizza $pizza)
	{
		$this->setCost(self::COST);
		parent::__construct($pizza);
	}
	
}