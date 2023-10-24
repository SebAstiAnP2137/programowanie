<?php
$sql="SELECT id, firstname, lastname FROM MyGuests";
$result = (mysqli_num_rows($result)) > 0 {
    echo "<table>";
    while($row = mysqli_fetch_rowsq($result)){
        echo "<tr><td>" .$row[0]. "</td></tr>";
    }
echo "</table>";
}else{
    echo "0 returns";
}
mysqli_close($conn);
?>

//GENEROWANIE LISTY 

<?php
$sql="SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0){
    echo "<ul>";
    while($row = mysqli_fetch_rowsq($result)){
        echo "<li>" .$row[0]. "" .$row[1] " " $row[2]."</li>";
    }
echo "</ul>";
}else{
    echo "0 returns";
}
mysqli_close($conn);

?>

//delete data


<?php
$sql="DELETE FROM MyGuests WHERE id=3";
$result = mysqli_query($conn,$sql);

if (mysqli_query($conn,$sql)){
    echo "Record Deleted sucesfully";
}else{
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);

?>
