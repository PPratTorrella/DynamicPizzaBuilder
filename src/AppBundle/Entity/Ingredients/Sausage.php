<?php

namespace AppBundle\Entity\Ingredients;

use AppBundle\Entity\Ingredient;
use AppBundle\Entity\Pizza;

class Sausage extends Ingredient
{
	const COST = 2;
	const NAME = 'Sausage';

	public function __construct(Pizza $pizza)
	{
		$this->setCost(self::COST);
		parent::__construct($pizza);
	}
	
}