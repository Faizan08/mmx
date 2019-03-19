<?php 

/**
* 
*/
class Admin extends CI_Controller
{

	public function is_login($value='')
	{
         if (!$this->session->userdata('adminID')) {
            header("location:".base_url().'admin/login');
         }
	}


	
	public function index()
	{
		$this->is_login();
			$data['title']="Product For Sale";
		$this->db->select('b.*,p.title')
				 ->from('booking b')
				 ->where('b.paid', '1')
				 ->join('products p', 'b.productID = p.productID');
		$data['products'] = $this->db->get()->result_array();
			$query="select booking.*, products.title from booking left join products on products.productID = booking.productID where paid = 1 and type = 0";
		$data['booking']=$this->admin_model->raw_query($query,1);
		$data['title']="Dashboard";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/index');
		$this->load->view('admin/footer');
	}
	public function login()
	{
		$this->load->view('admin/login');
	}

	public function check_login()
	{
		$_SESSION['adminID']="1";
		redirect(base_url().'admin/');
	}
    /*login*/
    public function client_login()

  {
    $data=array(
      'user_name'=>$_POST['login_name'],
      'role'=>'admin',
      'password'=>$_POST['password']
    );
    //print_r($data);die;
    if($client=$this->db->get_where('users',$data)->row_array()){
    	
      $this->session->set_userdata($client);
           redirect(base_url().'admin/index');
    }else{
    	//$this->session->set_flashdata('error', 'Email and Password do not match');
           redirect(base_url().'admin/login');

    }

  }
   public function destroy()
  {
    $this->session->sess_destroy();
      redirect(base_url().'admin/login');

  }
    /*login*/
	
	public function create_category()
	{	
		$this->is_login();

		$data['title']="Create Category";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/create_category');
		$this->load->view('admin/footer');
	}	
	public function create_cinema()
	{	
		$this->is_login();

		$data['title']="Create Cinema";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/create_cinema');
		$this->load->view('admin/footer');
	}
	public function create_slider()
	{
		$this->is_login();

		$data['title']="Create Slider";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/create_slider');
		$this->load->view('admin/footer');
	}
	public function view_slider()
	{
		$this->is_login();

		$query="select * from slider";
		$data['sliders']=$this->admin_model->raw_query($query,1);
		$data['title']="View Slider";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/view_slider');
		$this->load->view('admin/footer');
	}
	public function create_promotion()
	{
		$this->is_login();

		$data['title']="Create promotion";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/create_promotion');
		$this->load->view('admin/footer');
	}
	public function view_promotion()
	{
		$this->is_login();

		$query="select * from promotion";
		$data['promotions']=$this->admin_model->raw_query($query,1);
		$data['title']="View promotion";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/view_promotion');
		$this->load->view('admin/footer');
	}
	public function create_trailer()
	{
		$this->is_login();

		$data['title']="Create trailer";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/create_trailer');
		$this->load->view('admin/footer');
	}
	public function view_trailer()
	{
		$this->is_login();

		$query="select * from trailer";
		$data['trailers']=$this->admin_model->raw_query($query,1);
		$data['title']="View trailer";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/view_trailer');
		$this->load->view('admin/footer');
	}
	
	public function add_showtime($productID)
	{
		$this->is_login();

		$data['title']="Show Time";
		$where=array('productID'=>$productID);
		$data['cinemas']=$this->admin_model->get("cinemas");

		$data['movie']=$this->admin_model->get_row("products",$where);

		$this->load->view('admin/header',$data);
		$this->load->view('admin/add_showtime');
		$this->load->view('admin/footer');
	}
	public function edit_showtime($productID)
	{
		$this->is_login();

		$where=array('productID'=>$productID);
		$data['cinemas']=$this->admin_model->get("cinemas");

		$data['movie']=$this->admin_model->get_row("products",$where);
		$data['show_time']=$this->admin_model->select_where("show_time",$where);
		//print_r($data['show_time']);die();
		$data['title']="Edit show Time";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/edit_showtime');
		$this->load->view('admin/footer');
	}

	public function update_showtime($productID)
	{
		$values = $this->input->post();
		//echo '<pre>';print_r($values);die;
		for ($i=0; $i < sizeof($values['id']); $i++) { 
			$data = array(
				'cinema_name'=>$values['cinema_name'][$i],
				'showtime'=>$values['show_time'][$i],
				'showdate'=>$values['show_date'][$i]
			);
			$this->admin_model->update("show_time",$data,array('showtimeID'=>$values['id'][$i]));
		}
		redirect('admin/view_product');
	}
	
	public function view_category()
	{
		$this->is_login();

		$data['categories']=$this->admin_model->get("category");
		$data['title']="View Category";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/view_category');
		$this->load->view('admin/footer');
	}
	public function view_booking()
	{
	
	
		$data['title']="View booking";
		$query="select booking.*, products.title from booking join products on products.productID = booking.productID";
		$data['booking']=$this->admin_model->raw_query($query,1);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/view_booking');
		$this->load->view('admin/footer');
	}
	
