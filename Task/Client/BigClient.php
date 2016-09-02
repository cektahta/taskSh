<?php

namespace Client;

class BigClient extends LittleClient
{
	private  $name;
	
	public function __construct($name)
	{
		parent::__construct(0);
		$this->name = $name;
	}
	
	public function getName()
	{
		return $this->name;
	}
}