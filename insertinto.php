<?php


$name=$_POST["name"];
$email=$_POST["email"];

$sql = "INSERT INFO MyGuests (firstname,email) VALUES ('$name', '$email')";
echo $sql;
if (mysqli_query($conn,$sql)){
    echo "New record created succesfully";
}else{
    echo "Error: " .$sql . "<br>" .mysqli_error($conn);
}
mysqli_close($db);
