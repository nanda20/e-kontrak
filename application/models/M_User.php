<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {  
    
    function getALL(){ 	
        return $this->db->get('user')->result(); 
        } 	
        

}  /* End of file M_Vendor */ /* Location: ./application/models/M_Vendor */