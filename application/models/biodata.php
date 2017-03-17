<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public function GetBiodataArray()
		{
			$this->db->like('nama', 'kal');
			$query = $this->db->get("biodata");
			return $query->result_array();
		}	
	public function GetBiodataObject()
		{
			$query = $this->db->query("select * from biodata");
			return $query->result();
		}
}

/* End of file biodata.php */
/* Location: ./application/models/biodata.php */


 ?>