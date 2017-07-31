<?php

class Home extends CI_Controller {
	
	public function index()
	{
		/*
		if($this->session->userdata('logged_in') == TRUE)
		{
			$user_id = $this->session->userdata('user_id');
			
			$data['lists'] = $this->list_model->get_lists($user_id);
			
			$data['tasks'] = $this->task_model->get_tasks($user_id);
		}
		*/
		
		$data['main_content'] = 'home';
		
		$this->load->view('layouts/login_header', $data);
	}
}