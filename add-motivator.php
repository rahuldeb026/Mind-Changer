<?php
  require_once('functions/function.php');
  needtologin();
  get_header();
  get_sidebar();
  admin();

  if($_SESSION['success_alert']=='8'){
  ?>
    <script>
      swal({title: "Opps!", text: "Motivator registration failed! Password confirmation didn't match.", icon: "error", button: "OK",});
    </script>
<?php
    $_SESSION['success_alert']='0';
  }
?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
        <div class="col-md-12">
        <div class="card">
          <div class="card-header bg-light">
            <div class="row">
              <div class="col-md-10 card_header_text">
                <b>Add Motivator Information</b>
              </div>
              <div class="col-md-2 card_header_for_one_button">
                
              </div>
            </div>
          </div>
          <form method="post" action="submit-add-motivator.php" enctype="multipart/form-data">
            
          <div class="card-body">
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Name <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="" name="name" required>
                </div>
                <div class="col-sm-1"></div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Email <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="col-sm-1"></div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Mobile <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="" name="mobile" required>
                </div>
                <div class="col-sm-1"></div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Address <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="" name="address" required>
                </div>
                <div class="col-sm-1"></div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">NID <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="" name="nid" required>
                </div>
                <div class="col-sm-1"></div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Joining Date <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" id="" name="joining_date" required>
                </div>
                <div class="col-sm-1"></div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Password <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="col-sm-1"></div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Confirm Password <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="repassword" name="repassword" required>
                </div>
                <div class="col-sm-1"></div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Photo <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="file" onchange="readURL(this);" class="form-control" id="" name="photo" required>
                  <br>
                  <img id="image_preview" src="#" alt=""/>
                </div>
                <div class="col-sm-1"></div>
              </div>
          </div>
          
          <div class="card-footer text-muted text-center">
            <button type="submit" class="btn btn-success">Add Motivator</button>
          </div>
          </form>
        </div>
      </div>        
      <!-- /.content -->
      </div>
    <!-- /.content-wrapper -->
  
<?php
  get_footer();
?>