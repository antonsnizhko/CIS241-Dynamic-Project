<?php
include('SniA_AirlineFlight.php');

class SniA_AirlineFlightDB
{
    public function getsniA_AirlineFlight($aAirlineName)
    {

        $sniA_AirlineFlight = new SniA_AirlineFlight();
		
        $sniA_AirlineFlight->setAirlineName($aAirlineName);
		
        if ($aAirlineName == "United")
        {
            $sniA_AirlineFlight->setTicketPrice(600.00);
			$sniA_AirlineFlight->setFlightNumber(101);
			$sniA_AirlineFlight->setSeatNumber("10A");
        }
		
        else if ($aAirlineName == "American")
        {
            $sniA_AirlineFlight->setTicketPrice(420.00);
			$sniA_AirlineFlight->setFlightNumber(202);
			$sniA_AirlineFlight->setSeatNumber("15B");
        }
        else if ($aAirlineName == "Frontier")
        {
            $sniA_AirlineFlight->setTicketPrice(500.00);
			$sniA_AirlineFlight->setFlightNumber(303);
			$sniA_AirlineFlight->setSeatNumber("20C");
        }
        else if ($aAirlineName == "Delta")
        {
            $sniA_AirlineFlight->setTicketPrice(200.00);
			$sniA_AirlineFlight->setFlightNumber(404);
			$sniA_AirlineFlight->setSeatNumber("25D");
        }
		else if ($aAirlineName == "Alegent")
        {
            $sniA_AirlineFlight->setTicketPrice(300.00);
			$sniA_AirlineFlight->setFlightNumber(505);
			$sniA_AirlineFlight->setSeatNumber("30E");
        }
		else
        {
            $sniA_AirlineFlight->setAirlineName("Unknown SniA_AirlineFlight Code");
			$sniA_AirlineFlight->setTicketPrice(000.00);
			$sniA_AirlineFlight->setFlightNumber(000);
			$sniA_AirlineFlight->setSeatNumber("NA");
        }
		
        return $sniA_AirlineFlight;
    }
}
?>