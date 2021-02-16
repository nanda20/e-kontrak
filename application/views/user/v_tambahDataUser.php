
<?php if($this->session->flashdata('status')==1){
	?>

<div id="alrt" class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Success!</strong> Data User Berhasil diupdate!
</div>

	<?php
	};?>

<!-- First Section one Column -->
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<!-- <h2>Form Design <small>different form elements</small></h2> -->
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Settings 1</a>
							</li>
							<li><a href="#">Settings 2</a>
							</li>
						</ul>
					</li>
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />
				<form  action="<?= base_url()?>DataMaster/tambahDataUser" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"   >
				
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nik <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"  name="nik" />
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="last-name"  required="required" class="form-control col-md-7 col-xs-12"  name="nama">
						</div>

					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Password <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="password"   required="required" class="form-control col-md-7 col-xs-12"  id="password" name="password" oninput="cekPassword()">
						</div>

					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Re-Password <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="password"  required="required" class="form-control col-md-7 col-xs-12"  id="confirm_password" name="confirm_password" oninput="cekPassword()">
						    <p id="textStatusPassword"></p>
						</div>

					</div>
				    <div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Level <span class="required">*</span>
						</label>
                          	<div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" name="level">
                              <option   value="kadis" >Kadis</option>
                              <option  value="officer">Officer</option>
                              <option  value="user"> User</option>
                            </select>
                     </div>
                					
					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							
							
							<button onclick="window.location.href='<?= base_url()?>DataMaster/viewDataUser'" class="btn btn-primary" type="button">Cancel</button>
							<button class="btn btn-primary" type="reset">Reset</button>

							<button type="submit" id="submit" class="btn btn-success" onClick="validatePassword()">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
    
    document.getElementById("submit").disabled = true;
    
    	window.setTimeout(function() {
        $(".alert").fadeTo(200, 0).slideUp(200, function(){
            $(this).remove(); 
        });
    }, 1500);
    
    function cekPassword(){
          
       var x = document.getElementById("password").value;
       var y = document.getElementById("confirm_password").value;
 
       if(x==y){
              document.getElementById("submit").disabled = false;
               document.getElementById("textStatusPassword").innerHTML = "";
       }else{
           document.getElementById("submit").disabled = true;
           document.getElementById("textStatusPassword").innerHTML = "Password Tidak Sama";
       }
       
    }

 

</script>
<!-- /First Section one Column -->

<!-- /Third Section One Column -->