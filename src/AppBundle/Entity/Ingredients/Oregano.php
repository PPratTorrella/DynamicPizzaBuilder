<?php

namespace AppBundle\Entity\Ingredients;

use AppBundle\Entity\Ingredient;
use AppBundle\Entity\Pizza;

class Oregano extends Ingredient
{
	const COST = .50;
	const NAME = 'Oregano';

	public function __construct(Pizza $pizza)
	{
		$this->setCost(self::COST);
		parent::__construct($pizza);
	}
	
}