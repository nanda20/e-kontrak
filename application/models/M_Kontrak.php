<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kontrak extends CI_Model {

	function getAll(){
		return $this->db->get('kontrak')->result();
	}
	
	function getAllAmend(){
		return $this->db->query('select * from amendkontrak order by nomorKontrak')->result();	
	}

}

/* End of file M_Vendor */
/* Location: ./application/models/M_Vendor */