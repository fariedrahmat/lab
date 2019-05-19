<?php


/**
 * Model
 */
class User_model extends CI_Model
{
	
	public function insert_user($user_data)
	{

		return $this->db->insert('user',$user_data);

	}


	public function fetch_all_users()
	{
		$query = $this->db->get('user');
		foreach ($query->result() as $row) 
		{
			//echo $row->full_name;

			$user_data[] = [
				'username' => $row->username,
				'email' => $row->email,
				'full_name' => $row->full_name,
				'insert' => $row->insert,
				'update' => $row->update,
			];
		}
		return $user_data;
	}

	
}