		public function view_online_booking()
	{
	 error_reporting('-1');
	
		$data['title']="View booking";
	$query="select booking.*, products.title from booking left join products on products.productID = booking.productID where paid = 1 and type = 0";
		$data['booking']=$this->admin_model->raw_query($query,1);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/view_online_booking');
		$this->load->view('admin/footer');
	}
	
		public function online_booking_show()
	{
	
	
		$data['title']="View booking";
	$query="select booking.*, products.title from booking left join products on products.productID = booking.productID where paid = 1 and type = 0";
		$data['booking']=$this->admin_model->raw_query($query,1);
			$this->load->view('admin/header_boxofic',$data);
		$this->load->view('admin/view_online_booking');
		$this->load->view('admin/footer');
	}
	
	
	public function export_booking(){
		$query="select booking.*, products.title from booking left join products on products.productID = booking.productID where paid = 1 and type = 0";
		$booking=$this->admin_model->raw_query($query,1);
		$delimiter = ",";
	    $filename = "booking.csv";
	    $f = fopen('php://memory', 'w');
	    $fields = array('Order Id','Movie Name','Date','Time','Seats', 'Name', 'Number','cinema_name');
		fputcsv($f,$fields, $delimiter);	
		foreach($booking as $row){
			$lineData = array($row['id'],$row['title'],$row['date_time'],$row['show_time'],$row['seats'],$row['user_name'],$row['phone_number'],$row['cinema_name']);
			fputcsv($f,$lineData, $delimiter);
		}
   		fseek($f, 0);
    	header('Content-Type: text/csv');
    	header('Content-Disposition: attachment; filename="' . $filename . '";');
    	fpassthru($f);	
		//echo '<pre>';print_r($booking);
	}
	public function boxoffice()
	{
	
	
		$data['title']="View booking";
		$query="select booking.*, products.title from booking join products on products.productID = booking.productID";
		$data['booking']=$this->admin_model->raw_query($query,1);
		$this->load->view('admin/header_boxofic',$data);
		$this->load->view('admin/view_booking_box_ofice');
		$this->load->view('admin/footer');
	}
	
	public function delete_showtime($productID)
	{
		$where=['productID'=>$productID];
		if ($this->admin_model->delete("show_time",$where)) {
			redirect(base_url().'admin/view_product');
		}else{
			redirect(base_url().'admin/view_product');
			
		}
	}


	public function view_showtime()
	{
		$this->is_login();
        $query="";
		$data['showtime']=$this->admin_model->get("category");
		$data['title']="View Showtime";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/view_showtime');
		$this->load->view('admin/footer');
	}
	public function view_cinema()
	{
		$this->is_login();

		$data['cinemas']=$this->admin_model->get("cinemas");
		$data['title']="View Cinema";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/view_cinema');
		$this->load->view('admin/footer');
	}
	public function view_news()
	{
		$this->is_login();

		$data['newss']=$this->admin_model->get("news");
		$data['title']="View News";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/view_news');
		$this->load->view('admin/footer');
	}
	
		public function view_contact_form_detail()
	{
		$this->is_login();

		$data['contactd']=$this->admin_model->get("contact_form");
		$data['title']="View Contact Form Details";
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/view_contact_form_detail');
		$this->load->view('admin/footer');
	}



	public function edit_news($newsID)
	{
		$this->is_login();

		$where=array('newsID'=>$newsID);
		$data['news']=$this->admin_model->get_row("news",$where);
		$data['title']="Edit News";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/edit_news');
		$this->load->view('admin/footer');
	}

	public function edit_category($categoryID)
	{
		$this->is_login();

		$where=array('categoryID'=>$categoryID);
		$data['category']=$this->admin_model->get_row("category",$where);
		$data['title']="Edit Category";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/edit_category');
		$this->load->view('admin/footer');
	}
	public function edit_cinema($cinemaID)
	{
		$this->is_login();

		$where=array('cinemaID'=>$cinemaID);
		$data['cinema']=$this->admin_model->get_row("cinemas",$where);
		$data['title']="Edit Cinema";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/edit_cinema');
		$this->load->view('admin/footer');
	}
	public function edit_subcategory($subcategoryID)
	{
		$this->is_login();

		$where=array('subCategoryID'=>$subcategoryID);		
		$data['categories']=$this->admin_model->get("category");
		$data['subcategory']=$this->admin_model->get_row("subcategory",$where);
		$data['title']="Edit SubCategory";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/edit_subcategory');
		$this->load->view('admin/footer');
	}
	public function edit_product($productID)
	{
		$this->is_login();
		$where=array('movie_id'=>$_GET['movie_id']);

			
		// $data['categories']=$this->admin_model->get("category");
		$data['movies']=$this->admin_model->get_row("web_movies",$where);
		
		
		// $categoryID=$data['movie_id']['categoryID'];

		
		// $data['subcategories']=$this->admin_model->raw_query("select * from subcategory where categoryID='$categoryID'",1);
		$data['title']="Edit Product";

		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/edit_product');
		$this->load->view('admin/footer');

	}
	public function sell_product($productID)
	{
		$this->is_login();

		$where=array('productID'=>$productID);		
		$data['categories']=$this->admin_model->get("category");
		$data['product']=$this->admin_model->get_row("products",$where);
		$categoryID=$data['product']['categoryID'];
		$data['subcategories']=$this->admin_model->raw_query("select * from subcategory where categoryID='$categoryID'",1);
		$data['title']="Edit Product";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sell_product');
		$this->load->view('admin/footer');
	}

