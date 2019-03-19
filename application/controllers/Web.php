<?php 

/**
* 
*/
class Web extends CI_Controller
{
	


    public function is_login()
    {
    	if (empty($_SESSION['adminID'])) {
    		redirect(base_url().'web/useraccount');
    	}
    }

	public function index()
	{
	    $first = date('Y-m-d');
        $last = date('Y-m-d', strtotime('+1 day'));
	    if($this->input->post('date')){
		    $d = $this->input->post('date');
		    $first = date('Y-m-d', strtotime($d));
            $last = date('Y-m-d', strtotime('+1 day', strtotime($d)));
            //print_r($first.' to '.$last);
		}
		$data['first'] = $first;
		$data['last'] = $last;

		//Edited
	    $this->db->select('group_concat(p.title separator ";") as title, s.date,s.screen_id,group_concat(s.time separator ";") as time')
	             ->from('web_movies p')
	             ->join('web_show_times s', 's.movie_id = p.movie_id')
	             ->where('s.date >=', $first)
	             ->where('s.date <=', $last)
	             ->group_by(array('s.date','s.screen_id'));

	    $data['table'] = $this->db->get()->result_array();
	    //echo '<pre>';print_r($table);die;

	    //Edited
		$data['movies']=$this->admin_model->get("web_movies");
		$data['newss']=$this->admin_model->get("news");
		//$data['sliders']=$this->admin_model->get("slider");
		//$this->db->order_by("(sliderID)","desc");
		//$data['sliders']=$this->admin_model->get("slider");
		$data['sliders']=$this->admin_model->raw_query("SELECT * FROM  `slider` ORDER BY sliderID DESC limit 6",1 );
	/*	$data['sliders']=$this->admin_model->raw_query("SELECT * FROM  `slider` ORDER BY sliderID DESC ",1);*/
		$data['best_choice']=$this->admin_model->raw_query("SELECT * FROM  `products` WHERE `best_choice`=1 ORDER BY productid DESC limit 6",1 );
  		
		$data['featured']=$this->admin_model->raw_query("SELECT * FROM `products` WHERE `status` = 'Featured'=1 ORDER BY productid DESC limit 8",1 );
		$data['title']="Now Showing";
		$start = date('Y-m-d');

		$end = date('Y-m-d', strtotime('+30 day'));
		
		/*booking process start*/
		$data['movies']=$this->admin_model->raw_query("select web_movies.*, web_show_times.date,web_show_times.time,web_show_times.screen_id from web_movies JOIN web_show_times ON web_movies.movie_id = web_show_times.movie_id where web_show_times.date != '' and web_show_times.date >= '".$start."' and web_show_times.date <= '".$end."' group by web_movies.movie_id DESC" ,1);

		
		/*booking process end*/
		//print_r($start);
		//print_r($end);
// 		$data['movies']=$this->admin_model->raw_query("select products.*, show_time.showdate from products JOIN show_time ON products.productID = show_time.productID where show_time.showdate != '' group by products.productID DESC" ,1);
// 		$del = [];
// 		for ($i=0; $i < sizeof($data['movies']); $i++) { 
// 			$con = 0;
// 			$date = $data['movies'][$i]['showdate'];
// 			$date = explode('::', $date);
// 			//print_r($date);
// 			for ($a=0; $a < sizeof($date); $a++) { 
// 				// echo $i;echo '<br>';
// 				// echo strtotime($start);echo '<br>';
// 				// echo strtotime($date[$a]);echo '<br>';
// 				// echo strtotime($end);echo '<br>';
// 				if (strtotime($date[$a]) >= strtotime($start) && strtotime($date[$a]) <= strtotime($end)) {
// 					$con = 1;
// 				}
// 			}
// 			if ($con == 0) {
// 				$del[] = $i;
// 			}
// 		}

// 		for ($i=0; $i < sizeof($del); $i++) { 
// 			unset($data['movies'][$del[$i]]);
// 		}
		$data['title']="Mega Multiplex | Main Page";
		$url = "http://www.bollywoodhungama.com/rss/news.xml";
        $data['xml'] = simplexml_load_file($url);
		$this->load->view('website/header',$data);
		$this->load->view('website/index');
	}
	public function indextable()
	{
	    $first = date('Y-m-d');
        $last = date('Y-m-d', strtotime('+1 day'));
	    if($this->input->post('date')){
		    $d = $this->input->post('date');
		    $first = date('Y-m-d', strtotime($d));
            $last = date('Y-m-d', strtotime('+1 day', strtotime($d)));
            //print_r($first.' to '.$last);
		}
		$data['first'] = $first;
		$data['last'] = $last;
	    $this->db->select('group_concat(p.title separator ";") as title, s.showdate,s.cinema_name,group_concat(s.showtime separator ";") as showtime')
	             ->from('products p')
	             ->join('show_time s', 's.productID = p.productID')
	             ->where('s.showdate >=', $first)
	             ->where('s.showdate <=', $last)
	             ->group_by(array('s.showdate','s.cinema_name'));
	    $data['table'] = $this->db->get()->result_array();

	    
		
	    $data['table_showtime'] = $this->db->get_where("show_time",['showdate'=>$first])->result_array();


	    //echo '<pre>';print_r($table);die;
		$data['movies']=$this->admin_model->get("products");
		$data['newss']=$this->admin_model->get("news");
		//$data['sliders']=$this->admin_model->get("slider");
		//$this->db->order_by("(sliderID)","desc");
		//$data['sliders']=$this->admin_model->get("slider");
		$data['sliders']=$this->admin_model->raw_query("SELECT * FROM  `slider` ORDER BY sliderID DESC limit 6",1 );
	/*	$data['sliders']=$this->admin_model->raw_query("SELECT * FROM  `slider` ORDER BY sliderID DESC ",1);*/
		$data['best_choice']=$this->admin_model->raw_query("SELECT * FROM  `products` WHERE `best_choice`=1 ORDER BY productid DESC limit 6",1 );
  		
		$data['featured']=$this->admin_model->raw_query("SELECT * FROM `products` WHERE `status` = 'Featured'=1 ORDER BY productid DESC limit 8",1 );
		$data['title']="Now Showing";
		$start = date('Y-m-d');

		$end = date('Y-m-d', strtotime('+30 day'));
		
		/*booking process start*/
		$data['movies']=$this->admin_model->raw_query("select products.*, show_time.showdate from products JOIN show_time ON products.productID = show_time.productID where show_time.showdate != '' and show_time.showdate >= '".$start."' and show_time.showdate <= '".$end."' group by products.productID DESC" ,1);


		$data['timetablenew']=$this->admin_model->raw_query("SELECT * FROM products INNER JOIN show_time ON products.productID = show_time.productID and show_time.showdate >= '".$start."' and show_time.showdate <= '".$end."' group by products.productID DESC" ,1);
		// print_r($data['timetablenew']);die;
		/*booking process end*/
		//print_r($start);
		//print_r($end);
// 		$data['movies']=$this->admin_model->raw_query("select products.*, show_time.showdate from products JOIN show_time ON products.productID = show_time.productID where show_time.showdate != '' group by products.productID DESC" ,1);
// 		$del = [];
// 		for ($i=0; $i < sizeof($data['movies']); $i++) { 
// 			$con = 0;
// 			$date = $data['movies'][$i]['showdate'];
// 			$date = explode('::', $date);
// 			//print_r($date);
// 			for ($a=0; $a < sizeof($date); $a++) { 
// 				// echo $i;echo '<br>';
// 				// echo strtotime($start);echo '<br>';
// 				// echo strtotime($date[$a]);echo '<br>';
// 				// echo strtotime($end);echo '<br>';
// 				if (strtotime($date[$a]) >= strtotime($start) && strtotime($date[$a]) <= strtotime($end)) {
// 					$con = 1;
// 				}
// 			}
// 			if ($con == 0) {
// 				$del[] = $i;
// 			}
// 		}

// 		for ($i=0; $i < sizeof($del); $i++) { 
// 			unset($data['movies'][$del[$i]]);
// 		}
		$data['title']="Mega Multiplex | Main Page";
		$url = "http://www.bollywoodhungama.com/rss/news.xml";
        $data['xml'] = simplexml_load_file($url);
		$this->load->view('website/header',$data);
		$this->load->view('website/indextable');
	}
		public function index2()
	{
	    $first = date('Y-m-d');
        $last = date('Y-m-d', strtotime('+1 day'));
	    if($this->input->post('date')){
		    $d = $this->input->post('date');
		    $first = date('Y-m-d', strtotime($d));
            $last = date('Y-m-d', strtotime('+1 day', strtotime($d)));
            //print_r($first.' to '.$last);
		}
		$data['first'] = $first;
		$data['last'] = $last;
	    $this->db->select('group_concat(p.title separator ";") as title, s.showdate,s.cinema_name,group_concat(s.showtime separator ";") as showtime')
	             ->from('products p')
	             ->join('show_time s', 's.productID = p.productID')
	             ->where('s.showdate >=', $first)
	             ->where('s.showdate <=', $last)
	             ->group_by(array('s.showdate','s.cinema_name'));
	    $data['table'] = $this->db->get()->result_array();
	    //echo '<pre>';print_r($table);die;
		$data['movies']=$this->admin_model->get("products");
		$data['newss']=$this->admin_model->get("news");
		//$data['sliders']=$this->admin_model->get("slider");
		//$this->db->order_by("(sliderID)","desc");
		//$data['sliders']=$this->admin_model->get("slider");
		$data['sliders']=$this->admin_model->raw_query("SELECT * FROM  `slider` ORDER BY sliderID DESC limit 6",1 );
	/*	$data['sliders']=$this->admin_model->raw_query("SELECT * FROM  `slider` ORDER BY sliderID DESC ",1);*/
		$data['best_choice']=$this->admin_model->raw_query("SELECT * FROM  `products` WHERE `best_choice`=1 ORDER BY productid DESC limit 6",1 );
  		
		$data['featured']=$this->admin_model->raw_query("SELECT * FROM `products` WHERE `status` = 'Featured'=1 ORDER BY productid DESC limit 8",1 );
		$data['title']="Now Showing";
		$start = date('Y-m-d');

		$end = date('Y-m-d', strtotime('+30 day'));
		
		/*booking process start*/
		$data['movies']=$this->admin_model->raw_query("select products.*, show_time.showdate from products JOIN show_time ON products.productID = show_time.productID where show_time.showdate != '' and show_time.showdate >= '".$start."' and show_time.showdate <= '".$end."' group by products.productID DESC" ,1);
	
		/*booking process end*/
		//print_r($start);
		//print_r($end);
// 		$data['movies']=$this->admin_model->raw_query("select products.*, show_time.showdate from products JOIN show_time ON products.productID = show_time.productID where show_time.showdate != '' group by products.productID DESC" ,1);
// 		$del = [];
// 		for ($i=0; $i < sizeof($data['movies']); $i++) { 
// 			$con = 0;
// 			$date = $data['movies'][$i]['showdate'];
// 			$date = explode('::', $date);
// 			//print_r($date);
// 			for ($a=0; $a < sizeof($date); $a++) { 
// 				// echo $i;echo '<br>';
// 				// echo strtotime($start);echo '<br>';
// 				// echo strtotime($date[$a]);echo '<br>';
// 				// echo strtotime($end);echo '<br>';
// 				if (strtotime($date[$a]) >= strtotime($start) && strtotime($date[$a]) <= strtotime($end)) {
// 					$con = 1;
// 				}
// 			}
// 			if ($con == 0) {
// 				$del[] = $i;
// 			}
// 		}

// 		for ($i=0; $i < sizeof($del); $i++) { 
// 			unset($data['movies'][$del[$i]]);
// 		}
		$data['title']="Mega Multiplex | Main Page";
		$url = "http://www.bollywoodhungama.com/rss/news.xml";
        $data['xml'] = simplexml_load_file($url);
		$this->load->view('website/header',$data);
		$this->load->view('website/index2',$data);
	}
	public function home2()
	{
	      $first = date('Y-m-d');
        $last = date('Y-m-d', strtotime('+1 day'));
	    if($this->input->post('date')){
		    $d = $this->input->post('date');
		    $first = date('Y-m-d', strtotime($d));
            $last = date('Y-m-d', strtotime('+1 day', strtotime($d)));
            //print_r($first.' to '.$last);
		}
		$data['first'] = $first;
		$data['last'] = $last;
	    $this->db->select('group_concat(p.title separator ";") as title, s.showdate,s.cinema_name,group_concat(s.showtime separator ";") as showtime')
	             ->from('products p')
	             ->join('show_time s', 's.productID = p.productID')
	             ->where('s.showdate >=', $first)
	             ->where('s.showdate <=', $last)
	             ->group_by(array('s.showdate','s.cinema_name'));
	    $data['table'] = $this->db->get()->result_array();
	    //echo '<pre>';print_r($table);die;
		$data['movies']=$this->admin_model->get("products");
		$data['newss']=$this->admin_model->get("news");
		$data['sliders']=$this->admin_model->get("slider");
		$data['best_choice']=$this->admin_model->raw_query("SELECT * FROM  `products` WHERE `best_choice`=1 ORDER BY productid DESC limit 6",1 );
  		
		$data['featured']=$this->admin_model->raw_query("SELECT * FROM `products` WHERE `status` = 'Featured'=1 ORDER BY productid DESC limit 8",1 );
		$data['title']="Now Showing";
		$start = date('Y-m-d');

		$end = date('Y-m-d', strtotime('+30 day'));
		
		/*booking process start*/
		$data['movies']=$this->admin_model->raw_query("select products.*, show_time.showdate from products JOIN show_time ON products.productID = show_time.productID where show_time.showdate != '' and show_time.showdate >= '".$start."' and show_time.showdate <= '".$end."' group by products.productID DESC" ,1);
	
		/*booking process end*/
		//print_r($start);
		//print_r($end);
// 		$data['movies']=$this->admin_model->raw_query("select products.*, show_time.showdate from products JOIN show_time ON products.productID = show_time.productID where show_time.showdate != '' group by products.productID DESC" ,1);
// 		$del = [];
// 		for ($i=0; $i < sizeof($data['movies']); $i++) { 
// 			$con = 0;
// 			$date = $data['movies'][$i]['showdate'];
// 			$date = explode('::', $date);
// 			//print_r($date);
// 			for ($a=0; $a < sizeof($date); $a++) { 
// 				// echo $i;echo '<br>';
// 				// echo strtotime($start);echo '<br>';
// 				// echo strtotime($date[$a]);echo '<br>';
// 				// echo strtotime($end);echo '<br>';
// 				if (strtotime($date[$a]) >= strtotime($start) && strtotime($date[$a]) <= strtotime($end)) {
// 					$con = 1;
// 				}
// 			}
// 			if ($con == 0) {
// 				$del[] = $i;
// 			}
// 		}

// 		for ($i=0; $i < sizeof($del); $i++) { 
// 			unset($data['movies'][$del[$i]]);
// 		}
		$data['title']="Mega Multiplex | Main Page";
		$url = "http://www.bollywoodhungama.com/rss/news.xml";
        $data['xml'] = simplexml_load_file($url);
		$this->load->view('website/header',$data);
		$this->load->view('website/home2');
	}
	public function home3()
	{
	    $this->db->select('group_concat(p.title separator ";") as title, s.showdate,s.cinema_name,group_concat(s.showtime separator ";") as showtime')
	             ->from('products p')
	             ->join('show_time s', 's.productID = p.productID')
	             ->where('s.showdate >=', date('Y-m-d'))
	             ->where('s.showdate <=', date('Y-m-d', strtotime('+1 day')))
	             ->group_by(array('s.showdate','s.cinema_name'));
	    $data['table'] = $this->db->get()->result_array();
	    //echo '<pre>';print_r($table);die;
		$data['movies']=$this->admin_model->get("products");
		$data['newss']=$this->admin_model->get("news");
		$data['sliders']=$this->admin_model->get("slider");
		$data['best_choice']=$this->admin_model->raw_query("SELECT * FROM  `products` WHERE `best_choice`=1 ORDER BY productid DESC limit 6",1 );
  		
		$data['featured']=$this->admin_model->raw_query("SELECT * FROM `products` WHERE `status` = 'Featured'=1 ORDER BY productid DESC limit 8",1 );
		$data['title']="Now Showing";
		$start = date('Y-m-d', strtotime('-1 day'));

		$end = date('Y-m-d', strtotime('+30 day'));
		/*booking process start*/
		$data['movies']=$this->admin_model->raw_query("select products.*, show_time.showdate from products JOIN show_time ON products.productID = show_time.productID where show_time.showdate != '' and show_time.showdate >= '".$start."' and show_time.showdate <= '".$end."' group by products.productID DESC" ,1);
	
		/*booking process end*/
		//print_r($start);
		//print_r($end);
		$data['movies']=$this->admin_model->raw_query("select products.*, show_time.showdate from products JOIN show_time ON products.productID = show_time.productID where show_time.showdate != '' group by products.productID DESC" ,1);
		$del = [];
		for ($i=0; $i < sizeof($data['movies']); $i++) { 
			$con = 0;
			$date = $data['movies'][$i]['showdate'];
			$date = explode('::', $date);
			//print_r($date);
			for ($a=0; $a < sizeof($date); $a++) { 
				// echo $i;echo '<br>';
				// echo strtotime($start);echo '<br>';
				// echo strtotime($date[$a]);echo '<br>';
				// echo strtotime($end);echo '<br>';
				if (strtotime($date[$a]) >= strtotime($start) && strtotime($date[$a]) <= strtotime($end)) {
					$con = 1;
				}
			}
			if ($con == 0) {
				$del[] = $i;
			}
		}

		for ($i=0; $i < sizeof($del); $i++) { 
			unset($data['movies'][$del[$i]]);
		}
		$data['title']="Mega Multiplex | Main Page";
		$this->load->view('website/header',$data);
		$this->load->view('website/home3');
	}
    public function get_movies_dates($id)
	{
		$this->db->select('*')
				 ->from('show_time')
				 ->where('productID',$id)
				 ->where('STR_TO_DATE(showdate,"%Y-%m-%d") >=',date('Y-m-d'))
				 ->group_by('showdate');
		$date = $this->db->get()->result_array();
		//$date = $this->admin_model->select_where('show_time',array('productID'=>$id));
		echo json_encode($date);
	}

