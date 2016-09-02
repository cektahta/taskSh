<?php

namespace Product;


class BundleProducts extends Product
{
	protected $products = [];

	public function __construct($name,$quantity)
	{
       return parent::__construct($name, 0, $quantity);
	}
	
	public function getProducts()
	{
		return $this->produts;
	}
	
	public function addProducts( Product $value)
	
	{
		$this->products[] = $value;
	}
	
	public function getPrice()
	{
		 $sums = 0;
		foreach ($this->products as $key=> $value) {
			
		 	$sums += $value->getTotalPrice();
		}
		 return  $sums;
		 
	}
	

	
}