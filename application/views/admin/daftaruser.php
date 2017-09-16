<html lang="en"> 
    <head> 
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="description" content=""> 
        <meta name="author" content=""> 
		<link href="<?php echo base_url();?>asset/img/logo.png" rel="shortcut icon">	
        <title>Daftar User </title>         
        <!-- Bootstrap core CSS -->         
        <link href="<?php echo base_url(); ?>asset/css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>asset/css/table.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>asset/css/font-awesome.min.css" rel="stylesheet" type="text/css">	
        <!-- Custom styles for this template -->         
        <link href="<?php echo base_url(); ?>asset/style.css" rel="stylesheet"> 
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->         
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->         
    </head>
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
                     
        </div>         
                
   
        <div class="container bg1">
		<div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Kelola User</h3>
              </div>
              <div class="panel-body">
			  <form id="form1" name="form1" action="<?php echo site_url("home/daftar_user"); ?>" method="post" >
                <div class="row">
                  <div class="col-md-11">
                    <h1 class="text-center">Daftar User</h1>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Level Akses</label>
					   <div class="input-group">
                      <select class="form-control" type="text" name="level" id="level">
                         <option>Admin</option>                                         
                                        <option>Rektor</option>                                         
                                        <option>Dekan FIKES</option>                                         
                                        <option>Dekan FST</option>                                         
                                        <option>Dekan FISE</option> 
										<option>KPS FST</option>  
										<option>KPS FISE</option>  
										<option>KPS FIKES</option>  
                                   
                      </select>
					  <span class="input-group-addon"><i class="fa fa-toggle-down"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Username/NIK</label>
					  <div class="input-group">
                      <input class="form-control" type="text" name="nik" id="nik" placeholder="Input Username atau NIK">
					   <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-6">
                   <div class="form-group">
                      <label class="control-label">Password</label>
					  <div class="input-group">
                      <input class="form-control" type="password" name="password" id="password" placeholder="Password">
					   <span class="input-group-addon"><i class="fa fa-expeditedssl"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-4 text-center">
                    <input type="submit" class="btn btn-block btn-succes btn-success fa fa-plus-circle" name="simpan"
                    value="Tambah User">
                  </div>
                  <div class="col-md-4"></div>
                </div>
				</form>
              </div>
            </div>
			<div class="datagrid col-md-12">
			<center>
            <table class="table table-bordered" width="500"> 
                <thead> 
                    <tr> 
                        <th><center>Nomor</center></th> 
                        <th><center>NIK/Username</center></th> 
                        <th><center>Level Akses</center></th> 
						 <th><center>Action</center></th> 
                    </tr>                     
                </thead>                 
                <tbody>
					<?php
					$no=1;
					foreach($datum as $row){ ?>
                    <tr <?php if($no % 2 == 0 ){echo 'class="alt"';} ?>> 
                        <td><?php echo $no++; ?></td> 
                        <td><?php echo $row->username; ?></td> 
                        <td><?php echo $row->level; ?></td> 
                        <td><center><a href="<?php echo site_url('home/del_user/'.$row->username .''); ?>" class="btn btn-danger">Hapus User <i class="fa fa-times-circle" aria-hidden="true"></i></a></center></td>
                    </tr> 
						<?php } ?>
				
                </tbody>
            </table>
			</center>
			</div>
        </div>
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-4"> 
</div>
                    <div class="container">
                        <div class="container">
                            <td class="pg-empty-placeholder"></td>
                        </div>
                    </div>
                    <div class="col-md-4"> 
</div>
                </div>
            </div>
            <center><p>&copy; Pemetaan Asal Daerah Mahasiswa | 13220016 - Muhammad Efendi | 2017</p></center>
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