	public function get_movies_ciname($id,$date)
	{
		$this->db->select('cinema_name')
				 ->from('show_time')
				 ->where('productID',$id)
				 ->where('showdate',$date)
				 ->group_by('cinema_name');
		$date = $this->db->get()->result_array();
		//$date = $this->admin_model->select_where('show_time',array('productID'=>$id));
		echo json_encode($date);
	}
    
	public function get_movies_time($id,$date,$cinema)
	{
		$cinema = str_replace('%20', ' ', $cinema);
		$this->db->select('group_concat(showtime separator ",") as times')
				 ->from('show_time')
				 ->where('productID',$id)
				 ->where('showdate',$date)
				 ->where('cinema_name',$cinema)
				 ->group_by('productID');
		$date = $this->db->get()->row_array();
		$date = explode(',', $date['times']);
		//print_r($this->db->last_query());
		//$date = $this->admin_model->select_where('show_time',array('productID'=>$id));
		echo json_encode($date);
	}
	public function search()
	{
		//print_r($_POST);die;
		$type= $this->input->post('city');
		//echo $type;die;
		$data['title']="Search";
		$value = $this->input->post('search');
		$data['movies']=$this->admin_model->raw_query("select products.*, show_time.showdate from products JOIN show_time ON products.productID = show_time.productID where ".$type." like '%".$value."%' group by products.productID DESC" ,1);
		//echo '<pre>';print_r($data['movies']);die;
		$this->load->view('website/header',$data);
		$this->load->view('website/search');
	}
	public function details($productID)
	{
		$where=array('productID'=>$productID);
        $this->db->query("update products set total_views=total_views+1 where 								productID=".$productID);
        $data['detail']=$this->admin_model->get_row("products",$where);
        $data['showtime']=$this->admin_model->get_row("show_time",$where);
        $data['title']="Mega Multiplex | ".$data['detail']['title'];
		$this->load->view('website/header',$data);
		$this->load->view('website/details');
		$this->load->view('website/footer');
	}
	
