<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destination extends CI_Controller {

	var $table	 = 'tb_destination';
	var $section = 'Destination';

	function __construct(){
		parent::__construct();
		// if($this->session->userdata('masuk')!=TRUE && $this->session->userdata('access')!='admin'){$url=base_url('admin/login');redirect($url);};
		
		$this->load->model(['model','m_validation']);
		$this->load->library(['form_validation','encrypt']);
	}

	public function index()
	{
		$data = [
					'content' 	=> $this->section.('/view'),
					'section' 	=> $this->section,
					'show'		=> $this->model->get_all($this->table)->result()
				];
		$this->load->view('template', $data);
	}

	public function post()
	{

		$data = [
					'content' 	=> $this->section.('/post'),
					'section' 	=> $this->section,
				];
		$this->load->view('template', $data);
	}

	public function save(){

		$post 		= $this->input->post();

		$validasi 	= $this->form_validation->set_rules($this->m_validation->val_destination());
		if($validasi->run()==false){
			$data = [
					'content' 	=> $this->section.('/post'),
					'section' 	=> $this->section,
				];
			$this->load->view('template', $data);
		}else{
			$data = [
						'id_destination'	=> null,
						'destination'		=> $post['destination'],
						'price'				=> $post['price'],
						'category'			=> $post['category'],
						'description'		=> $post['description'],
					];

			$this->model->save($this->table, $data);

			$this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show " role="alert">Your data has been saved successfully.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('destination/post');
		}
		
	}


	public function edit($id=null)
	{
		if(!isset($id)) show_404();
		$id = str_replace(['-','_','~'],['=','+','/'],$id);
		$id = $this->encrypt->decode($id);

		$data = [
					'content' 	=> $this->section.('/edit'),
					'section' 	=> $this->section,
					'show'		=> $this->model->get_by($this->table, 'id_destination', $id)->result(),
					'id'		=> str_replace(['=','+','/'], ['-','_','~'], $this->encrypt->encode($id))

				];
		$this->load->view('template', $data);
	}


	public function update($id=null)
	{
		if(!isset($id)) show_404();
		$post 		= $this->input->post();
		$id 		= $this->encrypt->decode(str_replace(['-','_','~'],['=','+','/'],$id));
		$validasi 	= $this->form_validation->set_rules($this->m_validation->val_destination());
		if($validasi->run()==false){
			$data = [
					'content' 	=> $this->section.('/edit'),
					'section' 	=> $this->section,
					'show'		=> $this->model->get_by($this->table, 'id_destination', $id)->result(),
					'id'		=> str_replace(['=','+','/'], ['-','_','~'], $this->encrypt->encode($id))

				];
			$this->load->view('template', $data);
		}else{
			$data = [
					'destination'		=> $post['destination'],
					'price'				=> $post['price'],
					'category'			=> $post['category'],
					'description'		=> $post['description'],
					];
			$this->model->update($this->table, 'id_destination', $id, $data);
			$this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show mb-3" role="alert">Data has been updated successfully.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('destination');
		}
	}



	public function delete($id=null)
	{
		if(!isset($id)) show_404();
		$id = str_replace(['-','_','~'],['=','+','/'],$id);
		$id = $this->encrypt->decode($id);
		$this->model->delete($this->table, 'id_destination' , $id);
		$this->session->set_flashdata('flash', '<div class="alert alert-danger alert-dismissible fade show " role="alert">Data has been delete successfully.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('destination');
	}




}

/* End of file guide.php */
/* Location: ./application/controllers/guide.php */