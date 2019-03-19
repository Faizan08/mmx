<?php 

/**
* 
*/
class Request extends CI_Controller
{
	
	public function index()
	{
	    header('Access-Control-Allow-Origin: *');
		$record = json_decode($this->input->post('data'));
		//echo '<pre>';print_r($record);die;
		$last_id;
		for ($i=0; $i < sizeof($record); $i++) { 
			$movie=$this->admin_model->get_row("products",array('title'=>$record[$i]->movie_title));
			if($movie){
    			$movie_id = $movie['productID'];
    			$data = array(
    				'productID' => $movie_id,
    				'date_time' => date('Y-m-d', strtotime($record[$i]->showtime_datetime)),
    				'cinema_name' => $record[$i]->screen_name,
    				'show_time' => date('h:i A', strtotime($record[$i]->showtime_datetime)),
    				'seats' => str_replace('-', '', $record[$i]->booking_seats),
    				'paid'=>1,
    				'type'=>1
    			);
    			$last_id = $record[$i]->booking_id;
    			$this->admin_model->insert($data,'booking');
			}
		}
		echo $last_id;
	}
	
	public function advance_request()
	{
		header('Access-Control-Allow-Origin: *');
		$record = json_decode($this->input->post('data'));
		//echo '<pre>';print_r($record);die;
		$last_id;
		for ($i=0; $i < sizeof($record); $i++) { 
			$movie=$this->admin_model->get_row("products",array('title'=>$record[$i]->movie_title));
			if($movie){
    			$movie_id = $movie['productID'];
    			$seat = json_decode($record[$i]->booking_seats);
    			$seat = implode(',', $seat);
    			
    			$data = array(
    				'productID' => $movie_id,
    				'date_time' => date('Y-m-d', strtotime($record[$i]->showtime_datetime)),
    				'cinema_name' => $record[$i]->screen_name,
    				'show_time' => date('h:i A', strtotime($record[$i]->showtime_datetime)),
    				'seats' => str_replace('-', '', $seat),
    				'paid'=>1,
    				'type'=>1
    			);
    			$last_id = $record[$i]->booking_id;
    			$this->admin_model->insert($data,'booking');
			}
		}
		echo $last_id;
	}

	public function get()
	{
		header('Access-Control-Allow-Origin: *');
		$id;
		$this->db->select('last_send_id');
		$this->db->from('request');
		$this->db->order_by('id','DESC');
		$this->db->limit('1');
		$last = $this->db->get()->row_array();
		if ($last) {
			$id = $last['last_send_id'];
		}
		$this->db->select('booking.id,title,date_time,cinema_name,ltrim(show_time) as show_time,seats')
				 ->from('booking')
				 ->join('products', 'products.productID = booking.productID')
				 ->where('booking.type != ',1)
				 ->where('booking.paid',1);
		if ($id) {
			$this->db->where('id >',$id);
		}
		$data = $this->db->get()->result_array();
		if ($data) {
			$last_id = $data[sizeof($data) - 1]['id'];
			$this->admin_model->insert(array('last_send_id'=>$last_id),'request');
		}
		echo json_encode($data);

	}
	
	 public function ticket($id){
        $query="select booking.*, products.title from booking join products on products.productID = booking.productID where booking.id = ".$id;
		$data['booking']=$this->admin_model->single_query($query);
		//echo '<pre>';print_r($data);die;
        $this->load->view('admin/header',$data);
		$this->load->view('admin/check_tickets');
		$this->load->view('admin/footer');
    }
	
}