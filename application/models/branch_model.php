<?php

class branch_model extends CI_Model {

	public function get_branches()
	{
		$this->db->order_by("name", "asc");
		$query = $this->db->get('branches');

		
		return $query->result();
	}
	public function add_branch($data)
	{
		$query = $this->db->insert('branches', $data);
		
		return $query;
	}
	
	public function get_branch($id)
	{
		$this->db->where('id', $id);
		
		$query = $this->db->get('branches');
		
		return $query->row();
	}
	
	public function edit_branch($id, $data)
	{
		$this->db->where('id', $id);
		
		$query = $this->db->update('branches', $data);
		
		return $query;
	}
	
	public function delete_branch($id)
	{
		$this->db->where('id', $id);
		
		$query = $this->db->delete('branches');
		
		return $query;
	}
}
