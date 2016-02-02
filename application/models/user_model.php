<?php
class user_model extends CI_Model{
	
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	
	function getusers() {
		$userquery ="select * from users";
		
		
		$queryresult =  $this->db->query($userquery);
		
		
		if ($queryresult->num_rows() > 0) {
			foreach ($queryresult->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		
		
	}
	
}