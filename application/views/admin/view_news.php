
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
                                <h1>View Students</h1>
                                <small>Tabs styles and versions</small>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="#">Students</a></li>
                                    <li class="active">View Student</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
         <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                       
                                        <div class="table-responsive">
                                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>News ID</th>
                                                        <th>News Title</th>
                                                        <th>News Description</th>
                                                        <th>News Date</th>
                                                        <th>News Image</th>
                                                        <th>Top News</th>
                                                        <th>Actions?</th>
                                                    </tr>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                           
                                                <?php foreach ($newss as $news): ?>
                                                    
                                                    <tr>
                                                        <td><?php echo $news['newsID'] ?></td>
                                                        <td><?php echo $news['title'] ?></td>
                                                        <td><?php echo $news['description'] ?></td>
                                                        <td><?php echo $news['date_time'] ?></td>
                                                        <td>
                                                        <?php 
                                                         if ($news['image']) {
                                                            ?>
                                                            <img src="<?php echo base_url() ?>uploads/news/<?php echo $news['image'] ?>" width="120">


                                                            <?php
                                                         }
                                                        ?>
                                                            
                                                        </td>

                                                        <td>


<?php if($news['is_top']=="1") echo "Yes" ?>    
<?php if($news['is_top']=="0") echo "No" ?>    


</td>
                                                        <td><a href="<?php echo base_url() ?>admin/edit_news/<?php echo $news['newsID'] ?>"><i class="fa fa-edit fa-2x"></i></a> <a href="<?php echo base_url() ?>admin/delete/news/newsID/<?php echo $news['newsID'] ?>"><i class="fa fa-trash fa-2x"></i></a></td>
                                                        
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
          