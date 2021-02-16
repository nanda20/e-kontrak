<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* This is Example Controller
*/
class UserView extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->level==""){
	        redirect("/Login");
	    }
	 
	}
	
	function index() {
		 
// 		$this->load->view('v_header');	
		$this->load->view('userView/v_userView');
// 		$this->load->view('v_footer');	
		 
	 
	}
	
	public function apidata(){
		$data=$this->db->query('select * from kontrak k join vendor v on k.kodeVendor=v.kodeVendor where k.validasi=3 ')->result();
	 
		
	    $i=0;
	    $i2=0;
		$dt=array();
	
		foreach($data as $val){
		   	$dt2=array();
		   
		    $dataAmend=$this->db->query('select * from amendkontrak where idkontrak='.$val->idKontrak.' order by amendemen ')->result();
		    $idKontrak="";
		    foreach($dataAmend as $val2){
		      $dt2[$i2]=array(
		           'idAmendKontrak'=>$val2->idAmendKontrak,
		           'idKontrak'=>$val2->idKontrak,
		           'keterangan'=>$val2->ketTambahan,
		           'nomorAmend'=>$val2->nomorAmend,
		           'lampiranAmend'=>$val2->lampiranAmend,
		           'amendemen'=>$val2->amendemen
		             );
		             $idKontrak=$val2->idKontrak;
		      $i2++;
		      
		    }
		   
		    
		    if($val->idKontrak==$idKontrak){
		         $dt2=$dt2;
		     
		    }else
		    {
		        $dt2=0;
		    }
		    
		     $dt[$i]=array(
		         'idKontrak'=>$val->idKontrak,
		         'lampiranKontrak'=>$val->lampiranKontrak,
		          'namaVendor'=>$val->namaVendor,
		         'kodeVendor'=>$val->kodeVendor,
		         'nomorKontrak'=>$val->nomorKontrak,
		         'tanggalMulai'=>$val->tanggalMulai,
		         'tanggalSelesai'=>$val->tanggalSelesai,
		         'kategori'=> $val->kategori,
		         'ketTambahan'=>$val->ketTambahan,
		          'resume'=> $dt2
		         );
		 
	    
		  $i2=0; 
		  $i++;
           
		}
		echo json_encode(array('data'=>$dt));
// 		echo json_encode(array('data'=>$data));
	}
	
}