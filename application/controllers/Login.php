<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Login');
	}
	
	public function index()
	{

		$user=$this->input->post("user");
		if(isset($user)){
		$data=[
				'user'=> $user,
				'pass'=> $this->input->post("pass")
			  ];
			  
			  
			$login=$this->M_Login->cek_login($data);
			
            
            if(count($login)==1){
                        $this->session->set_userdata(array("nama"=>$login[0]->nama));
        				$this->session->set_userdata(array("status"=>"ok"));
        				$this->session->set_userdata(array("level"=>$login[0]->level));
        		
        		if($login[0]->level=='user'){
        		    redirect("/UserView");
        		}
        		else{
        		redirect("/Home/dashboard");
        		}
             
            }else{
              $login=$this->M_Login->cek_login_vendor($data);
              
              if(count($login)==1){
                       $this->session->set_userdata(array("nama"=>$login[0]->namaVendor));
        				$this->session->set_userdata(array("status"=>"ok"));
        				$this->session->set_userdata(array("level"=>"vendor"));
        				$this->session->set_userdata(array("kodevendor"=>$login[0]->kodeVendor));
                    redirect("/Home/dashboard");
              }else{
                    $this->load->view('v_login');    
              }
               
            }

		}else{
			$this->load->view('v_login');
		}
		


	}

	function logout(){
		$this->session->set_userdata(array("status"=>"gagal"));
		$this->session->sess_destroy();
		redirect('Login');
        // $this->index();
	}
    

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */