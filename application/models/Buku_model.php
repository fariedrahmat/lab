<?php


/**
 * Model
 */
class Buku_model extends CI_Model
{
	
	public function insert_buku($user_data)
	{

		return $this->db->insert('tabel_buku',$user_data);

	}


	public function fetch_all_buku()
	{
		$query = $this->db->get('tabel_buku');
		foreach ($query->result() as $row) 
		{
			//echo $row->full_name;

			$user_data[] = [
				'nama' => $row->nama,
				'penerbit' => $row->penerbit,
				'insert' => $row->insert,
				'update' => $row->update,
			];
		}
		return $user_data;
	}

	
}