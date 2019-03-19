
<br><br>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<style type="text/css">
    .current {
  color: green;
}

#pagin li {
  display: inline-block;
}

      .gallery-item .gallery-item__descript .gallery-item__name{

        color: #ffffff;
      }
      .gallery-item .gallery-item__descript:before {
   
    background-color: #1394d8;
    
}
  </style> 
<section class="container-fluid">
<h2 class="page-heading"><?php echo $title; ?></h2>
<div class="col-sm-12">

                <div class="row">
                    <div class="col-md-12">

                        <!-- Movie variant with time -->
                       <?php foreach ($trailers as $trailer): ?>
             
                            <div class="col-sm-4 col-md-6">
                                <div class="gallery-item">
                                    <?php echo $trailer['embed_video'] ?> 
                                    <a href="#" class="gallery-item__descript gallery-item--photo-link" style="    width: 560px;
">
                                        <span class="gallery-item__icon"><i class="fa fa-film"></i></span>
                                        <p class="gallery-item__name"><?php echo $trailer['movie_name'] ?>  </p> 
                                    </a>
                                </div>
                            </div>
                     
                       <?php endforeach ?>
                       
                       
                                <div class="movie movie--test2 movie--test--dark movie--test--left" style="    background-color: rgb(0, 0, 0);">
                                    <ul id="pagin" class="pagination pull-right">

                       </ul>
                            
                            </div>

                    </div>
                </div>
                <div class="" style="margin-top: 60px !important;"></div>
            </div>
               <script type="text/javascript">
                //Pagination
                    pageSize = 9;

                    var pageCount =  $(".line-content").length / pageSize;
                    
                     for(var i = 0 ; i<pageCount;i++){
                        
                       $("#pagin").append('<li><a href="#">'+(i+1)+'</a></li> ');
                     }
                        $("#pagin li").first().find("a").addClass("current")
                    showPage = function(page) {
                        $(".line-content").hide();
                        $(".line-content").each(function(n) {
                            if (n >= pageSize * (page - 1) && n < pageSize * page)
                                $(this).show();
                        });        
                    }
                    
                    showPage(1);

                    $("#pagin li a").click(function() {
                        $("#pagin li a").removeClass("current");
                        $(this).addClass("current");
                        showPage(parseInt($(this).text())) 
                    });
                    </script>
            

</section>

              <div class="clearfix"></div>

<?php include 'footer.php'; ?>