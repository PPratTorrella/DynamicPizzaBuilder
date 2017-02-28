<?php

namespace AppBundle\PizzaClasses\PriceModifiers;


interface PriceModifierInterface
{
	/**
	 * @param $price
	 * @return float modified price
	 */
	public function execute($price);
}