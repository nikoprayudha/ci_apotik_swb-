<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function login($username,$password)
	{
		$this->db->select('idPgw,username,password');
		$this->db->from('pegawai');
		$this->db->where('username', $username);
		$this->db->where('password', MD5($password));
		$query = $this->db->get();
		if ($query->num_rows()==1) {
			return $query->result();
		} else {
			return false;
		}
	}
	
}

/* End of file user.php */
/* Location: ./application/models/user.php */