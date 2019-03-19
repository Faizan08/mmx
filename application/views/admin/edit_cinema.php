
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
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="#">Ciname</a></li>
                                    <li class="active">CreCate Cinema</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd ">
                                    <div class="panel-heading">
                                       
                                    </div>
                                    <div class="panel-body">
                                        
                                        <form action="<?php echo base_url() ?>admin/update_cinema/<?php echo $cinema['cinemaID'] ?>" enctype="multipart/form-data" method="post">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">cinema Title</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" name="cinema_name" placeholder="cinema Title " type="text" required="" value="<?php echo $cinema['cinema_name'] ?>" id="example-text-input">
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
                        <!-- Checkboxes & Radios -->
                     <!--    <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Checkboxes & Radios</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4>Checkboxes</h4>
                                        <form>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <fieldset>
                                                        <legend> Basic </legend>
                                                        <p>Supports bootstrap brand colors: <code>.checkbox-primary</code>, <code>.checkbox-info</code> etc. </p>
                                                        <div class="checkbox">
                                                            <input id="checkbox1" type="checkbox">
                                                            <label for="checkbox1">Default</label>
                                                        </div>
                                                        <div class="checkbox checkbox-primary">
                                                            <input id="checkbox2" type="checkbox" checked="">
                                                            <label for="checkbox2">Primary</label>
                                                        </div>
                                                        <div class="checkbox checkbox-success">
                                                            <input id="checkbox3" type="checkbox">
                                                            <label for="checkbox3">Success</label>
                                                        </div>
                                                        <div class="checkbox checkbox-info">
                                                            <input id="checkbox4" type="checkbox">
                                                            <label for="checkbox4">Info</label>
                                                        </div>
                                                        <div class="checkbox checkbox-warning">
                                                            <input id="checkbox5" type="checkbox" checked="">
                                                            <label for="checkbox5">Warning</label>
                                                        </div>
                                                        <div class="checkbox checkbox-danger">
                                                            <input id="checkbox6" type="checkbox" checked="">
                                                            <label for="checkbox6">Check me out</label>
                                                        </div>
                                                        <p>Inline checkboxes</p>
                                                        <div class="checkbox checkbox-inline">
                                                            <input type="checkbox" id="inlineCheckbox1" value="option1">
                                                            <label for="inlineCheckbox1"> Inline One </label>
                                                        </div>
                                                        <div class="checkbox checkbox-success checkbox-inline">
                                                            <input type="checkbox" id="inlineCheckbox2" value="option1" checked="">
                                                            <label for="inlineCheckbox2"> Inline Two </label>
                                                        </div>
                                                        <div class="checkbox checkbox-inline">
                                                            <input type="checkbox" id="inlineCheckbox3" value="option1">
                                                            <label for="inlineCheckbox3"> Inline Three </label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-4">
                                                    <fieldset>
                                                        <legend>Circled</legend>
                                                        <p><code>.checkbox-circle</code> for roundness.</p>
                                                        <div class="checkbox checkbox-circle">
                                                            <input id="checkbox7" type="checkbox">
                                                            <label for="checkbox7">Simply Rounded</label>
                                                        </div>
                                                        <div class="checkbox checkbox-info checkbox-circle">
                                                            <input id="checkbox8" type="checkbox" checked="">
                                                            <label for="checkbox8">Me too</label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-4">
                                                    <fieldset>
                                                        <legend>Disabled</legend>
                                                        <p>Disabled state also supported.</p>
                                                        <div class="checkbox">
                                                            <input id="checkbox9" type="checkbox" disabled="">
                                                            <label for="checkbox9">Can't check this</label>
                                                        </div>
                                                        <div class="checkbox checkbox-success">
                                                            <input id="checkbox10" type="checkbox" disabled="" checked="">
                                                            <label for="checkbox10">This too</label>
                                                        </div>
                                                        <div class="checkbox checkbox-warning checkbox-circle">
                                                            <input id="checkbox11" type="checkbox" disabled="" checked="">
                                                            <label for="checkbox11">And this</label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </form>
                                        <h4>Radios</h4>
                                        <form>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <fieldset>
                                                        <legend>Basic</legend>
                                                        <p>Supports bootstrap brand colors: <code>.radio-primary</code>, <code>.radio-danger</code> etc. </p>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="radio">
                                                                    <input type="radio" name="radio1" id="radio1" value="option1" checked="">
                                                                    <label for="radio1">Small</label>
                                                                </div>
                                                                <div class="radio">
                                                                    <input type="radio" name="radio1" id="radio2" value="option2">
                                                                    <label for="radio2">Big</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="radio radio-danger">
                                                                    <input type="radio" name="radio2" id="radio3" value="option1">
                                                                    <label for="radio3">Next</label>
                                                                </div>
                                                                <div class="radio radio-danger">
                                                                    <input type="radio" name="radio2" id="radio4" value="option2" checked="">
                                                                    <label for="radio4">One</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p>Inline radios</p>
                                                        <div class="radio radio-info radio-inline">
                                                            <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                                                            <label for="inlineRadio1"> Inline One </label>
                                                        </div>
                                                        <div class="radio radio-inline">
                                                            <input type="radio" id="inlineRadio2" value="option1" name="radioInline">
                                                            <label for="inlineRadio2"> Inline Two </label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-4">
                                                    <fieldset>
                                                        <legend>Disabled</legend>
                                                        <p>Disabled state also supported.</p>
                                                        <div class="radio radio-danger">
                                                            <input type="radio" name="radio3" id="radio5" value="option1" disabled="">
                                                            <label for="radio5">Next</label>
                                                        </div>
                                                        <div class="radio">
                                                            <input type="radio" name="radio3" id="radio6" value="option2" checked="" disabled="">
                                                            <label for="radio6"> One</label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                       <!--      <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Validation</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="bd-content">
                                                    <h3>How it works</h3>
                                                    <p>Here’s a rundown of how they work:</p>
                                                    <ul>
                                                        <li>To use, add <code>.has-warning</code>, <code>.has-danger</code>, or <code>.has-success</code> to the parent element. Any <code>.col-form-label</code>, <code>.form-control</code>, or custom form element will receive the validation styles.</li>
                                                        <li>Contextual validation text, in addition to your usual form field help text, can be added with the use of <code>.form-feedback</code>. This text will adapt to the parent <code>.has-*</code> class. By default it only includes a bit of <code>margin</code> for spacing and a modified <code>color</code> for each state.</li>
                                                        <li>Validation icons are <code>url()</code>s configured via Sass variables that are applied to <code>background-image</code> declarations for each state.</li>
                                                        <li>You may use your own base64 PNGs or SVGs by updating the Sass variables and recompiling.</li>
                                                        <li>Icons can also be disabled entirely by setting the variables to <code>none</code> or commenting out the source Sass.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <form>
                                                    <div class="form-group has-success">
                                                        <label class="form-control-label" for="inputSuccess1">Input with success</label>
                                                        <input type="text" class="form-control form-control-success" id="inputSuccess1">
                                                        <div class="form-feedback">Success! You've done it.</div>
                                                        <small class="text-muted">Example help text that remains unchanged.</small>
                                                    </div>
                                                    <div class="form-group has-warning">
                                                        <label class="form-control-label" for="inputWarning1">Input with warning</label>
                                                        <input type="text" class="form-control form-control-warning" id="inputWarning1">
                                                        <div class="form-feedback">Shucks, check the formatting of that and try again.</div>
                                                        <small class="text-muted">Example help text that remains unchanged.</small>
                                                    </div>
                                                    <div class="form-group has-danger">
                                                        <label class="form-control-label" for="inputDanger1">Input with danger</label>
                                                        <input type="text" class="form-control form-control-danger" id="inputDanger1">
                                                        <div class="form-feedback">Sorry, that username's taken. Try another?</div>
                                                        <small class="text-muted">Example help text that remains unchanged.</small>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                           <!--  <div class="col-sm-6">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Horizontal Form Validation</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form>
                                            <div class="form-group row has-success">
                                                <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control form-control-success" id="inputHorizontalSuccess" placeholder="name@example.com">
                                                    <div class="form-feedback">Success! You've done it.</div>
                                                    <small class="text-muted">Example help text that remains unchanged.</small>
                                                </div>
                                            </div>
                                            <div class="form-group row has-warning">
                                                <label for="inputHorizontalWarning" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control form-control-warning" id="inputHorizontalWarning" placeholder="name@example.com">
                                                    <div class="form-feedback">Shucks, check the formatting of that and try again.</div>
                                                    <small class="text-muted">Example help text that remains unchanged.</small>
                                                </div>
                                            </div>
                                            <div class="form-group row has-danger">
                                                <label for="inputHorizontalDnger" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control form-control-danger" id="inputHorizontalDnger" placeholder="name@example.com">
                                                    <div class="form-feedback">Sorry, that username's taken. Try another?</div>
                                                    <small class="text-muted">Example help text that remains unchanged.</small>
                                                </div>
                                            </div>
                                   -->          <!-- checkbox -->
                                           <!--  <div class="has-success">
                                                <label class="form-check-label">
                                                    <input type="checkbox" id="checkboxSuccess" value="option1">
                                                    Checkbox with success
                                                </label>
                                            </div>
                                            <div class="has-warning">
                                                <label class="form-check-label">
                                                    <input type="checkbox" id="checkboxWarning" value="option1">
                                                    Checkbox with warning
                                                </label>
                                            </div>
                                            <div class="has-danger">
                                                <label class="form-check-label">
                                                    <input type="checkbox" id="checkboxDanger" value="option1">
                                                    Checkbox with danger
                                                </label>
                                            </div> -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Disabled state -->
                     <!--        <div class="col-sm-6">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Disabled state</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <p>Add the <code>disabled</code> boolean attribute on an input to prevent user interactions. Disabled inputs appear lighter and add a <code>not-allowed</code> cursor.</p>
                                        <form>
                                            <input class="form-control" id="disabledInput" placeholder="Disabled input here..." disabled="" type="text">
                                        </form>
                                    </div>
                                </div>
                            </div> -->
                            <!-- Control sizing -->
                      <!--       <div class="col-sm-6">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Control sizing</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <p>Set heights using classes like <code>.input-lg</code>, and set widths using grid column classes like <code>.col-lg-*</code>.</p>
                                        <form>
                                            <div class="form-group">
                                                <input class="form-control input-lg" placeholder=".input-lg" type="text">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Default input" type="text">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control input-sm" placeholder=".input-sm" type="text">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->
          