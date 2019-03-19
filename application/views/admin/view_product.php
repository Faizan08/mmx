
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
                                <h1>All Movies</h1>
                                <small></small>
                                <ol class="breadcrumb">
                                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                                    <li class="active">All Movies</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                         <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd ">
                                    <div class="panel-heading">
                                        <!-- <div class="panel-title">
                                            <h4></h4>
                                        </div> -->
                                    </div>
                                    <div class="panel-body">
                                       
                                        <div class="table-responsive">
                                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Movie ID</th>
                                                        <th>Movie Name</th>
                                                        <th>Categories</th>
                                                        <th>Movie Image</th>
                                                        <th>Status</th>
                                                        <th>Coming Soon</th>
                                                        <th>Best Choice?</th>
                                                        <th>Now Showing?</th>
                                                        <th>Is Top?</th>
                                                        <th>Actions</th>
                                                    </tr>


                                                </thead>
                                                <tbody>
                                                 <?php foreach ($allmovies as $movie): ?>
                          <tr class="gradeX">
                        <td><?php echo $movie['movie_id'] ?></td>
                        <td><?php echo $movie['title'] ?></td>
                        <td><?php echo $movie['categoryID'] ?></td>
                        
                                    <td>
<?php if ($movie['poster']!=""): ?>
<img src="<?php echo base_url()?>uploads/product/<?php echo $movie['poster'] ?>" width="120">    
<?php endif ?>
</td>

<td><?php echo $movie['status'] ?></td>
<td>

<?php if($movie['status']=="Coming Soon") echo "Yes" ?>    
<?php if($movie['status']=="New") echo "No" ?>  
    
</td>
<td>


<?php if($movie['best_choice']=="1") echo "Yes" ?>    
<?php if($movie['best_choice']=="0") echo "No" ?>    


</td>
<td>
<?php if($movie['now_showing']=="1") echo "Yes" ?>    
<?php if($movie['now_showing']=="0") echo "No" ?>    


</td>
<td>
<?php if($movie['is_top']=="1") echo "Yes" ?>    
<?php if($movie['is_top']=="0") echo "No" ?>    


</td>
                        <td>

                          <!--   ?movieID=<?php echo $movie['movie_id'] ?> -->


<a style="font-size: 19px;" href="<?php echo base_url() ?>admin/edit_product/?movie_id=<?php echo $movie['movie_id'] ?>" title="Edit Product" class="fa fa-edit fa-2x"></a>
<a style="font-size: 19px;" href="<?php echo base_url() ?>admin/delete/products/productID/?movie_id=<?php echo $movie['movie_id'] ?>" title="Delete Product" class="fa fa-trash-o fa-2x" onclick="return confirm('Are you sure?')"></a><br>
<a style="font-size: 19px;" href="<?php echo base_url() ?>admin/add_showtime/?movie_id=<?php echo $movie['movie_id'] ?>" title="Add Show Time" class="fa fa-plus fa-2x" ></a>

<a style="font-size: 19px;" href="<?php echo base_url() ?>admin/edit_showtime/?movie_id=<?php echo $movie['movie_id'] ?>" title="Edit Show Time" class="fa fa-edit fa-2x" ></a>

<a style="font-size: 19px;" href="<?php echo base_url() ?>admin/delete_showtime/?movie_id=<?php echo $movie['movie_id'] ?>" title="Delete Show Time" class="fa fa-trash fa-2x" ></a>
<!-- <a style="font-size: 19px;" href="<?php echo base_url() ?>admin/edit_showtime/<?php echo $product['productID'] ?>" title="Edit Show Time" class="fa fa-eye fa-2x" ></a> -->
                        
                        </td>
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
