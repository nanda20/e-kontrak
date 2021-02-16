 <style>
     #tanggalSelesai {
        width: 30px !important;
    }
     #no {
        width: 10px !important;
    }
   
    #status{
       text-align:center !important; 
    }
    #amend{
        width: 5px !important;
    }
    #aksi{
        width: 30px !important;
    }
 </style>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
			    	<?php
			    if($this->session->level !="kadis"){
			    ?>
			    
			   <button type="button" onClick="location.href='<?= base_url('DataMaster/viewTambahDataAmendKontrak');?>';" class="btn btn-primary">Tambah</button>
				<? } ?>
				<!-- <h2>Data Vendor <small>Users</small></h2> -->
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
				<p class="text-muted font-13 m-b-30">
					</code>
				</p>
				<table id="datatable-buttons" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th id="no">No</th>
							<th>Kode Vendor</th>
							<th >Nomor Kontrak Induk</th>
							<th>Nomor Amend</th>
							<th>Tanggal Amend</th>
							<!--<th id="amend">Amend</th>-->
							<th id="tanggalSelesai">Tanggal Mulai</th>
							<th id="tanggalSelesai">Tanggal Selesai</th>
							<th id="tanggalSelesai">Doc</th>
							<th>ket</th>
							<th id="status">Status</td>
							<th id="aksi">Aksi</th>
							
						</tr>
					</thead>


					<tbody>
						
						<?php
							$i=1;
							foreach ($data as $row) {
						?>
						<tr>
							<td><?= $i ?></td>
							<td><?= $row->kodeVendor ?></td>
							<td><?= $row->nomorKontrak ?></td>
							<td><?= $row->nomorAmend ?></td>
							<td><?= $row->tanggalAmend ?></td>
						    <!--<th style="text-align:center;"><?= $row->amendemen; ?></th>-->
							<td><?= $row->tanggalMulai ?></td>
							<td><?= $row->tanggalSelesai ?></td>
							<td style="text-align:center;"><a href="<?= $row->lampiranAmend ?>" target="_blank"><i class="fa fa-file" aria-hidden="true"></i></a></td>
							<td><?= $row->ketTambahan ?></td>
							<td align="center">
							   <?php if($this->session->level=="officer"){  
							     
							         if($row->validasi==1){
							             ?>
							             <a href="validasiAmendKontrak/<?= $row->idAmendKontrak?>/1" onclick="return confirm('Apakah anda ingin menvalidasi kontrak ini?');" class="btn btn-info" title="" data-toggle="tooltip" >Valid</i></a>
							             <a href="validasiAmendKontrak/<?= $row->idAmendKontrak?>/0" onclick="return confirm('Apakah anda ingin mengembalikan kontrak ini?');" class="btn btn-warning" title="" data-toggle="tooltip" >Tidak Valid</i></a>
							             
							             <?php
							         }else{
							            
							             ?>
							            <?php
							            if($row->validasi==3){
							                 
							                echo "<img src='https://www.flaticon.com/svg/static/icons/svg/845/845646.svg' width='20px' height='20px' >";
							            }else if($row->validasi==2)
    							            {
    							             echo "<img src='https://www.flaticon.com/svg/static/icons/svg/889/889843.svg' width='20px' height='20px' >";    
    							            }else if($row->validasi==0){
							                echo "Dikembalikan";    
							            }
							                
							            }
							    }
							    
							        if($this->session->level=="kadis"){  
							         if($row->validasi==2){
							             ?>
							             <a href="validasiAmendKontrak/<?= $row->idAmendKontrak?>/1" onclick="return confirm('Apakah anda ingin menvalidasi kontrak ini?');" class="btn btn-info" title="" data-toggle="tooltip"  >Valid</i></a>
                                         <a href="validasiAmendKontrak/<?= $row->idAmendKontrak?>/0" onclick="return confirm('Apakah anda ingin mengembalikan kontrak ini?');" class="btn btn-warning" title="" data-toggle="tooltip" >Tidak Valid</i></a>							             
							             <?php
							         }else{
							             ?>
							 
							         <?php
							            if($row->validasi==3){
							               
							                echo "<img src='https://www.flaticon.com/svg/static/icons/svg/845/845646.svg' width='20px' height='20px' >";
							            }else if($row->validasi==0){
							                echo "Dikembalikan";    
							            } 
							         }
							    }
							    
						            
						            if($this->session->level=="vendor"){ 
							        
							            
							            if($row->validasi==3){
							                echo " <img src='https://www.flaticon.com/svg/static/icons/svg/845/845646.svg' width='20px' height='20px' >";
							            }else{
							                echo "proses validasi";
							            }; 
							        
							    }	    
							   ?> 
					        	
							 
							</td>
							<td>
							<a  href="viewEditDataAmendKontrak/<?= str_replace("/",".",$row->idAmendKontrak);?>"  class="edit" title="" data-toggle="tooltip" data-original-title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>  &nbsp; | &nbsp; <a href="deleteDataAmendKontrak/<?= $row->idAmendKontrak?>" onclick="return confirm('Are you sure you want to delete this item?');" class="delete" title="" data-toggle="tooltip" data-original-title="Delete"><i class="glyphicon glyphicon-trash"></i></a>
							</td>

						</tr>
						<?php $i++;} ?>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>

	

 