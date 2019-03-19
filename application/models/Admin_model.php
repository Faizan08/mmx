<?php 

/**
* 
*/
class Admin_model extends CI_Model
{
	
	public function insert($data=array(),$table)
	{
		 $this->db->insert($table,$data);
		 return $this->db->insert_id();
	
	}
	public function update($table,$data,$where)
	{
		$this->db->update($table,$data,$where);
	    return $this->db->affected_rows();
     }

	public function delete($table,$where)
	{
		$this->db->delete($table,$where);
	    return $this->db->affected_rows();
     }

	public function get($table)
	{
		return $this->db->get_where($table)->result_array();
	}
	public function select_where($table,$where)
	{
		return $this->db->get_where($table,$where)->result_array();
	}
	
	public function get_row($table,$where)
	{
		return $this->db->get_where($table,$where)->row_array();
	}
	public function get_data($table)
	{
		return $this->db->get($table)->result_array();
	}

	public function raw_query($query,$fetch)
	{
		if ($fetch==1) {
			 
			return $this->db->query($query)->result_array();
		}else{
            return $this->db->query($query);
		}
	}


	public function get_showing($start)
	{			 
		// $this->db->select('movie_id,title,rating,poster,web_show_times.date')
		// 		->from('web_movies')
		// 		->join('web_show_times','web_movies.movie_id = web_show_times.movie_id')
		// 		->where('web_show_times.date !=', '') 
		// 		->where('web_show_times.date >=', '$start')
		// 		->group_by('web_movies.movie_id')
		// 		->order_by('web_movies.movie_id', 'DESC');

		// 		 return $this->db->get()->result_array();	
	}

		
	public function single_query($query,$fetch)
	{
		if ($fetch==1) {
			 
			return $this->db->query($query)->result_array();
		}else{
            return $this->db->query($query)->row_array();
		}
	}
	/*my work*/
	
}