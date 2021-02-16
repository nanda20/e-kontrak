<div class="col-md-3 left_col menu_fixed">
	<div class="left_col scroll-view">
 		<div class="navbar nav_title" style="border: 0;">
			<a href="<?php echo base_url(); ?>" class="site_title"> &nbsp;
			<span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
			<!-- <i class="fa fa-paw"></i> -->&nbsp;
			 <span style="font-size: 20px;"><?php echo 'E-Kontrak' ?></span></a>
		</div>

		<div class="clearfix"></div>
		<!-- menu profile quick info -->
		<div class="profile clearfix">
			<div class="profile_pic">
				<img src="https://www.flaticon.com/svg/static/icons/svg/847/847969.svg" alt="..." class="img-circle profile_img">
			</div>
			<div class="profile_info">
				<span>Welcome,</span>
				<h2><?php echo $this->session->nama;?></h2>
			</div>
		</div>
		<!-- /menu profile quick info -->
		<br>
		<!-- Sidebar Menu -->
		<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
			<div class="menu_section">
				<h3>General</h3>
				<ul class="nav side-menu">
				    <?php if($this->session->level !="admin"){ ?>
					<li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
					
						<ul class="nav child_menu">
							<!--<li><a href="#1">Simple Template</a></li>-->
							<!--<li><a href="#2">Page Example</a></li>-->
							<li><a href="<?php echo base_url('Home/dashboard') ?>">Dashboard</a></li>
						</ul>
					</li>
					<?php };?>
					<li><a><i class="fa fa-edit"></i> Master <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<!-- <li><a href="<?php echo base_url('example/form_ex') ?>">General Form</a></li> -->
							<!-- <li><a href="<?php echo base_url('example/table_ex') ?>">Table</a></li>
							<li><a href="<?php echo base_url('example/table_dyn_ex') ?>">Table Dynamics</a></li> -->
							<?php if($this->session->level !="vendor"){ ?>
							<li><a href="<?php echo base_url('DataMaster/viewDataUser') ?>">Data User</a></li>
							<?php }?>
							<li><a href="<?php echo base_url('DataMaster/viewDataVendor') ?>">Data Vendor</a></li>
							
							<?php if($this->session->level !="admin"){ ?>
							<li><a> Kontrak<span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu">
									<li class="sub_menu"><a href="<?php echo base_url('DataMaster/viewDataKontrak') ?>">Data Kontrak Induk</a></li>
									<li><a href="<?php echo base_url('DataMaster/viewDataAmendKontrak') ?>">Data Amend Kontrak</a></li>
								</ul>
							</li>
							<?php };?>
						</ul>
					</li>
					
					<?php if($this->session->level !="vendor" && $this->session->level !="admin" ){ ?>
					<li><a href="<?php echo base_url('UserView') ?>" target="_blank" ><i class="fa fa-home"></i> Kontrak View <span class="fa "></span></a>
					<?php } ?>
					</li>

					<!-- <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?php echo base_url('example/form_ex') ?>">General Form</a></li>
							<li><a href="<?php echo base_url('example/table_ex') ?>">Table</a></li>
							<li><a href="<?php echo base_url('example/table_dyn_ex') ?>">Table Dynamics</a></li>
						</ul>
					</li> -->
					<!-- <li><a><i class="fa fa-sitemap"></i> Ex Multilevel Menu <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="#level1">Ex Menu 1</a></li>
							<li><a>Menu 2 <span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu">
									<li class="sub_menu"><a href="#level2_1">Ex Menu 2.1</a></li>
									<li><a href="#level2_2">Ex Menu 2.2</a></li>
									<li><a href="#level2_3">Ex Menu 2.3</a></li>
								</ul>
							</li>
							<li><a href="#level3">Ex Menu 3</a></li>
						</ul>
					</li> -->
					<!-- <li><a href="https://github.com/puikinsh/gentelella"><i class="fa fa-external-link-square"></i> Gentelella <span class="label label-info pull-right">Learn More</span></a></li> -->
				</ul>
			</div>
		</div>
		<!-- /Sidebar Menu -->

		<!-- menu footer buttons -->
		<div class="sidebar-footer hidden-small">
			<a data-toggle="tooltip" data-placement="top" title="Settings">
				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
			</a>
			<a data-toggle="tooltip" data-placement="top" title="FullScreen">
				<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
			</a>
			<a data-toggle="tooltip" data-placement="top" title="Lock">
				<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
			</a>
			<a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= base_url('Login');?>">
				<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
			</a>
		</div>
		<!-- /menu footer buttons -->
	</div>
</div>