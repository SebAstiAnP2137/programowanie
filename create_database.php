<?php 
    $servername="localhost";
    $username="root";
    $password="";
    
    //Create connection 
    $conn=mysqli_connect($servername,$username,$password);

    //Check connection
    if (!$conn){
        die("Connection failed: " .mysqli_connect_error());
    }
    echo "connection sucessfully";


$database="INB5_2";
//Create database
$sql = "CREATE DATABASE $database";
if(mysqli_query($conn,$sql)){
    echo "Database created sucessfully";
}else {
"Error creating database : ".mysqli_error($conn);
}
$sql= "CREATE TABLE MyGuests (
                                id INT(6) UNSIGNED AUTO_INCREMENT
                                        PRIMARY KEY,
                                firstname VARCHAR(30) NOT NULL,
                                lastname VARCHAR(40) NOT NULL,
                                E-mail VARCHAR(50),
                                reg_date TIMESTAMP DEFAULT
                                        CURRENT_TIMESTAMP ON UPDATE
                                    CURRENT_TIMESTAMP
                                )";
if (mysqli_query($conn,$sql)){
    echo "Table MyGuests created successfully";
}else {
    echo "error creating table: ".mysqli_error($conn);
}

mysqli_close($conn);
?>