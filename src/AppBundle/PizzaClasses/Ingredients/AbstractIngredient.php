<?php

namespace AppBundle\PizzaClasses\Ingredients;

use AppBundle\PizzaClasses\PizzaInterface;

abstract class AbstractIngredient implements PizzaInterface
{
	private $pizza;
	private $cost;
	
	public function __construct(PizzaInterface $pizza)
	{
		$this->pizza = $pizza;
	}

	public function ingredients()
	{
		$reflection = new \ReflectionClass($this);
		return array_merge($this->pizza->ingredients(), [$reflection->getShortName()]);
	}

	public function cost()
	{
		return $this->pizza->cost() + $this->cost;
	}

	protected function setCost($cost)
	{
		$this->cost = $cost;
	}
}