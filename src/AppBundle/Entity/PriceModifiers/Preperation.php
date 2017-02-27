<?php

namespace AppBundle\Entity\PriceModifiers;

use AppBundle\Entity\Pizza;
use AppBundle\Entity\PriceModifier;

class Preperation implements PriceModifier
{
	const PRICE_MULITPLIER = 1.5;

	public function execute($price)
	{
		return $price * self::PRICE_MULITPLIER;
	}
}