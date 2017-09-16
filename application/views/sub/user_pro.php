<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
    <style>
      /***
    User Profile Sidebar by @keenthemes
    A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
    Licensed under MIT
    ***/
    
    body {
      background: #F1F3FA;
    }
    
    /* Profile container */
    .profile {
      margin: 20px 0;
    }
    
    /* Profile sidebar */
    .profile-sidebar {
      padding: 20px 0 10px 0;
      background: #fff;
    }
    
    .profile-userpic img {
      float: none;
      margin: 0 auto;
      width: 50%;
      height: 50%;
      -webkit-border-radius: 50% !important;
      -moz-border-radius: 50% !important;
      border-radius: 50% !important;
    }
    
    .profile-usertitle {
      text-align: center;
      margin-top: 20px;
    }
    
    .profile-usertitle-name {
      color: #5a7391;
      font-size: 16px;
      font-weight: 600;
      margin-bottom: 7px;
    }
    
    .profile-usertitle-job {
      text-transform: uppercase;
      color: #5b9bd1;
      font-size: 12px;
      font-weight: 600;
      margin-bottom: 15px;
    }
    
    .profile-userbuttons {
      text-align: center;
      margin-top: 10px;
    }
    
    .profile-userbuttons .btn {
      text-transform: uppercase;
      font-size: 11px;
      font-weight: 600;
      padding: 6px 15px;
      margin-right: 5px;
    }
    
    .profile-userbuttons .btn:last-child {
      margin-right: 0px;
    }
        
    .profile-usermenu {
      margin-top: 30px;
    }
    
    .profile-usermenu ul li {
      border-bottom: 1px solid #f0f4f7;
    }
    
    .profile-usermenu ul li:last-child {
      border-bottom: none;
    }
    
    .profile-usermenu ul li a {
      color: #93a3b5;
      font-size: 14px;
      font-weight: 400;
    }
    
    .profile-usermenu ul li a i {
      margin-right: 8px;
      font-size: 14px;
    }
    
    .profile-usermenu ul li a:hover {
      background-color: #fafcfd;
      color: #5b9bd1;
    }
    
    .profile-usermenu ul li.active {
      border-bottom: none;
    }
    
    .profile-usermenu ul li.active a {
      color: #5b9bd1;
      background-color: #f6f9fb;
      border-left: 2px solid #5b9bd1;
      margin-left: -2px;
    }
    
    /* Profile Content */
    .profile-content {
      padding: 20px;
      background: #fff;
      min-height: 460px;
    }/***
    User Profile Sidebar by @keenthemes
    A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
    Licensed under MIT
    ***/
    
    body {
      background: #F1F3FA;
    }
    
    /* Profile container */
    .profile {
      margin: 20px 0;
    }
    
    /* Profile sidebar */
    .profile-sidebar {
      padding: 20px 0 10px 0;
      background: #fff;
    }
    
    .profile-userpic img {
      float: none;
      margin: 0 auto;
      width: 50%;
      height: 50%;
      -webkit-border-radius: 50% !important;
      -moz-border-radius: 50% !important;
      border-radius: 50% !important;
    }
    
    .profile-usertitle {
      text-align: center;
      margin-top: 20px;
    }
    
    .profile-usertitle-name {
      color: #5a7391;
      font-size: 16px;
      font-weight: 600;
      margin-bottom: 7px;
    }
    
    .profile-usertitle-job {
      text-transform: uppercase;
      color: #5b9bd1;
      font-size: 12px;
      font-weight: 600;
      margin-bottom: 15px;
    }
    
    .profile-userbuttons {
      text-align: center;
      margin-top: 10px;
    }
    
    .profile-userbuttons .btn {
      text-transform: uppercase;
      font-size: 11px;
      font-weight: 600;
      padding: 6px 15px;
      margin-right: 5px;
    }
    
    .profile-userbuttons .btn:last-child {
      margin-right: 0px;
    }
        
    .profile-usermenu {
      margin-top: 30px;
    }
    
    .profile-usermenu ul li {
      border-bottom: 1px solid #f0f4f7;
    }
    
    .profile-usermenu ul li:last-child {
      border-bottom: none;
    }
    
    .profile-usermenu ul li a {
      color: #93a3b5;
      font-size: 14px;
      font-weight: 400;
    }
    
    .profile-usermenu ul li a i {
      margin-right: 8px;
      font-size: 14px;
    }
    
    .profile-usermenu ul li a:hover {
      background-color: #fafcfd;
      color: #5b9bd1;
    }
    
    .profile-usermenu ul li.active {
      border-bottom: none;
    }
    
    .profile-usermenu ul li.active a {
      color: #5b9bd1;
      background-color: #f6f9fb;
      border-left: 2px solid #5b9bd1;
      margin-left: -2px;
    }
    
    /* Profile Content */
    .profile-content {
      padding: 20px;
      background: #fff;
      min-height: 460px;
    }
    </style>
  </head><body>

          <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">User</h3>
              </div>
			  <form action="<?php echo site_url('home/up_pro'); ?>" method="post" >
              <div class="panel-body">
                <div class="profile-sidebar">
                  <!-- SIDEBAR USERPIC -->
                  <div class="profile-userpic">
                    <img src="<?php echo base_url(); ?>asset/img/avatar.png" class="img-responsive" alt="">
                  </div>
                  <!-- END SIDEBAR USERPIC -->
                  <!-- SIDEBAR USER TITLE -->
                  <div class="profile-usertitle">
                    <div class="profile-usertitle-job"><?php echo $level; ?></div>
                  </div>
                  <!-- END SIDEBAR USER TITLE -->
                  <!-- SIDEBAR BUTTONS -->
                  <div class="profile-userbuttons">
                    <button type="submit" class="btn btn-success btn-sm pencil-square-o">
                      <i class="fa fa-2x fa-pencil-square-o"></i>Pebarui Data</button>
                   
                  </div>
                  <!-- END SIDEBAR BUTTONS -->
                  <!-- SIDEBAR MENU -->
                  <div class="profile-usermenu">
                    <ul class="nav">
                      <li class="active">
                        <a>
							<i class="fa fa-5x fa-user"> Username</i>
							<input type="text" name="username" class="form-control input-md" name="user" value="<?php echo $username; ?>" </a>
                      </li>
                      <li class="active">
                        <a>
							<i class="fa fa-5x fa-key"> Password</i>
							<input type="Password" class="form-control input-md" name="password" value="<?php echo $password; ?>"> </a>
							<input type="hidden" class="form-control input-md" name="user2" value="<?php echo $username; ?>"> </a>
                      </li>
                      
                    </ul>
                  </div>
				  </form>
                  <!-- END MENU -->
                </div>
              </div>
            </div>
          </div>
        
  

</body></html>