    
    <style type="text/css">
        .test{
    border-style: inset;
    margin-left: 37px !important;
    margin-right: 45px !important;
    }
    </style>      
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
                                <h1>Serch Movie</h1>
                                <small></small>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                                    <li class="active">Serch Movie</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd ">
                                    <div class="panel-heading">
                                                <div class="panel-title">
                                                        <h4>Case Request</h4>
                                                        
                                                </div>
                                        </div>
                                    <div class="panel-body">
                                        <form id="searchForm">
                                            <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Movie Name</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" name="title" id="searchText" placeholder="Search Movies..">
                                            </div>
                                        </div>
                                           
                                            <div class="form-group row col-md-12">
                                                <a href="<?php echo base_url() ?>admin/create_movie"><input type="button" value="Create Movie"  id="searchForm"  class="btn btn-primary pull-left"></a>
                                           <input type="submit" value="Serch Movie"  id="searchForm"  class="btn btn-primary pull-right">
                                        </div>
                                        </form>
                                    
                                    </div>
                                       
                                      <div class="container">
      <div id="movies" class="row"></div>
    </div>
                                <div style="height:20px;"></div>
                                </div>
                                <div style="height:110px;"></div>
                            </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        
                        </div>
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->
             <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="<?php echo base_url() ?>assets/assets/main.js"></script>
          