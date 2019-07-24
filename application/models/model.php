<?php 

class Model extends CI_Model{


	public function get_all($table)
	{
		return $this->db->get($table);
	}

	public function get_by($table,$id, $where)
	{
		return $this->db->get_where($table, [$id=>$where]);
	}
	
	public function get_by2($table,$id1, $where1, $id2, $where2)
	{
		return $this->db->get_where($table, [$id1=>$where1, $id2=>$where2]);
	}

	public function save($table,$data)
	{
		$this->db->insert($table, $data);
	}

	public function save_batch($table,$data)
	{
		$this->db->insert_batch($table, $data);
	}

	public function delete($table,$pk, $where)
	{
		$this->db->delete($table, [$pk=>$where]);
	}

	public function delete2($table,$pk1, $where1, $pk2, $where2)
	{
		$this->db->delete($table, [$pk1=>$where1, $pk2=>$where2]);
	}

	public function update($table, $id, $where, $data)
	{
		$this->db->update($table, $data , [$id=>$where]);
	}

	public function update2($table, $id1, $where1, $id2, $where2, $data)
	{
		$this->db->update($table, $data , [$id1=>$where1, $id2=>$where2 ]);
	}

	public function reset_pass($table, $id, $where, $field)
	{
		$pass = '$2y$10$NuJpueDsXtO2jre2Dq5TXucFV8hEnOV4CLUnMAgvCpO5o2wIe6wOG';
		$data = [$field=>$pass];
		$this->db->update($table, $data, [$id=>$where]);
	}

}
 ?>