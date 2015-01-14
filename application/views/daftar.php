<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Akakom Galery</title>
    <link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
     <div class="container">

<center><h1>Silahkan daftar untuk menjadi member</h1></center>

    <form class="form-horizontal" role="form" method="post" action="<?php echo base_url();?>index.php/web/simpandaftar" name="form1" >
    <div class="form-group">
    <label class="col-sm-2 control-label">nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="nama" placeholder="nama">
    </div>
  </div>
 <div class="form-group">
    <label class="col-sm-2 control-label">email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="email" placeholder="email">
    </div>
  </div>  <div class="form-group">
    <label class="col-sm-2 control-label">username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="username" placeholder="username">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
  </div>
<input type="text" name="status" value="user" hidden="true">
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="submit">Daftar</button>
    </div>
  </div>
  
</form>


</div> <!-- /container -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
</body>
</html>