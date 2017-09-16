<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="description" content=""> 
        <meta name="author" content=""> 
        <title>Pemetaan Asal Daerah Calon Mahasiswa</title> 
		<link href="<?php echo base_url();?>asset/img/logo.png" rel="shortcut icon">
    <link href="<?php echo base_url();?>asset/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<script src="<?php echo base_url();?>asset/dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="<?php echo base_url();?>asset/dist/sweetalert.css">
        
        <!-- Bootstrap core CSS -->         
        <link href="<?php echo base_url(); ?>asset/css/bootstrap.css" rel="stylesheet"> 
        <!-- Custom styles for this template -->         
        <link href="<?php echo base_url(); ?>asset/style.css" rel="stylesheet"> 
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->         
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->         
    </head>
	<style>
.bg { background-color:#1e90ff;}
.bg1 {background-color:#00bfff;}
.str{background-color:#e6e6fa;}
</style>
    <body class="bg"> 
        <div class="container bg1"> 
            <center> 
                <img src="<?php echo base_url(); ?>asset/img/bn.jpg" /> 
            </center>             
        </div>         
        <div class="container bg1"> 
            <nav class="navbar navbar-default" role="navigation"> 
                <div class="container-fluid">
				
                   <?php 
				   if($log == 'Admin'){
				   $this->load->view('sub/menu_admin');
				   }elseif($log != ''){
				   $this->load->view('sub/menu_user_log');
				   }else{
				   $this->load->view('sub/menu_user');
}				   ?>                    
                </div>                 
            </nav>             
        </div>         
        <div class="container bg1"> 
            <div class="row row-offcanvas row-offcanvas-right"> 
                <div class="col-xs-12 col-sm-9"> 
                    <p class="pull-right visible-xs"><button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button></p> 
                    <div class="jumbotron"> 
                        <h4>Hello, Selamat Datang</h4> 
						<div class="item">
								<img src="<?php echo base_url(); ?>asset/img/gedung.jpg" /> 
								<div class="carousel-caption">
									<h6></h6>
								</div>
							</div>
                        <p>Ini adalah website Biro Humas dan Promosi Universitas Respati Yogyakarta. Tujuan pengembangan yaitu melakukan pemetaan berdasarkan asal daerah calon mahasiswa yang mengambil studi di UNRIYO..</p> 
                    </div>                     
                    <div class="row bg1"> 
					<div class="col-md-12">
					<div class="col-md-12 str">
                        <div class="col-xs-6 col-lg-12 "> 
                            <h2>Sejarah</h2> 
                            <p align="justify">
							<?php
							$isi=strip_tags($sejarah);
							echo substr($isi,0,402); ?>
                            <p><a class="btn btn-default" href="<?php echo site_url('home/sejarah'); ?>" role="button">Lanjut baca &raquo;</a></p> 
                        </div>                         
                        <!--/.col-xs-6.col-lg-4-->                         
                        <div class="col-xs-6 col-lg-12"> 
                            <h2>Visi</h2> 
                            <p align="justify"><?php echo $visi; ?> </p> 
                            <p></p> 
                        </div>                         
                        <!--/.col-xs-6.col-lg-4-->                         
                        <div class="col-xs-6 col-lg-12"> 
                            <h2>Misi</h2> 
                            <p align="justify"> 
    <?php echo $misi; ?>
                        </div>                         
                        <!--/.col-xs-6.col-lg-4-->                         
                        <!--/.col-xs-6.col-lg-4-->                         
                        <!--/.col-xs-6.col-lg-4-->                         
                        <!--/.col-xs-6.col-lg-4-->    
						</div>
						
						
</div>			<div class="col-md-11 bg1">
						</div>			
                    </div>                     
                    <!--/row-->                     
                </div>                 
                <!--/.col-xs-12.col-sm-9-->                 
                <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar"> 
				
                   
					<?php if($stat == 'login'){ $this->load->view('sub/user_pro'); }
					else{
					$this->load->view('sub/login_page');
					}?>
                </div>                 
                <!--/.sidebar-offcanvas-->                 
            </div>             
        </div>         
        <div class="container"> 
            <footer> 
              <center>  <p>&copy; Pemetaan Asal Daerah calon Mahasiswa | 13220016 - Muhammad Efendi | 2017</p> </center>
            </footer>             
        </div>         
        <!-- Bootstrap core JavaScript
    ================================================== -->         
        <!-- Placed at the end of the document so the pages load faster -->         
        <script src="<?php echo base_url(); ?>asset/js/jquery.min.js"></script>         
        <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>         
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->         
        <script src="<?php echo base_url(); ?>asset/js/ie10-viewport-bug-workaround.js"></script>         
    </body>
</html>
