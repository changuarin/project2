
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_con extends CI_Controller {

	/*
	public function index()
	{
		$data['main_content'] = 'login/index';
		
		$this->load->view('layouts/login_header', $data);
	}
	*/
	public function index()
	{
		$data['main_content'] = 'login/index';
		
		$this->load->view('layouts/login_header', $data);
	}
	
	public function login()
	{
	
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('login_fail', 'Sorry, login fail ');
			redirect('home/index');
		}
		
		
		 else {
		
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user_id = $this->user_model->login_user($username,$password);

			if($user_id)
			{
				$user_data = array(
						'id'	    => $user_id,
						'username'	=> $username,
						'logged_in' => true
					);
				$this->session->set_userdata($user_data);
				
				$this->session->set_flashdata('login_success', 'You are now logged in');
				$this->session->set_flashdata('login_successs', "Logged in as " .$username. "");

				redirect('branches/dashboard');
			}
			else 
			{
				$this->session->set_flashdata('login_failed', 'Sorry, the login info you entered is invalid');

				redirect('main_con/login');
			}

			
			
		}
		
	}

	public function view()
	{
		$data['users'] = $this->user_model->get_users();
		$data['main_content'] = 'user/index';
		$this->load->view('layouts/main_dashboard',$data);
	}	

	public function register()
	{
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|max_length[50]|min_length[2]');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|max_length[50]|min_length[2]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[100]|min_length[5]|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|max_length[20]|min_length[4]|is_unique[tbl_users.username]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[50]|min_length[8]');
		$this->form_validation->set_rules('password2', 'Confirm Password', 'trim|required|max_length[50]|min_length[2]|matches[password]');
		
		if($this->form_validation->run() == FALSE)
		{
			$data['main_content'] = 'user/add';
			
			$this->load->view('layouts/main_dashboard', $data);
		} else {
			if($this->user_model->create_user())
			{
				$this->session->set_flashdata('registered', 'Account registered! ');
				
				redirect('main_con/view');
			}
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('fname', 'Branch Name', 'required|trim|min_length[6]');
		
		if($this->form_validation->run() == FALSE)
		{
			$data['user'] = $this->user_model->get_user($id);
			
			$data['main_content'] = 'user/edit';
			
			$this->load->view('layouts/main_dashboard', $data);
		}
		else
		{
			$data = array(
					'fname'		   => $this->input->post('fname'),
					'lname'		   => $this->input->post('lname'),
					'email'		   => $this->input->post('email'),
				);
			
			if($this->user_model->edit_user($id, $data))
			{
				$this->session->set_flashdata('user_updated', 'Account has been updated');
				
				redirect('main_con/view');
			}
		}
	}

	public function delete($id)
	{
		if($this->user_model->delete_user($id))
		{
			$this->session->set_flashdata('user_deleted', 'Account has been deleted');
			
			redirect('main_con/view');
		}
	}

	public function logout()	
	
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();

		$this->session->set_flashdata('logout_msg', 'Logged out !');
		
		redirect('main_con/login');
	}
	
}
