<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* This is Example Controller
*/
class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->template->write_view('sidenavs', 'template/default_sidenavs', true);
		$this->template->write_view('navs', 'template/default_topnavs.php', true);
	}
	
	
	function dashboard() {
		$this->template->write('title', 'Dashboard', TRUE);
		$this->template->write('header', 'Dashboard');
		$this->load->model('M_Dashboard');
		if($this->session->level=="vendor"){
		
		$data['data']=$this->M_Dashboard->getQueryVendor();
		$this->template->write_view('content', 'dashboard/v_dashboard_vendor', $data, true);    
		
		    
		}else{
		$data['data']=$this->M_Dashboard->getQuery();
		$this->template->write_view('content', 'dashboard/v_dashboard', $data, true);
        }
		$this->template->render();
	}
}