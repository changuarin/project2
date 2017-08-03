<?php

class User_model extends CI_Model {
	
	public function login_user($username, $password)
	{
		$enc_password = md5($password);

		$this->db->where('username', $username);
		$this->db->where('password', $enc_password);
		
		$result = $this->db->get('tbl_users');
		
		if($result->num_rows() == 1)
		{
			return $result->row(0)->id;
		} else {
			return FALSE;
		}
	}
	public function get_user($id)
	{
		$this->db->where('id',$id);

		$query = $this->db->get('tbl_users');
		
		return $query->row();
	}
	public function get_users()
	{
	

		$query = $this->db->get('tbl_users');
		
		return $query->result();
	}
	
	
	public function create_user()
	{
		$enc_password = md5($this->input->post('password'));
		
		$data = array(
				'fname'     => $this->input->post('first_name'),
				'lname'	    => $this->input->post('last_name'),
				'email'		=> $this->input->post('email'),
				'username'	=> $this->input->post('username'),
				'password'	=> $enc_password
			);
		
		$query = $this->db->insert('tbl_users', $data);
		
		return $query;
	}

	public function edit_user($id, $data)
	{
		$this->db->where('id',$id);

		$query = $this->db->update('tbl_users',$data);

		return $query;
	}

	public function delete_user($id)
	{
		$this->db->where('id',$id);

		$query = $this->db->delete('tbl_users');

		return $query;
	}

	
	
	
	
}