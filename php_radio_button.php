<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inb5_2";
$conn=mysqli_connect($servername,$username,$password);
if (!$conn){
    die("Connection failed: " .mysqli_connect_error());
}
echo "connection sucessfully";

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$fav_language=$_POST['fav_language'];

$sql="INSERT INTO MyGuests ('firstname, lastname, fav_language')";

if (mysqli_query($conn,$sql)){
    echo "New record created sucessfully";
}else {
    echo "Error: ".$sql . "<br>" . mysqli_error($conn);
}
?>