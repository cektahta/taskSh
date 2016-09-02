<?php

namespace Product;

class Product
{
	protected $name;
	protected $quantity;
	protected $price;
	
	public function __construct($name,$price,$quantity) 
	{
		$this->name = $name;
		$this->price =$price;
		$this->quantity = $quantity;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function getPrice()
	{
		return $this->price;
	}
	
	public function getTotalPrice()
	{
		$sum = 0;
		return	$sum = $this->getPrice() * $this->quantity;
	}
}
