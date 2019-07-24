<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk')!=TRUE && $this->session->userdata('access')!='admin'){$url=base_url('login');redirect($url);};
		
		$this->load->model(['model','m_validation']);
	}
	
	public function index()
	{
		$data = [
					'content' 	=> 'v_dashboard',
					'section'	=> 'Dashboard'
				];
		$this->load->view('template', $data);
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */