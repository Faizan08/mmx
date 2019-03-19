
        
     <br><br>
        <!-- Main content -->
        <section class="container">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="page-heading">Your Search</h2>
                       


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
            <!--<a class="btn btn-md" data-toggle="modal" onclick="get_showing(<?php echo $movie['productID'] ?>)" href='#showing' style="background: burlywood;">Show Timing</a> <br><br>-->
            <a class="btn btn-md btn--warning btn--book" href='<?php echo base_url() ?>web/step1?productID=<?php echo $movie['productID'] ?>' style="background: burlywood;"></a>
                
            </center>
                                    </td>
                                </tr>

                            <?php
$count++;
                             endforeach ?>

                               
                               


                            </table>

                        </div>

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




<script type="text/javascript">
    function get_showing(productID) {
      
        $.ajax({
            url:"<?php echo base_url() ?>web/get_showing",
            type:"post",
            data:{productID:productID},
            success:function(resp){
               $('#showing_showtime').html(resp);
            }
        });
    }
</script>


