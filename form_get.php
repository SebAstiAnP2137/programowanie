
<?php
$servername="localhost";
$username="root";
$password="";
$db="inb5_2";




$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn){
    die("connection failed: ".mysqli_connect_error());
}
echo "connected successfully";

$sql = "INSERT INTO MyGuests(firstname,lastname,email)VALUES(\"". $_GET["name"] . "\", \"" . $_GET["lastname"] . "\", \"". $_GET["email"] . "\")";


echo $sql; 
if (mysqli_multi_query($conn,$sql)){
    echo "Records in MyGuests create successfully";
}else{
    echo "error creating records: ".mysqli_error($conn);
}
?>