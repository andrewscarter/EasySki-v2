<?php
/*

THIS VERSION DOES NOT CONTAIN THE ABILITY TO RECEIVE JSON

This module contains functionality for recieving
a date in JSON then returning list of tickets for that day.

Done by using JSON get, querying the database for the 
repsective ID, then running another query to find the
all tickets for that day to return in JSON encoded format.

*/

//  variables to hold server connection info
$servername = "classroom.cs.unc.edu";
$username = "lukeatha";
$password = "Lathans8!";
$myDatabase = "lukeathadb";

// connect to db
$conn = new mysqli($servername, $username, $password, $myDatabase);

//Check connection
if ($conn->connect_error) {
    die("Connection  failed: " . $conn->connect_error);
}

// test date --> need to replace with json parameter
$date = date("2017-12-30");
// run query to recieve data ID of given date (from json)
$result = $conn->query("SELECT * FROM Dates d WHERE d.date = '$date'");

// parse query result
$row = mysqli_fetch_assoc($result);
$date_id = $row["id"];

//  instantiate array to hold coresponding date to date_id (See while-loop)
$data = array();

// pull tickets from db
$result = $conn->query("SELECT * FROM Tickets t WHERE t.date_id = '$date_id'");

//  parse ticket result and store into temp var, then push to data array
while($row = mysqli_fetch_assoc($result)) {
    $ticket_id = $row["id"];
    $resort_id = $row["resort_id"];
    $price = $row["price"];
    //  temp var to hold ticket info to be pushed into $data array
    $line = array("tid" => $ticket_id, "rid" => $resort_id, "price" => $price);
    //  function that adds a var to an exisiting array $data
    array_push($data, $line);
}

//  encode $data into json
echo json_encode($data);

?>
