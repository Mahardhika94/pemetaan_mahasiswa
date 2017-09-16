
<!DOCTYPE html>
<html lang="en">
<head>
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
       
        
<script src="<?php echo base_url(); ?>asset/js/jquery.min.js"></script>         
        <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>         
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->         
        <script src="<?php echo base_url(); ?>asset/js/ie10-viewport-bug-workaround.js"></script>   
		<style>
iframe {
  border-top: #c00 1px dotted;
  border-right: #c00 2px dotted;
  border-left: #c00 2px dotted;
  border-bottom: #c00 4px dotted;
  
  margin-top: 20px;
  margin-bottom: 30px;

  -moz-border-radius: 12px;
  -webkit-border-radius: 12px;
  border-radius: 12px;

  -moz-box-shadow: 4px 4px 14px #000;
  -webkit-box-shadow: 4px 4px 14px #000;
  box-shadow: 4px 4px 14px #000;


}
</style>		
	<style>
	#container {
		height: 600px; 
		min-width: 700px; 
		max-width: 1366px; 
		margin: 0 auto; 
	}
	</style>

	<script>
	<?php if($total == 0){
	$total = 1;
	} ?>
	var aceh=<?php echo $aceh; ?>;
 var bali=<?php echo $bali; ?>;
 var banten=<?php echo $banten; ?>;
 var bengkulu=<?php echo $bengkulu; ?>; 
