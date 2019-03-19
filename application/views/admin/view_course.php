
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
                                <h1>View Courses</h1>
                                <small>Tabs styles and versions</small>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="#">Courses</a></li>
                                    <li class="active">View Course</li>
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
                                                        <th>Course ID</th>
                                                        <th>Course Title</th>
                                                        <th>Course Description</th>
                                                        <th>Course Duration</th>
                                                        <th>Course Timing</th>
                                                        <th>Course Shift</th>
                                                        <th>Actions?</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                           
                                                <?php foreach ($courses as $course): ?>
                                                    
                                                    <tr>
                                                        <td><?php echo $course['courseID'] ?></td>
                                                        <td><?php echo $course['course_title'] ?></td>
                                                        <td><?php echo $course['course_description'] ?></td>
                                                        <td><?php echo $course['course_duration'] ?></td>
                                                        <td><?php echo $course['course_timings'] ?></td>
                                                        <td><?php echo $course['course_shift'] ?></td>
                                                        <td><a href="<?php echo base_url() ?>admin/edit_course/<?php echo $course['courseID'] ?>"><i class="fa fa-edit fa-2x"></i></a> <a href="<?php echo base_url() ?>admin/delete/course/courseID/<?php echo $course['courseID'] ?>"><i class="fa fa-trash fa-2x"></i></a></td>
                                                        
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
          