	public function create_product()
	{
		$data['title']="Create Product";
		$data['categories']=$this->admin_model->get("category");
		$this->load->view('admin/header',$data);
		$this->load->view('admin/create_product');
		$this->load->view('admin/footer');

	}
	public function create_movie()
	{
		$data['title']="Create Product";
		$data['categories']=$this->admin_model->get("category");
		$this->load->view('admin/header',$data);
		$this->load->view('admin/create_movie');
		$this->load->view('admin/footer');

	}
	public function create_news()
	{
		$data['title']="Create News";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/create_news');
		$this->load->view('admin/footer');

	}

	public function view_product()
	{
		$data['title']="View Product";
		$query="select * from web_movies";
		$data['allmovies']=$this->admin_model->raw_query($query,1);

		 // print_r($data['allmovies']);

		$this->load->view('admin/header',$data);
		$this->load->view('admin/view_product');
		$this->load->view('admin/footer');

	}
	public function showw()
	{
		
		$data['title']="Create Product";
		$data['categories']=$this->admin_model->get("category");
		$this->load->view('admin/header',$data);
		$this->load->view('admin/showw');
		$this->load->view('admin/footer');

	}
	public function show_form()
	{
		
		$this->load->view('admin/header');
		$this->load->view('admin/show_form');
		$this->load->view('admin/footer');

	}
	public function book_ticket()
	{
		//$data['movies'] = $this->admin_model->get('products');
		$start = date('Y-m-d');
		$end = date('Y-m-d', strtotime('+30 day'));
		$data['movies']=$this->admin_model->raw_query("select products.*, show_time.showdate from products JOIN show_time ON products.productID = show_time.productID where show_time.showdate != '' and show_time.showdate >= '".$start."' and show_time.showdate <= '".$end."' group by products.productID DESC" ,1);
		//echo '<pre>';print_r($data);die;
		$this->load->view('admin/header');
		$this->load->view('admin/book_ticket',$data);
		$this->load->view('admin/footer');

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
		//$date=array_map('trim',$date['times']);
		//print_r($this->db->last_query());
		//$date = $this->admin_model->select_where('show_time',array('productID'=>$id));
		echo json_encode($date);
	}

	public function total_seats($book)
	{
		error_reporting(0);
		$seats = array();
		for ($i=1; $i < 12; $i++) { 
			$key = array_search('A'.$i,$book); 
            if (!array_key_exists($key,$book)){
                $seats[] = 'A'.$i;
            }
		}
		for ($i=1; $i < 11; $i++) { 
			$key = array_search('B'.$i,$book); 
            if (!array_key_exists($key,$book)){
                $seats[] = 'B'.$i;
            }
		}
		for ($i=1; $i < 12; $i++) { 
			$key = array_search('C'.$i,$book); 
            if (!array_key_exists($key,$book)){
                $seats[] = 'C'.$i;
            }
		}
		for ($i=1; $i < 11; $i++) { 
			$key = array_search('D'.$i,$book); 
            if (!array_key_exists($key,$book)){
                $seats[] = 'D'.$i;
            }
		}
		for ($i=1; $i < 12; $i++) { 
			$key = array_search('E'.$i,$book); 
            if (!array_key_exists($key,$book)){
                $seats[] = 'E'.$i;
            }
		}
		for ($i=1; $i < 11; $i++) { 
			$key = array_search('F'.$i,$book); 
            if (!array_key_exists($key,$book)){
                $seats[] = 'F'.$i;
            }
		}
		for ($i=1; $i < 12; $i++) { 
			$key = array_search('G'.$i,$book); 
            if (!array_key_exists($key,$book)){
                $seats[] = 'G'.$i;
            }
		}
		for ($i=1; $i < 11; $i++) { 
			$key = array_search('I'.$i,$book); 
            if (!array_key_exists($key,$book)){
                $seats[] = 'I'.$i;
            }
		}
		for ($i=1; $i < 12; $i++) { 
			$key = array_search('J'.$i,$book); 
            if (!array_key_exists($key,$book)){
                $seats[] = 'J'.$i;
            }
		}
		// for ($i=1; $i < 12; $i++) { 
		// 	$key = array_search('A'.$i,$book); 
  //           if (!array_key_exists($key,$book)){
  //               $seats[] = 'A'.$i;
  //           }
		// 	$seats[] = 'J'.$i;
		// }
		for ($i=1; $i < 11; $i++) { 
			$key = array_search('K'.$i,$book); 
            if (!array_key_exists($key,$book)){
                $seats[] = 'K'.$i;
            }
		}
		for ($i=1; $i < 12; $i++) { 
			$key = array_search('L'.$i,$book); 
            if (!array_key_exists($key,$book)){
                $seats[] = 'L'.$i;
            }
		}
		for ($i=1; $i < 11; $i++) { 
			$key = array_search('M'.$i,$book); 
            if (!array_key_exists($key,$book)){
                $seats[] = 'M'.$i;
            }
		}
		for ($i=1; $i < 12; $i++) { 
			$key = array_search('N'.$i,$book); 
            if (!array_key_exists($key,$book)){
                $seats[] = 'N'.$i;
            }
			$seats[] = 'N'.$i;
		}
		return $seats;
	}

