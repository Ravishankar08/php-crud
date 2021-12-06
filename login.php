<html >
    <head>
        <title>Log-in</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body >
    <section class="vh-100 ">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <form class="md-5 mt-md-4 pb-5" method="post">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>

              <div class="form-outline form-white mb-4">
                <input type="email" placeholder="E-mail" id="typeEmailX" name="email" class="form-control" />
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" placeholder="password " name="pass" id="typePasswordX" class="form-control" />
              </div>


              <button class="btn btn-outline-light btn-lg px-5" name="loginbtn" type="submit">Login</button>
            </form>
            <div>
              <p >Don't have an account? <a href="signup.php" class="text-white-50 fw-bold">Sign Up</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </body>
    <?php
    if(isset($_POST['loginbtn']))
    {
        $pass=$_POST['pass'];
        $email=$_POST['email'];
            $server="localhost";
            $username="root";
            $passsql="";
            $dbname="databasephp";

            $conn=new mysqli($server,$username,$passsql,$dbname);

            if($conn->connect_error){
                die("connection failed " . $conn->connect_error);
            }
            $stmt = "SELECT * FROM user WHERE email = '$email'";
            $obj=$conn->query($stmt);    
            if ($obj->num_rows!= 0) {
                $row = $obj->fetch_assoc();
                 $checkit= $row['password'];     
                 $_SESSION['uname']= $row['name'];
                 if($pass == $checkit){
                     echo "allowed";
                     header("Location: http://localhost/my_project_php/homepage.php");
                     

                 }
                 else{
                     echo "<h2 style='text-align:center;color:red'> Wrong Password </h2>";
                 }
                
              } else {
                echo "<h2 style='text-align:center;color:red'> Please Signup First </h2>";
              }


    }
    ?>
</html>