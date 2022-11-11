<?php 

class Model_users extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getUserData($userId = null) 
	{
		if($userId) {
			$sql = "SELECT * FROM admin_users WHERE idausers = ?";
			$query = $this->db->query($sql, array($userId));
			return $query->row_array();
		}

		$sql = "SELECT * FROM admin_users WHERE idausers != ? ORDER BY idausers DESC";
		$query = $this->db->query($sql, array(1));
		return $query->result_array();
	}

	public function edit($data = array(), $id = null, $group_id = null)
	{
		$this->db->where('idausers', $id);
		$update = $this->db->update('admin_users', $data);
			
		return ($update == true) ? true : false;	
	}
	public function update($hashpassword, $email)
	{
		$this->db->where('email', $email);
		$this->db->set('password', $hashpassword);
		$update = $this->db->update('admin_users');
		return ($update == true) ? true : false;	
	}

    function update_users($params)
    {
		$sr_no= $this->session->userdata('id');
        $this->db->where('idausers',$sr_no);
        return $this->db->update('admin_users',$params);
    }

}