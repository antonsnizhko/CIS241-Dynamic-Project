<?php

class SniA_AirlineFlight
{
	private $airlineName = "";
	private $flightNumber = "";
	private $seatNumber = 0;
	private $ticketPrice = 0;

	public function getAirlineName(){
		return $this->airlineName;
	}

	public function setAirlineName($airlineName){
		$this->airlineName = $airlineName;
	}

	public function getFlightNumber(){
		return $this->flightNumber;
	}

	public function setFlightNumber($flightNumber){
		$this->flightNumber = $flightNumber;
	}

	public function getSeatNumber(){
		return $this->seatNumber;
	}

	public function setSeatNumber($seatNumber){
		$this->seatNumber = $seatNumber;
	}

	public function getTicketPrice(){
		return $this->ticketPrice;
	}

	public function setTicketPrice($ticketPrice){
		$this->ticketPrice = $ticketPrice;
	}
	
	public function getFormattedTicketPrice()
	{
		$formattedTicketPrice = "$" . number_format($this->ticketPrice, 2);
		return $formattedTicketPrice;
	}
	
	public function toString()
	{
		$rString = $this->getAirlineName() . ", " . $this->getFlightNumber()  . ", " . $this->getSeatNumber()
			. ", " . $this->getFormattedTicketPrice();
		return $rString;
	}
}


?>