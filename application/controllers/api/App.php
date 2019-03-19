<?php 

/**
* 
*/
class App extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('api_model');
    }
    
    public function index()
	{
	    echo '<pre>';print_r($this->db->query("SELECT * FROM `products` where STR_TO_DATE(`release_date`, '%d %M %Y') > CURDATE() ORDER BY `productID` DESC")->result_array());echo '</pre>';
	    //echo 'test';
	}
	
	public function now_showing()
	{
	    header('Access-Control-Allow-Origin: *');
	    $start = date('Y-m-d');
		$end = date('Y-m-d', strtotime('+30 day'));
		$movie = $this->api_model->get_showing($start,$end);
		echo json_encode($movie);
	}
	
	public function coming_soon()
	{
	    header('Access-Control-Allow-Origin: *');
	    $movies = $this->api_model->get_coming_soon();
	    $list = [];
	    foreach ($movies as $movie) {
	    	if (strtotime($movie['release_date']) > strtotime(date('Y-m-d'))) {
	    		$list[] = $movie;
	    	}
	    }
	    echo json_encode($list);
	}
	
	public function get_movie($id)
	{
	    header('Access-Control-Allow-Origin: *');
	    $start = date('Y-m-d');
		$end = date('Y-m-d', strtotime('+30 day'));
	    $data['movie'] = $this->api_model->get_row_single('products',array('productID'=>$id));
	    $data['show'] = $this->api_model->get_movie_show($id,$start,$end);
	    echo json_encode($data);
	}
	
	public function get_tickets($id,$cinema,$date,$time)
	{
	    header('Access-Control-Allow-Origin: *');
	    $date = str_replace('%20', ' ', $date);
	    $date = date('Y-m-d', strtotime($date));
	    $tickets = $this->api_model->get_movie_ticket($id,$cinema,$date,$time);
	    if ($tickets) {
	    	$tickets = str_replace(" ","",$tickets);
	    	$tickets = explode(',', $tickets['seats']);
	    	$tickets=array_map('trim',$tickets);
	    	$tickets=array_unique($tickets);
	    	sort($tickets);
	    }
	    echo json_encode($tickets);
	}
	public function signup(){
	    header('Access-Control-Allow-Origin: *');
	    $this->load->library('form_validation');
		$config=array(
			array(
				'field'=>'email',
				'label'=>'Email',
				'rules'=>'required|is_unique[users.email]'
				),
			array(
				'field'=>'phone_number',
				'label'=>'Phone Number',
				'rules'=>'required|is_unique[users.phone_number]'
				),

			);
		$this->form_validation->set_rules($config);
		if($this->form_validation->run()==FALSE){
		    echo json_encode(array('status'=> false, 'error' => validation_errors()));
           //$error['errors']=validation_errors();
		}else{
    		$data=$this->input->post();
    		$data['role']='user';
    		$data['is_active']=1;
    		$data['created_at']=date("d-m-Y h:i:s a");
    		$data['updated_at']=date("d-m-Y h:i:s a");
    		$data['role']='user';
    		$user_id = $this->api_model->insert('users', $data);
    		$data = $this->api_model->get_row_single('users',array('adminID'=>$user_id));
    		echo json_encode(array('status'=> true, 'data' => $data));
		}
	}
	public function login(){
	    header('Access-Control-Allow-Origin: *');
	    $data=$this->input->post();
	    $data = $this->api_model->get_row_single('users',$data);
	    if($data){
	        echo json_encode(array('status'=> true, 'data' => $data));
	    }
	    else{
	        echo json_encode(array('status'=> false, 'error' => 'email and password do not match'));
	    }
	}
	public function booking(){
	    header('Access-Control-Allow-Origin: *');
	    $data=$this->input->post();
	    $data['date_time'] = date('Y-m-d', strtotime($data['date_time']));
	    $this->api_model->insert('booking', $data);
	}
	public function membership(){
	    header('Access-Control-Allow-Origin: *');
	    $data=$this->input->post();
	    $this->api_model->insert('membership', $data);
	}
	
	public function history($id){
	    header('Access-Control-Allow-Origin: *');
		$movie = $this->api_model->get_history($id);
		echo json_encode($movie);
	}
}