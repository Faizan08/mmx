
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
                                                        <th>Expense ID</th>
                                                        <th>Expense Title</th>
                                                        <th>Expense Description</th>
                                                        <th>Expense Amount</th>
                                                        <th>Expense Timestamp</th>
                                                        <th>Actions?</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                           
                                                <?php foreach ($expenses as $expense): ?>
                                                    
                                                    <tr>
                                                        <td><?php echo $expense['expenseID'] ?></td>
                                                        <td><?php echo $expense['expense_title'] ?></td>
                                                        <td><?php echo $expense['expense_description'] ?></td>
                                                        <td><?php echo $expense['expense_amount'] ?></td>
                                                        <td><?php echo $expense['date_time'] ?></td>
                                                        <td><a href="<?php echo base_url() ?>admin/edit_expense/<?php echo $expense['expenseID'] ?>"><i class="fa fa-edit fa-2x"></i></a> <a href="<?php echo base_url() ?>admin/delete/expense/expenseID/<?php echo $expense['expenseID'] ?>"><i class="fa fa-trash fa-2x"></i></a> </td>
                                                        
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
          