	public function xml(){
	    $html = "";
	    $url = "http://www.bollywoodhungama.com/rss/news.xml";
        $xml = simplexml_load_file($url);
        for($i = 0; $i < 10; $i++){
            $title = $xml->channel->item[$i]->title;
            $link = $xml->channel->item[$i]->link;
            $description = $xml->channel->item[$i]->description;
            $pubDate = $xml->channel->item[$i]->pubDate;
        
                $html .= "<a href='$link'><h3>$title</h3></a>";
            $html .= "$description";
            $html .= "<br />$pubDate<hr />";
        }
        echo $html;
	}

	public function step1()
	{
	    $data['title']="Mega Multiplex";
	    $start = date('Y-m-d');

		$end = date('Y-m-d', strtotime('+30 day'));
         
		$where=array('movie_id'=>$_GET['movieID']);
		 // print_r($where);
		 // die();
		// $data['show_time'] = $this->admin_model->select_where('show_time',array('productID' => $showtimeID));
		 
		  $data['detail']=$this->admin_model->get_row("web_movies",$where);


        $data['showtime']=$this->admin_model->select_where("web_show_times",array('movie_id'=>$_GET['movieID'],'date <='=>$end));

        // ,'date >='=>$start,      // This will update later in the upper query

         // print_r($data['showtime']);
         // die();
		/*$data['title']="Mega Multiplex | Step 1";
         
		$where=array('productID'=>$_GET['productID']);
		//$data['show_time'] = $this->admin_model->select_where('show_time',array('productID' => $showtimeID));
		$data['detail']=$this->admin_model->get_row("products",$where);
        $data['showtime']=$this->admin_model->select_where("show_time",$where);*/
        //echo"<pre>";print_r($data['showtime']);die();
        
        //$data['showdate']=$this->admin_model->select_where("show_time",$where);


		$this->load->view('website/header',$data);
		$this->load->view('website/step1');
	}
	public function step1_1()
	{

		$data['title']="Mega Multiplex | Step 1";
   

         
		$where=array('productID'=>$_GET['productID']);
		//$data['show_time'] = $this->admin_model->select_where('show_time',array('productID' => $showtimeID));
		$data['detail']=$this->admin_model->get_row("products",$where);
        $data['showtime']=$this->admin_model->select_where("show_time",$where);
        //echo"<pre>";print_r($data['showtime']);die();
        
        //$data['showdate']=$this->admin_model->select_where("show_time",$where);


		$this->load->view('website/header',$data);
		$this->load->view('website/step1_1');
	}

public function get_showing2(){
        $start = date('Y-m-d');

		$end = date('Y-m-d', strtotime('+30 day'));
		
    $where=array('movie_id'=>$_POST['movie_id']);
    $showtime=$this->admin_model->select_where("web_show_times",array('movie_id'=>$_POST['movie_id'],'date >='=>$start,'date <='=>$end));
    $detail=$this->admin_model->get_row("web_movies",$where);
    if (!$showtime) {
    ?>
        <div class="time-select time-select--wide" id="show_showtime">
		<center><h2>No Showtime</h2></center>
		</div>
 	<?php
    }
    else{
        $array = array();
    foreach ($showtime as $row) {
       $array[] = $row['date'];
    }
    $array = array_unique($array);
    sort($array);
    ?>
        <form method="get" action="<?php echo base_url() ?>web/step2">
  
        <div class="col-sm-12">
            
            <strong>Movie Name :</strong> <span class="choosen-area"><?php echo $detail['title'] ?></span>
           
            <input type="hidden" name="movie_name" value="<?php echo $detail['title'] ?>">
            <h2 class="page-heading" style="color: #161515;">Select Date</h2>

            <div class="choose-container choose-container--short">
                <input type="hidden" name="productID" value="<?php echo $detail['productID']?>">
                <div class="col-sm-6">
                    <select class="form-control sel" name="date_time" id="sel">
                        <option >Select Date</opton>
                        <?php 
                            for ($i=0; $i < sizeof($array); $i++) { 
                                echo '<option value="'.$array[$i].'" data="'.$array[$i].'">'.$array[$i].'</option>';
                            }
                        ?>
                        
                    </select>
                </div>
                <!--   -->
            </div>
            <br>


            <h2 class="page-heading" style="color: #161515;">View time</h2>

            <div class="time-select time-select--wide" id="show_showtime">
                
                <div class="time-select__group group--first cinema_1" style="height: 75px;">
                    <div class="col-sm-3">
                        <p class="time-select__place">
                            Cinema 1
                        </p>
                    </div>
                    <div class="col-sm-9">
                        <p class="not-found" style="display:none ;  margin-top: 25px; font-size: 17px !important;color: red;font: 13px 'Roboto', sans-serif; -webkit-transition: 0.3s; transition: 0.3s;font-weight: 600;">No Show Time Avalible</p>
                        <p class="time-select__place">
                            <?php
                            $con = 1;
                             foreach ($showtime as $show) {
                                if ($show['screen_id'] == 1) {
                                   $time = explode(",", $show['time']);
                                   for ($i=0; $i < sizeof($time) ; $i++) { 
                                    $con++;
                                      //echo $time[$i].' ';
                                    echo "<label for='time_".$con."' id='".$show['show_time_id']."' class='time-select__item time_show ".$show['show_time_id']."' style='display:none;' data-id='".$show['date']."' >".$time[$i]."</label>";
                                    
                                      echo '<input type="radio" name="time" value="'.$show['screen_id'].'_'.$time[$i].'"   id="time_'.$con.'">'; 

                                   }
                                }
                                
                            } ?>
                        </p>
                    </div>
                    
                </div>
                <div class="time-select__group group--first cinema_2" style="height: 75px;">
                    <div class="col-sm-3">
                        <p class="time-select__place">
                            Cinema 2
                        </p>
                    </div>
                    <div class="col-sm-9">
                        <p class="not-found" style="display:none ;  margin-top: 25px; font-size: 17px !important;color: red;font: 13px 'Roboto', sans-serif; -webkit-transition: 0.3s; transition: 0.3s;font-weight: 600;">No Show Time Avalible</p>
                        <p class="time-select__place">
                            <?php foreach ($showtime as $show) {

                                if ($show['screen_id'] == 2) {
                                   $time = explode(",", $show['time']);
                                   for ($i=0; $i < sizeof($time) ; $i++) { 
                                    $con++;
                                      echo "<label for='time_".$con."' id='".$show['show_time_id']."' class='time-select__item time_show ".$show['show_time_id']."' style='display:none;' data-id='".$show['date']."' >".$time[$i]."</label>";
                                      echo ' <input type="radio" name="time" value="'.$show['screen_id'].'_'.$time[$i].'"   id="time_'.$con.'">';
                                   }
                                }

                            } ?>
                        </p>
                    </div>
                    
                </div>
            </div>
                    </div>
    <div class="clearfix"></div>
    <div class="booking-pagination">
        <a href="#" class="booking-pagination__prev hide--arrow">
            <span class="arrow__text arrow--prev"></span>
            <span class="arrow__info"></span>
        </a>
       <!-- <button type="submit" class="booking-pagination__next">
            <span class="arrow__text arrow--next">next step</span>
            <span class="arrow__info">choose a seat</span>
        </button>-->
    </div>
</form>
    <?php
    }
    //print_r($showtime);die;
}


public function get_showing()
	{


		$where=array('productID'=>$_POST['productID']);
	
      
        
        $showtime=$this->admin_model->get_row("show_time",$where);

         if (!$showtime) {
         	?>

                <div class="time-select time-select--wide" id="show_showtime">
				<center><h2>No Showtime</h2></center>
				</div>
         	<?php
         }else{
		?>


                <div class="time-select time-select--wide" id="show_showtime">
					      <?php 
					$cinema_name=explode("::", $showtime['cinema_name']);
					$showtime=explode("::", $showtime['showtime']);
					 $count=count($cinema_name);
					 $j=1;

					  for ($i=0; $i < $count; $i++) { 
					  
					 ?>                  
                        <div class="time-select__group group--first">
                            <div class="col-sm-3">
                                <p class="time-select__place"><?php echo $cinema_name[$i]?></p>
                            </div>
                            <ul class="col-sm-6 items-wrap">
                               <?php 
           $timing=explode(",", $showtime[$i]);
         
                                ?>

<?php

 foreach ($timing as $time):


 ?>
    <label for="time_<?php echo $j; ?>" class="time-select__item"><?php echo $time; ?></label> 
    <input type="radio" name="time" value="<?php echo $cinema_name[$i];?>_<?php echo $time ?>"   id="time_<?php echo $j; ?>"> 
<?php 
$j++;
endforeach ?>
                            </ul>

                        </div>
 <?php 
		}
		 } 
 ?>
                </div>


		<?php
 }
	public function newspage()
	{
		$this->load->view('website/header');
		$this->load->view('website/single-page-full');
	}

