<?php

namespace AppBundle\PizzaClasses;

use AppBundle\PizzaClasses\Ingredients\Cheese;
use AppBundle\PizzaClasses\Ingredients\MushRoom;
use AppBundle\PizzaClasses\Ingredients\Tomato;
use AppBundle\PizzaClasses\Ingredients\Onion;
use AppBundle\PizzaClasses\Ingredients\Sausage;


class PizzaBuilder
{
	const FUN_PIZZA_NAME = 'FunPizza';
	const SUPER_MUSHROOM_NAME = 'SuperMushroomPizza';
	const INGREDIENTS_PATH = "AppBundle\\PizzaClasses\\Ingredients\\";

//	Put this in a config file and inject config into this service, but I have little time.
	private $housePizzasConfig = [
		self::FUN_PIZZA_NAME => [Cheese::NAME, Tomato::NAME, Sausage::NAME, Onion::NAME],
		self::SUPER_MUSHROOM_NAME => [Cheese::NAME, Tomato::NAME, MushRoom::NAME]
	];

	/**
	 * @param array $ingredientNames
	 * @return PizzaInterface|false, or use NullPizzaObject
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

	private function decoratePizza(PizzaInterface $pizza, $ingredientNames)
	{
		foreach ($ingredientNames as $ingredientName) {
			$className = self::INGREDIENTS_PATH . $ingredientName;
			$pizza = new $className($pizza);
		}

		return $pizza;
	}

}