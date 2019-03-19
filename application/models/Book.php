<?php

	/**
	* 
	*/
	class Book extends CI_Model
	{
		public function get_date()
			{
				$this->db->select()->from('show_time');
				$query = $this->db->get();
				return $query->result_array();

				
			}	
	}


?>