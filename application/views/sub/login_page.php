<script type="text/javascript">
function login(){

var nama= document.getElementById('nik').value;

if( isNaN(nama)==true){
	 swal({
		title: "Peringatan!",
		text: "silahkan masukkan username/NIK dan Password dengan benar",
		imageUrl: '<?php echo base_url();?>asset/img/e.ico'
	});

}else{
	document.getElementById('masuk').submit()  

}


}
</script>
<div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Login</h3>
              </div>
              <div class="panel-body">
                <form action="<?php echo site_url('home/login'); ?>" method="post"
                id="masuk">
                  <div class="form-group">
                    <label class="control-label" for="exampleInputEmail1">Level Akses</label>
                    <div class="input-group">
                      <select class="form-control" name="level">
                        <option>Admin</option>
                        <option>Rektor</option>
                        <option>Dekan FIKES</option>
                        <option>Dekan FST</option>
                        <option>Dekan FISE</option>
						<option>KPS FST</option>  
										<option>KPS FISE</option>  
										<option>KPS FIKES</option>  
                        
                      </select>
                      <span class="input-group-addon">
                        <i class="fa fa-toggle-down"></i>
                      </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="exampleInputNIK1">Username/NIK</label>
                    <div class="input-group ">
                      <input type="text" class="form-control"  placeholder="NIK"
                      name="nik" id="nik">
                      <span class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="exampleInputPassword1">Password</label>
                    <div class="input-group">
                      <input type="password" class="form-control" id="exampleInputPassword1"
                      placeholder="Password" name="pass">
                      <span class="input-group-addon">
                        <i class="fa fa-expeditedssl"></i>
                      </span>
                    </div>
                  </div>
                  <div class="form-group"></div>
                  <div class="checkbox"></div>
                  <a onclick="login()" class="btn btn-info">Login</a>
                </form>
              </div>
            </div>