	public function useraccount()
	{
		$data['title']="Login Panel";
		$this->load->view('website/header',$data);
		$this->load->view('website/useraccount');
	}

	public function register()
	{
		$data['title']="Register";
		$this->load->view('website/header',$data);
		$this->load->view('website/register');
	}

	public function aboutus()
	{
		$data['title']="About Us";
		$this->load->view('website/header',$data);
		$this->load->view('website/aboutus');
	}
	public function pause_booking()
	{
		$data['title']="Pause Booking";
		$this->load->view('website/header',$data);
		$this->load->view('website/pause_booking');
	}
	public function corporate()
	{
		$data['title']="Corporate";
		$this->load->view('website/header',$data);
		$this->load->view('website/corporate');
	}
	public function promotion()
	{
		$data['title']="Promotion";
		$data['promotions']=$this->admin_model->raw_query("SELECT * FROM  `promotion` ORDER BY promotionID DESC ",1 );
		// print_r($data['promotions']);die();
		$this->load->view('website/header',$data);
		$this->load->view('website/promotion');
	}
	public function trailer()
	{
		$data['title']="Trailer";
		$data['trailers']=$this->admin_model->raw_query("SELECT * FROM  `trailer` ORDER BY trailerID DESC ",1 );
		// print_r($data['trailers']);die();
		$this->load->view('website/header',$data);
		$this->load->view('website/trailer');
	}