	public function get_movies_seats($id,$date,$cinema,$time)
	{
		$cinema = str_replace('%20', ' ', $cinema);
		$this->db->select('group_concat(seats separator ",") as seats')
	    		 ->from('booking')
	    		 ->where('paid', '1')
	    		 ->where('cinema_name', str_replace("%20","",$cinema))
	    		 ->where('date_time', $date)
	    		 ->where('show_time', str_replace("%20"," ",trim($time)))
	    		 ->where('productID', $id)
	    		 ->group_by('productID');
	    $list = $this->db->get()->row_array();
	    //print_r($this->db->last_query());
	    //echo '<pre>';print_r($list);die;
	    //$list = explode(',', $list['seats']);
	    $list = str_replace(" ","",$list);
    	$list = explode(',', $list['seats']);
    	$list=array_map('trim',$list);
    	$list=array_unique($list);
    	//echo '<pre>';print_r($list);die;
	    $seats = $this->total_seats($list);	
		//echo '<pre>';print_r($seats);die;
	    echo json_encode($seats);
	}

	public function insert_ticket()
	{
		$post = $this->input->post();
		$data = array(
			'user_id' => $_SESSION['adminID'],
			'productID' => $post['productID'],
			'date_time' => date('Y-m-d', strtotime($post['date'])),
			'cinema_name' => $post['cinema'],
			'show_time' => $post['time'],
			'seats' => implode(',', $post['seats']),
			'paid'=>1
		);
		$this->admin_model->insert($data,'booking');
		redirect('admin/product_sale');
		//echo '<pre>';print_r($this->input->post());
	}

	public function product_sale()
	{
		$data['title']="Product For Sale";
		$this->db->select('b.*,p.title')
				 ->from('booking b')
				 ->where('b.paid', '1')
				 ->join('products p', 'b.productID = p.productID');
		$data['products'] = $this->db->get()->result_array();
		//echo '<pre>';print_r($data);die;
		// $query="select subcategory.subCategoryName,category.categoryName,products.* from products inner join category on (category.categoryID=products.categoryID) inner join subcategory on (subcategory.subCategoryID=products.subCategoryID) order by products.productID DESC";
		// $data['products']=$this->admin_model->raw_query($query,1);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/product_sale');
		$this->load->view('admin/footer');

	}






	public function insert_category()
	{

             $config['upload_path']   = './uploads/category/'; 
             $config['allowed_types'] = 'gif|jpg|png'; 
 


         $this->load->library('upload', $config);
         
         if ( ! $this->upload->do_upload('categoryImage')) {
           
                  $data=array(
                        'categoryName'=>$_POST['categoryName'],
                        'categoryDesc'=>$_POST['categoryDesc'],
                     );

         }
         else { 
            $upload_data = $this->upload->data(); 
            $data=array(
                        'categoryName'=>$_POST['categoryName'],
                        'categoryDesc'=>$_POST['categoryDesc'],
                        'categoryImage'=>$upload_data['file_name'],
                     );
              }
		
		if ($this->admin_model->insert($data,"category")) {
			echo "<script>
			alert('Successfully Inserted');
			window.location.href='".base_url()."admin/view_category'
			</script>";
		}else{
			echo "<script>
			alert('Error in Inserting, Please Try Again');
			window.location.href='".base_url()."admin/view_category'
			</script>";
		}

	}
	public function insert_cinema()
	{

            $data=array(
                        'cinema_name'=>$_POST['cinema_name'],
                    
                     );
              
		
		if ($this->admin_model->insert($data,"cinemas")) {
			echo "<script>
			alert('Successfully Inserted');
			window.location.href='".base_url()."admin/view_cinema'
			</script>";
		}else{
			echo "<script>
			alert('Error in Inserting, Please Try Again');
			window.location.href='".base_url()."admin/view_cinema'
			</script>";
		}

	}

