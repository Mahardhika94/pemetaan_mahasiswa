<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="description" content=""> 
        <meta name="author" content=""> 
        <title>Pemetaan Daerah Asal Calon Mahasiswa</title> 
		<link href="<?php echo base_url();?>asset/img/logo.png" rel="shortcut icon">	
        <!-- Bootstrap core CSS -->         
        <link href="<?php echo base_url(); ?>asset/css/bootstrap.css" rel="stylesheet"> 
		<link href="<?php echo base_url();?>asset/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template -->         
        <link href="<?php echo base_url(); ?>asset/style.css" rel="stylesheet"> 
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->         
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->         
    </head>
	<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<style>
.bg { background-color:#FFFFFF;}
.bg1 {background-color:#CCCCCC;}
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
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo site_url('home'); ?>">Kelola Data</a>
                </li>
                <li class="active">Kelola </li>
            </ol>             
        </div>         
        <div class="container bg1">
           <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-11">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Kontak</h3>
              </div>
              <div class="panel-body">
			  <form action="<?php echo site_url('home/send_mail'); ?>" method="post" >
                <div class="row">
                  <div class="col-md-12">
                    <h1 class="text-center" >Kirim Pesan</h1>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Nama *</label>
					  ,<div class="input-group">
                      <input class="form-control" type="text" name="nama">
					  <span class="input-group-addon"><i class="fa fa-user "></i></span></div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Nomor Telephone</label>
					  <div class="input-group">
                      <input class="form-control" type="text" name="nope">
					  <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">E-Mail*</label>
					  <div class="input-group">
                      <input class="form-control" type="text" name="email"><span class="input-group-addon"><i class="fa fa-envelope"></i></span></div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label">Pesan *</label>
                      <textarea class="form-control" name="pesan"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-4 text-center">
                    <input type="submit" class="btn btn-block btn-succes btn-success" name="simpan"
                    value="Kirim Pesan">
                  </div>
				  </form>
                  <div class="col-md-4"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
            
          <center>  <p>&copy; Pemetaan Asal Daerah calon Mahasiswa | 13220016 - Muhammad Efendi | 2017</p>
        </div>
        <div class="container">
            <div class="row">
</div>
        </div>         
        <!-- Bootstrap core JavaScript
    ================================================== -->         
        <!-- Placed at the end of the document so the pages load faster -->         
        <script src="<?php echo base_url(); ?>asset/js/jquery.min.js"></script>         
        <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>         
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->         
        <script src="a<?php echo base_url(); ?>asset/js/ie10-viewport-bug-workaround.js"></script>         
        
    </body>     
</html>
