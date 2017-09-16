<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="description" content=""> 
        <meta name="author" content=""> 
		<link href="<?php echo base_url();?>asset/img/logo.png" rel="shortcut icon">	
        <title>Profil Calon Mahasiswa</title>  
    <link href="<?php echo base_url();?>asset/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        
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
.bg { background-color:#FFFFFF;}
.bg1 {background-color:#CCCCCC;}
</style>
<body>
 <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-justify">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">
                <div class="panel panel-info">
                  <div class="panel-heading">
                    <h3 class="panel-title">Profil Calon Mahasiswa</h3>
                  </div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-3 col-lg-3 " align="center">
                        <img alt="User Pic" src="<?php echo base_url(); ?>asset/img/avatar.png"
                        class="img-responsive img-rounded">
                      </div>
                      <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                      <div class=" col-md-9 col-lg-9 ">
                        <table class="table table-user-information">
                          <tbody>
                            <tr>
                              <td>Nomor Pendaftaran:</td>
                              <td><?php echo $id_calon; ?></td>
                            </tr>
                            <tr>
                              <td>Nama Mahasiswa</td>
                              <td><?php echo $nama; ?></td>
                            </tr>
                            <tr>
                              <td>Tahun Masuk</td>
                              <td><?php echo $tahun_masuk; ?></td>
                            </tr>
                            <tr></tr>
                            <tr>
                              <td>Status Mahasiswa</td>
                              <td><?php echo $status; ?></td>
                            </tr>
                            <tr>
                              <td>Fakultas</td>
                              <td><?php echo $fakultas; ?></td>
                            </tr>
                            <tr>
                              <td>Prodi</td>
                              <td><?php echo $prodi; ?></td>
                            </tr>
							<tr>
                              <td>Provinsi</td>
                              <td><?php echo $provinsi; ?></td>
                            </tr>
                            <tr>
                              <td>Kabupaten</td>
                              <td><?php echo $kota_kab; ?></td>
                            </tr>
							<tr>
                              <td>Sekolah Asal</td>
                              <td><?php echo $sekolah_asal; ?>"</td>
                            </tr>
                          </tbody>
						  <tr>
                              <td>Alamat Sekolah</td>
                              <td><?php echo $alamat_sekolah; ?></td>
                            </tr>
						<tr>
                              <td>Kepala Sekolah</td>
                              <td><?php echo $kepala_sekolah; ?></td>
                            </tr>
							<tr>
                              <td>Registrasi</td>
                              <td><?php echo $regis; ?></td>
                            </tr>

                        </table>
                        <a href="<?php echo site_url('home/del_mhs/'.$id_calon .''); ?>" class="btn btn-danger"><i class="fa fa-times-circle"></i> Hapus Data </a>
                        <a href="<?php echo site_url('home/sel_mhs/'.$id_calon .''); ?>" class="btn btn-primary"><i class="fa fa-pencil-square-o" ></i> Perbarui Data </a>
                      </div>
                    </div>
                  </div>
                  
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</body>
</html>