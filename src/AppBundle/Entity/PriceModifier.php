<?php

namespace AppBundle\Entity;


interface PriceModifier
{
	/**
	 * @param $price
	 * @return float modified price
	 */
	public function execute($price);
}