var gorontalo=<?php echo $gorontalo; ?>; 
var jakarta=<?php echo $jakarta; ?>; 
var jambi=<?php echo $jambi; ?>; 
var jabar=<?php echo $jabar; ?>; 
var jateng= <?php echo $jabar; ?>; 
var jatim=<?php echo $jatim; ?>;
var kalbar=<?php echo $kalbar; ?>;
var kalsel=<?php echo $kalsel; ?>; 
var kalteng= <?php echo $kalteng; ?>; 
var kaltim=<?php echo $kaltim; ?>;
var kalut=  <?php echo $kalut; ?>; 
var kep_bangka =<?php echo $kep_bangka; ?>; 
var kepri=<?php echo $kepri; ?>; 
var lampung=<?php echo $lampung; ?>; 
var maluku = <?php echo $maluku; ?>; 
var maltara=<?php echo $maltara; ?>; 
var ntt= <?php echo $ntt; ?>;  
var ntb = <?php echo $ntb; ?>; 
var papua= <?php echo $papua; ?>;  
var pabar=<?php echo $pabar; ?>;  
var riau =<?php echo $riau; ?>;  
var sulbar=<?php echo $sulbar; ?>; 
var sulsel=<?php echo $sulsel; ?>; 
var sulteh=<?php echo $sulteh; ?>;  
var sulteng=<?php echo $sulteng; ?>; 
var sulut=<?php echo $sulut; ?>; 
var sumbar=<?php echo $sumbar; ?>; 
var sumsel=<?php echo $sumsel; ?>;  
var sumut= <?php echo $sumut; ?>; 
var jogja=<?php echo $jogja; ?>; 
	
	$(function() {  
	
    var data = [
        {
            "hc-key": "id-3700",
            "value": 0
			
        },
        {
            // Aceh
			"hc-key": "id-ac",
			"color": "#008000",
            "value": <?php echo $aceh; ?>,
			
        },
		{
            // Sumatera Utara
			"hc-key": "id-su",
			"color": "#FFE4E1",
            "value": <?php echo $sumut; ?>,
			
        },
		{
            // Sumatera Barat
			"hc-key": "id-sb",
			"color": "#48D1CC",
            "value": <?php echo $sumbar; ?>
        },
		{
            // Riau
			"hc-key": "id-ri",
			"color": "#FAFAD2",
            "value": <?php echo $riau; ?>
        },
		{
            // Kepulauan Riau
			"hc-key": "id-kr",
			"color": "#9400D3",
			"name":"88",
            "value": <?php echo $kepri; ?>
        },
		{
            // Jambi
			"hc-key": "id-ja",
			"color": "#ADFF2F",
            "value": <?php echo $jambi; ?>
        },
		{
            // Bengkulu
			"hc-key": "id-be",
			"color": "#DAA520",
            "value": <?php echo $bengkulu; ?>
        },
		{
            // Sumatera Selatan
			"hc-key": "id-sl",
			"color": "#228B22",
            "value": <?php echo $sumsel; ?>
        },
		{
            // Bangka Belitung
			"hc-key": "id-bb",
			"color": "#ADFF2F",
            "value": <?php echo $kep_bangka; ?>
        },
		{
            // Lampung
			"hc-key": "id-1024",
			"color": "#FFD700",
            "value": <?php echo $lampung; ?>
        },
		{
            // Banten
			"hc-key": "id-bt",
			"color": "#DAA520",
            "value": <?php echo $banten; ?>
        },
		{
            // Jakarta
			"hc-key": "id-jk",
			"color": "#ADE8E6",
            "value": <?php echo $jakarta; ?>
        },
		{
            // Jawa Barat
			"hc-key": "id-jr",
			"color": "#F0FFFF",
            "value": <?php echo $jabar; ?>
        },
		{
            // Jawa Tengah
			"hc-key": "id-jt",
			"color": "#B22222",
            "value": <?php echo $jateng; ?>
        },
		{
            // Jawa Timur
			"hc-key": "id-ji",
			"color": "#0000FF",
            "value": <?php echo $jatim; ?>
        },
		{
            // Yogyakarta
			"hc-key": "id-yo",
			"color": "#FF8C00",
            "value": <?php echo $jogja; ?>
        },
		{
            // Bali
			"hc-key": "id-ba",
			"color": "#FF1000",
            "value": <?php echo $bali; ?>
        },
		{
            // Nusa Tenggara Barat
			"hc-key": "id-nb",
			"color": "#191970",
            "value": <?php echo $ntb; ?>
        },
		{
            // Nusa Tenggara Timur
			"hc-key": "id-nt",
			"color": "#DB7093",
            "value": <?php echo $ntt; ?>
        },
		{
            // Kalimantan Barat
			"hc-key": "id-kb",
			"color": "#FF1000",
            "value": <?php echo $kalbar; ?>
        },
        {
            // Kalimantan Timur
			"hc-key": "id-ki",
			"color": "#FFDEAD",
			"title": "ttt",
            "value": <?php echo $kalbar; ?>
        },
		{
            // Kalimantan Tengah
			"hc-key": "id-kt",
			"color": "#4169E1",
            "value": <?php echo $kalteng; ?>
        },
        {
            // Kalimantan Selatan
			"hc-key": "id-ks",
			"color": "#2E8B57",
            "value": <?php echo $kalsel; ?>
        },
		{
            // Sulawesi Utara
			"hc-key": "id-sw",
			"color": "#FF6347",
            "value": <?php echo $sulut; ?>
        },
		{
            // Sulawesi Tengah
			"hc-key": "id-st",
			"color": "#F5DEB3",
            "value": <?php echo $sulteh; ?>
        },
		{
            // Gorontalo
			"hc-key": "id-go",
			"color": "#00FF7F",
            "value": <?php echo $gorontalo; ?>
        },
		{
            // Sulawesi Barat
			"hc-key": "id-sr",
			"color": "#008080",
            "value": <?php echo $sulbar; ?>
        },
        
        {
            // Sulawesi Selatan
			"hc-key": "id-se",
			"color": "#FFFF00",
            "value": <?php echo $sulsel; ?>
        },
		 {
            "hc-key": "id-sg",
			"color": "#800000",
            "value": <?php echo $sulteng; ?>
        },
		{
            // Maluku Utara
			"hc-key": "id-la",
			"color": "#00FFFF",
            "value": <?php echo $maltara; ?>
        },
		{
            // Maluku
			"hc-key": "id-ma",
			"color": "#00FF00",
            "value": <?php echo $maluku; ?>
        },
        {
            // Papua Barat
			"hc-key": "id-ib",
			"color": "#F08080",
            "value": <?php echo $sulteng; ?>
        }, 
		{
            // Papua 
			"hc-key": "id-pa",
			"color": "#E0FFFF",
            "value": <?php echo $papua; ?>
        }
    ];

    // Initiate the chart
    $('#container').highcharts('Map', {
		legend: {
            enabled: false
          },


        title : {
            text : ' <?php echo $keterangan; ?>'
        },

        subtitle : {
            text : '(Sumber : Biro Humas dan Promosi UNRIYO)'
        },

        mapNavigation: {
            enabled: true,
            buttonOptions: {
                verticalAlign: 'top'
            }
        },
        series : [{
            data : data,
            mapData: Highcharts.maps['countries/id/id-all'],
            joinBy: 'hc-key',
            name: 'Jumlah Mahasiswa Berasal dari',
            states: {
                hover: {
                    color: '#BADA55'
                }
            },
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            },
			tooltip: {
                    valueSuffix: ' orang'
                }
        }]
    });
});
	</script>
	<script src="<?php echo base_url(); ?>asset/pndk/assets/js/highmaps.js"></script>
	<script src="<?php echo base_url(); ?>asset/pndk/assets/js/id-all.js"></script>
	<script src="<?php echo base_url(); ?>asset/pndk/assets/js/exporting.js"></script>     
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html">
			Peta Persebaran Asal Mahasiswa UNRIYO</a>
		</div>
		<div class="navbar-collapse collapse">
			
		</div>
	</div>
