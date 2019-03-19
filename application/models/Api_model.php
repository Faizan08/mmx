<?php

	/**
	* 
	*/
	class Api_model extends MY_Model
	{
	    public function get_showing($start,$end){
	        $this->db->select('products.*, show_time.showdate')
	        		 ->from('products')
	        		 ->join('show_time', 'products.productID = show_time.productID')
	        		 ->where('show_time.showdate >=', $start)
	        		 ->where('show_time.showdate <=', $end)
	        		 ->group_by('products.productID')
	        		 ->order_by('products.productID', 'DESC');
	        return $this->db->get()->result_array();
	    }

	    public function get_movie_show($id,$start,$end)
	    {
	    	// $this->db->select('*, DATE_FORMAT(showdate, "%a %d%b") as showdate')
	    	$this->db->select('*, (case when showdate = "'.date('Y-m-d').'" THEN "Today" ELSE DATE_FORMAT(showdate, "%a %d%b") END) as showdate, group_concat(cinema_name separator ";") as cinema_name, group_concat(showtime separator ";") as showtime')
	    			 ->from('show_time')
	    			 ->where('show_time.productID', $id)
	    			 ->where('show_time.showdate >=', $start)
	        		 ->where('show_time.showdate <=', $end)
	    			 ->group_by('showdate');
	    	return $this->db->get()->result_array();
	    }

	    public function get_movie_ticket($id,$cinema,$date,$time)
	    {
	    	$this->db->select("group_concat(seats separator ',') as seats")
		    		 ->from('booking')
		    		 ->where('paid', '1')
		    		 ->where('cinema_name', str_replace("%20"," ",$cinema))
		    		 ->where('date_time', $date)
		    		 //->where('date_time', '2018-09-17')
		    		 ->where('ltrim(show_time)', str_replace("%20"," ",trim($time)))
		    		 //->where('ltrim(show_time)', str_replace("%20"," ",trim('03:00 PM')))
		    		 ->where('productID', $id)
		    		 ->group_by('productID');
	    	return  $this->db->get()->row_array();
	    }
	    
	    public function get_coming_soon()
	    {
	        $this->db->select("productID,title,REPLACE(length, ' min', '') as length,release_date,mob_cover,country,age_restriction")
	                 ->from('products')
	                 ->where("STR_TO_DATE(`release_date`, '%d %M %Y') >", "CURDATE()")
	                 //->or_where("STR_TO_DATE(`release_date`, '%d %b %Y') >", "CURDATE()")
	                 ->order_by('productID', 'DESC');
	        return  $this->db->get()->result_array();
	    }
	    
	    public function get_history($id)
	    {
	        $this->db->select("seats,show_time,REPLACE(cinema_name, 'Cinema ', '') AS cinema_name,(CASE WHEN CURDATE() > date_time THEN '1' ELSE '0' END) as status, products.title,products.image")
	                 ->from('booking')
	                 ->join('products', 'products.productID = booking.productID')
	                 ->where('booking.user_id', $id);
	        return  $this->db->get()->result_array();
	    }
	}