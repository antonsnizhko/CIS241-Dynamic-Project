<?php
header("Content-type: application/json");
include('class_lib/SniA_AirlineFlightDB.php');

$airlineName = $_REQUEST['sniA_AirlineFlight'];

$sniA_AirlineFlightDB = new sniA_AirlineFlightDB();
$rSniA_AirlineFlight = $sniA_AirlineFlightDB->getSniA_AirlineFlight($airlineName);

$data = array();
$data['sniA_AirlineFlightString'] = $rSniA_AirlineFlight->toString();
$data['airlineName'] = $rSniA_AirlineFlight->getAirlineName();
$data['flightNumber'] = $rSniA_AirlineFlight->getFlightNumber();
$data['ticketPrice'] = $rSniA_AirlineFlight->getFormattedTicketPrice();
$data['seatNumber'] = $rSniA_AirlineFlight->getSeatNumber();


print(json_encode($data));

?>