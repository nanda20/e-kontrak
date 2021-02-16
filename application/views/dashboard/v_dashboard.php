        <style>
             #conten{
               font-size: 50px;
               margin-top: auto;
               margin-bottom: auto;
               color:#FFF;
               
            }
            #dokumenTotal{
           
               margin :1%;
               padding :1%;
               background-color:#FFF;
            }
            #header{
                padding-bottom:1%;
                font-weight: bold;
                font-size: 15px;
                
            }
            .x_panel{
                color:#FFF;
                background-color:#2980b9;
            }
            .x_title{
                border-bottom:0px;
            }
            .x_content{
             margin-top:-10px;   
            }
            .bottom_info{
                font-weight:bold !important;
            }
        </style>
        <div class="container">
        <div class="totalAll">
            
		 <div class="row" id="dokumenTotal">
            		     <div id="header" class="col-md-12 col-sm-12 col-xs-12" >
            		     	Dokumen Kontrak
            		     </div>
		     	
                    	<div class="col-md-4 col-sm-4 col-xs-12" >
                    		<div class="x_panel tile fixed_height_180" >
                    		     <div class="x_title" >
                    					<h4 >Total Dokumen</h4>
                    				 
                    				<div class="clearfix">
                    				</div
                    			</div>
                                        	        	
                    			<div class="x_content">
                    			    <br>
                                    <row>
                                        <div class="col-md-4" >
                                            <img src="https://www.flaticon.com/svg/static/icons/svg/3056/3056342.svg" width="50px" height="50px">
                                            </div>
                                        <div class="col" >
                                          <h2 id="conten"> <?= $data[0]->kontrakAll+$data[0]->amenKontrakAll; ?>  </h2> 
                                         </div>
                                    </row>
                    				<div class="clearfix"></div>
                    				</div>
                        		</div>
                    		</div>
                    	</div>
                    	
                    	<div class="col-md-4 col-sm-4 col-xs-12" >
                    		<div class="x_panel tile fixed_height_180" >
                    		     <div class="x_title" >
                    				<h4 >Kontrak Induk</h4>
                    				 
                    				<div class="clearfix">
                    				</div
                    			</div>
                                        	        	
                    			<div class="x_content">
                    			    <br>
                                    <row>
                                        <div class="col-md-4" >
                                            <img src="https://www.flaticon.com/svg/static/icons/svg/3056/3056385.svg" width="50px" height="50px">
                                            </div>
                                        <div class="col" >
                                          <h2 id="conten"> <?= $data[0]->kontrakAll; ?>  </h2> 
                                         </div>
                                    </row>
                    				<div class="clearfix"></div>
                    				</div>
                        		</div>
                    		</div>
                    	</div>
                        
                        <div class="col-md-4 col-sm-4 col-xs-12" >
                    		<div class="x_panel tile fixed_height_180" >
                    		     <div class="x_title" >
                    				<h4 >Kontrak Amend</h4>
                    				 
                    				<div class="clearfix">
                    				</div
                    			</div>
                                        	        	
                    			<div class="x_content">
                    			    <br>
                                    <row>
                                        <div class="col-md-4" >
                                            <img src="https://www.flaticon.com/svg/static/icons/svg/3056/3056429.svg" width="50px" height="50px">
                                            </div>
                                        <div class="col" >
                                          <h2 id="conten"> <?= $data[0]->amenKontrakAll; ?>  </h2> 
                                         </div>
                                    </row>
                    				<div class="clearfix"></div>
                    				</div>
                        		</div>
                    		</div>
                    	</div>
			</div>
			</div>
		
			<?php if(1!=1) {?>
		     <div class="row" id="dokumenTotal">
		         <div id="header" class="col-md-12 col-sm-12 col-xs-12" >
            		     	Dokumen Ter-Validasi Kadis
                </div>
            		     
                <div class="col-md-3 col-sm-3 col-xs-12" >
                                        		<div class="x_panel tile fixed_height_180" style="background-color:#16a085;" >
                    		     <div class="x_title" >
                    				<h4 >Total Dokumen</h4>
                    				 
                    				<div class="clearfix">
                    				</div
                    			</div>
                                        	        	
                    			<div class="x_content">
                    			    <br>
                                    <row>
                                        <div class="col-md-4" >
                                            <img src="https://www.flaticon.com/svg/static/icons/svg/3056/3056429.svg" width="50px" height="50px">
                                            </div>
                                        <div class="col-md-4" >
                                          <h2 id="conten"> <?= $data[0]->kontrakTerVerfikasiKadis+$data[0]->amendKontrakTerVerfikasiKadis; ?>  </h2> 
                                         </div>
                                    </row>
                                    <row>
                                        <div class="col-md-12" > <h4 class="bottom_info">Menunggu validasi <?= $data[0]->kontrakAll-$data[0]->kontrakTerVerfikasiKadis+$data[0]->amenKontrakAll-$data[0]->amendKontrakTerVerfikasiKadis-$data[0]->amendKontrakTerVerfikasiOfficer; ?></h4></div>
                                    </row>
                    				<div class="clearfix"></div>
                    				</div>
                        		</div>
                    		</div>
                    	</div>
                    	<div class="col-md-3 col-sm-3 col-xs-12" >
                    		<div class="x_panel tile fixed_height_180" style="background-color:#16a085;">
                    		     <div class="x_title" >
                    				<h4 >Kontrak </h4>
                    				 
                    				<div class="clearfix">
                    				</div
                    			</div>
                                        	        	
                    			<div class="x_content">
                    			    <br>
                                    <row>
                                        <div class="col-md-4" >
                                            <img src="https://www.flaticon.com/svg/static/icons/svg/3056/3056429.svg" width="50px" height="50px">
                                            </div>
                                        <div class="col-md-4" >
                                          <h2 id="conten"> <?= $data[0]->kontrakTerVerfikasiKadis; ?>  </h2> 
                                         </div>
                                    </row>
                                    <row>
                                        <div class="col-md-12" > <h4 class="bottom_info">Menunggu validasi <?= $data[0]->kontrakAll-$data[0]->kontrakTerVerfikasiKadis; ?></h4></div>
                                    </row>
                                    
                                    <div class="clearfix"></div>
                    				</div>
                        		</div>
                    		</div>
                    	</div>
                    	<div class="col-md-3 col-sm-3 col-xs-12" >
                    		<div class="x_panel tile fixed_height_180"  style="background-color:#16a085;">
                    		     <div class="x_title" >
                    				<h4 >Amend Kontrak</h4>
                    				 
                    				<div class="clearfix">
                    				</div
                    			</div>
                                        	        	
                    			<div class="x_content">
                    			    <br>
                                    <row>
                                        <div class="col-md-4" >
                                            <img src="https://www.flaticon.com/svg/static/icons/svg/3056/3056429.svg" width="50px" height="50px">
                                            </div>
                                        <div class="col-md-4" >
                                          <h2 id="conten"> <?= $data[0]->amendKontrakTerVerfikasiKadis; ?>  </h2>
                                         </div>
                                    </row>
                                    
                                    <row>
                                        <div class="col-md-12" > <h4 class="bottom_info">Menunggu validasi <?= $data[0]->amenKontrakAll-$data[0]->amendKontrakTerVerfikasiKadis-$data[0]->amendKontrakTerVerfikasiOfficer; ?></h4></div>
                                    </row>
                                    
                    				<div class="clearfix"></div>
                    				</div>
                        		</div>
                    		</div>
                    	</div>
            </div>
			
			<div class="row" id="dokumenTotal">
		         <div id="header" class="col-md-12 col-sm-12 col-xs-12" >
            		     	Dokumen Ter-Validasi Officer
                </div>
            		     
                <div class="col-md-3 col-sm-3 col-xs-12" >
                                        		<div class="x_panel tile fixed_height_180" style="background-color:#e67e22;" >
                    		     <div class="x_title" >
                    				<h4 >Total Dokumen</h4>
                    				 
                    				<div class="clearfix">
                    				</div
                    			</div>
                                        	        	
                    			<div class="x_content">
                    			    <br>
                                    <row>
                                        <div class="col-md-4" >
                                            <img src="https://www.flaticon.com/svg/static/icons/svg/3056/3056429.svg" width="50px" height="50px">
                                            </div>
                                        <div class="col-md-4" >
                                          <h2 id="conten"> <?= $data[0]->KontrakTerVerfikasiOfficer+$data[0]->amendKontrakTerVerfikasiOfficer; ?>  </h2> 
                                         </div>
                                    </row>
                                     <row>
                                        <div class="col-md-12" > <h4 class="bottom_info">Menunggu validasi <?= ($data[0]->kontrakAll-$data[0]->KontrakTerVerfikasiOfficer)+($data[0]->amenKontrakAll-$data[0]->amendKontrakTerVerfikasiOfficer); ?></h4></div>
                                    </row>
                    				<div class="clearfix"></div>
                    				</div>
                        		</div>
                    		</div>
                    	</div>
                    	<div class="col-md-3 col-sm-3 col-xs-12" >
                    		<div class="x_panel tile fixed_height_180" style="background-color:#e67e22;">
                    		     <div class="x_title" >
                    				<h4 >Kontrak </h4>
                    				 
                    				<div class="clearfix">
                    				</div
                    			</div>
                                        	        	
                    			<div class="x_content">
                    			    <br>
                                    <row>
                                        <div class="col-md-6" >
                                            <img src="https://www.flaticon.com/svg/static/icons/svg/3056/3056429.svg" width="50px" height="50px">
                                            </div>
                                        <div class="col-md-6" >
                                          <h2 id="conten"> <?= $data[0]->KontrakTerVerfikasiOfficer; ?>  </h2> 
                                          
                                         </div>
                                        
                                    </row>
                                    <row>
                                        <div class="col-md-12" > <h4 class="bottom_info">Menunggu validasi <?= $data[0]->kontrakAll-$data[0]->KontrakTerVerfikasiOfficer; ?></h4></div>
                                    </row>
                    				<div class="clearfix"></div>
                    				</div>
                        		</div>
                    		</div>
                    	</div>
                    	<div class="col-md-3 col-sm-3 col-xs-12" >
                    		<div class="x_panel tile fixed_height_180"  style="background-color:#e67e22;">
                    		     <div class="x_title" >
                    				<h4 >Amend Kontrak</h4>
                    				 
                    				<div class="clearfix">
                    				</div
                    			</div>
                                        	        	
                    			<div class="x_content">
                    			    <br>
                                    <row>
                                        <div class="col-md-4" >
                                            <img src="https://www.flaticon.com/svg/static/icons/svg/3056/3056429.svg" width="50px" height="50px">
                                            </div>
                                        <div class="col-md-4" >
                                          <h2 id="conten"> <?= $data[0]->amendKontrakTerVerfikasiOfficer; ?>  </h2> 
                                         </div>
                                    </row>
                                    <row>
                                        <div class="col-md-12" > <h4 class="bottom_info">Menunggu validasi <?= $data[0]->amenKontrakAll-$data[0]->amendKontrakTerVerfikasiOfficer; ?></h4></div>
                                    </row>
                    				<div class="clearfix"></div>
                    				</div>
                        		</div>
                    		</div>
                    	</div>
            </div>
			<?php };?>
			
			</div>
			</div>
			</div>
        </div>
    </div>
</div>