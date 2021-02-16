
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
				<form  action="<?= base_url()?>DataMaster/simpanDataAmendKontrak" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" >
			 
                <input type="hidden" name="idAmendKontrak" value="<?= $data[0]->idAmendKontrak; ?>"/>
				<div class="form-group">
				    
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Kontrak Induk</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control" name="idKontrak">
							<?php foreach ($kontrak as $val): ?>
								<option value="<?= $val->idKontrak; ?>" <?php if($val->idKontrak == $data[0]->idKontrak){echo"selected";}?> > <?= $val->nomorKontrak; ?> </option>
							<?php endforeach ?>
								
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Amend Kontrak <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="<?= $data[0]->nomorAmend; ?>" name="nomorAmendKontrak" />
						</div>
					</div>

                    <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Amend <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
	
						<input type="date" name="tanggalAmend" id="datepicker" value="<?= $data[0]->tanggalAmend?>"/> /
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Mulai / Tanggal Akhir <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
	
						<input type="date" name="tanggalMulai" id="datepicker" value="<?= $data[0]->tanggalMulai?>"/> /
						<input type="date" name="tanggalSelesai" id="datepicker" value="<?= $data[0]->tanggalSelesai?>"/>
						</div>


					</div>
					<div class="form-group">

						
						<label  for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Lampiran <span class="required">*</span> </label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						 
							
							 <a  data-toggle="tooltip" data-original-title="click to view"   target="_blank" href="<?=$data[0]->lampiranAmend; ?>">
							 
							 <span  class="badge badge-success"><?php echo basename($data[0]->lampiranAmend); ?> </span></a>
							   <input type="hidden" name="fileLama" value="<?= basename($data[0]->lampiranAmend) ?>" />
							 
							<input id="input-b1" name="userfile" type="file" class="file" data-browse-on-zone-click="true" accept="application/pdf" >

 
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Amandemen<span class="required">*</span>
						</label>
					 
							<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control" name="amandemen">
							<?php for ($i=1;$i<=50; $i++){ ?>
								<option value="<?= $i; ?>" <?php if($i==$data[0]->amendemen){ echo "selected";}?> > <?= $i; ?> </option>
							<?php } ?>
								
							</select>
						 
						</div>
					</div>


					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Keterangan Tambahan 
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<textarea class="form-control" name="ketTambahan"  rows="3"  id="comment"  > <?= $data[0]->ketTambahan; ?> </textarea>
						</div>
					</div>

					 

					
					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							
							
							<button onclick="window.location.href='<?= base_url()?>DataMaster/viewDataAmendKontrak'" class="btn btn-primary" type="button">Back</button>
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
