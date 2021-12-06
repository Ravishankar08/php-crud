<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- bootstrap js, css link -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body class="h-100">
  <style>
    .table{
      /* background-color:red; */
      backdrop-filter: blur(5px);
      box-shadow: 10px 10px 83px -1px rgba(0,0,0,0.57);
      -webkit-box-shadow: 10px 10px 83px -1px rgba(0,0,0,0.57);
      -moz-box-shadow: 10px 10px 83px -1px rgba(0,0,0,0.57);

    }
  </style>
    
<nav class="navbar  bg-dark navbar-dark">
  <a class="navbar-brand" href="#">My web page</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Logout</a>
      </li>    
    </ul>
  </div>  
</nav>
<br>
<div class="welcome text-center">
    <h2>Welcome to my web app by PHP</h2>
    <h4>These are the following actions you can perform</h4>
    <div class="container  w-40 ">
    <div class="container mt-5">
          <div class="row ">
           <table class="table table-bordered table-hover">
             <tr>
               <th>No.</th>
               <th>Name</th>
               <th>E-mail</th>
               <th>Password</th>
               <th>Actions</th>
             </tr>
            <!-- php -->
        <?php
        $server="localhost";
        $username="root";
        $sqlpass="";
        $dbname="databasephp";

        $conn=new mysqli($server,$username,$sqlpass,$dbname);

        if($conn->connect_error){
            die("connection failed " . $conn->connect_error);
        }

        $select="SELECT * FROM user";

        $obj=$conn->query($select);

        
        
        while ($row=$obj->fetch_assoc()){
          $id=$row['id'];
          $name=$row['name'];
          $pass=$row['password'];
          $email=$row['email'];
          echo '
          
          <tr>
          <td>'.$id.'</td>
          <td>'.$name.'</td>
          <td>'.$email.'</td>
          <td>'.$pass.'</td>
          <td> <button class="btn btn-info"><a href="update.php?updateid='.$id.'" class="text-white">Update</a></button>
          <button class="btn ml-2 btn-danger"><a href="deleteuser.php?delid='.$id.'" class="text-white">Delete</a></button>
          </td>
          </tr>
          ';

        }
        

        ?>
        </table>
          </div>
        </div>
          
         
       
</div>
</body>
</html>