	// public function step2()
	// {
	   
		
	//     $cinema=explode("_",$_GET['time']);
	//     $this->db->select("group_concat(seats separator ',') as seats")
	//     		 ->from('booking')
	//     		 ->where('paid', '1')
	//     		 ->where('cinema_name', str_replace("%20","",$cinema[0]))
	//     		 ->where('date_time', $_GET['date_time'])
	//     		 ->where('ltrim(show_time)', str_replace("%20","",trim($cinema[1])))
	//     		 ->where('productID', $_GET['productID'])
	//     		 ->group_by('productID');
	//     $data['list'] = $this->db->get()->row_array();
	//      if ($data['list']) {
	//     	$data['list'] = str_replace(" ","",$data['list']);
	//     	$data['list'] = explode(',', $data['list']['seats']);
	//     	$data['list']=array_map('trim',$data['list']);
	//     	$data['list']=array_unique($data['list']);
	//     	sort($data['list']);
	//     }
	   
	// 	$this->load->view('website/header');
	// 	$this->load->view('website/step2', $data);
	// }
	public function step2()
	{
	   
		//error_reporting('-1');
		// echo'
		// <pre>';
	   $show_time_id = $_GET['show_time_id'];

        // $showtimedata=$this->admin_model->get_row("show_time",$show_time_id);
        // $showtimedata


			$this->db->select('web_show_times.*')
				->from('web_show_times')
				->where('show_time_id =', $show_time_id); 
			
			$data['movies_data'] = $this->db->get()->row_array();


			// sprint_r($data['movies_data']);
// die();	
 		// print_r("http://103.245.195.171:7778/api/fatchbooking/".$show_time_id);
		// die();
	    $url = "http://103.245.195.171:7778/api/fatchbooking/".$show_time_id;
	    $ch = curl_init();
	    curl_setopt($ch,CURLOPT_URL,$url);
	    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	    curl_setopt($ch,CURLOPT_CONNECTTIMEOUT, 4);
	    $json = curl_exec($ch);
	    if(!$json) {
	        echo curl_error($ch);
	    }
	    curl_close($ch);
	     $this->data['API_Data'] = $json_decode = json_encode($json);
	    
	     // echo '<pre>';
	     // print_r($this->data['API_Data']);
	     // die();


	    // work proper start

	    // print_r($json_decode);
    	// $this->load->view('admin/consignment/track/order_detail_by_cnno' , $this->data);
	    //work proper end
	    //print_r($this->db->last_query());
	    //echo '<pre>';print_r($data);die;
		$this->load->view('website/header');
		$this->load->view('website/step2', $data);
	}
	public function step3()
	{
	    //redirect('/');
		$this->load->view('website/header');
		$this->load->view('website/step3');
		$this->load->view('website/footer');
	}
	public function come_page()
	{
		$this->load->view('website/header');
		$this->load->view('website/come_page');
		$this->load->view('website/footer');
	}

	public function login()
	{
		$data=$_POST;
		if($data['redirect']){
		    $redirect = $data['redirect'];
		    unset($data['redirect']);
		}
		if ($user=$this->admin_model->get_row("users",$data)) {
			$this->session->set_userdata($user);
			if($redirect){
			    redirect($redirect);
			}
			redirect(base_url());
		}else{
            $error['title']="Login";
            $error['errors']="Error in Login";
		}

		$this->load->view('website/header',$error);
		$this->load->view('website/useraccount');

	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function myaccount()
	{
		$this->is_login();
		$data['title']="My Account";
		$this->load->view("website/header",$data);
		$this->load->view("website/myaccount");
	}


	public function update_account()
	{
		$data=$_POST;
		$where=['adminID'=>$_SESSION['adminID']];
		if($this->admin_model->update("users",$data,$where)){
          $this->session->set_userdata($data);
          redirect(base_url());
		}else{
          redirect(base_url());
		}
	}

	public function create_user()
	{

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
           $error['errors']=validation_errors();
		}else{
		$data=$_POST;
		$data['role']='user';
		$data['is_active']=1;
		$data['created_at']=date("d-m-Y h:i:s a");
		$data['updated_at']=date("d-m-Y h:i:s a");
		$data['role']='user';
		if ($this->admin_model->insert($data,"users")) {
			redirect(base_url().'web/useraccount');
		}else{
			redirect(base_url().'web/register');

		}

	}
	
		$this->load->view('website/header',$error);
		$this->load->view('website/register');

	}
	
