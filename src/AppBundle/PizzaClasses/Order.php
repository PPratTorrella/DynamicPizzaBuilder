<?php

namespace AppBundle\PizzaClasses;

use AppBundle\PizzaClasses\PriceModifiers\Preperation as PreperationPriceModifier;

class Order
{
	private $pizza;
	private $priceModifiers = [];

	public function __construct(PizzaInterface $pizza)
	{
		$this->pizza = $pizza;
		$this->priceModifiers[] = new PreperationPriceModifier();
	}

	public function getPrice()
	{
		$totalCost = $this->pizza->cost();

		foreach ($this->priceModifiers as $priceModifier) {
			/*
 			* @var $priceModifier PriceModifier
			*/
			$totalCost = $priceModifier->execute($totalCost, $this->pizza);
		}

		return $totalCost;
	}

	public function getIngrediensDescripcion()
	{
		return implode(', ', $this->pizza->ingredients());
	}

}