<?php

class GumballMachine{
	private $gumballs;

	public function getGumBalls(){
		return $this->gumballs;
	}

	public function setGumBalls($amount){
		$this->gumballs = $amount;
	}

	public function turnWheel(){
		$this->setGumBalls($this->getGumBalls() - 1);
	}
}

?>