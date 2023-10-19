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


$database="INB5_2";
$sql="CREATE DATABASE $database";
if (mysqli_query($conn,$sql)){
    echo "database create successfully";
}else{
    echo "error crating database: ".mysqli_error($conn);
}
$sql="CREATE TABLE MyGuests(
    id INT(6) UNSIGNED AUTO_INCREMENT
        PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT
            CURRENT_TIMESTAMP ON UPDATE
        CURRENT_TIMESTAMP
)";
if (mysqli_query($conn,$sql)){
    echo "table MyGuests create successfully";
}else{
    echo "error crating table: ".mysqli_error($conn);
}

$sql="INSERT INTO MyGuests (firstname,lastname,email)
                VALUES ('Krystian', 'Ronaldo' , 'kr007@o2.pl');";   
$sql.="INSERT INTO MyGuests (firstname,lastname,email)
                VALUES ('Leonard', 'Messi' , 'pepsicola@o2.pl');";
$sql.="INSERT INTO MyGuests (firstname,lastname,email)
                VALUES ('Kamil', 'De Brujne' , 'kdbrujne007@o2.pl');";
$sql.="INSERT INTO MyGuests (firstname,lastname,email)
                VALUES ('Sebastian', 'Alwarez' , 'plytkisebekglazurnik@wp.pl');";
if (mysqli_multi_query($conn,$sql)){
    echo "Records in MyGuests create successfully";
}else{
    echo "error creating records: ".mysqli_error($conn);
}
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = my_sqli_query($conn,$sql);

if(my_sqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        echo :"id: ". $row["id"]. " - Name: ".
        $row["firstname"]. " ".$row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>
