<?php
    // ini_set("display_errors","Off"); hilangkan koma kalau sudah selese
    include "connect.php";
   
    $sql=mysqli_query($koneksi, "SELECT user,email FROM login");
    $data=mysqli_fetch_assoc($sql);
    session_start();
    if (isset($_SESSION['username'])){
        header("Location:./dashboard.php");
        // header("Location:./login.php?msg=Silahkan Login Dahulu");
    }
    function hide_email($email) {
        $parts = explode("@", $email);
        $username = $parts[0];
        $domain = $parts[1];
        
        $hidden_username = substr($username, 0, 1) . str_repeat("*", strlen($username) - 2) . substr($username, -1);
        $hidden_domain = substr($domain, 0, 1) . str_repeat("*", strlen($domain) - 2) . substr($domain, -1);
        
        return $hidden_username . "@" . $hidden_domain;
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lupa Password</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/all.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>

    <style>
    :root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}

body {
  background: #007bff;
  background: linear-gradient(to right, #0062E6, #33AEFF);
}

.card-signin {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
}

.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  height: auto;
  border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

.btn-google {
  color: white;
  background-color: #ea4335;
}

.btn-facebook {
  color: white;
  background-color: #3b5998;
}

/* Fallback for Edge
-------------------------------------------------- */

@supports (-ms-ime-align: auto) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input::-ms-input-placeholder {
    color: #777;
  }
}

/* Fallback for IE
-------------------------------------------------- */

@media all and (-ms-high-contrast: none),
(-ms-high-contrast: active) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input:-ms-input-placeholder {
    color: #777;
  }
}
    </style>
</head>
<body>
   <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h2 class=" text-center">Reset Password</h2>
            <h3 class="card-title text-center">Masukkan Username & Email Terdaftar</h3>
            <!-- <p class="card-title text-center"><img src="images/muris-studio.jpg" width="100" alt=""></p> -->
            <form action="resetpassword.php" class="form-horizontal" role="form" method="POST">
                <div class="form-label-group">
                    <input type="text" id="username"    name="username" class="form-control" placeholder="Username" autocomplete="off" required autofocus>
                    <label for="username">Username</label>
                </div>
                <div class="form-label-group">
                    <input type="email" id="email"    name="email" class="form-control" placeholder="email" autocomplete="off" required autofocus>
                    <label for="email">Email</label>
                </div>
                <div class="form-label-group">
                    <input type="password" name="password1" id="password1" class="form-control" placeholder="Password" required>
                    <label for="password1">Password Baru</label>
                </div>
                <div class="form-label-group">
                    <input type="password" name="password2" id="password2" class="form-control" placeholder="Password" required>
                    <label for="password2">Masukkan Ulang Password</label>
                </div>

                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit"   name="reset"    value="Reset">Reset</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>