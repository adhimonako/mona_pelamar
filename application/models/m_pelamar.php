<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class M_Pelamar extends CI_Model 
{
	//untuk tampilkan semua pelamar
	public function get() 
	{
		$this->db->select("*")->from('pelamar');
		$query = $this->db->get();
		return $query->result_array(); 
	}
        
	public function get_single_pelamar($id) //buat manage pelamar
	{
		$this->db->select("*")->from('pelamar');
		//pengecekan id
		if (empty($id)) {
			return false;
		}
		$this->db->where('pelamar_id', (int) $id);

		$query = $this->db->get();
		return $query->result_array();
	}
	//buat manage delete pelamar
	public function delete($id)
	{
		$this->db->where('pelamar_id', $id);
		$this->db->delete('pelamar');
	}
        
	public function save($data, $id=FALSE) 
	{
		if ($id == FALSE) {
			$this->db->set($data)->insert('pelamar');
			return $this->db->insert_id();
		} else { //update data
			$this->db->where('pelamar_id', $id);
			$this->db->set($data);
			$this->db->update('pelamar');
		}
	}}

