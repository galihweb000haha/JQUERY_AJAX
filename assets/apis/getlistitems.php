<?php
error_reporting(E_ALL);
ini_set("display_errors","On");
session_start();
//'localhost','mimj5729_myroot','myroot@@##','mimj5729_senang'

$host = "localhost"; // host of MySQL server
$user = "mimj5729_myroot"; // MySQL user
$pwd = "myroot@@##"; // MySQL user's password
$db = "mimj5729_senang"; // database name
 
$menuname=$_GET['itemname'];
// Create connection
$con = mysqli_connect($host, $user, $pwd, $db);
 
// Check connection
if(mysqli_connect_errno($con)) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
} 
 
// query the application data
$sql = "SELECT * FROM mstbrg WHERE nm_brg like '%$menuname%'";
$result = mysqli_query($con, $sql);
 
// an array to save the application data
$rows = array();
 
// iterate to query result and add every rows into array
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $rows[] = $row; 
}
 
// close the database connection
mysqli_close($con);
 
// echo the application data in json format
echo json_encode($rows);
?>
