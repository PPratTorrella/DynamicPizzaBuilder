<?php

namespace AppBundle\Controller;

use AppBundle\PizzaClasses\Order;
use AppBundle\PizzaClasses\PizzaBuilder;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $pizzaBuilder = new PizzaBuilder();
        $housePizzas = [
            PizzaBuilder::FUN_PIZZA_NAME => $pizzaBuilder->buildHousePizza(PizzaBuilder::FUN_PIZZA_NAME),
            PizzaBuilder::SUPER_MUSHROOM_NAME => $pizzaBuilder->buildHousePizza(PizzaBuilder::SUPER_MUSHROOM_NAME),
        ];

        $hardCodedOrder = new Order($housePizzas[PizzaBuilder::FUN_PIZZA_NAME]);

        return $this->render('default/index.html.twig',
            compact('housePizzas', 'hardCodedOrder'));
    }
}