	public function confirm()
	{
		//print_r($_GET);
		/*print_r($_POST);die;*/
		if (!isset($_GET['auth_token'])) {
			if ($_SESSION['cart']) {
				$data = array(
					'user_id' => $_SESSION['adminID'],
					'user_name' => $_SESSION['user_name'],
					'phone_number' => $_POST['phone_number'],
					//'email' => $_POST['email'],
					'user_cnic' => $_POST['user_cnic'],
					'productID' => $_SESSION['cart']['productID'],
					'date_time' => date('Y-m-d', strtotime($_SESSION['cart']['date_time'])),
					'cinema_name' => $_SESSION['cart']['cinema_name'],
					'show_time' => $_SESSION['cart']['show_time'],
					'seats' => implode(',', $_SESSION['cart']['seats'])
				);
				$id = $this->admin_model->insert($data,'booking');
			}
			else{
				redirect('web');
			}
		}
		if ($_SESSION['cart']['cinema_name']=="Cinema 1"){ 
            $price=500;
        }
        if ($_SESSION['cart']['cinema_name']=="Cinema 2"){ 
            $price=400;
        }
        // cc remover kerny ky liye paymentMethod var ko comment kerna hai or form se paymentMethod input htana hai
        $count=count($_SESSION['cart']['seats']);
		$totalamount= $count*$price;
		//$totalamount= 1;
        $hashRequest = '';
		$hashKey = 'G0K5074QI52LSN70'; // generated from easypay account
		$storeId="8098";
		$amount=$totalamount.'.0';
		$postBackURL=base_url('web/confirm');
		$secound=base_url('web/checkout');
		$orderRefNum=$id;
		$expiryDate="20190721 112300";
		$autoRedirect=0 ;
		$paymentMethod='CC_PAYMENT_METHOD';
		$emailAddr=$_POST['email'];
		$mobileNum=$_POST['phone_number'];

		///starting encryption///
		$paramMap = array();
		$paramMap['amount']  = $amount;
		//$paramMap['secound']  = $secound;
		$paramMap['autoRedirect']  = $autoRedirect;
		$paramMap['emailAddr']  = $emailAddr;
		$paramMap['expiryDate'] = $expiryDate;
		$paramMap['mobileNum'] =$mobileNum;
		$paramMap['orderRefNum']  = $orderRefNum;
		$paramMap['paymentMethod']  = $paymentMethod;
		$paramMap['postBackURL'] = $postBackURL;
		$paramMap['storeId']  = $storeId;
		// exit;
		//Creating string to be encoded
		$mapString = '';
		foreach ($paramMap as $key => $val) {
		      $mapString .=  $key.'='.$val.'&';
		}
		$mapString  = substr($mapString , 0, -1);

		// Encrypting mapString
		function pkcs5_pad($text, $blocksize) {
		      $pad = $blocksize - (strlen($text) % $blocksize);
		      return $text . str_repeat(chr($pad), $pad);
		}

		$alg = MCRYPT_RIJNDAEL_128; // AES
		$mode = MCRYPT_MODE_ECB; // ECB

		$iv_size = mcrypt_get_iv_size($alg, $mode);
		$block_size = mcrypt_get_block_size($alg, $mode);
		$iv = mcrypt_create_iv($iv_size, MCRYPT_DEV_URANDOM);

		$mapString = pkcs5_pad($mapString, $block_size);
		$crypttext = mcrypt_encrypt($alg, $hashKey, $mapString, $mode, $iv);
		$hashRequest = base64_encode($crypttext);
		// end encryption;
if (isset($_GET['auth_token'])) {
                			$data = array(
                				'auth_token' => ($_GET['auth_token'])
                				
                			);
                			echo'<form style="display:none ;" action="https://easypay.easypaisa.com.pk/easypay/Confirm.jsf " method="POST" id="easyPayAuthForm">
<input name="auth_token" value="'.$_GET['auth_token'].'" hidden = "true"/>
<input name="postBackURL" value="'.$secound.'" hidden = "true"/>
<input value="confirm" type = "submit" name= "pay"/> 
</form>';
                		}
                		else{
                			echo'<form action=" https://easypay.easypaisa.com.pk/easypay/Index.jsf" method="POST" id="easyPayAuthForm">
<input name="storeId" value="'.$storeId.'" hidden = "true"/>
<input name="amount" value="'.$amount.'" hidden = "true"/>
<input name="postBackURL" value="'.$postBackURL.'" hidden = "true"/>
<input name="orderRefNum" value="'.$orderRefNum.'" hidden = "true"/>
<input name="orderRefNum" value="'.$orderRefNum.'" hidden = "true"/>
<input type ="text" name="expiryDate" style="display:none ;" value="'.$expiryDate.'">
<input type="hidden" name="autoRedirect" value="'.$autoRedirect.'" >

<input type ="hidden" name="emailAddr" value="'.$emailAddr.'">
<input type ="hidden" name="mobileNum" value="'.$mobileNum.'">
<input type ="hidden" name="merchantHashedReq" value="'.$hashRequest.'">
<input type ="hidden" name="paymentMethod" value="CC_PAYMENT_METHOD">
<button type="submit" style="display:none ;"><img src="https://pinpayments.com/pay-button.png"></button>

</form>';
                		}

        echo '<script>
(function() {
  document.getElementById("easyPayAuthForm").submit();
})();
</script>';
	}
		public function confirmm22()
	{
		//print_r($_GET);
		/*print_r($_POST);die;*/
		if (!isset($_GET['auth_token'])) {
			if ($_SESSION['cart']) {
				$data = array(
					'user_id' => $_SESSION['adminID'],
					'user_name' => $_SESSION['user_name'],
					'phone_number' => $_POST['phone_number'],
					//'email' => $_POST['email'],
					'user_cnic' => $_POST['user_cnic'],
					'productID' => $_SESSION['cart']['productID'],
					'date_time' => date('Y-m-d', strtotime($_SESSION['cart']['date_time'])),
					'cinema_name' => $_SESSION['cart']['cinema_name'],
					'show_time' => $_SESSION['cart']['show_time'],
					'seats' => implode(',', $_SESSION['cart']['seats'])
				);
				$id = $this->admin_model->insert($data,'booking');
			}
			else{
				redirect('web');
			}
		}
		if ($_SESSION['cart']['cinema_name']=="Cinema 1"){ 
            $price=500;
        }
        if ($_SESSION['cart']['cinema_name']=="Cinema 2"){ 
            $price=400;
        }
        $count=count($_SESSION['cart']['seats']);
		$totalamount= $count*$price;
		//$totalamount= 1;
        $hashRequest = '';
		$hashKey = 'G0K5074QI52LSN70'; // generated from easypay account
		$storeId="8098";
		$amount=$totalamount.'.0';
		$postBackURL=base_url('web/confirm');
		$secound=base_url('web/checkout');
		$orderRefNum=$id;
		$expiryDate="20190721 112300";
		$autoRedirect=0 ;
		$paymentMethod='CC_PAYMENT_METHOD';
		$emailAddr=$_POST['email'];
		$mobileNum=$_POST['phone_number'];

		///starting encryption///
		$paramMap = array();
		$paramMap['amount']  = $amount;
		//$paramMap['secound']  = $secound;
		$paramMap['autoRedirect']  = $autoRedirect;
		$paramMap['emailAddr']  = $emailAddr;
		$paramMap['expiryDate'] = $expiryDate;
		$paramMap['mobileNum'] =$mobileNum;
		$paramMap['orderRefNum']  = $orderRefNum;
		$paramMap['paymentMethod']  = $paymentMethod;
		$paramMap['postBackURL'] = $postBackURL;
		$paramMap['storeId']  = $storeId;
		// exit;
		//Creating string to be encoded
		$mapString = '';
		foreach ($paramMap as $key => $val) {
		      $mapString .=  $key.'='.$val.'&';
		}
		$mapString  = substr($mapString , 0, -1);

		// Encrypting mapString
		function pkcs5_pad($text, $blocksize) {
		      $pad = $blocksize - (strlen($text) % $blocksize);
		      return $text . str_repeat(chr($pad), $pad);
		}

		$alg = MCRYPT_RIJNDAEL_128; // AES
		$mode = MCRYPT_MODE_ECB; // ECB

		$iv_size = mcrypt_get_iv_size($alg, $mode);
		$block_size = mcrypt_get_block_size($alg, $mode);
		$iv = mcrypt_create_iv($iv_size, MCRYPT_DEV_URANDOM);

		$mapString = pkcs5_pad($mapString, $block_size);
		$crypttext = mcrypt_encrypt($alg, $hashKey, $mapString, $mode, $iv);
		$hashRequest = base64_encode($crypttext);
		// end encryption;
if (isset($_GET['auth_token'])) {
                			$data = array(
                				'auth_token' => ($_GET['auth_token'])
                				
                			);
                			echo'<form style="display:none ;" action="https://easypay.easypaisa.com.pk/easypay/Confirm.jsf " method="POST" id="easyPayAuthForm">
<input name="auth_token" value="'.$_GET['auth_token'].'" hidden = "true"/>
<input name="postBackURL" value="'.$secound.'" hidden = "true"/>
<input value="confirm" type = "submit" name= "pay"/> 
</form>';
                		}
                		else{
                			echo'<form action=" https://easypay.easypaisa.com.pk/easypay/Index.jsf" method="POST" id="easyPayAuthForm">
<input name="storeId" value="'.$storeId.'" hidden = "true"/>
<input name="amount" value="'.$amount.'" hidden = "true"/>
<input name="postBackURL" value="'.$postBackURL.'" hidden = "true"/>
<input name="orderRefNum" value="'.$orderRefNum.'" hidden = "true"/>
<input name="paymentMethod" value="'.$paymentMethod.'" hidden = "true"/>
<input type ="text" name="expiryDate" style="display:none ;" value="'.$expiryDate.'">
<input type="hidden" name="autoRedirect" value="'.$autoRedirect.'" >

<input type ="hidden" name="emailAddr" value="'.$emailAddr.'">
<input type ="hidden" name="mobileNum" value="'.$mobileNum.'">
<input type ="hidden" name="merchantHashedReq" value="'.$hashRequest.'">
<button type="submit" style="display:none ;"><img src="https://pinpayments.com/pay-button.png"></button>

</form>';
                		}

        echo '<script>
(function() {
  document.getElementById("easyPayAuthForm").submit();
})();
</script>';
	}
	public function checkout()
	{
	    error_reporting(0);
	    //print_r($_GET['success']);die;
	    if($_GET['success'] === true || $_GET['success'] == true || $_GET['success'] == 'true'){
    	    $id = $_GET['orderRefNumber'];
    	    $this->db->query("update booking set paid=1 where id=".$id);
	    }
		// if ($_SESSION['cart']) {
		// 	$data = array(
		// 		'user_id' => $_SESSION['adminID'],
		// 		'productID' => $_SESSION['cart']['productID'],
		// 		'date_time' => date('Y-m-d', strtotime($_SESSION['cart']['date_time'])),
		// 		'cinema_name' => $_SESSION['cart']['cinema_name'],
		// 		'show_time' => $_SESSION['cart']['show_time'],
		// 		'seats' => implode(',', $_SESSION['cart']['seats'])
		// 	);
		// 	$this->admin_model->insert($data,'booking');
		// }
		// else{
		// 	redirect('web');
		// }
		$this->load->view('website/header');
		$this->load->view('website/checkout');
		$this->load->view('website/footer');
		$_SESSION['cart'] = '';
	}

