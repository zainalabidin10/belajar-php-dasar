<?php 
require('koneksi.php');
session_start();

if(isset($_POST['submit'])){
    $email = $_POST['txt_email'];
    $pass = $_POST['txt_pass'];

    if(!empty(trim($email)) && !empty(trim($pass))){
        $query = "SELECT * FROM user_detail WHERE user_email='$email'";
        $result = mysqli_query($koneksi,$query);
        $num = mysqli_num_rows($result);

        while ($row = mysqli_fetch_array($result)){
            $id = $row['id'];
            $userVal = $row['user_email'];
            $passVal =$row['user_password'];
            $username = $row['user_fullname'];
            $level = $row['level'];
        }

        if($num != 0){
            if($userVal==$email && $passVal==$pass){
                //header('Location: home.php?user_fullname='.urlencode($username));
                $_SESSION['id'] = $id;
                $_SESSION['name'] = $id;
                $_SESSION['level'] = $level;
                header('Location: home.php');
            }else{
                $error = 'user atau password salah!!';
                header('Location: login.php');
            }
        }else{
            $error = 'user tidak ditemukan!!';
            header('Location: login.php');
        }
    }else{
        $error = 'Data tidak boleh kosong!!';
        echo $error;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
    .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
    
    </style>
</head>
<body>
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form action="login.php" method="POST">
            
        </div>  
            <h1> Login Dulu Ya</h1>
</div>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form1Example13" class="form-control form-control-lg" name="txt_email"/>
            <label class="form-label" for="form1Example13">Email Address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form1Example23" class="form-control form-control-lg" name="txt_pass"/>
            <label class="form-label" for="form1Example23">Password</label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
            <a href="register.php">Register</a>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block"name="submit">Sign in</button>

          
        </form>
      </div>
    </div>
  </div>
</section>
</body>
</html>