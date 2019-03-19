
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
                                                        <th>Slider ID</th>
                                                        <th>Slider Image</th>
                                                        <th>Actions?</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                           
                                                <?php foreach ($sliders as $slider): ?>
                                                    
                                                    <tr>
                                                        <td><?php echo $slider['sliderID'] ?></td>
                                                        <td>
                                                        <?php 
                                                        if ($slider['is_video']) {
                                                            echo "Video Content";
                                                        }else{ 
                                                         if ($slider['image']) {
                                                            ?>
                                                            <img src="<?php echo base_url() ?>uploads/slider/<?php echo $slider['image'] ?>" width="120">
                                                            <?php
                                                         }
                                                       }
                                                         ?>
                                                            
                                                        </td>
                                                        <td><a href="<?php echo base_url() ?>admin/edit_slider/<?php echo $slider['sliderID'] ?>"><i class="fa fa-edit fa-2x"></i></a> <a href="<?php echo base_url() ?>admin/delete/slider/sliderID/<?php echo $slider['sliderID'] ?>"><i class="fa fa-trash fa-2x"></i></a></td>
                                                        
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
          