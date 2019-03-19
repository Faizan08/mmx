
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
                                <h1>View Trailer</h1>
                                
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="#">Trailer</a></li>
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
                                                        <th>Trailer ID</th>
                                                        <th>Trailer Name</th>
                                                        <th>Trailer Video</th>
                                                        <th>Actions?</th>
                                                    </tr>
                                                </thead>
                                                 <tbody>
                                           
                                                <?php foreach ($trailers as $trailer): ?>
                                                    
                                                    <tr>
                                                        <td><?php echo $trailer['trailerID'] ?></td>
                                                        <td><?php echo $trailer['movie_name'] ?></td>
                                                        <td>
                                                        
                                                            <?php echo $trailer['embed_video'] ?>
                                                        </td>
                                                        <td><!-- <a href="<?php echo base_url() ?>admin/edit_trailer/<?php echo $trailer['trailerID'] ?>"><i class="fa fa-edit fa-2x"></i></a> --> <a href="<?php echo base_url() ?>admin/delete/trailer/trailerID/<?php echo $trailer['trailerID'] ?>"><i class="fa fa-trash fa-2x"></i></a></td>
                                                        
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
          