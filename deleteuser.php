<?php
 $server="localhost";
 $username="root";
 $sqlpass="";
 $dbname="databasephp";

 $conn=new mysqli($server,$username,$sqlpass,$dbname);

 if($conn->connect_error){
     die("connection failed " . $conn->connect_error);
 }


if(isset($_GET['delid'])){
    $id=$_GET['delid'];
    $deletesql="DELETE FROM user WHERE id=$id ";
    if ($conn->query($deletesql) === TRUE) {
        // echo "Record deleted successfully";
        header('location:homepage.php');
      } else {
        echo "Error deleting record: " . $conn->error;
      }
      
}
?>