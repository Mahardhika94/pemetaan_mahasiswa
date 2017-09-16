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
        <!-- Bootstrap core CSS -->         
        <link href="<?php echo base_url(); ?>asset/css/bootstrap.css" rel="stylesheet"> 
        <!-- Custom styles for this template -->   
 <script src="<?php echo base_url(); ?>asset/cart/dist/Chart.bundle.js"></script>
        <script src="<?php echo base_url(); ?>asset/cart/utils.js"></script>		
        <link href="<?php echo base_url(); ?>asset/style.css" rel="stylesheet"> 
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->         
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->         
    </head>
	<script type="text/javascript">
		function gogo(){
		var tahun=document.getElementById('tahun').value;
	if(tahun =='Pilih Tahun'){
	alert("Masukkan Piliahn waktu/tahun");}
	else{
	window.open(tahun);
	}
		}
		
		function cetak(){
		var tahun=document.getElementById('th').value;
	if(tahun =='Pilih Tahun'){
	alert("Masukkan Pilihan waktu/tahun");}
	else if(tahun == ''){
	alert('tahun belum dimasukan');
	}else if(tahun =='0'){
	alert('tahun belum dimasukan');
	}
	else{
	document.getElementById("form1").submit();
	}
		}
	</script>	
   <style>
.bg { background-color:#FFFFFF;}
.bg1 {background-color:#CCCCCC;}
.cg{text-align:center; background-color:#0099CC; font-weight:bold;font-size:19px;}
.bl{background-color:#FFFFFF; color:#000000;}
.bg8{font-weight:bold; font-size:19px; background-color:#66FF66;}

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
                <div class="container">
                    <div class="container">
</div>
                </div>                 
                <!--/.col-xs-12.col-sm-9-->                 
                <!--/.sidebar-offcanvas-->                 
            </div>             
        </div>         
        <div class="container"> 
            <footer> 
</footer>             
        </div>
        
        
        <div class="container bg1">
            
           
			
            <table class="table table-bordered"> 
                <thead class="cg" border="0"> 
                   <tr>
    <th width="108" rowspan="2" scope="col" class="cg">Program Studi</th>
    <th colspan="2" scope="col" class="cg">Tahun <?Php if($th =='0' or $th ==''){echo '';} else {echo $th;} ?></th>
    <th width="62" rowspan="2" scope="col" class="cg">Persentase %</th>
  </tr>
  <tr>
    <td width="122"><div align="center">Pendaftar</div></td>
    <td width="117"><div align="center">Registarsi</div></td>
  </tr>
                 
                </thead>                 
                <tbody class="bl"> 
				<tr>
    <td>D3 FISIOTERAPI</td>
    <td><?php $fisio= $fisio_nr + $fisio_yr; 
		echo $fisio;
	?></td>
    <td><?php echo $fisio_yr; ?></td>
    <td><?php echo round($fisio *100/$total) .' %'; ?></td>
  </tr>
                    <tr>
    <td>S1-KESEHATAN MASYARAKAT</td>
    <td><?php $kesmas= $kesmas_nr + $kesmas_yr; 
		echo $kesmas;
	?></td>
    <td><?php echo $kesmas_yr; ?></td>
    <td><?php echo round($kesmas *100/$total) .' %'; ?></td>
  </tr>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;S1-KESMAS(TRANSFER)</td>
    <td><?php $kesmas_tran1= $kesmas_tran; 
		echo $kesmas_tran1;
	?></td>
    <td><?php echo $kesmas_tran; ?></td>
    <td><?php echo round($kesmas_tran * 100 / $total) .' %'; ?></td>
  </tr>
  <tr>
    <td>S1- ILMU GIZI </td>
    <td><?php $gizi = $gizi_nr + $gizi_yr; 
		echo $gizi;
	?></td>
    <td><?php echo $gizi_yr; ?></td>
    <td><?php echo round($gizi * 100/$total) .' %'; ?></td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp; S1-GIZI (TRANSFER) </td>
    <td><?php $gizi_tran1= $gizi_tran; 
		echo $gizi_tran1;
	?></td>
    <td><?php echo $gizi_tran; ?></td>
    <td><?php echo round($gizi_tran * 100/$total) .' %'; ?></td>
  </tr>
  <tr>
    <td>S1-KEPERRAWATAN</td>
    <td><?php $perawat= $perawat_nr + $perawat_yr; 
		echo $perawat;
	?></td>
    <td><?php echo $perawat_yr; ?></td>
    <td><?php echo round($perawat * 100 / $total) .' %'; ?></td>
  </tr>
  <tr>
    <td>PROGRAM PROFESI NERS </td>
    <td><?php $ners = $ners_nr + $ners_yr; 
		echo $ners;
	?></td>
    <td><?php echo $ners_yr; ?></td>
    <td><?php echo round($ners *100/$total) .' %'; ?></td>
  </tr>
  <tr>
    <td>D-IV BIDAN PENDIDIK </td>
    <td><?php $bd4 = $bd4_nr + $bd4_yr; 
		echo $bd4;
	?></td>
    <td><?php echo $bd4_yr; ?></td>
    <td><?php echo round($bd4 *100/$total) .' %'; ?></td>
  </tr>
  <tr>
    <td>D-IV BIDAN PENDIDIK(TRANFERS) </td>
    <td><?php $bd4_tran1 = $bd4_tran; 
		echo $bd4_tran;
	?></td>
    <td><?php echo $bd4_tran; ?></td>
    <td><?php echo round($bd4_tran * 100/$total) .' %'; ?></td>
  </tr>
  <tr>
    <td>D-III KEBIDANAN </td>
    <td><?php $bd3 = $bd3_nr + $bd3_yr; 
		echo $bd3;
	?></td>
    <td><?php echo $bd3_yr; ?></td>
    <td><?php echo round($bd3 * 100 /$total) .' %'; ?></td>
  </tr>
  <tr class="bg8">
    <td>TOTAL FIKES</td>
    <td> <?php $fikes_pend = $bd3 + $bd4_tran1 +  $bd4 + $ners + $perawat + $gizi_tran1 + $gizi + $kesmas_tran1 + $kesmas;
		echo $fikes_pend;
	?> </td>
    <td><?php $fikes2 = $bd3_yr + $bd4_tran + $bd4_tran + $ners_yr + $perawat_yr + $gizi_tran + $gizi_yr + $kesmas_tran + $kesmas_yr; echo $fikes2; ?></td>
    <td><?php echo round($fikes_pend * 100 / $total) .' %'; ?></td>
  </tr>
  <tr>
    <td>S-1 T.ELEKTRO </td>
    <td><?php $te= $te_yr + $te_nr; 
				echo $te?></td>
    <td><?php echo $te_yr; ?></td>
    <td><?php echo round($te * 100 /$total) .' %'; ?></td>
  </tr>
  <tr>
    <td>S-1 T.INFORMATIKA </td>
    <td><?php $ti= $ti_nr + $ti_yr; 
		echo $ti;
	?></td>
    <td><?php echo $ti_yr; ?></td>
    <td><?php echo round($ti*100/$total ).' %'; ?></td>
  </tr>
  <tr>
    <td>S-1 SISTEM INFORMASI </td>
    <td><?php $si= $si_yr + $si_nr;
			echo $si;
	 ?></td>
    <td><?php echo $si_yr; ?></td>
    <td><?php echo round($si*100/$total) .' %'; ?></td>
  </tr>
  <tr>
    <td>D-III MANAJEMEN INFORMATIKA </td>
    <td><?php $mi= $mi_yr + $mi_nr;
			echo $mi;
	 ?></td>
    <td><?php echo $mi_yr; ?></td>
    <td><?php echo round($mi*100/$total) .' %'; ?></td>
  </tr>
  <tr class="bg8">
    <td >TOTAL FST</td>
    <td><?php $fst = $ti + $te + $si + $mi; echo $fst;?></td>
    <td><?php $fst2 = $si_yr + $ti_yr + $mi_yr + $te_yr; echo $fst2; ?></td>
    <td><?php echo round($fst * 100 / $total) .' %';?> </td>
  </tr>
  <tr>
    <td>S-1 AKUNTANSI </td>
    <td><?php $akutansi= $akuntansi_nr + $akuntansi_yr; 
			echo $akutansi;
	?></td>
    <td><?php echo $akuntansi_yr; ?></td>
    <td><?php echo round($akutansi*100/$total) .' %'; ?></td>
  </tr>
  <tr>
    <td>S-1 HUB.INTERNASIONAL</td>
    <td><?php $hi = $hi_yr+$hi_nr;
			echo $hi;
	 ?></td>
    <td><?php echo $hi_yr; ?></td>
    <td><?php echo round($hi * 100/$total) .' %'; ?></td>
  </tr>
  <tr>
    <td>S-1 KOMUNIKASI </td>
    <td><?php $ilkom = $ilkom_nr + $ilkom_yr;
			echo $ilkom;
	 ?></td>
    <td><?php echo $ilkom_yr; ?></td>
    <td><?php echo round($ilkom * 100 / $total) .' %'; ?></td>
  </tr>
  <tr>
    <td>S-1 SASTRA INGGRIS </td>
    <td><?php $sig = $sig_yr + $sig_nr;
		echo $sig;
	 ?></td>
    <td><?php echo $sig_yr; ?></td>
    <td><?php echo round($sig * 100 / $total) .' %'; ?></td>
  </tr>
  <tr class="bg8">
    <td >TOTAL FISE</td>
    <td><?php $fise = $akutansi + $hi + $ilkom + $sig; echo $fise;?> </td>
    <td><?php  $fise2 =$ilkom_yr + $akuntansi_yr + $hi_yr + $sig_yr; echo $fise2; ?> </td>
    <td><?php echo round($fise * 100 / $total) .' %';?> </td>
  </tr>
  <tr>
    <td>TOTAL</td>
    <td><?php echo $fise + $fst + $fikes_pend; ?></td>
    <td><?php echo $fise2 + $fikes2 + $fst2; ?></td>
    <td>100 %</td>
  </tr>         
                </tbody>
            </table>
             <div class="row">
          <div class="col-md-8"></div>
		  <div class="col-md-1">
		  <input type="hidden" id="th" name="th" value="<?php echo $th; ?>">
		 <form action="<?php echo site_url('home/cetak_lapor/'.$th); ?>" method="post" id="form1" name="form1">
		  <a onclick="cetak()" class="btn btn-success" ><i class="fa fa-print" aria-hidden="true"></i> Print</a>
		  </form>
		  </div>
          <div class="col-md-3">
            <form action="<?php echo site_url('home/laporan'); ?>" method="post" role="form">
                                  <div class="form-group">
                                    <div class="input-group">
									
                                      <select class="form-control" name="key"> 
                                     
										<?php foreach($tahun as $row){ ?>
										<option><?php echo $row->tahun_masuk; ?></option>
										<?php } ?>
                                      </select>
                                      <span class="input-group-btn">
                                         
										 <button type="submit" class="btn btn-success">Go Laporan</button>
                                      </span>
									 
                                    </div>
                                  </div>
                                </form>
          </div>
          
        </div>
        </div>
		<div class="row"> <div class="col-md-12"></div><div class="col-md-12"></div> <div class="col-md-12"></div></div>
        <div class="container bg1">
            <center><p>&copy; Pemetaan Asal Daerah Mahasiswa | 13220016 - Muhammad Efendi | 2017</p>
        </div>         
        <!-- Bootstrap core JavaScript
    ================================================== -->         
        <!-- Placed at the end of the document so the pages load faster -->         
        <script src="assets/js/jquery.min.js"></script>         
        <script src="bootstrap/js/bootstrap.min.js"></script>         
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->         
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>         
        
    </body>     
</html>
