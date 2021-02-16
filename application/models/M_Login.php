<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {


public function cek_login($data)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('password',md5($data['pass']));
        $this->db->where('nik',$data['user']);
		$query= $this->db->get();
		return  $query->result();

	}
	
public function cek_login_vendor($data)
	{
		$this->db->select('*');
		$this->db->from('vendor');
		$this->db->where('password',md5($data['pass']));
        $this->db->where('kodevendor',$data['user']);
		$query= $this->db->get();
		return  $query->result();

	}

}
