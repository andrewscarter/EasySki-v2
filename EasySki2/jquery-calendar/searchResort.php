<?php
/*

This module contains functionality for recieving
a date in JSON then returning list of tickets for that day.

Done by using JSON get, querying the database for the 
repsective ID, then running another query to find the
all tickets for that day to return in JSON encoded format.

*/

header("Content type");
$date_obj = json_decode($_GET["start"], false);
$resort_obj = json_decode($_GET["resort"], false);


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
$date = date($date_obj);
// run query to recieve data ID of given date (from json)
$result = $conn->query("SELECT * FROM Dates d WHERE d.date = '$date'");
$result1 = $conn->query("SELECT * FROM Resorts r WHERE r.name = '$resort_obj'");

// parse query result
$row = mysqli_fetch_assoc($result);
$date_id = $row["id"];

$row1 = mysqli_fetch_assoc($result1);
$resort_id = $row1["id"];

//  instantiate array to hold coresponding date to date_id (See while-loop)
$data = array();

// pull tickets from db
$result = $conn->query("SELECT * FROM Tickets t WHERE t.date_id = '$date_id' AND t.resort_id = '$resort_id'");

//  parse ticket result and store into temp var, then push to data array
while($row = mysqli_fetch_assoc($result)) {
    $resort_id = $row["resort_id"];
    $resort = $conn->query("SELECT name FROM Resorts R WHERE R.id = '$resort_id'");
    $resortName = mysqli_fetch_assoc($resort)["name"];
    $price = $row["price"];
    $ticket_id = $row["id"];
    //  temp var to hold ticket info to be pushed into $data array
    $line = array("rid" => $resortName, "price" => $price, "tid" => $ticket_id);
    //  function that adds a var to an exisiting array $data
    array_push($data, $line);
}

//  encode $data into json
echo json_encode($data);

?>
