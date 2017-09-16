<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="description" content=""> 
        <meta name="author" content=""> 
        <title>Data Mahasiswa</title> 
		<link href="<?php echo base_url();?>asset/img/logo.png" rel="shortcut icon">
    <link href="<?php echo base_url();?>asset/css/font-awesome.min.css" rel="stylesheet" type="text/css">      
        <!-- Bootstrap core CSS -->         
        <link href="<?php echo base_url(); ?>asset/css/bootstrap.css" rel="stylesheet"> 
		<link href="<?php echo base_url(); ?>asset/css/table2.css" rel="stylesheet"> 
        <!-- Custom styles for this template -->         
        <link href="<?php echo base_url(); ?>asset/style.css" rel="stylesheet"> 
		<script src="<?php echo base_url(); ?>asset/js/datum.js"></script>		
<script src="<?php echo base_url();?>asset/dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="<?php echo base_url();?>asset/dist/sweetalert.css">
  <script src="<?php echo base_url(); ?>asset/js/datum2.js"></script>
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
    <body class="bg" onload="sel_prov1()"> 
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
                <div class="container">
                    <div class="container">
</div>
                </div>                 
                <!--/.col-xs-12.col-sm-9-->                 
                <!--/.sidebar-offcanvas-->                 
            </div>             
        </div>         
        <div class="container bg1"> 
            <footer> 
</footer>             
        </div>
        <div class="container bg1">
</div>
        <div class="container">
            <div class="row row-offcanvas row-offcanvas-right">                  
                <!--/.col-xs-12.col-sm-9-->                 
                <!--/.sidebar-offcanvas-->                 
            </div>
        </div>
        <div class="container bg1">
			<form action="<?php echo site_url('home/cari2'); ?>" method="post" class="navbar-form navbar-right" role="search"> 
                <div class="form-group"> 
                    <select class="form-control" id="fak" name="fak" onchange="pilih(this)">
                        <option>Fakultas</option>
						 <option>FST</option>
        <option>FIKES</option>
        <option>FISE</option>
                      </select>
                </div>                 
                <select class="form-control" name="prodi" id="prodi">
                                <option>Pilih Prodi</option>
                              </select>                 
                <button type="submit" class="btn btn-default">Cari</button>
            </form>
            <form action="<?php echo site_url('home/cari'); ?>" method="post" class="navbar-form navbar-right" role="search"> 
                <div class="form-group"> 
                    <input type="text" class="form-control" placeholder="Search" name="key"> 
                </div>  
                <select id="formInput58" class="form-control" name="col">
				<option>Nama</option>
				<option>Tahun_masuk</option>
                <option>Provinsi</option>
                <option title="Kabupaten">Kota_Kab</option>
                </select>                 
                <button type="submit" class="btn btn-default">Cari</button>
            </form>
			<a href="" class="btn btn-info" data-toggle="modal" data-target="#myModal">Custom Search</a>
			<div class="datagrid col-md-12">
            <table class="table table-bordered"> 
                <thead> 
                    <tr> 
                        <th>No_Pendaftar</th> 
                        <th>Nama</th> 
						<th>Status</th>
						<th>Prodi</th> 
						<th>Fakultas</th> 
                        <th>Kota/Kabupaten</th> 
                        <th>Provinsi</th> 
                        <th>Asal_Sekolah</th> 
						<th>Action</th> 
                    </tr>                     
                </thead>  
<tfoot><tr><td colspan="2"><div id="paging"><?php echo $pagination; ?></div></tr></tfoot>				
                <tbody> 
				<?php foreach($datum as $row){ ?>
                    <tr> 
                        <td><?php echo $row->id_calon; ?></td> 
						 <td><?php echo $row->nama; ?></td> 
                        <td><?php echo $row->status; ?></td> 
						<td><?php echo $row->prodi; ?></td>
                        <td><?php echo $row->fakultas; ?></td> 
						<td><?php echo $row->kota_kab; ?></td> 
                        <td><?php echo $row->provinsi; ?></td> 
                        <td><?php echo $row->sekolah_asal; ?></td> 
						<td><a  class="btn btn-danger" href="<?php echo site_url('home/del_mhs/'.$row->id_calon .''); ?>" title="hapus data"> <i class="fa fa-times" aria-hidden="true"></i></a> </br> <a class="btn btn-warning" href="<?php echo site_url('home/sel_mhs/').$row->id_calon; ?>" >
						<i class="fa fa-pencil-square-o" aria-hidden="true" title="perbarui data"></i></a></br>
					 <a class="btn btn-info" href="<?php echo site_url('home/pro_mhs/').$row->id_calon; ?>" title="lihat data"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                    </tr>  
<?php } ?>					
                </tbody>
            </table>
			
        <div class="container">
            <center><p>&copy; Pemetaan Asal Daerah Mahasiswa | 13220016 - Muhammad Efendi | 2017</p>
        </div>  

<div class="fade modal" id="myModal" role="dialog">
 <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Pencarian Berdasrkan Kabupaten</h4>
      </div>
      <div class="modal-body">
	  <form action="<?php echo site_url("Home/cari3"); ?>" method="post">
        <p><div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="control-label" for="exampleInputEmail1">Program Studi</label>
                      <select class="form-control" type="text" name="prod3">
                        <option>Pilih Prodi</option>
                        <option>Teknik Informatika</option>
                        <option>Teknik Elektro</option>
                        <option>Sistem Informasi</option>
                        <option>Manajemen Informatika</option>
                        <option>Pilih Prodi</option>
                        <option>Fisioterapi</option>
                        <option>Keperawatan</option>
                        <option>NERS</option>
                        <option>D-III Kebidanan</option>
                        <option>Ilmu Gizi</option>
                        <option>Kesehatan Masyarakat</option>
                        <option>Bidan Pendidik</option>
                        <option>Pilih Prodi</option>
                        <option>Akuntansi</option>
                        <option>Hubungan Internasional</option>
                        <option>Sastra Inggris</option>
                        <option>Ilmu Komunikasi</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                             <label class="control-label" for="exampleInputEmail1">Provinsi</label>
                      <select class="form-control" type="text" name="prov3" id="prov3" onchange="sel_kab1()">
                       
                      </select>    
                      </div>
                  </div>
                  <div class=" col-md-3">
				  <div class="form-group">
                             <label class="control-label" for="exampleInputEmail1">Kabupaten</label>
                      <select class="form-control" type="text" name="kab3" id="kab3">
                       
                      </select>    
                      </div>
				  </div>
					  <div class=" col-md-2">
				  <div class="form-group">
				   <label class="control-label" for="exampleInputEmail1">OK</label>
                            <button type="submit" class="btn btn-info">Cari</button>
                      </div>
				  </div>
				  </form>
				  </div>
              </p>
      </div>
     
    </div>

  </div>
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
