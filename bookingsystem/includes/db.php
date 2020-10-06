<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "bookingsystem";

$mysqli=mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if (!$mysqli){
	die("Connection failed:".mysqli_connect_error());
}

/*
CREATE DATABASE bookingsystem;


CREATE TABLE `bookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `date` date NOT NULL,
  `timeslot` text NOT NULL
);
*/

?>