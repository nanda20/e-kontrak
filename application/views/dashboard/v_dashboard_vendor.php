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
                                        <div class="col-md-8" >
                                          <h2 id="conten"> <?= $data[0]->totalKontrak+$data[0]->totalAmendKontrak ?>  </h2> 
                                         </div>
                                    </row>
                                    <row>
                                        <div class="col-md-12" > <h4 class="bottom_info">Total Menunggu validasi <?= ($data[0]->totalKontrak-$data[0]->totalKontrakTervalidasi)+($data[0]->totalAmendKontrak-$data[0]->totalAmendKontrakTervalidasi); ?></h4></div>
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
                                        <div class="col-md-8" >
                                          <h2 id="conten"> <?= $data[0]->totalKontrak; ?>  </h2> 
                                         </div>
                                    </row>
                                    <row>
                                        <div class="col-md-12" > <h4 class="bottom_info">Menunggu validasi <?= ($data[0]->totalKontrak-$data[0]->totalKontrakTervalidasi); ?></h4></div>
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
                                        <div class="col-md-8" >
                                          <h2 id="conten"> <?= $data[0]->totalAmendKontrak; ?>  </h2> 
                                         </div>
                                         
                                    </row>
                                    <row>
                                        <div class="col-md-12" > <h4 class="bottom_info">Menunggu validasi <?= ($data[0]->totalAmendKontrak-$data[0]->totalAmendKontrakTervalidasi); ?></h4></div>
                                    </row>
                    				<div class="clearfix"></div>
                    				</div>
                        		</div>
                    		</div>
                    	</div>
			</div>
			</div>
		
		
			
			
			</div>
			</div>
			</div>
        </div>
    </div>
</div>