	public function contact()
	{
	    $this->load->library('form_validation');
		$this->load->helper('captcha');

		$vals = array(
			'img_path' => './captcha/',
			'img_url' => base_url().'captcha/',
			'expiration' => 7200,
			'word_lenght' => 8,
			'font_size' => 22
		);

		$cap = create_captcha($vals);
		$data['captcha'] = $cap['image'];
		$this->session->set_userdata('captchaWord', $cap['word']);
		$data['title']="Contact Us";
		$this->load->view('website/header',$data);
		$this->load->view('website/contact',$data);
	}
public function refresh_captcha(){
		$this->load->helper('captcha');
		$vals = array(
				'img_path' => './captcha/',
				'img_url' => base_url().'captcha/',
				'expiration' => 7200,
				'word_lenght' => 8,
				'font_size' => 22
		);

		$cap = create_captcha($vals);
		$this->session->set_userdata('captchaWord', $cap['word']);
		echo $cap['image'];
	}

	public function submitt(){
		
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		
		$this->form_validation->set_rules('captcha', 'Captcha', 'trim|required|callback_matching_captcha');

		if($this->form_validation->run()){
			$data['name'] = $this->input->post('name');
			

			/*$data['title']="Membership";
		$this->load->view('website/header',$data);
		$this->load->view('website/membership');*/
		$to="info@megamultiplex.com.pk";
		$from=$this->input->post('from');
		$name=$this->input->post('name');
		$message=$this->input->post('message');
		
		$message = '<html><body>';
        $message .= '<h1>Contact Form! (Megamultiplex)</h1>';
        $message .= '</body></html>';
        $message = '<html><body>';
// $message .= '<img src="//css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name</strong> </td><td>" . strip_tags($name) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['from']) . "</td></tr>";
$message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";

$message .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($_POST['masg']) . "</td></tr>";

$message .= "</table>";
$message .= "</body></html>";



		$this->load->library('email');
		$this->email->set_mailtype("html");

		$this->email->from($from, $name);
		$this->email->to($to);

		$this->email->subject('Contact Form (Megamultiplex)');
		$this->email->message($message);

	   /* if($this->email->send()){

           redirect(base_url().'web');
	    }*/
	     if($this->email->send($reg_dat) === TRUE)
     {
        $data['message'] = 'Insert success';
        //load your view page
        $data = array(
'name' => $this->input->post('name'),
'phone_number' => $this->input->post('phone'),
'email' => $this->input->post('from'),
'message' => $this->input->post('masg')
);

        $this->admin_model->insert($data,"contact_form");
        $this->load->view('website/suss',$data);
     }
		}else{
			$this->contact();
		}
	}

	public function matching_captcha($str){
		if(strtolower($str) != strtolower($this->session->userdata('captchaWord'))){
			$this->form_validation->set_message('matching_captcha', 'The {field} did not matching');
			return false;
		}else{
			return true;
		}
	}
	public function membership()
	{
		$data['title']="Membership";
		$this->load->view('website/header',$data);
		$this->load->view('website/membership');
	}

	public function ticketinfo()
	{
		$data['title']="Ticket Info";
		$this->load->view('website/header',$data);
		$this->load->view('website/ticketinfo');
	}


	public function showing1()
	{
		$data['title']="Now Showing";
		$start = date('Y-m-d');

		//$end = date('Y-m-d', strtotime('+30 day'));
		// print_r($start);
		// print_r($end);
		$data['movies']=$this->admin_model->result_query("select movie_id.*, title,rating,poster,web_show_times.date from web_movies JOIN web_show_times ON web_movies.movie_id = web_show_times.movie_id where web_show_times.date != '' and web_show_times.date >= '".$start."' group by web_movies.movie_id DESC");
		// $del = [];
		// for ($i=0; $i < sizeof($data['movies']); $i++) { 
		// 	$con = 0;
		// 	$date = $data['movies'][$i]['showdate'];
		// 	$date = explode('::', $date);
		// 	//print_r($date);
		// 	for ($a=0; $a < sizeof($date); $a++) { 
		// 		// echo $i;echo '<br>';
		// 		// echo strtotime($start);echo '<br>';
		// 		// echo strtotime($date[$a]);echo '<br>';
		// 		// echo strtotime($end);echo '<br>';
		// 		if (strtotime($date[$a]) >= strtotime($start) && strtotime($date[$a]) <= strtotime($end)) {
		// 			$con = 1;
		// 		}
		// 	}
		// 	if ($con == 0) {
		// 		$del[] = $i;
		// 	}
		// }

		// for ($i=0; $i < sizeof($del); $i++) { 
		// 	unset($data['movies'][$del[$i]]);
		// }
		// print_r($del);
		// ksort($data['movies']);
		// print_r($data['movies']);die;
		$this->load->view('website/header',$data);
		$this->load->view('website/showing1');
	}
    public function showing()
	{
		// $data['title']="Now Showing";
		$start = date('Y-m-d');

		//$end = date('Y-m-d', strtotime('+30 day'));
		//print_r($start);
		//print_r($end);
	    $this->db->select('web_movies.movie_id,title,rating,poster,web_show_times.date,web_show_times.time')
				->from('web_movies')
				->join('web_show_times','web_movies.movie_id = web_show_times.movie_id')
				->where('web_show_times.date !=', '') 
				->where('web_show_times.date >=', $start)
				->group_by('web_movies.movie_id')
				->order_by('web_movies.movie_id', 'DESC');
				$data['movies'] = $this->db->get()->result_array();
				 


		// $data['movies']=$this->admin_model->raw_query("select products.*, show_time.showdate from products JOIN show_time ON products.productID = show_time.productID where show_time.showdate != '' and show_time.showdate >= '".$start."' and show_time.showdate <= '".$end."' group by products.productID DESC" ,1);
		// $del = [];
		// for ($i=0; $i < sizeof($data['movies']); $i++) { 
		// 	$con = 0;
		// 	$date = $data['movies'][$i]['showdate'];
		// 	$date = explode('::', $date);
		// 	//print_r($date);
		// 	for ($a=0; $a < sizeof($date); $a++) { 
		// 		// echo $i;echo '<br>';
		// 		// echo strtotime($start);echo '<br>';
		// 		// echo strtotime($date[$a]);echo '<br>';
		// 		// echo strtotime($end);echo '<br>';
		// 		if (strtotime($date[$a]) >= strtotime($start) && strtotime($date[$a]) <= strtotime($end)) {
		// 			$con = 1;
		// 		}
		// 	}
		// 	if ($con == 0) {
		// 		$del[] = $i;
		// 	}
		// }

		// for ($i=0; $i < sizeof($del); $i++) { 
		// 	unset($data['movies'][$del[$i]]);
		// }
		// print_r($del);
		// ksort($data['movies']);
		// print_r($data['movies']);die;
		$this->load->view('website/header',$data);
		$this->load->view('website/showing');
	}




