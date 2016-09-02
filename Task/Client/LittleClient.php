<?php


namespace Client;
use Product\Product;

class LittleClient

{
   protected $basket= [];
   protected $kesh;
  
   
 public function __construct($kesh)
 {
 	$this->kesh = $kesh;
 }
   
 public function getKesh()
 {
 	return $this->kesh;
 }
 
 public function setKesh($value) 
 {
 	return $this->kesh = $value;
 }
 
 public function getBasket()
 {
 	return $this->basket;
 }
 
 public function addProductToBasket(Product $value)
 {
 	$this->basket[] = $value;
 }
 

 
 
}
