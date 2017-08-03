<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branches extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		
		if( ! ($this->session->userdata('logged_in')))
		{
			$this->session->set_flashdata('no_access', 'Sorry, you are not logged in');
			
			redirect('home/index');
		}
	}
	
	public function dashboard()
	{ 

		$data['main_content'] = 'branches/index';

		$this->load->view('layouts/main_dashboard',$data);
	}

	public function index()
	{
		$data['branches'] = $this->branch_model->get_branches();
		$data['main_content'] = 'branches/branch';
		$this->load->view('layouts/main_dashboard',$data);
	}

	public function add()
	{
		$this->form_validation->set_rules('name', 'Branch Name', 'required|trim|min_length[6]');
		
		if($this->form_validation->run() == FALSE)
		{
			$data['main_content'] = 'branches/add';
			
			$this->load->view('layouts/main_dashboard', $data);
		}
		else
		{
			$data = array(
					'name'					 => $this->input->post('name'),
					'company'				 => $this->input->post('company'),
					'address'				 => $this->input->post('address'),
					'contact_no'		 => $this->input->post('contact_no'),
					'contact_person' => $this->input->post('contact_person'),
				);
			
			if($this->branch_model->add_branch($data))
			{
				$this->session->set_flashdata('branch_added', 'Branch has been added');
				
				redirect('branches/index');
			}
		}
	}
	
	public function edit($id)
	{
		$this->form_validation->set_rules('name', 'Branch Name', 'required|trim|min_length[6]');
		
		if($this->form_validation->run() == FALSE)
		{
			$data['branch'] = $this->branch_model->get_branch($id);
			
			$data['main_content'] = 'branches/edit';
			
			$this->load->view('layouts/main_dashboard', $data);
		}
		else
		{
			$data = array(
					'name'					 => $this->input->post('name'),
					'company'				 => $this->input->post('company'),
					'address'				 => $this->input->post('address'),
					'contact_no'		 => $this->input->post('contact_no'),
					'contact_person' => $this->input->post('contact_person'),
				);
			
			if($this->branch_model->edit_branch($id, $data))
			{
				$this->session->set_flashdata('branch_updated', 'Branch has been updated');
				
				redirect('branches/index');
			}
		}
	}
	
	public function delete($id)
	{
		if($this->branch_model->delete_branch($id))
		{
			$this->session->set_flashdata('branch_deleted', 'Branch has been deleted');
			
			redirect('branches/index');
		}
	}


}