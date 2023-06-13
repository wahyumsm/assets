<!-- ini halaman untuk login dari sisi front end<!DOCTYPE html> -->

<?php 

session_start();

if(isset($_SESSION['Login'])){
 header("Location: halamanutama.php");
}

require 'config/function.php';

if(isset($_POST['tLogin'])){
// get data from method post

$email = $_POST['email'];
$password = $_POST['password'];

login($email, $password);



}

?>

<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>loginAdminLottery</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
 </script>
 <!-- Custom fonts for this template-->
 <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

 <!-- Custom styles for this template-->
 <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>




<body class="bg-gradient-dark">


 <div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center bg-gradient-dark">

   <div class="col-xl-10 col-lg-12 col-md-9">

    <div class="card o-hidden border-0 shadow-lg my-5">
     <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
       <div class="col-lg-6 d-none d-lg-block bg-login-image">
        <img class="img-profile" src="img/bingo.png">
       </div>
       <div class="col-lg-6">
        <div class="p-5">
         <div class="text-center">
          <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
         </div>

         <form class="user" method="post">
          <div class="form-group">
           <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email">
          </div>
          <div  class="form-group">
           <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
          </div>
          <div class="form-group">
           <div class="custom-control custom-checkbox small">

           </div>
          </div>
          <button type="submit" class="btn btn-primary btn-user btn-block" name="tLogin">login</button>
          <hr>
         </form>

        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>


 <!-- Bootstrap core JavaScript-->
 <script src="vendor/jquery/jquery.min.js"></script>
 <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Core plugin JavaScript-->
 <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

 <!-- Custom scripts for all pages-->
 <script src="js/sb-admin-2.min.js"></script>


</body>

</html>