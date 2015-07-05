<?php

class myClass{
	
	private $var1 = "Hi";
	public function __construct()
	{
		echo "tor";
	}
	
	private function Process()
	{
		echo $this->var1;
	}
	
	public function doIt()
	{
		$this->Process();
	}
}

?>
