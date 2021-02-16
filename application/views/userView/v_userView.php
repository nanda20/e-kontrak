<html>
    <head>
        
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>-->
    <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    
	<style>
	body{
	    background-image: linear-gradient(to right bottom, #478fd1, #598fd9, #6d8ee0, #818de4, #978ae7, #8c96f1, #81a1f9, #77acff, #46c3ff, #00d8ff, #21ebff, #5ffbf1);
	}
	.table-responsive{
	    background-color:white !important;
	    height:auto !important;
	    padding:0.5%;
	}
	.pagination a{
	    color:black !important;
	}
	
	th{
		font-size: 15px;
	}
	.data{
			width:100%;
			height:auto;
			background-color:#FFFF;
			padding: 1%;
		}		
	.bgtabel {

	    padding: 2%;
	    width: 100%;
	    height: auto;
	    background: white;
         
	}
	table {
	background: white;	
    font-size: 15px !important;
	}
    
       
        .navbar {
            border-radius: 0px;
        }
        
     

    .modal-dialog {
 
          width: 60%;
 
        }
    
	</style>
    </head>
    <body>
 		<nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">E-Kontrak</a>
          </div>
          <!--<div id="navbar" class="navbar-collapse collapse">-->
          <!--  <ul class="nav navbar-nav">-->
          <!--    <li class="active"><a href="#">Home</a></li>-->
          <!--    <li><a href="#">About</a></li>-->
          <!--    <li><a href="#">Contact</a></li>-->
          <!--    <li class="dropdown">-->
          <!--      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>-->
          <!--      <ul class="dropdown-menu">-->
          <!--        <li><a href="#">Action</a></li>-->
          <!--        <li><a href="#">Another action</a></li>-->
          <!--        <li><a href="#">Something else here</a></li>-->
          <!--        <li role="separator" class="divider"></li>-->
          <!--        <li class="dropdown-header">Nav header</li>-->
          <!--        <li><a href="#">Separated link</a></li>-->
          <!--        <li><a href="#">One more separated link</a></li>-->
          <!--      </ul>-->
          <!--    </li>-->
          <!--  </ul>-->
            <ul class="nav navbar-nav navbar-right">
              <!--<li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>-->
              <!--<li><a href="../navbar-static-top/">Static top</a></li>-->
              <li><a href="<?= base_url('Login/logout');?>">Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
    
    <div class="container">
        
    <div class="table-responsive">
    <div class="bgtabel">
         <table id="example" class="table table-bordered table-hover" >
        <thead>
            <!--<tr>-->
            <tr>
                <th>Key ID</th>
                <th>Kode Vendor</th>
                <th>Vendor</th>
                <th>Nomor Kontrak</th>
                <th>Tanggal Mulai</th>              
                <th>Tanggal Selesai</th>
                <th>Kategori</th>
                <th>Resume</th>
                <th>Lampiran</th>
                
                
            </tr>
        </thead>
        <tfoot>
            <tr>
                
               <th>Key ID</th>
                <th>Kode Vendor</th>
                <th>Vendor</th>
                <th>Nomor Kontrak</th>
                <th>Tanggal Mulai</th>              
                <th>Tanggal Selesai</th>
                <th>Kategori</th>
                <th>Resume</th>
                <th>Lampiran</th>
               
            </tr>
            </tfoot>
        </table>
            </div>
        </div>  
    </div>
    </div>
    </div>
      

  <!-- Modal -->
  <div class="modal fade" id="resumeModal" role="dialog">
      
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 id="idKontrak" class="modal-title"></h4>
         
              
        </div>
        
        
        <!--<iframe src="http://docs.google.com/viewer?url=http://e-kontrak.patas2018.com/uploads/Kontrak_Jasa_Bongkar_Slab_di_KBS_2020_(1)_compressed_(1).pdf&embedded=true" width="600" height="780" style="border: none;"></iframe>-->
        
        <div class="modal-body">
         <p id="ketTambahanKontrak"></p>
            <!--<div class="row">-->
                  <!--<div id="textAmend" class="col-md-2"></div><div id="amend" class="col-md-10"></div>-->
            <!--</div> -->
            
          <ul id="ulResume">
              <!--<li id="liResumeAmendKontrak"></li>-->
              <!--<li id="liResumeKeterangan"></li>-->
          </ul>
              
            
          <p id="resumeKontrak"></p>
          <br>
           <p id="nomorAmend"></p>
          <br>
           <p id="resume"></p>
        </div>
         
        <div class="modal-footer">
              <button type="button" onclick="printDiv('resumeModal')" class="btn btn-default"   />Print</button>
          <button onclick="modalClose()"  type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<!-- Modal -->
  <div class="modal fade" id="myLampiran" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Lampiran </h4>
        </div>
        
        
       
        <div class="modal-body">
                <div>
                
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist" id="list">
                          
                      
                        <!--<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Kontrak Induk</a></li>-->
                        <!--<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>-->
                        <!--<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>-->
                        <!--<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>-->
                        
                        <!--<li ><a href="#home"     data-toggle="tab">Kontrak Induk</a></li>-->
                        <!--<li ><a href="#profile"  data-toggle="tab">Profile</a></li>-->
                        <!--<li ><a href="#messages" data-toggle="tab">Messages</a></li>-->
                        <!--<li ><a href="#settings" data-toggle="tab">Settings</a></li>-->
                        
                      </ul>
                    
                      <!-- Tab panes -->
                      <div class="tab-content" id="tab">
                        <!--<div  class="tab-pane active" id="home"> -->
                        <!--<iframe type="application/pdf" src="http://e-kontrak.patas2018.com/uploads/Kontrak_Jasa_Bongkar_Slab_di_KBS_2020_%281%29_compressed_%281%29.pdf" width="100%" height="100%" style="border: none;"></iframe>-->
                        <!--<object data="http://e-kontrak.patas2018.com/uploads/Kontrak_Jasa_Bongkar_Slab_di_KBS_2020_%281%29_compressed_%281%29.pdf" width="100%" height="100%"></object>-->
                        <!-- </div>-->
                        <!--<div role="tabpanel" class="tab-pane fade" id="profile">Tab 2</div>-->
                        <!--<div role="tabpanel" class="tab-pane fade" id="messages">Tab 3</div>-->
                        <!--<div role="tabpanel" class="tab-pane fade" id="settings">Tab 4</div>-->
                      </div>
                    
                    </div>
                
          
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>



    
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>


    
   <script>
   
    function printDiv(id){
            
            var printContents = document.getElementById(id).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            
    }
    
    function modalClose(){
         document.querySelector(".modal-backdrop").style.display = "none";
         document.querySelector("#resumeModal").style.display = "none";
    }
    
 
 
    $('#myTabs a').click(function (e) {
          e.preventDefault()
          $(this).tab('show')
    })

    var getUrl = window.location;
    var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[0];
     
                    var xmlhttp = new XMLHttpRequest();
                    var url = baseUrl+"/UserView/apidata";
                    var myArr;
                    xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                         myArr = JSON.parse(this.responseText);
                            // console.log(myArr.data);
                        }
                    };
                    
                    xmlhttp.open("GET", url, true);
                    xmlhttp.send();
          
          
   
   
   
    var tempData=[];
    var table = $('#example').DataTable( {
                    "processing": true,
                    "order":[[0,"asc"]],
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'excel', 'print'
                    ],
                    // "search":{
                    //     "search":"Bangunan dekat jaringan"
                    // },
                    "ajax": baseUrl+'/userView/apidata',
                    "columns": [
                        
                        { "data": "idKontrak" },
                        { "data": "kodeVendor" },
                        { "data": "namaVendor" },
                        { "data": "nomorKontrak" },
                        { "data": "tanggalMulai" },
                        { "data": "tanggalSelesai" },
                        { "data": "kategori" },
                        {
                            render: function ( data, type, row ) {
                                        return "<a href='#' onclick='viewResume("+row.idKontrak+")' ><img   class='img'  src='https://www.flaticon.com/svg/static/icons/svg/1/1755.svg' width='20px' height='20px'></a>";
                      
                            }
                        },{
                              render: function ( data, type, row ) {
                                        return "<a href='#' onclick='write_navBar("+row.idKontrak+")' ><img   class='img'  src='https://www.flaticon.com/svg/static/icons/svg/1/1755.svg' width='20px' height='20px'></a>";
                      
                            }
                            
                        },
                        // { "data": "resume[0].idAmendKontrak", 
                        
                        // render: function ( data, type, row ) 
                        //     {
                          		 
                        //   	 //return "<a href='#' onclick='viewResume("+data[0]+")' ><img   class='img'  src='https://www.flaticon.com/svg/static/icons/svg/1/1755.svg' width='20px' height='20px'></a>";
                        //      return data[0];
                        //     }

                            
                        // }
                        ]});
                        
           

            
            
        function viewResume(val){
            
            var value=search(val,myArr.data);
            // console.log(value.idKontrak);
            var idKontrak = document.getElementById("idKontrak");
            var ketTambahanKontrak = document.getElementById("ketTambahanKontrak");
            var nomorAmend = document.getElementById("nomorAmend");
            // var resumeKontrak = loop;
            var textAmend = document.getElementById("textAmend");
            // textAmend.innerHTML="";
          
            // var amend = document.getElementById("amend");
            // amend.innerHTML = "";
             
            idKontrak.innerHTML="Kontrak Induk "+ value.nomorKontrak;
            ketTambahanKontrak.innerHTML="Resume Kontrak Induk : " +value.ketTambahan;
            // resumeKontrak.innerHTML= value.ketTambahan;
            var resume = document.getElementById("resume");
            
            nomorAmend.innerHTML="";
            resume.innerHTML="";
            
            
            
            var ulResume = document.getElementById('ulResume');
            ulResume.innerHTML = '';
            
            var liResumeKeterangan,liResumeNomorAmend;
            
            for (var i=0; i < value.resume.length; i++) {
                // textAmend.innerHTML ="No Amend";
                // amend.innerHTML += value.resume[i].amendemen +"<br>";
                //   console.log(value.resume[i].amendemen);
                // //   nomorAmend.innerHTML += value.resume[i].nomorAmend +"<br>";
                //   console.log(value.resume[i].nomorAmend);
                // //   resume.innerHTML += value.resume[i].keterangan+"<br>";
                //   console.log(value.resume[i].keterangan);
                  var para = document.createElement("b");
                  liResumeNomorAmend = document.createElement('li');
                  liResumeNomorAmend.appendChild(document.createTextNode("Amend Ke "+value.resume[i].amendemen +" | Nomor Amend: "+value.resume[i].nomorAmend+""));
                  liResumeNomorAmend.appendChild(para);
                  liResumeKeterangan = document.createElement('ul');
                  liResumeKeterangan.appendChild(document.createTextNode("Keterangan :"+value.resume[i].keterangan));
                  
                  ulResume.appendChild(liResumeNomorAmend);
                  liResumeNomorAmend.appendChild(liResumeKeterangan);
                 
            }
            
            
            $("#resumeModal").modal();
            
        }
        
        function viewLampiran(val){
            var ul = document.getElementById("list");
            var li = document.createElement("li");
            
            var menu = document.getElementById('list');
            menu.innerHTML = '';
             
            var value=search(val,myArr.data);
            var loop= document.getElementById("loop");
            
            
             for (var i=0; i < value.resume.length; i++) {
                // console.log(value.resume[i].lampiranAmend);
                
            //     var children=ul.children.length + 1;
            //     li.setAttribute("id", "Kontrak"+children)
            //  // li.style.backgroundColor = "red";
            //     var link = document.getElementById("Kontrak"+children);
            //  // link.setAttribute('href', "http://facebook.com");
            //     link.innerHTML="a";
              
            //     li.appendChild(document.createTextNode("Kontrak"));
            //     ul.appendChild(li)
                
         
              
            }
        
            
             $("#myLampiran").modal();
            
        }
       
        
        function write_navBar(val) {
                        
             
              var value=search(val,myArr.data);
              var menu = document.getElementById('list');
              menu.innerHTML = '';
              
              
              
              var ul = document.createElement("ul");
              var li, a, text, pane,obj;
              
                var newItem = document.createElement("LI");
                newItem.innerHTML = '';
                a  = document.createElement('a');
                a.href="#0"; 
                a.setAttribute("data-toggle", "tab");
                a.appendChild(document.createTextNode("Kontrak induk"));
                newItem.appendChild(a);  
                menu.insertBefore(newItem, menu.childNodes[0]);   
                
                
                 
                para = document.createElement("div");
                
             // var t = document.createTextNode("This is a paragraph."+i);
                para.setAttribute("class","tab-pane fade");
                para.setAttribute("id","0");
                para.setAttribute("role","tabpanel");
                
                
                obj = document.createElement('object');
                obj.setAttribute("data",value.lampiranKontrak);
                obj.style.width="100%";
                obj.style.height="100%";
                para.appendChild(obj);
                document.getElementById("tab").appendChild(para);
                 
                 
                 
              for (var i = 0, l = value.resume.length; i < l; ++i) {
                li = document.createElement('li');
                li.setAttribute("role", "presentation");
               
                a  = document.createElement('a');
                // text = document.createTextNode("Amend ke-"+value.resume[i].amendemen);
                a.href = "#"+value.resume[i].amendemen;
                 
             
                a.setAttribute("data-toggle", "tab");
                a.appendChild(document.createTextNode("Amend ke-"+value.resume[i].amendemen));
                li.appendChild(a);
                ul.appendChild(li);
                 
                
                para = document.createElement("div");
                // var t = document.createTextNode("This is a paragraph."+i);
                para.setAttribute("class","tab-pane fade");
                para.setAttribute("id",value.resume[i].amendemen);
                para.setAttribute("role","tabpanel");
                // para.appendChild(t);
                
                obj = document.createElement('object');
                obj.setAttribute("data",value.resume[i].lampiranAmend);
                obj.style.width="100%";
                obj.style.height="100%";
               
                para.appendChild(obj);
                
                document.getElementById("tab").appendChild(para);
                document.getElementById("list").appendChild(ul);
                
               }
               
              
            //   document.getElementById("tab").appendChild(para);
            //   document.querySelector("#tab").appendChild(pane);
            //   document.querySelector("#list").appendChild(ul);
              
               $("#myLampiran").modal();
            }

        function search(nameKey, myArray){
            
                for (var i=0; i < myArray.length; i++) {
                    if (myArray[i].idKontrak == nameKey) {
                        return myArray[i];
                        // console.log(myArray[i]);
                    }
                }
            }
</script>
</body>
</html>