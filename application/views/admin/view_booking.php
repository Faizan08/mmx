
            <div class="content-wrapper">
                <div class="container">
                    <!-- main content -->
                    <div class="content">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
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
                        </div> <!-- /. Content Header (Page header) -->
         <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd ">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4></h4>
                                            
                                            
                                            
                                            
                                            
                                            <a href="<?php echo base_url() ?>admin/export_booking"><button type="button" class="btn btn-labeled btn-primary m-b-5 pull-right">
                                        <span class="btn-label"><i class="glyphicon glyphicon-download-alt"></i></span>Download Booking Detail
                                    </button></a>
                                    
                                    
                                    
                                    
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                       
                                        <div class="table-responsive">
                                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                     <tr>
                        <th>Movie Name</th>
                        <th>Order ID</th>
                        <th>Show Time</th>
                        <th>Show Date</th>
                        <th>Cinema Name</th>
                        <th>Seats</th>
                        <th>User Name</th>
                        <th>User Phone</th>
                        <th>User CNIC</th>
                        <th>Status</th>
                        <th>Created At</th>
                        
                     
                    </tr>


                                                </thead>
                                                <tbody>
                                                 <?php foreach ($booking as $book): ?>
                          <tr class="gradeX">
                        <td><?php echo $book['title'] ?></td>
                        <td><?php echo $book['id'] ?></td>
                        <td><?php echo $book['date_time'] ?></td>
                        <td><?php echo $book['show_time'] ?></td>
                        <td><?php echo $book['cinema_name'] ?></td>
                        <td><?php echo $book['seats'] ?></td>
                        <td><?php echo $book['user_name'] ?></td>
                        <td><?php echo $book['phone_number'] ?></td>
                        <td><?php echo $book['user_cnic'] ?></td>
                        <td><?php if ($book['paid'] == 0 ) : ?>
                             <?php echo "Not Booked";?>
                            <?php else : ?>
                                 <?php echo "Booked";?>
                         <?php endif ?></td>
                        <td><?php echo $book['created_at'] ?></td>
                        
                         
                    </tr>
                    <?php endforeach ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->
