<html lang="en"> 
    <head> 
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="description" content=""> 
        <meta name="author" content=""> 
        <title>Input Data Mahasiswa</title>
<link href="<?php echo base_url();?>asset/img/logo.png" rel="shortcut icon">		
 <link href="<?php echo base_url();?>asset/css/font-awesome.min.css" rel="stylesheet" type="text/css">		
        <!-- Bootstrap core CSS -->         
        <link href="<?php echo base_url(); ?>asset/css/bootstrap.css" rel="stylesheet"> 
        <!-- Custom styles for this template -->         
        <link href="<?php echo base_url(); ?>asset/style.css" rel="stylesheet"> 
         <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>asset/js/datum.js"></script>	
    </head>
	<script type="text/javascript">
      $('.date-own').datepicker({
         minViewMode: 2,
         format: 'yyyy'
       });
  </script>
<style>
.bg { background-color:#FFFFFF;}
.bg1 {background-color:#CCCCCC;}
</style>   
    <body onload="sel_prov()"> 
               
               
        <div class="container bg1">
           <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-11">
		  <form id="form1" name="form1" action="<?php echo site_url('home/up_mhs/'.$id_calon .''); ?>" method="post">
             <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Update/Perbarui Data Mahasiswa</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-12">
                    <h1 class="text-center">Perbaharui Data Mahasiswa</h1>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Nomor Pendaftaran</label>
					  <div class="input-group">
                      <input class="form-control" name="nid" id="nid" type="text" value="<?php echo $id_calon; ?>"placeholder="Input Nomor Mahasiswa">
					  <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
					  </div>
                    </div>
                  </div>
				   <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Tahun Masuk</label>
                       <div class="input-group">
					  <input type="text" class="form-control date-own" name="tahun" value="<?php echo $tahun_masuk; ?>" id="tahun" placeholder="yyyy">
                        
                     <script type="text/javascript">
      $('.date-own').datepicker({
         minViewMode: 2,
         format: 'yyyy'
       });
  </script>
					  
					  <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Nama Mahasiswa</label>
                       <div class="input-group">
					  <input class="form-control" type="text" id="nama" name="nama" value="<?php echo $nama; ?>" placeholder="Input Nama Mahasiswa" >
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
					  </div>
					</div>
                  </div>
				  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Status</label>
                       <div class="input-group">
					  <select class="form-control"name="stat" label="Pilih Fakultas">
                        <option><?php echo $status; ?></option>
						<option>Maba</option>
                        <option>Alih Jenjang</option>
						 <option>Transfer</option>
                      </select>
					  
					  <span class="input-group-addon"><i class="fa fa-toggle-down"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
				
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Fakultas</label>
                       <div class="input-group">
					  <select class="form-control" id="fak" name="fak" onchange="pilih(this)">
                        <option><?php echo $fakultas; ?></option>
						 <option>FST</option>
        <option>Fikes</option>
        <option>Fise</option>
                      </select>
					  
					  <span class="input-group-addon"><i class="fa fa-toggle-down"></i></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Program Studi</label>
					  <div class="input-group">
                      <select class="form-control" name="prodi" id="prodi">
					   <option><?php echo $prodi; ?></option>
           
                      </select>
					 <span class="input-group-addon"><i class="fa fa-toggle-down"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Sekolah Asal</label>
                      <div class="input-group">
					  <input class="form-control" type="text" id="as" name="as" value="<?php echo $sekolah_asal; ?>" placeholder="Sekolah Asal">
                     <span class="input-group-addon"><i class="fa fa-university"></i></span>
                      </div>
					</div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Pimpinan Sekolah</label>
                      <div class="input-group">
					  <input class="form-control" type="text" name="pimpinan" value="<?php echo $kepala_sekolah; ?>" id="pimpinan" placeholder="Pimpinan Sekolah">
                     <span class="input-group-addon"><i class="fa fa-user-circle-o"></i></span>
                      </div>
					</div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Alamat Sekolah</label>
                       <div class="input-group">
					  <input class="form-control" type="text" name="alamat" id="alamat" value="<?php echo $alamat_sekolah; ?>" placeholder="alamat">
                    <span class="input-group-addon"><i class="fa fa-address-book-o"></i></span>
                      </div>
					</div>
                  </div>
				  <div class="col-md-6">
                     <div class="form-group">
                      <label class="control-label">Provinsi</label>
					  <div class="input-group">
                      <select class="form-control" name="prov" id="prov" onchange="sel_kab(this)" >
					   <option><?php echo $provinsi; ?></option>
                        
                      </select>
					 <span class="input-group-addon"><i class="fa fa-toggle-down"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Kota/Kabupaten</label>
					  <div class="input-group">
                      <select class="form-control"  name="kab" id="kab" >
					   <option><?php echo $kota_kab; ?></option>
                        
                      </select>
					 <span class="input-group-addon"><i class="fa fa-toggle-down"></i></span>
                      </div>
                    </div>
                  </div>
				  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Registrasi</label>
					  <div class="input-group">
                      <select class="form-control"  name="regis" id="kab" >
					   <option><?php echo $regis; ?></option>
                        <option>Yes</option>
                        <option>No</option>
                      </select>
					 <span class="input-group-addon"><i class="fa fa-toggle-down"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-4 text-center">
                    <input type="submit" class="btn btn-info btn-succes" name="simpan" value="Simpan">
					<a href="<?php echo site_url('home/mhs'); ?>" class=" btn btn-danger">Kembali</a>
                  </div>
                  <div class="col-md-4">
				  
				  </div>
                </div>
              </div>
            </div>
			</form>
          </div>
        </div>
      </div>
    </div
            
                  
        <!-- Bootstrap core JavaScript
    ================================================== -->         
        <!-- Placed at the end of the document so the pages load faster -->         
<script src="<?php echo base_url(); ?>asset/js/jquery.min.js"></script>         
        <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>         
                     
            
    </body>     
</html>
