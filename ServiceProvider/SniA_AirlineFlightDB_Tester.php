<?php

include('class_lib/SniA_AirlineFlightDB.php');

$sniA_AirlineFlightDB = new SniA_AirlineFlightDB();
$rSniA_AirlineFlight = $sniA_AirlineFlightDB->getSniA_AirlineFlight("Delta");
print("SniA_AirlineFlight Name: " . $rSniA_AirlineFlight->getAirlineName());
print("<br />");
print("Flight Number: " . $rSniA_AirlineFlight->getFlightNumber());
print("<br />");
print("Ticket Price: " . $rSniA_AirlineFlight->getFormattedTicketPrice());
print("<br />");
print("Seat Number: " . $rSniA_AirlineFlight->getSeatNumber());
print("<br /><br />");
print($rSniA_AirlineFlight->toString());

?>