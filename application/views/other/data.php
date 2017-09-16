<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="description" content=""> 
        <meta name="author" content=""> 
        <title>Laporan Data Mahasiswa</title>  
<link href="<?php echo base_url();?>asset/img/logo.png" rel="shortcut icon">			
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">	           
	   <!-- Bootstrap core CSS -->         
        <link href="<?php echo base_url(); ?>asset/css/bootstrap.css" rel="stylesheet"> 
        <!-- Custom styles for this template -->         
        <link href="<?php echo base_url(); ?>asset/style.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>asset/js/datum.js"></script>		
<script src="<?php echo base_url();?>asset/dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="<?php echo base_url();?>asset/dist/sweetalert.css">
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
	window.open('peta/'+tahun);
	}
	}
	
	function goto3(){
  var tahun = document.getElementById('tahun').value;
  if (tahun =='Pilih Tahun'){
		alert("Masukkan Piliahan waktu/tahun");
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
		text: "Masukkan tahun, fakultas dan prodi",
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
		text: "Masukkan tahun, fakultas dan prodi",
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
.bg2 {background-color:#FFFFFF;}
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
                <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
                   <?php 
				   if($level == 'Rektor' or $level == 'Admin'){
				   $this->load->view('sub/menuver_rektor');}
				   elseif($level == 'Dekan FIKES' or $level =='Kaprodi FIKES' or $level=="KPS FIKES"){
				   $this->load->view('sub/menuver_FIKES');
				   }elseif($level == 'Dekan FST' or $level =='Kaprodi FST' or $level =="KPS FST"){
				   $this->load->view('sub/menuver_FST');
				   }elseif($level == 'Dekan FISE' or $level =='Kaprodi FISE' or $level =="KPS FISE"){
				   $this->load->view('menuver_FISE');
				   }
					?>
                </div>                 
                <div class="col-xs-12 col-sm-9"> 
                    <p class="pull-right visible-xs"><button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button></p> 
                    <div class="jumbotron">  

<h4 style="text-align:center"><span style="font-size:20px"><strong><span style="font-family:Lucida Sans Unicode,Lucida Grande,sans-serif">Silahkan melakukan pencarian Mahasiswa UNRIYO berdasarkan Provinsi, Fakultas dan Program Studi </span></strong></span></h4>

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
                      <div class="col-md-8">
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
                              <a class="btn btn-warning" type="submit" onclick="goto3()">Lihat Grafik</a>
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
                      <div class="col-md-3"> </div>
                     
                      
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
        <option>FIKES</option>
        <option>FISE</option>
                      </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="control-label">Pilih Prodi</label>
                          <div class="form-group">
                            <div class="input-group">
                             <select class="form-control" name="prodi" id="prodi">
                                <option>Pilih Prodi</option>
                              </select>
                              <span class="input-group-btn">
                                <a class="btn btn-success" type="submit" onclick="goto4()">Lihat Peta</a>
                                <a class="btn btn-warning" type="submit" onclick="goto5()">Lihat Grafik</a>
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







<p>&nbsp;</p>                        
                        <p align="justify"><div style="width: 75%">
						<div class="row"><div class="col-md-8">
						<form role="form">
             
			  
            </form></div>
			
			
						</div>
						
						

                    </div>                     
                  
				
            </div>  
			
        </div> 
</div>        
        <div class="container bg2"> 
            <footer>
                <div class="container pg-empty-placeholder"></div>                 
               <center> <p>&copy; Pemetaan Asal Daerah Mahasiswa | 13220016 - Muhammad Efendi | 2017</p> 
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
