<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Akakom Galery</title>
    <link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
     <div class="container">         
              <img src="<?php echo base_url(); ?>asset/image/logo.jpg" class="img-rounded" style="img-position:center;">
              <form class="form-signin" role="form" method="post" action="<?php echo base_url(); ?>index.php/web/login" >
              <h4><i>Aplikasi penyimpan File berbasis Cloud</h4></i></h1>
              <h2 class="form-signin-heading">Monggo Masuk</h2>
              <label class="col-sm-2 control-label">Email</label>
              <input type="email" class="form-control" placeholder="Email address" name="email" required autofocus>
              <label class="col-sm-2 control-label">password</label>
              <input type="password" class="form-control" placeholder="Password" name="password" required>
              <div class="checkbox">
              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Masuk</button>
              <center>belum Punya Akun?<button><a href="<?php echo base_url(); ?>index.php/web/daftar">daftar</a></button>
</center>
              </form>
    </div> <!-- /container -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
  </body>
</html>