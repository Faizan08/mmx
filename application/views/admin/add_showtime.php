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
                    <h1>Create Cinema</h1>
                    <small></small>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                        <li><a href="#">Cinema</a></li>
                        <li class="active">Create Cinema</li>
                    </ol>
                </div>
            </div>
            <!-- /. Content Header (Page header) -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Movie Name :
                                    <?php echo $movie['title'] ?>
                                </h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo base_url() ?>admin/insert_showtime/<?php echo $movie['productID'] ?>" enctype="multipart/form-data" method="post">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Movie
                                        </label>
                                    <div class="col-sm-4">
                                        <img src="<?php echo base_url() ?>uploads/product/<?php echo $movie['image'] ?>" width="120">
                                    </div>
                                </div>

                                <div class="after-add-more">
                                    <div class="form-group row">
                                        <span class="pull-right">
                                            <div class="col-sm-12 change">
                                            <a class="btn btn-success add-more pull-right">+ Add More</a>
                                            </div>
                                        </span>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Select Cinema
                                        </label>
                                        <div class="col-sm-4">
                                            <select name="cinema_name[]" id="" required="" class="form-control">
                                                <option value="">Select Cinema</option>

                                                <?php foreach ($cinemas as $cinema): ?>
                                                    <option value="<?php echo  $cinema['cinema_name'] ?>"><?php echo  $cinema['cinema_name'] ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Date
                                        </label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="date" name="show_date[]" id="example-text-input" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <label for="example-text-input" class="col-sm-2 col-form-label">Show Time <span style="    font-size: 7px;">(Separated By Comma)</span>
                                        </label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="show_time[]" id="example-text-input" placeholder="12:05 PM, 03:50 PM, 05:30 PM, 01:45 AM (LN)">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row col-md-12">
                                    <input type="submit" value="Update cinema" class="btn btn-primary pull-right">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                </form>
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