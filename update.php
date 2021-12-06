<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- bootstrap js, css link -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="container h-100 ">
       <div class="row justify-content-center  m-5 pt-5">
           <form action="" method="post">
           <div class="form-group">
                <label for="exampleInputPassword1">Name</label>
                 <input type="text" class="form-control" name='name'  placeholder="Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name='email' id="exampleInputEmail1"  placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                 <input type="password" class="form-control" name='pass'  placeholder="Password">
            </div>
           
            
            <button type="submit" class="btn btn-primary" name="btn1">Submit</button>

           </form>
       </div>
   </div>
<?php
        
    if(isset($_GET['updateid'])){
        $id=$_GET['updateid'];
        if(isset($_POST['btn1'])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $pass=$_POST['pass'];


            $server="localhost";
            $username="root";
            $sqlpass="";
            $dbname="databasephp";

            $conn=new mysqli($server,$username,$sqlpass,$dbname);

            if($conn->connect_error){
                die("connection failed " . $conn->connect_error);
            }

            $select="UPDATE user SET name='$name',email='$email',password='$pass' WHERE id='$id'";

            $obj=$conn->query($select);

            if($obj){
                echo 'successfull';
                header('location:homepage.php');

            }
            else{
                echo "retry".$conn->error;
            }

        }
    }
    ?>
</body>