</nav>
</br></br>
<div class="container-fluid" style="margin-top:7px">
	<div id ="container"></div>
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
    <td align="right" width="64">1</td>
    <td width="169">Aceh&nbsp;</td>
    <th width="44" scope="col"><?php echo $aceh; ?></th>
    <th width="43" scope="col"><?php echo round($aceh*100/$total) ." %"; ?></th>
  </tr>
  <tr>
    <td align="right">2</td>
    <td>Bali&nbsp;</td>
    <td><?php echo $bali; ?></td>
    <td><?php echo round($bali*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">3</td>
    <td>Banten&nbsp;</td>
    <td><?php echo $banten; ?></td>
    <td><?php echo round($banten*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">4</td>
    <td>Bengkulu&nbsp;</td>
    <td><?php echo $bengkulu; ?></td>
    <td><?php echo round($bengkulu*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">5</td>
    <td>Gorontalo&nbsp;</td>
    <td><?php echo $gorontalo?></td>
    <td><?php echo round($gorontalo*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">6</td>
    <td>Jakarta&nbsp;</td>
    <td><?php echo $jakarta; ?></td>
    <td><?php echo round($jakarta*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">7</td>
    <td>Jambi&nbsp;</td>
    <td><?php echo $jambi; ?></td>
    <td><?php echo round($jambi*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">8</td>
    <td>Jawa    Barat&nbsp;</td>
    <td><?php echo $jabar; ?></td>
    <td><?php echo round($jabar*100/$total) ." %"; ?></td>
  </tr>
  <tr>
    <td align="right">9</td>
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
    <td align="right">21</td>
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
			<a href="<?php echo site_url('home/pdf_prov2/'.$th .'/'.$fak.'/'.$prod) ?>" class="btn btn-primary"  title="Print Laporan Berdasar Provinsi" ><i class="fa fa-print" aria-hidden="true"></i> Print 1<a>
			<a href="<?php echo site_url('home/pdf_asal2/'.$th .'/'.$fak.'/'.$prod) ?>" class="btn btn-primary"  title="Print Laporan Berdasar Asal Sekolah"><i class="fa fa-print" aria-hidden="true"></i> Print 2<a>
          </div>
		 
        </div>
      </div>
    </div>
<div class="modal fade" id="grafModal" tabindex="1" role="dialog" aria-labelledby="myModalLabe2">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Grafik</h4>
          </div>
          <div class="modal-body">
		  <iframe src="<?php if($stat == '0'){echo site_url('Home/data_kab/'. $th.'/0/'. $total.'/'. $fak .'');}elseif($stat =='1'){echo site_url('Home/data_kab/'. $th.'/0/'. $total.'/'. $fak.'/'.$prod.'');}  ?>" style="overflow: scroll;" width="870" height="500">
This is an iframe.
</iframe>
		  </div>
          <div class="modal-footer">
            <a class="btn btn-default" data-dismiss="modal">Close</a>
          </div>
        </div>
      </div>
    </div>
<div class="navbar navbar-default navbar-fixed-bottom footer-bottom">
   <div class="container text-center">
      <p class="text-center">Copyright &copy; 2016,  DTC. Developed by <a href="https://ilmu-detil.blogspot.com/">Pusat Ilmu</a>||
	  <a class="" href="" data-toggle="modal" data-target="#imgModal">data tabel 1</a> ||
	  	  <a class="" href="" data-toggle="modal" data-target="#grafModal">data tabel 2</a>

	  </p>
   </div>
   
</div>


</body>
</html>
