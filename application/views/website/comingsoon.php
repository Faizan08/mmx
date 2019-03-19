
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
</style>
<section class="container-fluid">
<h2 class="page-heading"><?php echo $title; ?></h2>
<div class="col-sm-12">

                <div class="row">
                    <div class="col-md-12">

                        <!-- Movie variant with time -->
                       <?php foreach ($movies as $movie): ?>
             
                            <div class="col-md-4">
                                <div class="movie movie--test2 movie--test--dark movie--test--left line-content" style="height: 267px !important;">
                                    <div class="movie__images">
                                        <a href="<?php echo base_url() ?>web/details/<?php echo $movie['movie_id'] ?>" class="movie-beta__link">
                                            <img alt='' style="height: 267px;" src="<?php echo base_url() ?>uploads/product/<?php echo $movie['poster'];?>">
                                        </a>
                                    </div>

                                    <div class="movie__info">
                                        <a href='<?php echo base_url() ?>web/details/<?php echo $movie['movie_id'] ?>' class="movie__title"><?php echo $movie['title'] ?> (<?php echo $movie['year'] ?>)  </a>

                                        <p class="movie__time"><?php echo $movie['duration'] ?> min</p>

                                        <p class="movie__option"><a href="#"><?php echo $movie['categoryID'] ?></a> </p>
                                        
                                        <div class="movie__rate">
                                            <span class="movie__rating"><?php echo $movie['rating'] ?></span>
                                        </div>               
                                    </div>
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