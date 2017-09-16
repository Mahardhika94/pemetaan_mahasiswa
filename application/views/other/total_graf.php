<html lang="en"> 
    <head> 
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="description" content=""> 
        <meta name="author" content=""> 
        <title>Pemetaan Daerah Asal Calon Mahasiswa</title>         
        <!-- Bootstrap core CSS -->         
        <link href="<?php echo base_url(); ?>asset/css/bootstrap.css" rel="stylesheet"> 
		<link href="<?php echo base_url();?>asset/img/logo.png" rel="shortcut icon">
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
	</script>
<style>
.bg { background-color:#FFFFFF;}
.bg1 {background-color:#CCCCCC;}
</style>    
        <body class="bg"> 
               
                
        <div class="container bg1"> 
           <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Grafik Calon Mahasiswa Bedasarkan Provinsi</h3>
              </div>
              <div class="panel-body">
                <div class="section">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-11">
                        <h1 class="text-center text-warning"><?php echo $ket; ?></h1>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-11">
                       <div class="row row-offcanvas row-offcanvas-right">
                                
                <div class="col-xs-12 col-sm-12"> 
                   
                    <canvas id="canvas"></canvas>                     
                    <dl> 
                       
                    </dl>                     
                    <div class="row"> 
                                     
                    </div>                     
                    <!--/row-->                     
                </div>                 
                <!--/.col-xs-12.col-sm-9-->                 
                <!--/.sidebar-offcanvas-->                 
            </div>   
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="section">
                          <div class="container">
                            <div class="row">
                              <a type="submit" class="btn btn-success" data-toggle="modal" data-target="#imgModal">Keterangan</a>
                            </div>
                            <div class="row">
                              <div class="col-md-2">
                                
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> 
	  
        </div> 
<div class="modal fade" id="imgModal" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" ><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
            <h4 class="modal-title text-center">Jumlah Persebaran Mahasiswa Universitas Respati Pada Tahun <?php echo $th; ?></h4>
          </div>
          <div class="modal-body text-center">
		
            <div class="datagrid col-md-12">
            <table class="table table-bordered"> 
                <thead> 
                    <tr> 
                        <th>Nomor</th> 
                        <th>Nama Provinsi</th> 
						<th>Jumlah</th>
						<th>Presentasi</th> 
                        
                    </tr>                     
                </thead>  
                <tbody> 
				<tr>
    <td align="right" width="64">01</td>
    <td width="169">Aceh&nbsp;</td>
    <th width="44" scope="col"><?php echo $aceh; ?></th>
    <th width="43" scope="col"><?php echo round($aceh*100/$total) ." %"; ?></th>
  </tr>
                   <tr>
    <td align="right">02</td>
    <td>Bali&nbsp;</td>
    <td><?php echo $bali; ?></td>
    <td><?php echo round($bali*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">03</td>
    <td>Banten&nbsp;</td>
    <td><?php echo $banten; ?></td>
    <td><?php echo round($banten*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">04</td>
    <td>Bengkulu&nbsp;</td>
    <td><?php echo $bengkulu; ?></td>
    <td><?php echo round($bengkulu*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">05</td>
    <td>Gorontalo&nbsp;</td>
    <td><?php echo $gorontalo?></td>
    <td><?php echo round($gorontalo*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">06</td>
    <td>Jakarta&nbsp;</td>
    <td><?php echo $jakarta; ?></td>
    <td><?php echo round($jakarta*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">07</td>
    <td>Jambi&nbsp;</td>
    <td><?php echo $jambi; ?></td>
    <td><?php echo round($jambi*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">08</td>
    <td>Jawa    Barat&nbsp;</td>
    <td><?php echo $jabar; ?></td>
    <td><?php echo round($jabar*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">09</td>
    <td>Jawa    Tengah&nbsp;</td>
    <td><?php echo $jateng; ?></td>
    <td><?php echo round($jateng*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">10</td>
    <td>Jawa    Timur&nbsp;</td>
    <td><?php echo $jatim; ?></td>
    <td><?php echo round($jatim*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">11</td>
    <td>Kalimantan    Barat&nbsp;</td>
    <td><?php echo $kalbar; ?></td>
    <td><?php echo round($kalbar*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">12</td>
    <td>Kalimantan    Selatan&nbsp;</td>
    <td><?php echo $kalsel; ?></td>
    <td><?php echo round($kalsel*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">13</td>
    <td>Kalimantan    Tengah&nbsp;</td>
    <td><?php echo $kalteng; ?></td>
    <td><?php echo round($kalteng*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">14</td>
    <td>Kalimantan    Timur&nbsp;</td>
    <td><?php echo $kaltim; ?></td>
    <td><?php echo round($kaltim*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">15</td>
    <td>Kalimantan    Utara&nbsp;</td>
    <td><?php echo $kalut; ?></td>
    <td><?php echo round($kalut*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">16</td>
    <td>Bangka    Belitung</td>
    <td><?php echo $kep_bangka; ?></td>
    <td><?php echo round($kep_bangka*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">17</td>
    <td>Kepulauan    Riau&nbsp;</td>
    <td><?php echo $kepri; ?></td>
    <td><?php echo round($kepri*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">18</td>
    <td>    Maluku&nbsp;</td>
    <td><?php echo $maluku; ?></td>
    <td><?php echo round($maluku*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">19</td>
    <td>Maluku    Utara&nbsp;</td>
    <td><?php echo $maltara; ?></td>
    <td><?php echo round($maltara*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">20</td>
    <td>Nusa Tenggara    Timur</td>
    <td><?php echo $ntt; ?></td>
    <td><?php echo round($ntt*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right"></td>
    <td>Nusa Tenggara    Barat&nbsp;</td>
    <td><?php echo $ntb; ?></td>
    <td><?php echo round($ntb*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">22</td>
    <td>Papua&nbsp;</td>
    <td><?php echo $papua; ?></td>
    <td><?php echo round($papua*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">23</td>
    <td>Papua    Barat&nbsp;</td>
    <td><?php echo $pabar; ?></td>
    <td><?php echo round($pabar*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">24</td>
    <td>Riau&nbsp;</td>
    <td><?php echo $riau; ?></td>
    <td><?php echo round($riau*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">25</td>
    <td>Sulawesi    Barat&nbsp;</td>
    <td><?php echo $sulbar; ?></td>
    <td><?php echo round($sulbar*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">26</td>
    <td>Sulawesi    Selatan&nbsp;</td>
    <td><?php echo $sulsel; ?></td>
    <td><?php echo round($sulsel*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">27</td>
    <td>Sulawesi    Tengah&nbsp;</td>
    <td><?php echo $sulteh; ?></td>
    <td><?php echo round($sulteh*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">28</td>
    <td>Sulawesi    Tenggara&nbsp;</td>
    <td><?php echo $sulteng; ?></td>
    <td><?php echo round($sulteng*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">29</td>
    <td>Sulawesi    Utara&nbsp;</td>
    <td><?php echo $sulut; ?></td>
    <td><?php echo round($sulut*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">30</td>
    <td>Sumatera    Barat&nbsp;</td>
    <td><?php echo $sumbar; ?></td>
    <td><?php echo round($sumbar*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">31</td>
    <td>Sumatera    Selatan&nbsp;</td>
    <td><?php echo $sumsel; ?></td>
    <td><?php echo round($sumsel*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">32</td>
    <td>Sumatera    Utara&nbsp;</td>
    <td><?php echo $sumut; ?></td>
    <td><?php echo round($sumut*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">33</td>
    <td>Yogyakarta</td>
    <td><?php echo $jogja; ?></td>
    <td><?php echo round($jogja*100/$total) ." %"; ?></td>
  </tr>
  
  <tr>
    <td colspan="2">Total</td>
    <td><?php echo $total; ?></td>
    <td>100%</td>
  </tr> 
					
                </tbody>
            </table>
			</div>
          </div>
          <div class="modal-footer">
            <a class="btn btn-default" data-dismiss="modal">keluar</a>
			
          </div>
		 
        </div>
      </div>
    </div>	        
        <div class="container"> 
            <footer> 
                <center><p>&copy; Pemetaan Asal Daerah calon Mahasiswa | 13220016 - Muhammad Efendi | 2017</p></center> 
            </footer>             
        </div>         
        <!-- Bootstrap core JavaScript
    ================================================== -->         
        <!-- Placed at the end of the document so the pages load faster -->    
 <?php
if($total == 0){
$total = 1; } 
$aceh1=round($aceh*100/$total);
 $bali1=round($bali*100/$total); 
 $banten1=round($banten*100/$total); 
      $bengkulu1=round($bengkulu*100/$total); 
$gorontalo1=round($gorontalo*100/$total); 
$jakarta1=round($jakarta*100/$total); 
$jambi1=round($jambi*100/$total); 
$jabar1=round($jabar*100/$total); 
$jateng1= round($jateng*100/$total); 
$jatim1=round($jatim*100/$total); 
$kalbar1=round($kalbar*100/$total); 
$kalsel1=round($kalsel*100/$total); 
$kalteng1= round($kalteng*100/$total); 
$kaltim1=round($kaltim*100/$total); 
$kalut1=  round($kalut*100/$total); 
$kep_bangka1 =round($kep_bangka*100/$total); 
$kepri1=round($kepri*100/$total); 
$lampung1=round($lampung*100/$total); 
$maluku1 = round($maluku*100/$total); 
$maltara1=round($maltara*100/$total); 
$ntt1= round($ntt*100/$total); 
$ntb1 = round($ntb*100/$total); 
$papua1= round($papua*100/$total); 
$pabar1=round($pabar*100/$total); 
$riau1 =round($riau*100/$total); 
$sulbar1=round($sulbar*100/$total); 
$sulsel1=round($sulsel*100/$total); 
$sulteh1=round($sulteh*100/$total); 
$sulteng1=round($sulteng*100/$total); 
$sulut1=round($sulut*100/$total); 
$sumbar1=round($sumbar*100/$total); 
$sumsel1=round($sumsel*100/$total); 
$sumut1=round($sumut*100/$total); 
$jogja1=round($jogja*100/$total); 
 // $total; 
 ?>
		
<script src="<?php echo base_url(); ?>asset/js/jquery.min.js"></script>         
        <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>         
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->         
        <script src="<?php echo base_url(); ?>asset/js/ie10-viewport-bug-workaround.js"></script>               
        <script>
        var chartData = {
            
			labels: [<?php echo $th; ?>],
            datasets: [ {
                type: 'bar',
                label: 'Aceh',
                backgroundColor: window.chartColors.red,
                data: [
                   <?php echo $aceh1; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'red',
                borderWidth: 2
            },
{
                type: 'bar',
                label: 'Bali',
                backgroundColor: window.chartColors.orange,
                data: [
                   <?php echo $bali1; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'orange',
                borderWidth: 2
            },			
{
                type: 'bar',
                label: 'Banten',
                backgroundColor: window.chartColors.yellow,
                data: [
                   <?php echo $banten1; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'yellow',
                borderWidth: 2
            },	
{
                type: 'bar',
                label: 'Bengkulu',
                backgroundColor: window.chartColors.green,
                data: [
                   <?php echo $bengkulu1; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'green',
                borderWidth: 2
            },	
{
                type: 'bar',
                label: 'Gorontalo',
                backgroundColor: window.chartColors.blue,
                data: [
                   <?php echo $gorontalo1; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'blue',
                borderWidth: 2
            },	
{
                type: 'bar',
                label: 'Jakarta',
                backgroundColor: window.chartColors.purple,
                data: [
                   <?php echo $jakarta1; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'purple',
                borderWidth: 2
            },	
{
                type: 'bar',
                label: 'Jambi',
                backgroundColor: window.chartColors.grey,
                data: [
                   <?php echo $jambi1; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'grey',
                borderWidth: 2
            },	
{
                type: 'bar',
                label: 'J.Barat',
                backgroundColor: window.chartColors.red,
                data: [
                    <?php echo $jabar1; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'orange',
                borderWidth: 2
            },	
{
                type: 'bar',
                label: 'J.Tengah',
                backgroundColor: window.chartColors.orange,
                data: [
                   <?php echo $jateng1; ?> , 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'yellow',
                borderWidth: 2
            },	
{
                type: 'bar',
                label: 'J.Timur',
                backgroundColor: window.chartColors.yellow,
                data: [
                    <?php echo $jatim1; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'green',
                borderWidth: 2
            },	
{
                type: 'bar',
                label: 'Kalbar',
                backgroundColor: window.chartColors.green,
                data: [
                   <?php echo $kalbar1; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'blue',
                borderWidth: 2
            },	
{
                type: 'bar',
                label: 'Kalteng',
                backgroundColor: window.chartColors.blue,
                data: [
                   <?php echo $kalteng1; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'purple',
                borderWidth: 2
            },	
{
                type: 'bar',
                label: 'Kaltim',
                backgroundColor: window.chartColors.purple,
                data: [
                   <?php echo $kaltim1; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'grey',
                borderWidth: 2
            },	
{
                type: 'bar',
                label: 'Kalut',
                backgroundColor: window.chartColors.red,
                data: [
                   <?php echo $kalut1; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'yellow',
                borderWidth: 2
            },	
			{
                type: 'bar',
                label: 'Kalsel',
                backgroundColor: window.chartColors.orange,
                data: [
                   <?php echo $kalsel1; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'green',
                borderWidth: 2
            },	
{
                type: 'bar',
                label: 'K.Bangka',
                backgroundColor: window.chartColors.yellow,
                data: [
                    <?php echo $kep_bangka1; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'blue',
                borderWidth: 2
            },	
{
                type: 'bar',
                label: 'K.Riau',
                backgroundColor: window.chartColors.green,
                data: [
                   <?php echo $kepri1; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'purple',
                borderWidth: 2
            },	
{
                type: 'bar',
                label: 'Maluku',
                backgroundColor: window.chartColors.blue,
                data: [
                   <?php echo $maluku1; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'grey',
                borderWidth: 2
            },	
{
                type: 'bar',
                label: 'Maluku Utara',
                backgroundColor: window.chartColors.red,
                data: [
                    <?php echo $maltara1; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'green',
                borderWidth: 2
            },	
{
                type: 'bar',
                label: 'Ntt',
                backgroundColor: window.chartColors.orange,
                data: [
                    <?php echo $ntt1; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'blue',
                borderWidth: 2
            },	
{
                type: 'bar',
                label: 'Ntb',
                backgroundColor: window.chartColors.yellow,
                data: [
                   <?php echo $ntb1; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'purple',
                borderWidth: 2
            },	
{
                type: 'bar',
                label: 'Papua',
                backgroundColor: window.chartColors.green,
                data: [
                   <?php echo $papua1; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'grey',
                borderWidth: 2
            },	
{
                type: 'bar',
                label: 'Papua Barat',
                backgroundColor: window.chartColors.red,
                data: [
                  <?php echo $pabar1; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'blue',
                borderWidth: 2
            },	
{
                type: 'bar',
                label: 'Riau',
                backgroundColor: window.chartColors.orange,
                data: [
                   <?php echo $riau1; ?> , 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'purple',
                borderWidth: 2
            },	
{
                type: 'bar',
                label: 'Sulbar',
                backgroundColor: window.chartColors.yellow,
                data: [
                   <?php echo $sulbar1; ?> , 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'grey',
                borderWidth: 2
            },	
{
                type: 'bar',
                label: 'Sulsel',
                backgroundColor: window.chartColors.red,
                data: [
                   <?php echo $sulsel1; ?> , 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'purple',
                borderWidth: 2
            },	
{
                type: 'bar',
                label: 'Sultengah',
                backgroundColor: window.chartColors.orange,
                data: [
                   <?php echo $sulteh1; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'grey',
                borderWidth: 2
            },	
{
                type: 'bar',
                label: 'Sultenggara',
                backgroundColor: window.chartColors.grey,
                data: [
                   <?php echo $sulteng1; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'purple',
                borderWidth: 2
            },	
{
                type: 'bar',
                label: 'Sulut',
                backgroundColor: window.chartColors.purple,
                data: [
                   <?php echo $sulut1; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'blue',
                borderWidth: 2
            },	
{
                type: 'bar',
                label: 'Sumbar',
                backgroundColor: window.chartColors.blue,
                data: [
                   <?php echo $sumbar1; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'green',
                borderWidth: 2
            },	
{
                type: 'bar',
                label: 'Sumsel',
                backgroundColor: window.chartColors.green,
                data: [
                   <?php echo $sumsel1; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'yellow',
                borderWidth: 2
            },	
{
                type: 'bar',
                label: 'Sumut',
                backgroundColor: window.chartColors.yellow,
                data: [
                   <?php echo $sumut1; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'orange',
                borderWidth: 2
            },				
			{
                type: 'bar',
                label: 'Jogja',
				labelString: '1',
                backgroundColor: window.chartColors.orange,
				display: true,
                            labelString: '1',
                data: [
                    <?php echo $jogja1; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(),
					
                ],
				borderColor: 'red',
                borderWidth: 2
            },
			
			
			]

        };
		// Define a plugin to provide data labels
        Chart.plugins.register({
            afterDatasetsDraw: function(chartInstance, easing) {
                // To only draw at the end of animation, check for easing === 1
                var ctx = chartInstance.chart.ctx;

                chartInstance.data.datasets.forEach(function (dataset, i) {
                    var meta = chartInstance.getDatasetMeta(i);
                    if (!meta.hidden) {
                        meta.data.forEach(function(element, index) {
                            // Draw the text in black, with the specified font
                            ctx.fillStyle = 'rgb(0, 0, 0)';

                            var fontSize = 11;
                            var fontStyle = 'normal';
                            var fontFamily = 'Helvetica Neue';
                            ctx.font = Chart.helpers.fontString(fontSize, fontStyle, fontFamily);

                            // Just naively convert to string for now
                            var dataString = dataset.data[index].toString();

                            // Make sure alignment settings are correct
                            ctx.textAlign = 'center';
                            ctx.textBaseline = 'middle';

                            var padding = 5;
                            var position = element.tooltipPosition();
                            ctx.fillText(dataString, position.x, position.y - (fontSize / 2) - padding);
                        });
                    }
                });
            }
        });
        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myMixedChart = new Chart(ctx, {
                type: 'bar',
                data: chartData,
                options: {
                    responsive: true,
                    title: {
                        display: true,
                        text: 'Data Calon Mahasiswa UNRIYO',
						
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: true
                    }
					
                }
            });
        };

        document.getElementById('randomizeData').addEventListener('click', function() {
            chartData.datasets.forEach(function(dataset) {
                dataset.data = dataset.data.map(function() {
                    return randomScalingFactor();
                });
            });
            window.myMixedChart.update();
        });
    </script>         
    </body>     
</html>
