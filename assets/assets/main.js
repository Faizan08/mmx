$(document).ready(() => {
  $('#searchForm').on('submit', (e) => {
    let searchText = $('#searchText').val();
    getMovies(searchText);
    e.preventDefault();
  });
});

function getMovies(searchText){
  axios.get('https://www.omdbapi.com?s='+searchText+'&apikey=5c146aa7')
    .then((response) => {
      console.log(response);
      let movies = response.data.Search;
      let output = '';
      $.each(movies, (index, movie) => {
        output += `
         
             
                     <div class="col-md-3 t" style="margin-left: 49px !important;     margin-top: 38px;">
                         <div class="">
                             <img src="${movie.Poster}" style="height:326px; !important; width:300px !important;">
                             <h5>${movie.Title}</h5>
                             <a onclick="movieSelected('${movie.imdbID}')" class="btn btn-primary" href="#">View Detail</a>
                         </div>
                     </div>
                     </div>
            
         
        `;
      });

      $('#movies').html(output);
    })
    .catch((err) => {
      console.log(err);
    });
}

function movieSelected(id){
  sessionStorage.setItem('movieId', id);
  window.location = "showw";
  return false;
}

function getMovie(){
  let movieId = sessionStorage.getItem('movieId');

  axios.get('https://www.omdbapi.com?i='+movieId+'&apikey=5c146aa7')
    .then((response) => {
      console.log(response);
      let movie = response.data;

      let output =`
        
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
                      <small></small>
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
              <!-- Content Header (Page header) -->
              <div class="row">
                  <div class="col-sm-12">
                      <div class="panel panel-bd ">
                          <div class="panel-heading">
                          </div>
                          <div class="panel-body container">
                              <form action="insert_product" enctype="multipart/form-data" method="post">
                                  <div class="form-group row">
                                      <label for="example-text-input" class="col-sm-3 col-form-label">Movie Name</label>
                                      <div class="col-sm-8">
                                          <input class="form-control" type="text" name="title" id="example-text-input" value="${movie.Title}">
                                         
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="example-text-input" class="col-sm-3 col-form-label">Category</label>
                                      <div class="col-sm-8">
                                          <input class="form-control" type="text" name="categoryID[]" id="example-text-input" value="${movie.Genre}">
                                         
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="example-text-input" class="col-sm-3 col-form-label">Year</label>
                                      <div class="col-sm-8">
                                          <input class="form-control" type="text" name="year" id="example-text-input" value="${movie.Year}">
                                         
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="example-text-input" class="col-sm-3 col-form-label">Country</label>
                                      <div class="col-sm-8">
                                          <input class="form-control" type="text" name="country" id="example-text-input" value="${movie.Country}">
                                         
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="example-text-input" class="col-sm-3 col-form-label">Release Date</label>
                                      <div class="col-sm-8">
                                          <input class="form-control" type="text" name="release_date" id="example-text-input" value="${movie.Released}">
                                         
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="example-text-input" class="col-sm-3 col-form-label">Director</label>
                                      <div class="col-sm-8">
                                          <input class="form-control" type="text" name="director" id="example-text-input" value="${movie.Director}">
                                         
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="example-text-input" class="col-sm-3 col-form-label">Actors</label>
                                      <div class="col-sm-8">
                                          <input class="form-control" type="text" name="actors" id="example-text-input" value="${movie.Actors}">
                                         
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="example-text-input" class="col-sm-3 col-form-label">Box Office</label>
                                      <div class="col-sm-8">
                                          <input class="form-control" type="text" name="box_office" id="example-text-input" value="${movie.BoxOffice}">
                                         
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="example-text-input" class="col-sm-3 col-form-label">Type</label>
                                      <div class="col-sm-8">
                                          <input class="form-control" type="text" name="" id="example-text-input" value="${movie.Type}">
                                         
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="example-text-input" class="col-sm-3 col-form-label">Language</label>
                                      <div class="col-sm-8">
                                          <input class="form-control" type="text" name="" id="example-text-input" value="${movie.Language}">
                                         
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="example-text-input" class="col-sm-3 col-form-label">Length</label>
                                      <div class="col-sm-8">
                                          <input class="form-control" type="text" name="length" id="example-text-input" value="${movie.Runtime}">
                                         
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="example-text-input" class="col-sm-3 col-form-label">Description</label>
                                      <div class="col-sm-8">
                                          <input class="form-control" type="text" placeholder="Description" name="description" id="example-text-input" value="${movie.Plot}">
                                         
                                      </div>
                                  </div>
                                  
                                  <div class="form-group row">
                                      <label for="example-text-input" class="col-sm-3 col-form-label">IMD Rating</label>
                                      <div class="col-sm-8">
                                          <input class="form-control" type="text" name="imd_rating" id="example-text-input" value="${movie.imdbRating}">
                                         
                                      </div>

                                      
                                  </div>
                                   <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Trailer</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" placeholder="Trailer" name="trailer" id="example-text-input">
                                            </div>
                                        </div>

                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Top Movies</label>
                                           <div class="col-sm-8">
                                                
                                                <select name="is_top" class="form-control">
                                                <option value="">Select </option> 
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Coming Soon</label>
                                           <div class="col-sm-8">
                                                
                                                <select name="coming_soon" class="form-control">
                                                <option value="">Select </option> 
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Now Showing</label>
                                           <div class="col-sm-8">
                                                
                                                <select name="now_showing" class="form-control">
                                                <option value="">Select </option> 
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                                </select>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Status</label>
                                            <div class="col-sm-8">
                                                
                                                <select name="status" class="form-control">
                                                <option value="">Select Status</option> 
                                                <option value="Featured">Featured</option>
                                                <option value="New">New</option>
                                                </select>
                                            </div>
                                        </div>
                                       

                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Best Choice</label>
                                            <div class="col-sm-8">
                                                
                                                <select name="best_choice" class="form-control">
                                                <option value="">Select Status</option> 
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                                </select>
                                            </div>
                                        </div>
                                  <div class="form-group row">
                                      <label for="example-text-input" class="col-sm-3 col-form-label">Image</label>
                                      
                                      <div class="col-sm-8">

                                      <input class="form-control" style="" type="file" value="${movie.Poster}"  name="productImage" id="example-text-input">
                                      <input class="form-control" style="display:none;" type="text" value="${movie.Poster}"  name="productImage" id="example-text-input">
                                      <img class="profile-pic" src="${movie.Poster}" style="height: 112px;">

                                      <br>
                                     
                                      
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="example-text-input" class="col-sm-3 col-form-label">Mob Cover</label>
                                      
                                      <div class="col-sm-8">

                                      <input class="form-control" style="" type="file" value=""  name="mob_cover" id="example-text-input">
                                    
                                      

                                      <br>
                                     
                                      
                                      </div>
                                  </div>
                                  <div class="form-group row col-md-12">
                                     <input type="submit" value="Create Movie" class="btn btn-primary pull-right">
                                  </div>
                                  </div>
                                  </div>
                                  </div>
                                  </div>
                                  </div>
                                  </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      
      `;

      $('#movie').html(output);
    })
    .catch((err) => {
      console.log(err);
    });
}
