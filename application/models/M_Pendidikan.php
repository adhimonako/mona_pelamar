<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class M_Pendidikan extends CI_Model 
{
	//untuk tampilkan semua pendidikan
	public function get() 
	{
		$this->db->select("*")->from('pendidikan');
		$query = $this->db->get();
		return $query->result_array(); 
	}
        
	public function get_single_pendidikan($id) //buat manage pendidikan
	{
		$this->db->select("*")->from('pendidikan');
		//pengecekan id
		if (empty($id)) {
			return false;
		}
		$this->db->where('pendidikan_id', (int) $id);

		$query = $this->db->get();
		return $query->result_array();
	}
	//buat manage delete pendidikan
	public function delete($id)
	{
		$this->db->where('pendidikan_id', $id);
		$this->db->delete('pendidikan');
	}
        
	public function save($data, $id=FALSE) 
	{
		if ($id == FALSE) {
			$this->db->set($data)->insert('pendidikan');
			return $this->db->insert_id();
		} else { //update data
			$this->db->where('pendidikan_id', $id);
			$this->db->set($data);
			$this->db->update('pendidikan');
		}
	}}

