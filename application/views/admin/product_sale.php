
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
                                <h1>Basic Form</h1>
                                <small>Tabs styles and versions</small>
                                <ol class="breadcrumb">
                                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="#">Forms</a></li>
                                    <li class="active">Basic Form</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
         <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>DataTables with HTML5 export buttons </h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <p class="m-b-15">The Buttons library for DataTables provides a framework with common options and API that can 
                                            be used with DataTables, but is also very extensible, recognising that you will likely want to use buttons 
                                            which perform an action unique to your applications. </p>
                                        <div class="table-responsive">
                                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                     <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Cinema</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Seats</th>
                        <!-- <th>Actions</th> -->
                     
                    </tr>
                                                </thead>
                                                <tbody>
                                                 <?php foreach ($products as $product): ?>
                          <tr class="gradeX">
                        <td><?php echo $product['productID'] ?></td>
                        <td><?php echo $product['title'] ?></td>
                        <td><?php echo $product['cinema_name'] ?></td>
                        <td><?php echo $product['date_time'] ?></td>
                        <td><?php echo $product['show_time'] ?></td>
                        <td><?php echo $product['seats'] ?></td>
                                    
                        <!-- <td>
<a href="<?php echo base_url() ?>admin/sell_product/<?php echo $product['productID'] ?>" class="fa fa-shopping-cart fa-1x"> Sell Product</a>
                        
                        </td> -->
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
          