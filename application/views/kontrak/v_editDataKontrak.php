
<style type="text/css" media="screen">
	#datepicker{
		 width: 15.1em; padding: .2em .2em;
		 height: 2.4em;
		 font-size: 14px;
	
	}
	
	
</style>
<?php if($this->session->flashdata('status')==1){
?>

<div id="alrt" class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Success!</strong> Data Kontrak Berhasil diupdate!
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
				<form  action="<?= base_url()?>DataMaster/simpanDataKontrak" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" >
				
                <input type="hidden" name="idKontrak" value="<?= $data[0]->idKontrak; ?>"/>
				<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Vendor</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control" name="kodeVendor">
							<?php foreach ($vendor as $val): ?>
								
								<option <?php if( $val->kodeVendor==$data[0]->kodeVendor){
								 echo "selected";} ?> > <?= $val->namaVendor; ?> </option>
							<?php endforeach ?>
								
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Kontrak <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<!--<input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="<?= str_replace(".", "/", $this->uri->segment(3)); ?>" name="nomorKontrak" />-->
						   <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="<?= $data[0]->nomorKontrak; ?>" name="nomorKontrak" />
						
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Kontrak <span class="required">*</span>
						</label>
						<div class="col-md-3 col-sm-3 col-xs-12">
						<input type="date" name="tanggalKontrak" id="datepicker" value="<?= $data[0]->tanggalKontrak?>"/> 
						</div>


					</div>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Mulai / Tanggal Akhir <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<!-- 	<input type="text" id="last-name"  required="required" class="form-control col-md-7 col-xs-12" value="<?= $data[0]->tanggalMulai; ?>" name="namaVendor"> -->
						<input type="date" name="tanggalMulai" id="datepicker" value="<?= $data[0]->tanggalMulai?>"/> /
						<input type="date" name="tanggalSelesai" id="datepicker" value="<?= $data[0]->tanggalSelesai?>"/>
						</div>


					</div>
					<div class="form-group">

						
						<label  for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Lampiran <span class="required">*</span> </label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<!-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan" ><?= $data[0]->lampiranKontrak; ?></textarea> -->

							<!-- <div class="custom-file">
							  <a  data-toggle="tooltip" data-original-title="click to view" target="_blank" href="<?= $data[0]->lampiranKontrak; ?>">
							  	
  							<button type="button" class="btn btn-lg btn-info" aria-label="Left Align">
							  <span class="glyphicon glyphicon-file" aria-hidden="true"></span>
							</button>
							  </a>
							  <!-- <input type="file" class="custom-file-input" id="customFile">
							  <label class="custom-file-label" for="customFile"></label> -->
							<!-- </div> --> 
				
							<!-- <input type="file" class="custom-file-input" id="customFile"> -->
							
							 <a  data-toggle="tooltip" data-original-title="click to view"   target="_blank" href="<?=$data[0]->lampiranKontrak; ?>">
							 <span  class="badge badge-success"><?php echo basename($data[0]->lampiranKontrak); ?> </span></a>
							 <!--<input type="text" name="updateFileName" value="<?= basename($data[0]->lampiranKontrak); ?>">-->
							<input id="input-b1" name="userfile" type="file" class="file" data-browse-on-zone-click="true" accept="application/pdf" >




							<!-- <div class="input-group">
								<a  target="_blank" href="<?= $data[0]->lampiranKontrak; ?>">
								<input 
								id="lampr" data-toggle="tooltip" data-original-title="click to view"
								type="text" readonly class="form-control" value="<?= $data[0]->lampiranKontrak; ?>"></a>
								<span class="input-group-btn">

								<button type="button" class="btn btn-primary">Ganti</button>
								</span>
							</div> -->

						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jangka Waktu Pembayaran <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="<?= $data[0]->jangkaWaktuPembayaran;  ?>" name="jangkaWaktuPembayaran" />
						</div>
					</div>


					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Keterangan Tambahan 
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<textarea class="form-control" name="ketTambahan"  rows="3"  id="comment"><?= $data[0]->ketTambahan;  ?></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control" name="kategori">
								<option value="Jasa" <?php if($data[0]->kategori == "Jasa"){ echo "selected";} ?> > Jasa </option>
								<option value="Transportrasi" <?php if($data[0]->kategori == "Transportrasi"){ echo "selected";} ?>> Transportrasi </option>
							</select>
						</div>
					</div>


					
					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							
							
							<button onclick="window.location.href='<?= base_url()?>DataMaster/viewDataKontrak'" class="btn btn-primary" type="button">Back</button>
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