	public function comingsoon()
	{
		$data['title']="Coming Soon";
		// $data['movies']=$this->admin_model->get("products");
// 		$data['coming_soon']=$this->admin_model->raw_query("SELECT * FROM `products` 		 WHERE `coming_soon`=1",1);
		// $data['featured']=$this->admin_model->raw_query("SELECT * FROM `products` WHERE `status` = 'Featured'",1);
	   $this->db->select('*')
				->from('web_movies')
				->where('status =', 'Coming Soon');
				$data['movies'] = $this->db->get()->result_array();

		// $com_soon=[];

		// foreach($data['movies'] as $movie){

  //       	$saved = date("d-m-Y",strtotime($movie['release_date']));
  //       	$com_saved = strtotime($saved);
  //       	$date_today=date('d-m-Y');
  //       	$today_date=strtotime($date_today);
        	
        
  //           if($com_saved > $today_date){
		//       //  echo $com_saved ."<br>";
		//       $com_soon[]=$movie;
		//     }
		// }
		// $data['coming_soon']=$com_soon;
		// 	print_r(); die();	

		$this->load->view('website/header',$data);
		$this->load->view('website/comingsoon');
	    
	}


	public function contact_us()
	{

		$to="info@megamultiplex.com.pk";
		$from=$this->input->post('from');
		$name=$this->input->post('name');
		$masg=$this->input->post('masg');
		
		$message = '<html><body>';
        $message .= '<h1>Contact Form! (Megamultiplex)</h1>';
        $message .= '</body></html>';
        $message = '<html><body>';
// $message .= '<img src="//css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name</strong> </td><td>" . strip_tags($name) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['from']) . "</td></tr>";
$message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";

$message .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($masg) . "</td></tr>";

$message .= "</table>";
$message .= "</body></html>";
		
		$this->load->library('email');
	    $this->email->set_mailtype("html");
		$this->email->from($from, $name);
		$this->email->to($to);

		$this->email->subject('Contact Form (Megamultiplex)');
		$this->email->message($message);

	    /*if($this->email->send()){
           redirect(base_url().'web');
	    }*/
	     if($this->email->send($reg_dat) === TRUE)
     {
        $data['message'] = 'Insert success';
        //load your view page
        $data = array(
'name' => $this->input->post('name'),
'phone_number' => $this->input->post('phone'),
'email' => $this->input->post('from'),
'message' => $this->input->post('masg')
);

        $this->admin_model->insert($data,"contact_form");
        $this->load->view('website/suss',$data);
     }
	    else{
           redirect(base_url().'web');
	    }


	}
	public function corporate_form()
	{

		$to="info@megamultiplex.com.pk";
		$from=$this->input->post('from');
		$name=$this->input->post('name');
		$company_name=$this->input->post('company_name');
		$masg=$this->input->post('masg');
		$message = '<html><body>';
        $message .= '<h1>Corporate Form! (Megamultiplex)</h1>';
        $message .= '</body></html>';
        $message = '<html><body>';
// $message .= '<img src="//css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Company Name:</strong> </td><td>" . strip_tags($company_name) . "</td></tr>";
$message .= "<tr ><td><strong>Name:</strong> </td><td>" . strip_tags($name) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['from']) . "</td></tr>";
$message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";

$message .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($masg) . "</td></tr>";

$message .= "</table>";
$message .= "</body></html>";
		
		$this->load->library('email');
	    $this->email->set_mailtype("html");
		$this->email->from($from, $name);
		$this->email->to($to);

		$this->email->subject('Corporate Form (Megamultiplex)');
		$this->email->message($message);

	    /*if($this->email->send()){
           $this->user_model->add_user($reg_dat);
	    }*/
	    
	    
	     if($this->email->send($reg_dat) === TRUE)
     {
        $data['message'] = 'Insert success';
        //load your view page
        $this->load->view('website/suss',$data);
     }
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    else{
           redirect(base_url().'web');
	    }


	}
	
		public function suss()
	{


		$data['title']="Corporate";
		$this->load->view('website/header',$data);
		$this->load->view('website/suss');
	}

	public function email_membership()
	{

		$to="info@megamultiplex.com.pk";
		$from=$this->input->post('email');
		$name=$this->input->post('first_name')." ".$this->input->post('last_name');
		$address=$this->input->post('address');
		$message = '<html><body>';
        $message .= '<h1>Hello, World!</h1>';
        $message .= '</body></html>';
        $message = '<html><body>';
// $message .= '<img src="//css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($name) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$message .= "<tr><td><strong>Type of Card:</strong> </td><td>" . strip_tags($_POST['card_type']) . "</td></tr>";

$message .= "<tr><td><strong>Address:</strong> </td><td>" . strip_tags($address) . "</td></tr>";

$message .= "</table>";
$message .= "</body></html>";
		
		$this->load->library('email');
	    $this->email->set_mailtype("html");
		$this->email->from($from, $name);
		$this->email->to($to);

		$this->email->subject('Membership Form');
		$this->email->message($message);

	    if($this->email->send()){
           redirect(base_url().'web');
	    }else{
           redirect(base_url().'web');
	    }


	}
public function remove_comming_soon()
	{
	    	$data['title']="Coming Soon";
		$data['movies']=$this->admin_model->get("products");
// 		$data['coming_soon']=$this->admin_model->raw_query("SELECT * FROM `products` WHERE `coming_soon`=1",1);
		$data['featured']=$this->admin_model->raw_query("SELECT * FROM `products` WHERE `status` = 'Featured'",1);
		
		$com_soon=[];

		foreach($data['movies'] as $movie){

        	$saved = date("d-m-Y",strtotime($movie['release_date']));
        	$com_saved = strtotime($saved);
        	$date_today=date('d-m-Y');
        	$today_date=strtotime($date_today);
        	
        
            if($com_saved > $today_date){
		      //  echo $com_saved ."<br>";
		      $com_soon[]=$movie;
		    }
		}
		$data['coming_soon']=$com_soon;
// 	print_r(); die();
		

		$this->load->view('website/header',$data);
		$this->load->view('website/comingsoon');
	    
	    
	    
// $data['title']="Coming Soon";
// 		$data['movies']=$this->admin_model->get("products");
// // 		$data['coming_soon']=$this->admin_model->raw_query("SELECT * FROM `products` WHERE `coming_soon`=1",1);
// 		$data['featured']=$this->admin_model->raw_query("SELECT * FROM `products` WHERE `status` = 'Featured'",1);
		
// 		$com_soon=[];

// 		foreach($data['movies'] as $movie){

        		
// 		    if(date("d m Y",strtotime($movie['release_date'])) > date('d m Y')){
// 		      $com_soon[]=$movie;
// 		    }
// 		}
// 		$data['coming_soon']=$com_soon;
// print_r($com_soon); die();
	
	
	
	
	
	
	
	
	
	
// 		$first = date("d M Y");
// 		// print_r($first);die();
// 		$SQL="UPDATE products SET coming_soon = 0 WHERE release_date < '$first'";
// 		$query = $this->db->query($SQL);

// 		return $query->result_array();
	}


}	


