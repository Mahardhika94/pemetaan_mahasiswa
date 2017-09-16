<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="description" content=""> 
        <meta name="author" content=""> 
        <title>Peta Persebaran Calon Mahasiswa</title>         
        <!-- Bootstrap core CSS -->         
        <link href="<?php echo base_url(); ?>asset/css/bootstrap.css" rel="stylesheet"> 
		<link href="<?php echo base_url();?>asset/img/logo.png" rel="shortcut icon">	
		<link href="<?php echo base_url();?>asset/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template -->         
        <link href="<?php echo base_url(); ?>asset/style.css" rel="stylesheet"> 
		<script src="<?php echo base_url(); ?>asset/js/datum.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->         
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->         
    </head>
	<script type="text/javascript">
	function goto2(){
	var tahun=document.getElementById('tahun').value;
	if(tahun =='Pilih Tahun'){
	alert("Masukkan Piliahn waktu/tahun");}
	else{
	window.open('peta/'+tahun+'/1');
	}
	}
	
	function goto3(){
  var tahun = document.getElementById('tahun').value;
  if (tahun =='Pilih Tahun'){
		alert("Masukkan Piliahn waktu/tahun");
  }else{
  window.open('graf_total/'+tahun+'/1');
  }
	
	}
	
	function goto4(){
	var tahun2	=	document.getElementById('tahun2').value;
	var fak  	=	document.getElementById('fak').value;
	var prod = document.getElementById('prodi').value;
	if(tahun2 == 'Pilih Tahun' || fak =='Fakultas'){
	swal({
		title: "Galat!",
		text: "Masukan tahun, fakultas dan prodi",
		imageUrl: '<?php echo base_url();?>asset/img/e.ico'
	});
	}else{
	document.getElementById('myform').submit();
	}
	
	}

	function goto5(){
	var tahun2	=	document.getElementById('tahun2').value;
	var fak  	=	document.getElementById('fak').value;
	var prod = document.getElementById('prodi').value;
	if(tahun2 == 'Pilih Tahun' || fak =='Fakultas'){
	swal({
		title: "Galat!",
		text: "Masukan tahun, fakultas dan prodi",
		imageUrl: '<?php echo base_url();?>asset/img/e.ico'
	});
	}else{
	window.open('graf_total/'+tahun2+'/0/'+prod+'/'+fak);
	}
	
	}

	</script>

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
           <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Peta</h3>
              </div>
              <div class="panel-body">
                <div class="section">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-2"></div>
                      <div class="col-md-7">
                        <div class="form-group">
                          <div class="input-group">
                            <select type="text" class="form-control" name="tahun" id="tahun">
                              <option>Pilih Tahun</option>
							  <?php foreach($tahun as $row1){ ?>
							  <option><?php echo $row1->tahun_masuk; ?></option>
							  <?php } ?>
                            </select>
                            <span class="input-group-btn">
                              <a class="btn btn-success" type="submit" onclick="goto2()">Lihat Peta</a>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4"></div>
                    </div>
                  </div>
                </div>
                <div class="section">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-3">.</div>
                      <div class="col-md-7">
                        <h2>Filter Tampilan Peta</h2>
                      </div>
                      <div class="col-md-1">.</div>
                    </div>
                  </div>
                </div>
				<form action="<?php echo site_url('home/get_peta2'); ?>" method="post" name="myform" id="myform">
                <div class="section">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Pilih Tahun</label>
                          <select class="form-control" name="tahun2" id="tahun2">
                            <option>Pilih Tahun</option>
                           <?php foreach($tahun as $row1){ ?>
							  <option><?php echo $row1->tahun_masuk; ?></option>
							  <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="control-label">Pilih Fakultas</label>
                          <select class="form-control" id="fak" name="fak" onchange="pilih(this)">
                        <option>Fakultas</option>
						 <option>FST</option>
        <option>Fikes</option>
        <option>Fise</option>
                      </select>
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="control-label">Pilih Prodi</label>
                          <div class="form-group">
                            <div class="input-group">
                             <select class="form-control" name="prodi" id="prodi">
                                <option>Pilih Prodi</option>
                              </select>
                              <span class="input-group-btn">
                                <a class="btn btn-success" type="submit" onclick="goto4()">Lihat Peta</a>
                              
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                     
                    </div>
                  </div>
                </div>
				</form>
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
