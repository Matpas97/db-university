<?php




define("DB_SERVERNAME", "localhost:8889");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root");
define("DB_NAME", "db-university");


// Connect
$conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);


// Check connection 
if ($conn && $conn->connect_error)  {
    echo "Connection failed: " . $conn->connect_error;
}

echo "<p>connection OK!</p>";

$sql = "SELECT `email`,  FROM `departments`";
$result = $conn->query($sql);

if($result && $result->num_rows > 0)  {
    while($row = $result->fetch_assoc()) {
        echo "email ". $row['email'];
    }
 }  elseif ($result)  {
        echo "0 results";
    } else{
        echo "query error";
    }



$conn->close();

?>


   

