
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
                                <h1>View Promotion</h1>
                                <small>Tabs styles and versions</small>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="#">Promotion</a></li>
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
                                                        <th>Promotion ID</th>
                                                        <th>Promotion Name</th>
                                                        <th>Promotion Image</th>
                                                        <th>Actions?</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                           
                                                <?php foreach ($promotions as $promotion): ?>
                                                    
                                                    <tr>
                                                        <td><?php echo $promotion['promotionID'] ?></td>
                                                        <td><?php echo $promotion['promotion_name'] ?></td>
                                                        <td>
                                                        <?php 
                                                        if ($promotion['is_video']) {
                                                            echo "Video Content";
                                                        }else{ 
                                                         if ($promotion['image']) {
                                                            ?>
                                                            <img src="<?php echo base_url() ?>uploads/promotion/<?php echo $promotion['image'] ?>" width="120">
                                                            <?php
                                                         }
                                                       }
                                                         ?>
                                                            
                                                        </td>
                                                        <td><!-- <a href="<?php echo base_url() ?>admin/edit_promotion/<?php echo $promotion['promotionID'] ?>"><i class="fa fa-edit fa-2x"></i></a> --> <a href="<?php echo base_url() ?>admin/delete/promotion/promotionID/<?php echo $promotion['promotionID'] ?>"><i class="fa fa-trash fa-2x"></i></a></td>
                                                        
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
          