	public function get_showtime()
	{
		?>

		<div class="time-select__group group--first">
	        <div class="col-sm-3">
	            <p class="time-select__place">Cineworld</p>
	        </div>
	        <ul class="col-sm-6 items-wrap">
	            <li class="time-select__item" data-time='09:40'>09:40</li>
	            <li class="time-select__item" data-time='13:45'>13:45</li>
	            <li class="time-select__item" data-time='15:45'>15:45</li>
	            <li class="time-select__item" data-time='19:50'>19:50</li>
	            <li class="time-select__item" data-time='21:50'>21:50</li>
	        </ul>
	    </div>

                      
<?php
	}
	public function insert_showtime($productID)
	{
        $cinema_name = $this->input->post('cinema_name[]');
        $show_date = $this->input->post('show_date[]');
        $show_time = $this->input->post('show_time[]');
        for ($i=0; $i < sizeof($cinema_name); $i++) { 
          $data = array(
            'productID'=>$productID,
            'cinema_name' => $cinema_name[$i],
            'showdate' => $show_date[$i],
            'showtime' => $show_time[$i],
          );
          
          if ($this->admin_model->insert($data,"show_time")) {
			echo "<script>
			alert('Successfully Inserted');
			window.location.href='".base_url()."admin/view_product'
			</script>";
		}else{
			echo "<script>
			alert('Error in Inserting, Please Try Again');
			window.location.href='".base_url()."admin/view_product'
			</script>";
		}
        }

       //    echo "<pre>";
       // print_r($array);

       // echo $cinemas;
       //           $data=array(
       //                       'cinema_name'=>$_POST['cinema_name'],

       //);
              
		
		

	}
	public function insert_news()
	{

             $config['upload_path']   = './uploads/news/'; 
             $config['allowed_types'] = 'gif|jpg|png'; 
 


         $this->load->library('upload', $config);
         
         if ( ! $this->upload->do_upload('image')) {
           
                  $data=array(
                        'title'=>$_POST['title'],
                        'description'=>$_POST['description'],
                        'is_top'=>$_POST['is_top'],
                        'date_time'=>date("d M Y "),
                     );

         }
         else { 
            $upload_data = $this->upload->data(); 
            $data=array(
                        'title'=>$_POST['title'],
                        'description'=>$_POST['description'],
                        'is_top'=>$_POST['is_top'],
                        'date_time'=>date("d M Y "),
                        'image'=>$upload_data['file_name'],
                     );
              }
		
		if ($this->admin_model->insert($data,"news")) {
			echo "<script>
			alert('Successfully Inserted');
			window.location.href='".base_url()."admin/view_news'
			</script>";
		}else{
			echo "<script>
			alert('Error in Inserting, Please Try Again');
			window.location.href='".base_url()."admin/view_news'
			</script>";
		}

	}
	public function insert_product()
	{

  		//       echo "<pre>";
		// die(print_r($_POST));
             $config['upload_path']   = './uploads/product/'; 
             $config['allowed_types'] = 'gif|jpg|png'; 
            //  $config['encript_name'] = TRUE; 

 			


         $this->load->library('upload', $config);
         $categories=implode(",", $_POST['categoryID']);

          if ( ! $this->upload->do_upload('mob_cover')) {
           $mob_cover = file_get_contents($this->input->post('mob_cover'));
                   $path2 = $_SERVER['DOCUMENT_ROOT'].'/mega_multiplex/uploads/product/'.$this->input->post('title').'mob.png';
					
                   file_put_contents($path2, $mob_cover);
               }


         if ( ! $this->upload->do_upload('productImage')) {
           $image = file_get_contents($this->input->post('productImage'));
                   $path = $_SERVER['DOCUMENT_ROOT'].'/mega_multiplex/uploads/product/'.$this->input->post('title').'.png';
					
                   file_put_contents($path, $image);
                  


                   $data=array(
    'categoryID'=>$categories,
    'title'=>$this->input->post('title'),
    'country'=>$this->input->post('country'),
    'year'=>$this->input->post('year'),
    'release_date'=>$this->input->post('release_date'),
    'director'=>$this->input->post('director'),
    'actors'=>$this->input->post('actors'),
    'age_restriction'=>$this->input->post('age_restriction'),
    'box_office'=>$this->input->post('box_office'),
    'length'=>$this->input->post('length'),
    'imd_rating'=>$this->input->post('imd_rating'),
    'description'=>$this->input->post('description'),
    'status'=>$this->input->post('status'),
    'total_views'=>$this->input->post('total_views'),
    'is_top'=>$this->input->post('is_top'),
    'coming_soon'=>$this->input->post('coming_soon'),
    'now_showing'=>$this->input->post('now_showing'),
    'best_choice'=>$this->input->post('best_choice'),
   
    'mob_cover'=>$this->input->post('title').'mob.png',
    'image'=>$this->input->post('title').'.png',

   

    'trailer'=>$this->input->post('trailer')


                  	);
                   
                   
         }
         else { 
            $upload_data = $this->upload->data(); 



                               $data=array(
    'categoryID'=>$categories,
    'title'=>$this->input->post('title'),
    'country'=>$this->input->post('country'),
    'year'=>$this->input->post('year'),
    'release_date'=>$this->input->post('release_date'),
    'director'=>$this->input->post('director'),
    'actors'=>$this->input->post('actors'),
    'age_restriction'=>$this->input->post('age_restriction'),
    'box_office'=>$this->input->post('box_office'),
    'length'=>$this->input->post('length'),
    'imd_rating'=>$this->input->post('imd_rating'),
    'image'=>$upload_data['file_name'],
    'description'=>$this->input->post('description'),
    'status'=>$this->input->post('status'),
    'coming_soon'=>$this->input->post('coming_soon'),
    'now_showing'=>$this->input->post('now_showing'),
    'is_top'=>$this->input->post('is_top'),
    'best_choice'=>$this->input->post('best_choice'),
    'mob_cover'=>$_FILES['mob_cover']['name'],
    'trailer'=>$this->input->post('trailer')
                  	);


                     
              }
		 
		if ($this->admin_model->insert($data,"products")) {

			echo "<script>
			alert('Successfully Inserted');
			window.location.href='".base_url()."admin/view_product'
			</script>";
		}else{
			echo "<script>
			alert('Error in Inserting, Please Try Again');
			window.location.href='".base_url()."admin/view_product'
			</script>";
		}

	}

