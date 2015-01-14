<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah File</title>
    <link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
     <div class="container">         
             
              <?php echo form_open_multipart('web/simpanupload');?>
              <h4><i>Tambah File</h4></i></h1> <a href="<?php echo base_url(); ?>index.php/web/logout">Logout</a><br/><br/>
              <label class="col-sm-2 control-label">Judul</label>
              <input type="text" class="form-control" placeholder="Judul File"name="judul_file" required autofocus>

              <input type="file" class="form-control" placeholder="file" name="userfile" required><br/>
              * .pdf
              <div class="checkbox">
              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Upload</button>
              
				</center>
              </form>
              <table class="table">
				<tr bgcolor="#FFF" align=""><td><strong>Judul File</strong></td><td><strong>File</strong></td><td><strong>Pemilik</strong></td>
					<?php
					foreach($query->result() as $t)
					{			
					echo "<tr><td>".$t->judul_file."</td><td><b><a href='".base_url()."download/".$t->nama_file."'>[ Download ]</a></b></td><td>".$t->author."</td><td></td><td>
					</td></tr>";	
					}
					?>
					</table>
    </div> <!-- /container -->

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>

  </body>
</html>