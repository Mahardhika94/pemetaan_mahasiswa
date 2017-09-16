<html lang="en"> 
     <head> 
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="description" content=""> 
        <meta name="author" content=""> 
        <title>Pemetaan Daerah Asal Mahasiswa</title>                
        <link href="<?php echo base_url(); ?>asset/css/bootstrap.css" rel="stylesheet"> 
		<link href="<?php echo base_url(); ?>asset/img/logo.png" rel="shorcut icon">
 
 <script src="<?php echo base_url(); ?>asset/cart/dist/Chart.bundle.js"></script>
        <script src="<?php echo base_url(); ?>asset/cart/utils.js"></script>		
        <link href="<?php echo base_url(); ?>asset/style.css" rel="stylesheet"> 
             
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
           <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Grafik Fakultas Ilmu Kesehatan</h3>
              </div>
              <div class="panel-body">
                <div class="section">
                  <div class="container">
                    <div class="row">
                      
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
                              <div class="col-md-3">
                                <h1 class="text-left">Pilih Tahun</h1>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-3">
                                <form action="<?php echo site_url('home/graf_fikes'); ?>" method="post" role="form">
                                  <div class="form-group">
                                    <div class="input-group">
									
                                      <select class="form-control" name="key"> 
                                     
										<?php foreach($tahun as $row){ ?>
										<option><?php echo $row->tahun_masuk; ?></option>
										<?php } ?>
                                      </select>
                                      <span class="input-group-btn">
                                         
										 <button type="submit" class="btn btn-success">Go Grafik</button>
                                      </span>
									 
                                    </div>
                                  </div>
                                </form>
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
        <div class="container"> 
            <footer> 
               <center> <p>&copy; Pemetaan Asal Daerah Mahasiswa | 13220016 - Muhammad Efendi | 2017</p> </center>
            </footer>             
        </div>         
        <!-- Bootstrap core JavaScript
    ================================================== -->         
        <!-- Placed at the end of the document so the pages load faster -->         
<script src="<?php echo base_url(); ?>asset/js/jquery.min.js"></script>         
        <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>         
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->         
        <script src="<?php echo base_url(); ?>asset/js/ie10-viewport-bug-workaround.js"></script>             
        <script>
        var chartData = {
            labels: ["<?php echo $th; ?>"], 
            datasets: [ {
                type: 'bar',
                label: 'S1-Kesehatan Masyarakat : <?php echo $kesmas; ?> orang',
                backgroundColor: window.chartColors.green,
                data: [
                    <?php echo $per_kesmas; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
                borderColor: 'white',
                borderWidth: 2
            },			
			{
                type: 'bar',
                label: 'S1-Ilmu Gizi : <?php echo $gizi; ?> orang',
                backgroundColor: window.chartColors.yellow,
                data: [
                    <?php echo $per_gizi; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ]
            },{
                type: 'bar',
                label: 'S1-Ilmu Keperawatan : <?php echo $perawat; ?> orang',
                backgroundColor: window.chartColors.red,
                data: [
                    <?php echo $per_perawat; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ]
            },{
                type: 'bar',
                label: 'D3-Kebidanan : <?php echo $bd3; ?> orang',
                backgroundColor: window.chartColors.blue,
                data: [
                    <?php echo $per_bd3; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ]
            },{
                type: 'bar',
                label: 'D4-Bidan Pendidik : <?php echo $bd4; ?> orang',
                backgroundColor: window.chartColors.purple,
                data: [
                    <?php echo $per_bd4; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ]
            },{
                type: 'bar',
                label: 'Program Profesi Ners : <?php echo $ners; ?> orang',
                backgroundColor: window.chartColors.red,
                data: [
                     <?php echo $per_ners; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
				borderColor: 'green',
                borderWidth: 3
            },
			{
                type: 'bar',
                label: 'Program Profesi Fisioterapi : <?php echo $fisio; ?> orang',
                backgroundColor: window.chartColors.black,
                data: [
                     <?php echo $per_fisio; ?>, 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor(), 
                    randomScalingFactor()
                ],
				borderColor: 'green',
                borderWidth: 3
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
                        text: 'Jumlah Mahasiswa FIKES UNRIYO Pada Tahun <?php echo $th; ?> adalah <?php echo $total; ?> orang. dengan presentasi sebagai berikut :'
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