	public function update_product($productID)
	{
    //'description'=>$this->input->post('description'),
    //'categoryID'=>$categories,
    //'country'=>$this->input->post('country'),
    //'year'=>$this->input->post('year'),
    //'release_date'=>$this->input->post('release_date'),
    //'director'=>$this->input->post('director'),
    //'actors'=>$this->input->post('actors'),
    //'age_restriction'=>$this->input->post('age_restriction'),
    //'box_office'=>$this->input->post('box_office'),

		//'total_views'=>$this->input->post('total_views'),
    //'is_top'=>$this->input->post('is_top'),
    //'coming_soon'=>$this->input->post('coming_soon'),
    //'now_showing'=>$this->input->post('now_showing'),
    //'best_choice'=>$this->input->post('best_choice'),
    //'trailer'=>$this->input->post('trailer')   

         $config['upload_path']   = './uploads/product/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
 

     // die(print_r($_POST));

         $this->load->library('upload', $config);
         $categories=implode(",", $_POST['categoryID']);
         
          if ( ! $this->upload->do_upload('productImage')) {
           
	     $data=array(
	    'title'=>$this->input->post('title'),
	  
	    'duration'=>$this->input->post('length'),
	    'rating'=>$this->input->post('imd_rating'),
	    'status'=>$this->input->post('status'),
	    
	        );

          }
          else { 
          	
            $upload_data = $this->upload->data(); 
                              //$data=$_POST;
                              $data=array(
	    'title'=>$this->input->post('title'),
	  
	    'duration'=>$this->input->post('length'),
	    'rating'=>$this->input->post('imd_rating'),
	    'status'=>$this->input->post('status'),
	    
	        ); 

                        $data['poster']=$upload_data['file_name'];
                        // $data['trailer']=$_POST['trailer'];
                        // $data['now_showing']=$_POST['now_showing'];
                        // $data['coming_soon']=$_POST['coming_soon'];
     // die();
       
               }
	//	$where=array('productID'=>$productID);
		$where=array('movie_id'=>$_GET['movie_id']);
   		 // print_r($data);
   		 // print_r($where);
   		 // die();

		
		if ($this->admin_model->update("web_movies",$data,$where)) {
			echo "<script>
			alert('Successfully Updated');
			window.location.href='".base_url()."admin/view_product'
			</script>";
           
		}else{
			echo "<script>
			alert('Error in Updating, Please Try Again');
			window.location.href='".base_url()."admin/view_product'
			</script>";
		}
	}

	
	public function insert_slider()
	{

		

             $config['upload_path']   = './uploads/slider/'; 
             $config['allowed_types'] = 'gif|jpg|png|mp4|3gp'; 
 


         $this->load->library('upload', $config);
         
         if ( ! $this->upload->do_upload('image')) {
           
                 echo $this->upload->display_errors();

         }
         else {
            $upload_data = $this->upload->data(); 

         
         $type=substr($upload_data['file_type'], 0,5);


            if ($type=="video") {
            	 $data=array(
                        'image'=>$upload_data['file_name'],
                        'is_video'=>1,
                     );
            }else{
				 $data=array(
                        'image'=>$upload_data['file_name'],
                     );
            }
           

            	if ($this->admin_model->insert($data,"slider")) {
			echo "<script>
			alert('Successfully Inserted');
			window.location.href='".base_url()."admin/view_slider'
			</script>";
		}else{
			echo "<script>
			alert('Error in Inserting, Please Try Again');
			window.location.href='".base_url()."admin/view_slider'
			</script>";
		}
              }
		
	

	}
	public function insert_promotion()
	{

		

             $config['upload_path']   = './uploads/promotion/'; 
             $config['allowed_types'] = 'gif|jpg|png|mp4|3gp'; 
 

             $post = $this->input->post();
         $this->load->library('upload', $config);
         
         if ( ! $this->upload->do_upload('image')) {
           
                 echo $this->upload->display_errors();

         }
         else {
            $upload_data = $this->upload->data(); 

         
         $type=substr($upload_data['file_type'], 0,5);


            if ($type=="video") {
            	 $data=array(
                        'image'=>$upload_data['file_name'],
                        'promotion_name' => $post['promotion_name'],
                        'small_tag' => $post['small_tag'],
                        'is_video'=>1,
                     );
            }else{
				 $data=array(
                        'image'=>$upload_data['file_name'],
                        'promotion_name' => $post['promotion_name'],
                        'small_tag' => $post['small_tag'],
                     );
            }
           

            	if ($this->admin_model->insert($data,"promotion")) {
			echo "<script>
			alert('Successfully Inserted');
			window.location.href='".base_url()."admin/view_promotion'
			</script>";
		}else{
			echo "<script>
			alert('Error in Inserting, Please Try Again');
			window.location.href='".base_url()."admin/view_promotion'
			</script>";
		}
              }
		
	

	}
    public function insert_trailer()
	{
			$post = $this->input->post();
            $data=array(
                        'movie_name'=>$_POST['movie_name'],
                        'embed_video'=>$_POST['embed_video'],
                    
                     );
              
		
		if ($this->admin_model->insert($data,"trailer")) {
			echo "<script>
			alert('Successfully Inserted');
			window.location.href='".base_url()."admin/view_trailer'
			</script>";
		}else{
			echo "<script>
			alert('Error in Inserting, Please Try Again');
			window.location.href='".base_url()."admin/view_trailer'
			</script>";
		}

	}


