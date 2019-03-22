<br>
<br>
    <!-- Main content -->
        <section class="container">
            <div class="col-sm-8 col-md-12">
                <div class="movie">
                    <h2 class="page-heading"><?php echo $detail['title'] ?></h2>
                    
                    <div class="movie__info">
                        <div class="col-sm-6 col-md-4 movie-mobile">
                            <div class="movie__images">
                                <span class="movie__rating"><?php echo $detail['rating'] ?></span>
                                <img alt='' src="<?php echo base_url() ?>uploads/product/<?php echo $detail['poster'] ?>">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-8">
                            <p class="movie__time"><?php echo $detail['duration'] ?> min</p>

                            <p class="movie__option"><strong>Country: </strong><a href="#"><?php echo $moviedetails['country'] ?></a></p>
                            <p class="movie__option"><strong>Year: </strong><a href="#"><?php echo $moviedetails['year'] ?></a></p>
                            <p class="movie__option"><strong>Category: </strong><a href="#"><?php echo $moviedetails['categoryID'] ?></a></p>
                            <p class="movie__option"><strong>Release date: </strong><a href="#"><?php echo $detail['releaseDate'] ?></a></p>
                            <p class="movie__option"><strong>Director: </strong><a href="#"><?php echo $moviedetails['director'] ?></a></p>
                            <p class="movie__option"><strong>Actors: </strong><a href="#"><?php echo $detail['actor'] ?></a></p>
                            <p class="movie__option"><strong>Age restriction: </strong><a href="#"><?php echo $moviedetails['age_restriction'] ?></a></p>
                            <p class="movie__option"><strong>Box office: </strong><a href="#"><?php echo $moviedetails['box_office'] ?></a></p>

                            <a href="#" class="comment-link">Comments:  15</a>

                            <div class="movie__btns">
                                <a href="<?php echo base_url() ?>web/step1?movieID=<?php echo $detail['movie_id']; ?>" class="btn btn-md btn--warning"></a>
                                <!--<a href="#" class="watchlist">Add to watchlist</a>-->
                            </div>

                            <div class="share">
                                <span class="share__marker">Share: </span>
                                <div class="addthis_toolbox addthis_default_style ">
                                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                    <a class="addthis_button_tweet"></a>
                                    <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="clearfix"></div>
                    <div class="col-md-6">
                    <h2 class="page-heading">The Plot</h2>
                    <p class="movie__describe">
                    <?php echo $moviedetails['description'] ?>
                    </p>
                    </div>

          <div class="col-md-6">
          <h2 class="page-heading">Trailer</h2>
          <div class="main_form" style="padding: 3px;background:#eee;">
          <div class="embed-responsive embed-responsive-16by9">
            <!-- <iframe class="embed-responsive-item" src=""></iframe> -->
            <?php echo $detail['trailor'] ?>
          </div>
          </div>
          </div>

                </div>

                
            </div>


        </section>


<div class="clearfix"></div>
