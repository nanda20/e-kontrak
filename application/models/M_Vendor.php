<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Vendor extends CI_Model {

	function getALL(){
	    if($this->session->level=="vendor"){
	        return $this->db->get_where('vendor', array('kodeVendor' => $this->session->kodevendor))->result();
	    }else{
	        return $this->db->get('vendor')->result();
	    }
		
	}
	

}

/* End of file M_Vendor */
/* Location: ./application/models/M_Vendor */