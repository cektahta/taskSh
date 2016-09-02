<?php 

namespace Casse;

use Client\LittleClient;
use Client\BigClient;

class Casse

{
	private $number;
    private $sumOfCasse; 
    private $sumFacture;
    private $factory=[];
    
	public function __construct($number)
	{
		$this->number = $number;
	}

   public function takeClient(LittleClient $value) 
   {
  
   		if ($value instanceof  BigClient)  {
   			if($value->getKesh() <  $this->calculateBasket($value)) {
   				
   			
   				echo "make factory".PHP_EOL;
   				
   			} else {
   				$this->sumOfCasse += $this->calculateBasket($value);
   				
   			}
   			
   			$this->makeFactory($value);
   			
   		} else {
   			if ($value->getKesh() >=  $this->calculateBasket($value)) {
   				$this->sumOfCasse += $this->calculateBasket($value);
   				echo "sussess".PHP_EOL;
   			}  else {
   				echo "you dont have enough  money".PHP_EOL;
   			}
   		}
   			
   		
   }
   
   
   private  function calculateBasket(LittleClient $client)
    {
    	$sum = 0;
    	foreach ($client->getBasket() as $key=> $value) {
    		$sum += $value->getTotalPrice();
    	}
    	 return $sum;
    	 
    }
    
    private  function makeFactory(BigClient $client) 
    {
    	$this->sumFacture += $this->calculateBasket($client);
    	$this->factory []= "Name of the client->".$client->getName()."price".$this->calculateBasket($client);
    }
    
    
     public function getName() 
     {
     	return $this->number;
     }
    public function  showFactory()
    {
    	return implode(" ".PHP_EOL,$this->factory);
    }
    
    public function getCaseOborot()
    {
    	return $this->sumFacture+ $this->sumOfCasse;
    }
    

}



