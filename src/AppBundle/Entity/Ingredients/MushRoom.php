<?php

namespace AppBundle\Entity\Ingredients;

use AppBundle\Entity\Ingredient;
use AppBundle\Entity\Pizza;

class MushRoom extends Ingredient implements Pizza
{
	const COST = 2.5;
	const NAME = 'Mushroom';

	public function __construct(Pizza $pizza)
	{
		$this->setCost(self::COST);
		parent::__construct($pizza);
	}
	
}