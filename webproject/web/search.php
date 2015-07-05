<?php
$database="100acres";
$servername = "172.16.3.185";
$username = "localuser";
$password = "Km7Iv80l";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$city=$_POST["Keywords"];
$price=$_POST["MinPrize"]
$Bedroom=$_POST["Bedrooms"];
if(!isset($price)){
	$price='';
}

$sql = "SELECT * FROM POSTING where city='$city' and bedrooms ='$Bedrooms' and expected_price='$price'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<table><tr><th>eid</th><th>Name</th></tr><th>Isactive</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["city"]."</td><td>".$row["address"]." ".$row["pid"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
} 
