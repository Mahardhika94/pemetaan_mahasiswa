<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="ilmu-detil.blogspot.com">
	<title>Persebaran Mahasiswa UNRIYO<</title>
	<link href="<?php echo base_url();?>asset/img/logo.png" rel="shortcut icon">
	<link href="<?php echo base_url(); ?>asset/css/table2.css" rel="stylesheet"> 
	<!-- Bagian css -->
	   <script type="text/javascript" src="<?php echo base_url()?>asset/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>asset/js/jquery23.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>asset/js/jquery.popup.js"></script>
    <link rel="?SHORTCUT ICON?" href="?img/logo.png?">
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/jquery.popup.css" type="text/css">
    <link href="<?php echo base_url()?>asset/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url()?>asset/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url()?>asset/css/bootstrap.mi.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/pndk/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/pndk/assets/css/ilmudetil.css">
	<script src="<?php echo base_url(); ?>asset/pndk/assets/js/jquery-1.10.1.min.js"></script>
<table class="table table-bordered"> 
                <thead> 
                    <tr> 
                        <th>Nomor</th> 
                        <th>Nama Provinsi</th> 
						<th>Kabupaten</th> 
						<th>Jumlah</th>
						<th>Presentasi</th> 
                        
                    </tr>                     
                </thead>  
                <tbody> 
 <?php 
 $num=0;
 foreach($data as $row) { 
 $num =$num+1;
 ?>
  <tr>
    <td align="right"><?php echo $num; ?></td>
    <td><?php echo $row->provinsi; ?></td>
    <td><?php echo $row->kota_kab; ?></td>
    <td><?php echo $row->jml;
	$jml=$row->jml;
	?></td>
	<td><?php echo round($jml*100/$total).' %'; ?></td>
  </tr>
  <?php } ?>
					
                </tbody>
            </table>