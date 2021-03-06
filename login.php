<?php
session_start();
if($_SESSION){
  header("Location: user.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <title>Sistem Kepegawain</title>
 
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color:#eee;
    }
    .row {
      margin:100px auto;
      width:300px;
      text-align:center;
    }
    .login {
      background-color:#fff;
      padding:20px;
      margin-top:20px;
    }
  </style>
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  
  <div class="container">
    <div class="row">
      <h2>Sistem Kepegawain</h2>
      <div class="login">
        
        <?php
        if(isset($_POST['login'])){
          include("koneksi.php");
          
          $username = $_POST['username'];
          $password = md5($_POST['password']);
          $level    = $_POST['level'];
          
          $query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$password'");
          if(mysqli_num_rows($query) == 0){
            echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
          }else{
            $row = mysqli_fetch_assoc($query);
            
            if($row['level'] == 1 && $level == 1){
              $_SESSION['username']=$username;
              $_SESSION['level']='admin';
              header("Location: admin.php/dasboard.php");
            }else if($row['level'] == 2 && $level == 2){
              $_SESSION['username']=$username;
              $_SESSION['level']='dosen';
              header("Location: home.php");
            }else if($row['level'] == 3 && $level == 3){
              $_SESSION['username']=$username;
              $_SESSION['level']='mahasiswa';
              header("Location: hrd/index.php");
            }else{
              echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
            }
          }
        }
        ?>
        
        <form role="form" action="" method="post">
          <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Username" required autofocus />
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required autofocus />
          </div>
          <div class="form-group">
            <select name="level" class="form-control" required>
              <option value="">Pilih Level User</option>
              <option value="1">Admin</option>
              <option value="2">GM</option>
              <option value="3">HRD</option>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" name="login" class="btn btn-primary btn-block" value="Login" />
          </div>
        </form>
      </div>
      Copyright 2018 &copy; Poltek
    </div>
  </div>
 <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>