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
                    <h1>Create Category</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">
                                <i class="pe-7s-home"></i> Home</a>
                        </li>
                        <li>
                            <a href="#">Categories</a>
                        </li>
                        <li class="active">Create Category</li>
                    </ol>
                </div>
            </div>
            <!-- /. Content Header (Page header) -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">

                        </div>
                        <div class="panel-body container">

                            <form action="" enctype="multipart/form-data" method="post">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Movie Name</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" placeholder="Movie Name" name="title" id="example-text-input" value="">
                                       
                                    </div>
                                </div>





                            </form>
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
    <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="<?php echo base_url() ?>assets/assets/main.js"></script>
  <script>
    getMovie();
  </script>