<?php 

/**
* 
*/
class Interfacer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('api_model');
    }
    
	
	/*  START WEB TICKETS API */
	
	public function add_web_ticket(){
	    header('Access-Control-Allow-Origin: *');
	    $data=$this->input->post();
	    $data['created_at']=date("Y-m-d H:i:s");
		$data['updated_at']=date("Y-m-d H:i:s");
	    $res = $this->api_model->insert('web_tickets', $data);
	    var_dump($res);
	}
	
	public function update_web_ticket(){
	    header('Access-Control-Allow-Origin: *');
	    $data=$this->input->post();
	    $where=['ticket_id'=>$data['ticket_id']];
		$data['updated_at']=date("Y-m-d H:i:s");
	    $res = $this->api_model->update('web_tickets', $data, $where);
	    var_dump($res);
	}
	
	public function delete_web_ticket(){
	    header('Access-Control-Allow-Origin: *');
	    $data=$this->input->post();
	    $where=['ticket_id'=>$data['ticket_id']];
	    $res = $this->api_model->delete('web_tickets', $data, $where);
	    var_dump($res);
	}
	
	/*  END WEB TICKETS API */
	
	/*  START WEB SCREENS API */
	
	public function add_web_screen(){
	    header('Access-Control-Allow-Origin: *');
	    $data=$this->input->post();
	    $data['created_at']=date("Y-m-d H:i:s");
		$data['updated_at']=date("Y-m-d H:i:s");
	    $res = $this->api_model->insert('web_screens', $data);
	    var_dump($res);
	}
	
	public function update_web_screen(){
	    header('Access-Control-Allow-Origin: *');
	    $data=$this->input->post();
	    $where=['screen_id'=>$data['screen_id']];
		$data['updated_at']=date("Y-m-d H:i:s");
	    $res = $this->api_model->update('web_screens', $data, $where);
	    var_dump($res);
	}
	
	public function delete_web_screen(){
	    header('Access-Control-Allow-Origin: *');
	    $data=$this->input->post();
	    $where=['screen_id'=>$data['screen_id']];
	    $res = $this->api_model->delete('web_screens', $data, $where);
	    var_dump($res);
	}
	
	/*  END WEB SCREENS API */
	
	/*  START WEB MOVIES API */
	
	public function add_web_movie(){
	    header('Access-Control-Allow-Origin: *');
	    $data=$this->input->post();
	    $data['created_at']=date("Y-m-d H:i:s");
		$data['updated_at']=date("Y-m-d H:i:s");
	    $res = $this->api_model->insert('web_movies', $data);
	    var_dump($res);
	}
	
	public function update_web_movie(){
	    header('Access-Control-Allow-Origin: *');
	    $data=$this->input->post();
	    $where=['movie_id'=>$data['movie_id']];
		$data['updated_at']=date("Y-m-d H:i:s");
	    $res = $this->api_model->update('web_movies', $data, $where);
	    var_dump($res);
	}
	
	public function delete_web_movie(){
	    header('Access-Control-Allow-Origin: *');
	    $data=$this->input->post();
	    $where=['movie_id'=>$data['movie_id']];
	    $res = $this->api_model->delete('web_movies', $data, $where);
	    var_dump($res);
	}
	
	/*  END WEB MOVIES API */	
	
	/*  START WEB SHOWTIMES API */
	
	public function add_web_showtime(){
	    header('Access-Control-Allow-Origin: *');
	    $data=$this->input->post();
	    $data['created_at']=date("Y-m-d H:i:s");
		$data['updated_at']=date("Y-m-d H:i:s");
	    $res = $this->api_model->insert('web_show_times', $data);
	    var_dump($res);
	}
	
	public function update_web_showtime(){
	    header('Access-Control-Allow-Origin: *');
	    $data=$this->input->post();
	    $where=['show_time_id'=>$data['show_time_id']];
		$data['updated_at']=date("Y-m-d H:i:s");
	    $res = $this->api_model->update('web_show_times', $data, $where);
	    var_dump($res);
	}
	
	public function delete_web_showtime(){
	    header('Access-Control-Allow-Origin: *');
	    $data=$this->input->post();
	    $where=['show_time_id'=>$data['show_time_id']];
	    $res = $this->api_model->delete('web_show_times', $data, $where);
	    var_dump($res);
	}
	
	/*  END WEB SHOWTIMES API */	
}