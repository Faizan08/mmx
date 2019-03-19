
        
     <br><br>
        <!-- Main content -->
        <section class="container">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="page-heading">Now Showing</h2>
                       


                        <div class="rates-wrapper rates--full">
                            
                            <table>
                                <colgroup class="col-width-lg">
                                <colgroup class="col-width">
                                <colgroup class="col-width-sm">
                                <colgroup class="col-width">

                            <?php
$count=1;
                             foreach ($movies as $movie): ?>
                                 <tr class="rates rates--top">
                                    <td class="rates__obj"><a href="#" class="rates__obj-name " style="    text-decoration: none;"><?php echo $count ?>. <?php echo $movie['title'] ?></a></td>
                                    <td class="rates__vote"><img src="<?php echo base_url() ?>uploads/product/<?php echo $movie['image'] ?>" width="120" ></td>
                                    <td class="rates__result"><?php echo $movie['imd_rating'] ?></td>
                                    <td class="rates__stars" >
            <center>
           <a class="btn btn-md" data-toggle="modal" onclick="get_showing(<?php echo $movie['productID'] ?>)" href='#showing' style="background: burlywood;">Show Timing</a> <br><br>
           <!-- <a class="btn btn-md btn--warning btn--book" href='<?php echo base_url() ?>web/come_page' style="background: burlywood;"></a>-->
            <a class="btn btn-md btn--warning btn--book" href='<?php echo base_url() ?>web/step1?productID=<?php echo $movie['productID'] ?>' style="background: burlywood;"></a>
                
            </center>
                                    </td>
                                </tr>

                            <?php
$count++;
                             endforeach ?>

                               
                               


                            </table>

                        </div>

                        <!-- <div class="pagination paginatioon--full coloum-wrapper">
                            <a href='#' class="pagination__prev">prev</a>
                            <a href='#' class="pagination__next">next</a>
                        </div>   -->  
                    </div>

                </div>
            </div>
        </section>
        







        <div class="clearfix"></div>

<?php include "footer.php"; ?>

		<script type="text/javascript">
            $(document).ready(function() {
                init_Rates();
            });
		</script>


<div class="modal fade" id="showing">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title page-heading" style="color: black;">Show Time <?php echo $detail['title'] ?></h4>
            </div>
            <div class="modal-body" style="width: 100%;">
                <section>
    <div class="row" id="showing_showtime">

<!--                 <div class="time-select time-select--wide">
                        <div class="time-select__group group--first">
                            <div class="col-sm-3">
                                <p class="time-select__place">Cinema 1</p>
                            </div>
                            <ul class="col-sm-6 items-wrap">
                                <li class="time-select__item" data-time='09:40'>09:40</li>
                                <li class="time-select__item" data-time='13:45'>13:45</li>
                                <li class="time-select__item" data-time='15:45'>15:45</li>
                                <li class="time-select__item" data-time='19:50'>19:50</li>
                                <li class="time-select__item" data-time='21:50'>21:50</li>
                            </ul>
                        </div>

                        <div class="time-select__group">
                            <div class="col-sm-3">
                                <p class="time-select__place">Cinema 2</p>
                            </div>
                            <ul class="col-sm-6 items-wrap">
                                <li class="time-select__item" data-time='10:45'>10:45</li>
                                <li class="time-select__item" data-time='16:00'>16:00</li>
                                <li class="time-select__item" data-time='19:00'>19:00</li>
                                <li class="time-select__item" data-time='21:15'>21:15</li>
                                <li class="time-select__item" data-time='23:00'>23:00</li>
                            </ul>
                        </div>

                    </div> -->
    </div>
</section>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    function get_showing(productID) {
      
        $.ajax({
            url:"<?php echo base_url() ?>web/get_showing2",
            type:"post",
            data:{productID:productID},
            success:function(resp){
               $('#showing_showtime').html(resp);
            }
        });
    }
    // $('body').on('change', '#sel',function() {
    // //$('#sel').change(function() {
    //     $('.time_show').hide();
    //     //alert($('#sel option:selected').attr('data'));
    //     var show = $('#sel option:selected').attr('data');
    //     $('[data-id="'+show+'"]').show()
    //     //alert($(this).data('id'));
    // });
</script>

<script type="text/javascript">
    $(function() {
        $('body').on('change', '#sel',function() {
            $('.time_show').hide();
            //alert($('#sel option:selected').attr('data'));
            var show = $('#sel option:selected').attr('data');
            $('[data-id="'+show+'"]').show()
            var set = 0
            $('.cinema_1 label').each(function() {
            	if($(this).css('display') != 'none'){
            		set = 1
            	}
            })
            if(set == 0){
            	$('.cinema_1 .not-found').show()
            }
            else{
            	$('.cinema_1 .not-found').hide()
            }
            var set = 0
            $('.cinema_2 label').each(function() {
            	if($(this).css('display') != 'none'){
            		set = 1
            	}
            })
            if(set == 0){
            	$('.cinema_2 .not-found').show()
            }
            else{
            	$('.cinema_2 .not-found').hide()
            }
            //alert($(this).data('id'));
        });
    });
</script>
