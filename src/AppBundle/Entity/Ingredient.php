<?php

namespace AppBundle\Entity;

abstract class Ingredient implements Pizza
{
	private $pizza;
	private $cost;
	
	public function __construct(Pizza $pizza)
	{
		$this->pizza = $pizza;
	}

	public function ingredients()
	{
		$reflection = new \ReflectionClass($this);
		return array_merge($this->pizza->ingredients(), [$reflection->getShortName()]) ;
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