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
                    <h1>Book Ticket</h1>
                    <small></small>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">
                                <i class="pe-7s-home"></i> Home</a>
                        </li>
                      
                        <li class="active">Book Ticket</li>
                    </ol>
                </div>
            </div>
            <!-- /. Content Header (Page header) -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">

                        </div>
                        <div class="panel-body">

                            <form action="<?php echo base_url() ?>admin/insert_ticket" method="post">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Select Movie</label>
                                    <div class="col-sm-9">
                                        <select class="form-control movies" name="productID" required="" type="text" id="example-text-input">
                                            <option value="">Select</option>
                                            <?php 
                                                foreach ($movies as $m) {
                                                    echo '<option value="'.$m['productID'].'">'.$m['title'].'</option>';
                                                }
                                            ?>
                                            <!-- <option value="One">One</option>
                                            <option value="Two">Two</option> -->
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Select date</label>
                                    <div class="col-sm-9">
                                        <select class="form-control date" name="date" required="" type="text" id="example-text-input">
                                            <option value="">Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Select Cinema</label>
                                    <div class="col-sm-9">
                                        <select class="form-control cinema" name="cinema" required="" type="text" id="example-text-input">
                                            <option value="">Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Select Time</label>
                                    <div class="col-sm-9">
                                        <select class="form-control time" name="time" required="" type="text" id="example-text-input">
                                            <option value="">Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Select Seats</label>
                                    <div class="col-sm-9">
                                        <select class="form-control seats" name="seats[]" required="" multiple="" type="text" id="example-text-input">
                                            <option value="">Select</option>
                                        </select>
                                    </div>
                                </div>
                               

                                

                               

                                <div class="form-group row col-md-12">
                                    <input type="submit" value="Submit" class="btn btn-primary pull-right">
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
<script src="<?php echo base_url() ?>assets/assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $('.movies').change(function() {
        var id = $(this).val()
        jQuery.ajax({
            url: '<?php echo base_url() ?>/admin/get_movies_dates/'+id,
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            method: 'GET',
            type: 'GET', // For jQuery < 1.9
            success: function(response){
                console.log(response)
                $('.date option').not('option:first').remove()
                for (var i = 0; i < response.length; i++) {
                    $('.date').append('<option value="'+response[i].showdate+'">'+response[i].showdate+'</option>')
                }
            }
        })
    })
    $('.date').change(function() {
        var id = $('.movies').val()
        var date = $(this).val()
        jQuery.ajax({
            url: '<?php echo base_url() ?>/admin/get_movies_ciname/'+id+'/'+date,
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            method: 'GET',
            type: 'GET', // For jQuery < 1.9
            success: function(response){
                console.log(response)
                $('.cinema option').not('option:first').remove()
                for (var i = 0; i < response.length; i++) {
                    $('.cinema').append('<option value="'+response[i].cinema_name+'">'+response[i].cinema_name+'</option>')
                }
            }
        })
    })
    $('.cinema').change(function() {
        var id = $('.movies').val()
        var date = $('.date').val()
        var cinema = $(this).val()
        jQuery.ajax({
            url: '<?php echo base_url() ?>/admin/get_movies_time/'+id+'/'+date+'/'+cinema,
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            method: 'GET',
            type: 'GET', // For jQuery < 1.9
            success: function(response){
                //console.log(response)
                //var times = response.split(',')
                ///console.log(times)
                $('.time option').not('option:first').remove()
                for (var i = 0; i < response.length; i++) {
                    $('.time').append('<option value="'+response[i].replace(/^\s+/g, '')+'">'+response[i].replace(/^\s+/g, '')+'</option>')
                }
            }
        })
    })
    $('.time').change(function() {
        var id = $('.movies').val()
        var date = $('.date').val()
        var cinema = $('.cinema').val()
        var time = $(this).val()
        jQuery.ajax({
            url: '<?php echo base_url() ?>/admin/get_movies_seats/'+id+'/'+date+'/'+cinema+'/'+time,
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            method: 'GET',
            type: 'GET', // For jQuery < 1.9
            success: function(response){
                console.log(response)
                var res = response
                $('.seats option').not('option:first').remove()
                for (var i = 0; i < response.length; i++) {
                    $('.seats').append('<option value="'+response[i]+'">'+response[i]+'</option>')
                }
            }
        })
    })
</script>