<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="description" content=""> 
        <meta name="author" content=""> 
        <title>Pemetaan Asal Daerah Mahasiswa</title>         
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
                    <div class="list-group">
                        <a href="" class="list-group-item active">Kategori Kelola </a>
                        <a href="<?php echo site_url('home/mhs'); ?>" class="list-group-item">Data mahasiswa</a>
                        <a href="<?php echo site_url('home/ipt_mhs'); ?>" class="list-group-item">Input data mahasiswa</a>
                        <a href="<?php echo site_url('home/dpr_usr'); ?>" class="list-group-item">Kelola User</a>
                        <a href="<?php echo site_url('home/kel_sjr'); ?>" class="list-group-item">Kelola Sejarah dan visi misi</a>
                    </div>
                </div>                 
                <div class="col-xs-12 col-sm-9"> 
                    <p class="pull-right visible-xs"><button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button></p>
                    <div class="jumbotron"> 
                        <h3>Hello, Admin</h3> 
                        <p>Halaman ini, Admin dapat melakukan input data mahasiswa, kelola sejarah visi misi dan admin dapat menambah dan menghapus user. </p> 
                    </div>                     
                    <dl> 
</dl>                     
                    <div class="row"> 
                        <!--/.col-xs-6.col-lg-4-->                         
                        <!--/.col-xs-6.col-lg-4-->                         
                        <!--/.col-xs-6.col-lg-4-->                         
                        <!--/.col-xs-6.col-lg-4-->                         
                        <!--/.col-xs-6.col-lg-4-->                         
                        <!--/.col-xs-6.col-lg-4-->                         
                    </div>                     
                    <!--/row-->                     
                </div>                 
                <!--/.col-xs-12.col-sm-9-->                 
                <!--/.sidebar-offcanvas-->                 
            </div>             
        </div>         
        <div class="container"> 
            <footer> 
                <p>&copy; Pemetaan Asal Daerah Mahasiswa | 13220016 - Muhammad Efendi | 2017</p> 
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
