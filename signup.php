<html >
    <head>
        <title>Sign-up</title>
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

              <h2 class="fw-bold mb-2 text-uppercase">Sign Up</h2>
              <p class="text-white-50 mb-5">Join our Family </p>

              
              <div class="form-outline form-white mb-4">
                <input type="name" placeholder="Name" name="name" id="typenameX" class="form-control" />
              </div>

              <div class="form-outline form-white mb-4">
                <input type="email" placeholder="E-mail" name="email" id="typeEmailX" class="form-control" />
              </div>

              <div class="form-outline form-white mb-3">
                <input type="password" placeholder="password" name="pass" id="typePasswordX" class="form-control" />
              </div>

              <button class="btn btn-outline-light btn-lg px-5" name="btn" type="submit">Sign-up</button>
            </form>
            <div>
              <p >Already have an account? <a href="login.php" class="text-white-50 fw-bold ">Log-in</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </body>
    <?php
    if(isset($_POST['btn'])){
        $name=$_POST['name'];
        $pass=$_POST['pass'];
        $email=$_POST['email'];
        
        $server="localhost";
        $username="root";
        $sqlpass="";
        $dbname="databasephp";
        
        $conn=new mysqli($server,$username,$sqlpass,$dbname);

        if($conn->connect_error){
            die("connection failed " . $conn->connect_error);
        }

        $stmt = "INSERT INTO user ( name, email, password) VALUES ('$name','$email','$pass')";
        if ($conn->query($stmt) === TRUE) {
            echo "user added successfully";
            header("Location: http://localhost/my_project_php/login.php");
          } else {
            echo "User already exist please try with another email id " . $conn->error;
          }
    }
    ?>
</html>