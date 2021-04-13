// For collecting all the articles in one array and send them to another file
<?php
require_once 'classes.php';

//this array will print the result
$publications = array();

//TEST OK! Enter the data from DB 
 
//DB connection
$connect = mysqli_connect("localhost", "root", "", "polymorphism");
if (mysqli_connect_errno ()){
    echo "Problem connexion to DB" .mysqli_connect_errno;
}

//DB Query
$result = mysqli_query($connect, "SELECT * FROM polymorphismtable");

//Work with the results
while ($row=mysqli_fetch_array($result)){
   echo '<br>' .$row['type'];
    $publications[] = new $row['type'];;
} 

echo '<pre>';
print_r("$publications");
?>  