	public function update_trainer($trainerID)
	{
		$data=$_POST;
		$where=array('trainerID'=>$trainerID);
		if ($this->admin_model->update("trainer",$data,$where)) {
			echo "<script>
			alert('Successfully Updated');
			window.location.href='".base_url()."admin/view_trainer'
			</script>";
		}else{
			echo "<script>
			alert('Error in updating, Already Updated or no Row Found');
			window.location.href='".base_url()."admin/view_trainer'
			</script>";
		}

	}
	public function update_category($categoryID)
	{
		
             $config['upload_path']   = './uploads/category/'; 
             $config['allowed_types'] = 'gif|jpg|png'; 
 


         $this->load->library('upload', $config);
         
         if ( ! $this->upload->do_upload('categoryImage')) {
           
                  $data=array(
                        'categoryName'=>$_POST['categoryName'],
                        'categoryDesc'=>$_POST['categoryDesc'],
                     );

         }
         else { 
            $upload_data = $this->upload->data(); 
            $data=array(
                        'categoryName'=>$_POST['categoryName'],
                        'categoryDesc'=>$_POST['categoryDesc'],
                        'categoryImage'=>$upload_data['file_name'],
                     );
              }
		
		$where=array('categoryID'=>$categoryID);
		if ($this->admin_model->update("category",$data,$where)) {
			echo "<script>
			alert('Successfully Updated');
			window.location.href='".base_url()."admin/view_category'
			</script>";
		}else{
			echo "<script>
			alert('Error in updating, Already Updated or no Row Found');
			window.location.href='".base_url()."admin/view_category'
			</script>";
		}

	}
	public function update_cinema($cinemaID)
	{
		

      
            $data=array(
                        'cinema_name'=>$_POST['cinema_name'],
                     );
           
		$where=array('cinemaID'=>$cinemaID);
		if ($this->admin_model->update("cinemas",$data,$where)) {
			echo "<script>
			alert('Successfully Updated');
			window.location.href='".base_url()."admin/view_cinema'
			</script>";
		}else{
			echo "<script>
			alert('Error in updating, Already Updated or no Row Found');
			window.location.href='".base_url()."admin/view_cinema'
			</script>";
		}

	}
	public function update_news($newsID)
	{
		
             $config['upload_path']   = './uploads/news/'; 
             $config['allowed_types'] = 'gif|jpg|png'; 
 


         $this->load->library('upload', $config);
         
         if ( ! $this->upload->do_upload('image')) {
           
                  $data=array(
                        'title'=>$_POST['title'],
                        'description'=>$_POST['description'],
                        'is_top'=>$_POST['is_top'],
                     );

         }
         else { 
            $upload_data = $this->upload->data(); 
            $data=array(
                        'title'=>$_POST['title'],
                        'description'=>$_POST['description'],
                        'is_top'=>$_POST['is_top'],
                        'image'=>$upload_data['file_name'],
                     );
              }

		$where=array('newsID'=>$newsID);
		if ($this->admin_model->update("news",$data,$where)) {
			echo "<script>
			alert('Successfully Updated');
			window.location.href='".base_url()."admin/view_news'
			</script>";
		}else{
			echo "<script>
			alert('Error in updating, Already Updated or no Row Found');
			window.location.href='".base_url()."admin/view_news'
			</script>";
		}

	}
	public function update_subcategory($subcategoryID)
	{
		
           $config['upload_path']   = './uploads/subcategory/'; 
             $config['allowed_types'] = 'gif|jpg|png'; 
 


         $this->load->library('upload', $config);
         
         if ( ! $this->upload->do_upload('subCategoryImage')) {
           
                  $data=array(
                        'subCategoryName'=>$_POST['subCategoryName'],
                        'subCategoryDesc'=>$_POST['subCategoryDesc'],
                     );

         }
         else { 
            $upload_data = $this->upload->data(); 
            $data=array(
                        'subCategoryName'=>$_POST['subCategoryName'],
                        'categoryID'=>$_POST['categoryID'],
                        'subCategoryDesc'=>$_POST['subCategoryDesc'],
                        'subCategoryImage'=>$upload_data['file_name'],
                     );
              }
		$where=array('subCategoryID'=>$subcategoryID);
		if ($this->admin_model->update("subcategory",$data,$where)) {
			echo "<script>
			alert('Successfully Updated');
			window.location.href='".base_url()."admin/view_subcategory'
			</script>";
		}else{
			echo "<script>
			alert('Error in updating, Already Updated or no Row Found');
			window.location.href='".base_url()."admin/view_category'
			</script>";
		}

	}

