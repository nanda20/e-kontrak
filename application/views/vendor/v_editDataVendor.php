
<?php if($this->session->flashdata('status')==1){
	?>

<div id="alrt" class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Success!</strong> Data Vendor Berhasil diupdate!
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
				<form  action="<?= base_url()?>DataMaster/simpanDataVendor" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
				
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kode Vendor <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="<?= $this->uri->segment(3); ?>" readonly name="kodeVendor" />
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Vendor <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="last-name"  required="required" class="form-control col-md-7 col-xs-12" value="<?= $data[0]->namaVendor; ?>" name="namaVendor">
						</div>

					</div>
					<div class="form-group">
						<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan" ><?= $data[0]->keterangan; ?></textarea>
						</div>
					</div>
					
					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							
							
							<button onclick="window.location.href='<?= base_url()?>DataMaster/viewDataVendor'" class="btn btn-primary" type="button">Back</button>
							<button class="btn btn-primary" type="reset">Reset</button>

							<button type="submit" class="btn btn-success">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	window.setTimeout(function() {
    $(".alert").fadeTo(200, 0).slideUp(200, function(){
        $(this).remove(); 
    });
}, 1500);

</script>
<!-- /First Section one Column -->

<!-- /Third Section One Column -->