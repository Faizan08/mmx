<style>
nav.navbar.top-nav {
    display: none;
}

.wrap-sticky {
    display: none;
}

footer.main-footer {
    display: none;
}
.small, small {
    font-size: 96%;
}
</style>
<div class="content-wrapper">
    <div class="container">
        <!-- main content -->
        <div class="content">
            <!-- Content Header (Page header) -->
           <!-- <div class="content-header">
                <div class="header-icon">
                    <i class="pe-7s-note2"></i>
                </div>
                <div class="header-title">
                    <h1>All Booking</h1>
                    <small></small>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                        <li class="active">All Booking</li>
                    </ol>
                </div>
            </div>-->
            <!-- /. Content Header (Page header) -->
            </br></br></br></br>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Booking Details</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
	<div class="col-lg-3"><small><strong>Order ID :  </strong></small> <code><?php echo $booking['id'] ?></code>,</div>
	<div class="col-lg-3">Movie Name :  </strong></small> <code><?php echo $booking['title'] ?></code>,</div>
	<div class="col-lg-3"><small><strong>Show Time :  </strong></small> <code><?php echo $booking['show_time'] ?></code>,</div>
	<div class="col-lg-3"><small><strong>Cinema Name :  </strong></small> <code><?php echo $booking['cinema_name'] ?></code>,</div>
	
</div></br></br>
                            <div class="row">
	
	<div class="col-lg-3"><small><strong>Seats :  </strong></small> <code><?php echo $booking['seats'] ?></code>,</div>
	<div class="col-lg-3"><small><strong><small><strong>User Name :  </strong></small> <code><?php echo $booking['user_name'] ?></code>,</div>
	<div class="col-lg-3"><small><strong>User Phone :  </strong></small> <code><?php echo $booking['phone_number'] ?></code>,</div>
	<div class="col-lg-3"><small><strong>User CNIC :  </strong></small> <code><?php echo $booking['user_cnic'] ?></code>,</div>
</div>
</br></br>
<div class="row">
	
	
	<div class="col-lg-3"><small><strong>Status :  </strong></small> <code><?php if($booking['paid'] == 1){echo 'booked';}else{echo 'Not Booked';} ?></code>,</div>
	<div class="col-lg-3"><small><strong>Created At :  </strong></small><code><?php echo $booking['created_at'] ?></code></div>
	
	
</div>
<div class="row">
	
	
</div>                     
                            
                            
                            
                            
                            
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.main content -->
    </div>
    <!-- /.container -->
</div>
<!-- /.content-wrapper -->
<!-- start footer -->