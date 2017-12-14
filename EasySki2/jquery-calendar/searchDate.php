<?php 


header("Content type");
$date_obj = json_decode($_GET["start"], false);


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


$result = $conn->query("SELECT * FROM Dates d WHERE d.date = '$date_obj'");

$row = mysqli_fetch_assoc($result);
$date_id = $row["id"];

//  instantiate array to hold coresponding date to date_id (See while-loop)
$data = array();

// pull tickets from db
$result = $conn->query("SELECT * FROM Tickets t WHERE t.date_id = '$date_id'");

//  parse ticket result and store into temp var, then push to data array
while($row = mysqli_fetch_assoc($result)) {
    $resort_id = $row["resort_id"];
    $resort = $conn->query("SELECT name FROM Resorts R WHERE R.id = '$resort_id'");
    $resortName = mysqli_fetch_assoc($resort)["name"];
    $price = $row["price"];
    //  temp var to hold ticket info to be pushed into $data array
    $line = array("rid" => $resortName, "price" => $price);
    //  function that adds a var to an exisiting array $data
    array_push($data, $line);
}

//  encode $data into json
echo json_encode($data);
?>
