<?php

class Model_auth extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	/* 
		This function checks if the email exists in the database
	*/
	public function check_email($email)
	{
		if ($email) {

			$sql = 'SELECT * FROM users WHERE users_email = ?';

			$query = $this->db->query($sql, array($email));

			$result = $query->num_rows();


			return ($result == 1) ? true : false;
		}

		return false;
	}

	public function checkEmailVerified($email) {
		$sql = 'SELECT users.idusers,token, users_email, email_verified FROM users
		JOIN email_verifications ON email_verifications.idusers = users.idusers
		WHERE users_email = ?';
		return $this->db->query($sql , [$email])->row_array();
	}

	public function check_number($email)
	{
		if ($email) {
			$sql = 'SELECT * FROM users WHERE users_number = ?';
			$query = $this->db->query($sql, array($email));
			$result = $query->num_rows();
			return ($result == 1) ? true : false;
		}

		return false;
	}
	/* 
		This function checks if the email and password matches with the database
	*/
	public function login($email, $password)
	{
		if ($email && $password) {
			$sql = "SELECT * FROM users WHERE users_email = ?";
			$query = $this->db->query($sql, array($email));
			if ($query->num_rows() == 1) {
				$result = $query->row_array();
				$hash_password = password_verify($password, $result['users_password']);
				if ($hash_password === true) {
					return $result;
				} else {
					return false;
				}
			} else {
				return false;
			}
		}
	}

	public function checkPass($id, $password)
	{
		if ($id && $password) {
			$sql = "SELECT * FROM users WHERE idusers = ?";
			$query = $this->db->query($sql, array($id));
			if ($query->num_rows() == 1) {
				$result = $query->row_array();
				$hash_password = password_verify($password, $result['users_password']);
				if ($hash_password === true) {
					return $result;
				} else {
					return false;
				}
			} else {
				return false;
			}
		}
	}

	public function addUser($params)
	{
		$this->db->insert('users', $params);
		return $this->db->insert_id();
	}

	public function addEmailRecord($params) {
		$this->db->insert('email_verifications', $params);
		return $this->db->insert_id();
	}

	public function getEmailRecord($token , $id) {
        return $this->db->get_where('email_verifications', array('token' => $token,'idusers' => $id))->row_array();
	}

	public function getEmailDetails($id) {
		$sql = 'SELECT users_email, token FROM users
		JOIN email_verifications ON email_verifications.idusers = users.idusers
		WHERE users.idusers = ?';
		return $this->db->query($sql , [$id])->row_array();
	}

	public function updateEmailRecord($id, $params){
		$this->db->where('id', $id);
        return $this->db->update('email_verifications', $params);
	}
	public function updatePassword($params, $id){
		$this->db->where('idusers', $id);
        return $this->db->update('users', $params);
	}
}
