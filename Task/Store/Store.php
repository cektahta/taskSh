<?php

namespace Store;
use Product\Product;
use Casse\Casse;
class Store 
{
	private $cases= [];
	private $storage =[];
	private $name;
	
	public function __construct($name)
	{
		$this->name = $name;
	}
	
	public function addProductToStorage(Product $value)
	{
		$this->storage[] = $value;
	}
	
	public function addCase (Casse $value)
	{
		$this->cases[] = $value;
	}
	
	public function showCase()
	{
		foreach($this->cases as $key=> $value) {
			echo"name->".$value->getName().PHP_EOL;
			echo "factory->".$value->showFactory().PHP_EOL;
			echo "value oborot->".$value->getCaseOborot().PHP_EOL;
		}
	}
}