	public function update_course($courseID)
	{
		$data=$_POST;
		$where=array('courseID'=>$courseID);
		if ($this->admin_model->update("course",$data,$where)) {
			echo "<script>
			alert('Successfully Updated');
			window.location.href='".base_url()."admin/view_course'
			</script>";
		}else{
			echo "<script>
			alert('Error in updating, Already Updated or no Row Found');
			window.location.href='".base_url()."admin/view_course'
			</script>";
		}

	}

	public function update_expense($expenseID)
	{
		$data=$_POST;
		$where=array('expenseID'=>$expenseID);
		if ($this->admin_model->update("expense",$data,$where)) {
			echo "<script>
			alert('Successfully Updated');
			window.location.href='".base_url()."admin/view_expense'
			</script>";
		}else{
			echo "<script>
			alert('Error in updating, Already Updated or no Row Found');
			window.location.href='".base_url()."admin/view_expense'
			</script>";
		}

	}
	public function update_student($studentID)
	{
		$data=$_POST;
		$where=array('studentID'=>$studentID);
		if ($this->admin_model->update("student",$data,$where)) {
			echo "<script>
			alert('Successfully Updated');
			window.location.href='".base_url()."admin/view_student'
			</script>";
		}else{
			echo "<script>
			alert('Error in updating, Already Updated or no Row Found');
			window.location.href='".base_url()."admin/view_student'
			</script>";
		}

	}
	public function delete($table,$column,$ID)
	{
		$where=array($column=>$ID);
		if ($this->admin_model->delete($table,$where)) {
		
          if ($table=="expense") {
			echo "<script>
			alert('Successfully Deleted');
			window.location.href='".base_url()."admin/view_expense'
			</script>";
    			
          }else if($table=="course"){
		echo "<script>
			alert('Successfully Deleted');
			window.location.href='".base_url()."admin/view_course'
			</script>";
	      
          }else if($table=="trainer"){
			echo "<script>
			alert('Successfully Deleted');
			window.location.href='".base_url()."admin/view_trainer'
			</script>";
	      
          }else if($table=="student"){
			echo "<script>
			alert('Successfully Deleted');
			window.location.href='".base_url()."admin/view_student'
			</script>";
	      
          }else if($table=="category"){
			echo "<script>
			alert('Successfully Deleted');
			window.location.href='".base_url()."admin/view_category'
			</script>";
	      
          }else if($table=="slider"){
			echo "<script>
			alert('Successfully Deleted');
			window.location.href='".base_url()."admin/view_slider'
			</script>";
	      
          }else if($table=="promotion"){
			echo "<script>
			alert('Successfully Deleted');
			window.location.href='".base_url()."admin/view_promotion'
			</script>";
	      
          }else if($table=="trailer"){
			echo "<script>
			alert('Successfully Deleted');
			window.location.href='".base_url()."admin/view_trailer'
			</script>";
	      
          }else if($table=="products"){
			echo "<script>
			alert('Successfully Deleted');
			window.location.href='".base_url()."admin/view_product'
			</script>";
	      
          }else if($table=="news"){
			echo "<script>
			alert('Successfully Deleted');
			window.location.href='".base_url()."admin/view_news'
			</script>";
	      
          }else if($table=="cinemas"){
			echo "<script>
			alert('Successfully Deleted');
			window.location.href='".base_url()."admin/view_cinema'
			</script>";
	      
          }
		}else{
			echo "<script>
			alert('Error in Deleting, Already Deleted or no Row Found');
			window.location.href='".base_url()."admin/view_expense'
			</script>";
		}

	}
	  public function search_date()
{

    $where = [];
   
    $start_date = $this->input->post('start_date');
    if($this->input->post()){
        $where[] = '  ';
    }
    if ($start_date) {
      $start_date = date('Y-m-d', strtotime($start_date));
      $where[] = "booking.created_at >= '".$start_date."'";
    }
    

    $end_date = $this->input->post('end_date');
    if ($end_date) {
      $end_date = date('Y-m-d', strtotime($end_date));
      $where[] = "booking.created_at <= '".$end_date."'";
    }
    if($where){
        $where = implode(' ', $where);
    }
    else{
        $where = '';
    }
      
    
   








$query="select booking.*, products.title from booking left join products on products.productID = booking.productID where paid = 1 and type = 1 where = $where";
print_r($query);die;

		$data['booking']=$this->admin_model->raw_query($query,1);
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/view_online_booking');
		$this->load->view('admin/footer');











 }


}