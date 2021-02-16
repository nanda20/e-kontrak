<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataMaster extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->template->write_view('sidenavs', 'template/default_sidenavs', true);
		$this->template->write_view('navs', 'template/default_topnavs.php', true);
		if($this->session->level==""){
	        redirect("/Login");
	    }
	}

	function viewDataVendor(){
	    
		$this->template->write('title', 'Data Vendor', TRUE);
		$this->template->write('header', 'Tabel Vendor');
		
		// for ($i=0; $i <100 ; $i++) { 
		// 	$this->db->insert('vendor',array('kodeVendor'=>$i,'namaVendor'=>'a','keterangan'=>'y'));
		// }
		$this->load->model('M_Vendor');
		$data['data']= $this->M_Vendor->getAll();

		$this->template->write_view('content', 'vendor/v_dataVendor', $data, true);

		$this->template->render();
	    

	}

	function viewDataUser(){
		$this->template->write('title', 'Data User', TRUE);
		$this->template->write('header', 'Tabel User');
    	$this->load->model('M_User');
		$data['data']= $this->M_User->getAll();

		$this->template->write_view('content', 'user/v_dataUser', $data, true);

		$this->template->render();		
	}
	
	
	function viewEditDataUser($idUser){
		$this->template->write('title', 'Data User', TRUE);
		$this->template->write('header', 'Edit Data');
		$query['data'] = $this->db->get_where('user', array('nik' => $idUser))->result();
		$this->template->write_view('content', 'user/v_editDataUser',$query, true);

		$this->template->render();

	}
	
		function viewTambahDataUser(){
		$this->template->write('title', 'Data User', TRUE);
		$this->template->write('header', 'Edit Data');
		$this->template->write_view('content', 'user/v_tambahDataUser','', true);

		$this->template->render();

	}
	
		function simpanDataUser(){ // fungsi simpan edit user

		 $nik=$this->input->post('nik');
		 $nama=$this->input->post('nama');
		 $level=$this->input->post('level');
		 $oldPassword=$this->input->post('oldPassword');
		 $newPassword=$this->input->post('newPassword');
        
        //  $cek=$this->db->query("select * from user where nik=.'$nik'. and password=.'$oldPassword'.")->result();
        //  print_r($cek);
            
		 $this->db->set(array('nama'=>$nama,'level'=>$level));
		 $this->db->where('nik', $nik);
		 $this->db->update('user'); 

         $this->viewDataUser();

	}
	
	function tambahDataUser(){ // fungsi untuk proses simpan tambah user
	    		

		 $nik=$this->input->post('nik');
		 $nama=$this->input->post('nama');
		 $level=$this->input->post('level');
		 $password=$this->input->post('password');

	    $data = array(
               'nik' => $nik ,
               'nama' => $nama,
               'level' => $level,
               'password' =>md5($password)
            );

        $this->db->insert('user', $data); 

        $this->viewDataUser();

	}
	
	function deleteDatauser($nik){
	     $this->db->delete('user', array('nik' => $nik)); 
	     redirect('DataMaster/viewDataUser','refresh');
	}
	    
	
	function viewTambahDataVendor(){
		$this->template->write('title', 'Data Vendor', TRUE);
		$this->template->write('header', 'Tambah Data');
		$this->template->write_view('content', 'vendor/v_tambahDataVendor','', true);
		$this->template->render();

	}
	
	function simpanDataVendor(){ // fungsi untuk menyimpan update data vendor
    
		 $kv=$this->input->post('kodeVendor');
		 $nv=$this->input->post('namaVendor');
		 $k=$this->input->post('keterangan');

		 $this->db->set(array('namaVendor'=>$nv,'keterangan'=>$k));
		 $this->db->where('kodeVendor', $kv);
		 $this->db->update('vendor'); 

// 		 $this->session->set_flashdata('status', 1);
// 		 redirect("DataMaster/viewEditDataVendor/".$kv);        
        // recirect("DataMaster/viewDataVendor");
        $this->viewDatavendor();

	}
	
	function tambahDataVendor(){ // fungsi untuk proses simpan tambah vendor
		 $kv=$this->input->post('kodeVendor');
		 $nv=$this->input->post('namaVendor');
		 $k=$this->input->post('keterangan');

	    $data = array(
               'kodeVendor' => $kv ,
               'namaVendor' => $nv,
               'keterangan' => $k, 
               'password' =>md5($kv), 
            );

        $this->db->insert('vendor', $data); 
        $this->viewDataVendor();

	}
	
	function deleteDataVendor($kv){
	     $this->db->delete('vendor', array('kodeVendor' => $kv)); 
	     redirect('DataMaster/viewDataVendor','refresh');
	}

	function viewEditDataVendor($idVendor){
		$this->template->write('title', 'Data Vendor', TRUE);
		$this->template->write('header', 'Edit Data');
		$query['data'] = $this->db->get_where('vendor', array('kodeVendor' => $idVendor))->result();
		$this->template->write_view('content', 'vendor/v_editDataVendor',$query, true);
		$this->template->render();

	}
	
	function viewTambahDataKontrak(){
	    $this->template->write('title', 'Data Kontrak', TRUE);
		$this->template->write('header', 'Tambah Kontrak Induk');
		
		if($this->session->level=="vendor"){
		    $query['vendor']= $this->db->query('select * from vendor where kodeVendor='.$this->session->kodevendor.' ')->result();
		}else{
		    $query['vendor']= $this->db->get('vendor')->result();
		}
		$this->template->write_view('content', 'kontrak/v_tambahDataKontrak',$query, true);
		
		$this->template->render();
	    
	}


	function viewDataKontrak(){
		$this->template->write('title', 'Data Kontrak Induk', TRUE);
		$this->template->write('header', 'Tabel Kontrak Induk');
		
		if($this->session->level=="vendor"){
		    $data['data']=$this->db->query('select *,sv.status,sv.id as idValidasi from kontrak  k  left join statusvalidasi sv on k.validasi=sv.id join vendor v on k.kodeVendor=v.kodeVendor where k.kodeVendor='.$this->session->kodevendor.' order by idKontrak desc')->result();	
		}else{
		$data['data']=$this->db->query('select * from kontrak  k  join vendor v on k.kodeVendor=v.kodeVendor order by idKontrak desc')->result();	
	        }
// 		$data['data']=$this->db->query('select * from kontrak')->result();	
        $this->template->write_view('content', 'kontrak/v_dataKontrak', $data, true);

		$this->template->render();

	}

	function viewEditDataKontrak($idKontrak){
// 		$nomorKontrak=str_replace(".","/",$nomorKontrak);
		$this->template->write('title', 'Data Kontrak', TRUE);
		$this->template->write('header', 'Edit Data Kontrak');
		$query['data'] = $this->db->get_where('kontrak', array('idKontrak' => $idKontrak ))->result();
		$query['vendor']= $this->db->get('vendor')->result();
		$this->template->write_view('content', 'kontrak/v_editDataKontrak',$query, true);

		$this->template->render();

	}

	function simpanDataKontrak(){ // fungsi untuk menyimpan perubhan pada edit kontrak
	
         $idKontrak=$this->input->post('idKontrak');
         $tanggalKontrak=$this->input->post('tanggalKontrak');
		 $kodeVendor=$this->input->post('kodeVendor');
		 $nomorKontrak=$this->input->post('nomorKontrak');
		 
		 $kategori=$this->input->post('kategori');
		 $tanggalMulai =$this->input->post('tanggalMulai');
		 $tanggalSelesai =$this->input->post('tanggalSelesai');
		 $jangkaWaktuPembayaran=$this->input->post('jangkaWaktuPembayaran');
		 $ketTambahan=$this->input->post('ketTambahan');


		 $config['upload_path'] = './uploads/';
        // set allowed file types
        $config['allowed_types'] = 'pdf';
        // set upload limit, set 0 for no limit
        $config['max_size']    = 0;
 
        // load upload library with custom config settings
        $this->load->library('upload', $config);
 
        $fileName="";
         // if upload failed , display errors
        if (!$this->upload->do_upload())
        {
            $this->data['error'] = $this->upload->display_errors();
             $this->data['page_data'] = 'admin/upload_view';
             //$this->load->view('admin/admin', $this->data);
         }
        else
        {
              //print_r($this->upload->data());
             // print uploaded file data
        	$result = $this->upload->data();
            echo "<pre>";
            print_r($result);
            echo "</pre>";
            $fileName=$result['file_name'];
            
        }
        
         
        
        
        if($fileName!=""){
            // echo "Lampiran di upload";
            
            
		 $this->db->set(array(
		    'tanggalKontrak'=>$tanggalKontrak,
		 	'tanggalMulai'=>$tanggalMulai,
		 	'tanggalSelesai'=>$tanggalSelesai,
		 	'jangkaWaktuPembayaran'=>$jangkaWaktuPembayaran,
		 	'ketTambahan'=>$ketTambahan,
		 	
		 	'kategori'=>$kategori,
		 	'nomorKontrak'=>$nomorKontrak,
		 	'lampiranKontrak'=>base_url().'uploads/'.$result['file_name']
		 	)
		 );
        }else{
            // echo "lampiran tidak d upload";
            
            
		 $this->db->set(array(
		 	'tanggalMulai'=>$tanggalMulai,
		 	'tanggalKontrak'=>$tanggalKontrak,
		 	'tanggalSelesai'=>$tanggalSelesai,
		 	'jangkaWaktuPembayaran'=>$jangkaWaktuPembayaran,
		 	'ketTambahan'=>$ketTambahan,
		 	'nomorKontrak'=>$nomorKontrak,
		 	'kategori'=>$kategori
		 
		 	)
		 );
        }


		 $this->db->where('idKontrak', $idKontrak);
		 $this->db->update('kontrak'); 

		 $this->session->set_flashdata('status', 1);
		 redirect("DataMaster/viewEditDataKontrak/".str_replace("/", ".",$idKontrak));

	}
	
		function tambahDataKontrak(){ // fungsi untuk proses simpan kontrak baru

		 $kodeVendor=$this->input->post('kodeVendor');
		 $nomorKontrak=$this->input->post('nomorKontrak');
		 $tanggalKontrak=$this->input->post('tanggalKontrak');
		 $kategori=$this->input->post('kategori');
		 $tanggalMulai =$this->input->post('tanggalMulai');
		 $tanggalSelesai =$this->input->post('tanggalSelesai');
		 $jangkaWaktuPembayaran=$this->input->post('jangkaWaktuPembayaran');
		 $ketTambahan=$this->input->post('ketTambahan');


		 $config['upload_path'] = './uploads/';
        // set allowed file types
        $config['allowed_types'] = 'pdf';
        // set upload limit, set 0 for no limit
        $config['max_size']    = 0;
 
        // load upload library with custom config settings
        $this->load->library('upload', $config);
 
         // if upload failed , display errors
        if (!$this->upload->do_upload())
        {
            $this->data['error'] = $this->upload->display_errors();
             $this->data['page_data'] = 'admin/upload_view';
             //$this->load->view('admin/admin', $this->data);
         }
        else
        {
              //print_r($this->upload->data());
             // print uploaded file data
        	$result = $this->upload->data();
          //  echo "<pre>";
            print_r($result);
            //echo "</pre>";
        }


		 $data=array(
		     'kodeVendor'=>$kodeVendor,
		     'nomorKontrak'=>$nomorKontrak,
		     'tanggalKontrak'=>$tanggalKontrak,
		 	'tanggalMulai'=>$tanggalMulai,
		 	'tanggalSelesai'=>$tanggalSelesai,
		 	'jangkaWaktuPembayaran'=>$jangkaWaktuPembayaran,
		 	'ketTambahan'=>$ketTambahan,
		 	'kategori'=>$kategori,
            'validasi'=>1,
		 	'lampiranKontrak'=>base_url().'uploads/'.$result['file_name']
		 	);
		  
// 		 $this->db->where('nomorKontrak', $nomorKontrak);
// 		 $this->db->update('kontrak'); 
         $db = $this->db->insert('kontrak',$data);

		 if($db){
		     $this->session->set_flashdata('status', 1);
		 redirect("DataMaster/viewtambahDataKontrak/".str_replace("/", ".",$nomorKontrak));
		 }
	}
    
   	function deleteDataKontrak($idKontrak){
	     $this->db->delete('kontrak', array('idKontrak' => $idKontrak));
	     $this->viewDataKontrak();
	     redirect('DataMaster/viewDataKontrak');
	}
    
	function viewDataAmendKontrak(){
	     
		$this->template->write('title', 'Data Amend Kontrak', TRUE);
		$this->template->write('header', 'Tabel Amend Kontrak');
		
        if($this->session->level=="vendor"){
                    $data['data']=$this->db->query('select ak.idAmendKontrak,k.kodeVendor,ak.nomorAmend,k.nomorKontrak,ak.tanggalMulai,ak.tanggalSelesai,ak.tanggalAmend,ak.lampiranAmend,ak.validasi, ak.amendemen,ak.ketTambahan from amendkontrak ak join kontrak k on ak.idKontrak=k.idKontrak  where k.kodeVendor='.$this->session->kodevendor.' order by idAmendKontrak desc')->result();	    
        }else{
            $data['data']=$this->db->query('select *,ak.validasi,ak.ketTambahan from amendkontrak ak join kontrak k on ak.idKontrak=k.idKontrak  order by idAmendKontrak desc')->result();	    
        }
        

		$this->template->write_view('content', 'kontrak/v_dataAmendKontrak', $data, true);

		$this->template->render();

	}
	
		function viewTambahDataAmendKontrak(){
		$this->template->write('title', 'Data Amend Kontrak', TRUE);
		$this->template->write('header', 'Tabel Amend Kontrak');
		
 
        $data['data']=$this->db->query('select * from kontrak order by idKontrak')->result();	
        if($this->session->level=="vendor"){
            $data['kontrak']= $this->db->query('select * from kontrak where kodeVendor='.$this->session->kodevendor.' ')->result();    
        }else{
            $data['kontrak']= $this->db->get('kontrak')->result();    
        }
      	
		$this->template->write_view('content', 'kontrak/v_tambahDataAmendKontrak', $data, true);

		$this->template->render();

	}
	
	function tambahDataAmendKontrak(){ // fungsi untuk proses simpan kontrak baru

		 $idKontrak=$this->input->post('idKontrak');
		 $nomorAmendKontrak=$this->input->post('nomorAmendKontrak');
		 $tanggalAmend=$this->input->post('tanggalAmend');
		 $kategori=$this->input->post('kategori');
		 $tanggalMulai =$this->input->post('tanggalMulai');
		 $tanggalSelesai =$this->input->post('tanggalSelesai');
		 $amandemen=$this->input->post('amandemen');
		 $ketTambahan=$this->input->post('ketTambahan');


		 $config['upload_path'] = './uploads/';
        // set allowed file types
        $config['allowed_types'] = 'pdf';
        // set upload limit, set 0 for no limit
        $config['max_size']    = 0;
 
        // load upload library with custom config settings
        $this->load->library('upload', $config);
        
         // if upload failed , display errors
        if (!$this->upload->do_upload())
        {
            $this->data['error'] = $this->upload->display_errors();
             $this->data['page_data'] = 'admin/upload_view';
             //$this->load->view('admin/admin', $this->data);
         }
        else
        {
              //print_r($this->upload->data());
             // print uploaded file data
        	$result = $this->upload->data();
           // echo "<pre>";
            print_r($result);
           // echo "</pre>";
        }


// 		 $data=array(
// 		     'nomorAmend'=>$nomorAmendKontrak,
// 		     'tanggalMulai'=>$tanggalMulai,
// 		 	'tanggalSelesai'=>$tanggalSelesai,
// 		 	'idKontrak'=>$idKontrak,
// 		 	'ketTambahan'=>$ketTambahan,
// 		 	'amendemen'=>$amandemen,
// 		 	'lampiranAmend'=>base_url().'uploads/'.$result['file_name']
// 		 	);
		 	
		  $data=array(
		     'nomorAmend'=>$nomorAmendKontrak,
		     'tanggalMulai'=>$tanggalMulai,
		 	'tanggalSelesai'=>$tanggalSelesai,
		 	'tanggalAmend'=>$tanggalAmend,
		 	'idKontrak'=>$idKontrak,
		 	'ketTambahan'=>$ketTambahan,
		 	'amendemen'=>$amandemen,
		 	'validasi'=>1,
		 	'lampiranAmend'=>base_url().'uploads/'.$result['file_name']
		 	);
		  
		  
// 		 $this->db->where('nomorKontrak', $nomorKontrak);
// 		 $this->db->update('kontrak'); 
         $db = $this->db->insert('amendkontrak',$data);

		 if($db){
		     $this->session->set_flashdata('status', 1);
		 redirect("DataMaster/viewTambahDataAmendKontrak",$nomorKontrak);
		 }
	}
	
	
	function simpanDataAmendKontrak(){// fungsi untuk proses simpan update amend kontrak  
         $idAmend= $this->input->post('idAmendKontrak');
		 $idKontrak=$this->input->post('idKontrak');
		 $tanggalAmend=$this->input->post('tanggalAmend');
		 $fileLama=$this->input->post('fileLama');
		 $nomorAmendKontrak=$this->input->post('nomorAmendKontrak');
		 $kategori=$this->input->post('kategori');
		 $tanggalMulai =$this->input->post('tanggalMulai');
		 $tanggalSelesai =$this->input->post('tanggalSelesai');
		 $amandemen=$this->input->post('amandemen');
		 $ketTambahan=$this->input->post('ketTambahan');
        
      
        
		 $config['upload_path'] = './uploads/';
        // set allowed file types
         $config['allowed_types'] = 'pdf';
        // set upload limit, set 0 for no limit
         $config['max_size']    = 0;
 
        // load upload library with custom config settings
        $this->load->library('upload', $config);
        $fileName="";
         // if upload failed , display errors
        if (!$this->upload->do_upload())
        {
            $this->data['error'] = $this->upload->display_errors();
             $this->data['page_data'] = 'admin/upload_view';
             //$this->load->view('admin/admin', $this->data);
         }
        else
        {
        	$result = $this->upload->data();
            // echo "<pre>";
            // print_r($result);
           
            $fileName= $result['file_name'];
            // echo "</pre>";
        }
        
        
        if($fileName!=""){
 
         $this->db->set(array(
		     'nomorAmend'=>$nomorAmendKontrak,
		     'tanggalMulai'=>$tanggalMulai,
		     'tanggalAmend'=>$tanggalAmend,
		 	'tanggalSelesai'=>$tanggalSelesai,
		 	'idKontrak'=>$idKontrak,
		 	'ketTambahan'=>$ketTambahan,
		 	'amendemen'=>$amandemen,
		 	'lampiranAmend'=>base_url().'uploads/'.$result['file_name']
		 	));

        }else{
            $this->db->set(array(
		     'nomorAmend'=>$nomorAmendKontrak,
		     'tanggalAmend'=>$tanggalAmend,
		     'tanggalMulai'=>$tanggalMulai,
		 	'tanggalSelesai'=>$tanggalSelesai,
		 	'idKontrak'=>$idKontrak,
		 	'ketTambahan'=>$ketTambahan,
		 	'amendemen'=>$amandemen
		 	 
		 	));
		 	echo $idAmend;

        } 
		 $this->db->where('idAmendKontrak', $idAmend);
		 $db=$this->db->update('amendkontrak'); 
        

		 if($db){
		     $this->session->set_flashdata('status', 1);
		    redirect("DataMaster/viewEditDataAmendKontrak/".str_replace("/", ".",$idAmend));
		 }
	}
	
	
	
		function viewEditDataAmendKontrak($idAmendKontrak){ //  
		$this->template->write('title', 'Data Amend Kontrak', TRUE);
		$this->template->write('header', 'Edit Data Amend Kontrak');
		$query['data'] = $this->db->get_where('amendkontrak', array('idAmendKontrak' => $idAmendKontrak ))->result();
		$query['kontrak']= $this->db->get('kontrak')->result();
		$this->template->write_view('content', 'kontrak/v_editDataAmendKontrak',$query, true);
		$this->template->render();

	}
	
		function deleteDataAmendKontrak($idAmendKontrak){
	     $this->db->delete('amendkontrak', array('idAmendKontrak' => $idAmendKontrak));
	     redirect('DataMaster/viewDataAmendKontrak');
	}
	
	function validasiAmendKontrak($idAmendKontrak,$status)
	{
	    
	    $validasi=0;
	    if($status==1){
	    if($this->session->level=="officer"){
	        $validasi=2;
	    }
	    if($this->session->level=="kadis"){
	       $validasi=3;
	    }
	    }else{
	    $validasi=0;    
	    }
	   // echo $this->session->level;
	    
	     $this->db->set(array(
		    "validasi"=>$validasi
		 	));
	
	     $this->db->where(idAmendKontrak, $idAmendKontrak);
		 $update=$this->db->update('amendkontrak'); 
	
		  redirect('DataMaster/viewDataAmendKontrak');
		
	}
	
		function validasiKontrak($idKontrak,$status)
	        {
    	    $validasi=0;
    	    if($status==1){
    	    if($this->session->level=="officer"){
    	        $validasi=2;
    	    }
    	    if($this->session->level=="kadis"){
    	       $validasi=3;
    	    }
    	    }else{
    	    $validasi=0;    
    	    }
	       // echo $this->session->level;
	    
	     $this->db->set(array(
		    "validasi"=>$validasi
		 	));
	
	     $this->db->where(idKontrak, $idKontrak);
		 $update=$this->db->update('kontrak'); 
	
		  redirect('DataMaster/viewDataKontrak');
		
	}

}