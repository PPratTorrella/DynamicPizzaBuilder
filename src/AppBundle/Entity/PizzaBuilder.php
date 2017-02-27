<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Ingredients\Cheese;
use AppBundle\Entity\Ingredients\MushRoom;
use AppBundle\Entity\Ingredients\Tomato;
use AppBundle\Entity\Ingredients\Onion;
use AppBundle\Entity\Ingredients\Sausage;


class PizzaBuilder
{
	const FUN_PIZZA_NAME = 'FunPizza';
	const SUPER_MUSHROOM_NAME = 'SuperMushroomPizza';
	const INGREDIENTS_PATH = "AppBundle\\Entity\\Ingredients\\";

//	Put this in a config file and inject config into this service, but I have little time.
	private $housePizzasConfig = [
		self::FUN_PIZZA_NAME => [Cheese::NAME, Tomato::NAME, Sausage::NAME, Onion::NAME],
		self::SUPER_MUSHROOM_NAME => [Cheese::NAME, Tomato::NAME, MushRoom::NAME]
	];

	/**
	 * @param array $ingredientNames
	 * @return Pizza|false, or use NullPizzaObject
	 */
	public function build(array $ingredientNames = [])
	{
		return $this->validate($ingredientNames)
			? $this->decoratePizza(new BasePizza(), $ingredientNames)
			: false;
	}

	public function buildHousePizza($housePizzaName)
	{
		return array_key_exists($housePizzaName, $this->housePizzasConfig)
			? $this->build($this->housePizzasConfig[$housePizzaName])
			: false;
	}

	private function validate($pizzaIngredientNames)
	{
		return true;
		// make sure $pizzaIngredientnames is sub-set of all available ingredient class names
	}

	private function decoratePizza(Pizza $pizza, $ingredientNames)
	{
		foreach ($ingredientNames as $ingredientName) {
			$className = self::INGREDIENTS_PATH . $ingredientName;
			$pizza = new $className($pizza);
		}

		return $pizza;
	}

}