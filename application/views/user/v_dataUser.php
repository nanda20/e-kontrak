<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
			    
			   	<?php
			    if($this->session->level !="kadis" && $this->session->level !="officer" ){?>
			    ?>
			  <button type="button" onClick="location.href='<?= base_url('DataMaster/viewTambahDataUser');?>';" class="btn btn-primary">Tambah</button>
                <?php }?>

				 <!--<h2>Data Vendor <small>Users</small></h2> -->
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
							<th>No</th>
							<th>Nik</th>
							<th>Nama</th>
							<th>level</th>
							<?php if($this->session->level !="kadis" && $this->session->level !="officer"){?>
							<th>Password</th>
							<th>Action</th>
							<?php };?>
							
						</tr>
					</thead>


					<tbody>
						
						<?php
							$i=1;
							foreach ($data as $row) {
						?>
						<tr>
							<td><?= $i ?></td>
							<td><?= $row->nik ?></td>
							<td><?= $row->nama ?></td>
							<td><?= $row->level ?></td>
							<?php 
							if($this->session->level !="kadis" && $this->session->level !="officer" ){?>
							<td><?= $row->password ?></td>
							<td>
							<a href="viewEditDataUser/<?= $row->nik?>" class="edit" title="" data-toggle="tooltip" data-original-title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>  &nbsp; | &nbsp; <a href="deleteDatauser/<?= $row->nik?>" onclick="return confirm('Are you sure you want to delete this item?');" class="delete" title="" data-toggle="tooltip" data-original-title="Delete"><i class="glyphicon glyphicon-trash"></i></a>
							</td>
							<?php }; ?>
						</tr>
						<?php $i++;} ?>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>

	


			</div>
		</div>
	</div>
</div>