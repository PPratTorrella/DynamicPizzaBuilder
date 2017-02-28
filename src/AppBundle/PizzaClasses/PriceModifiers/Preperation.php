<?php

namespace AppBundle\PizzaClasses\PriceModifiers;

class Preperation implements PriceModifierInterface
{
	const PRICE_MULITPLIER = 1.5;

	public function execute($price)
	{
		return $price * self::PRICE_MULITPLIER;
	}
}