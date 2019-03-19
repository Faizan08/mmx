<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    html {
    font-size: 10px;
    -webkit-tap-highlight-color: rgb(0, 0, 0) !important;
}
</style>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
         <!-- <a href="http://megamultiplex.com.pk/"><button type="button" class="close" data-dismiss="modal">&times;</button></a>-->
          <h4 class="modal-title">Thank you</h4>
        </div>
        <div class="modal-body">
          <p>We will contact you soon.</p>
        </div>
       
        <div class="modal-footer">
          <a href="http://megamultiplex.com.pk/"><button type="button" class="btn btn-default home" >Close</button></a>
        </div>
      </div>
      
    </div>
  </div>



<a class="btn" data-toggle="modal" style="display:none;" href="#myModal" >Launch Modal</a>
<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });

</script>







