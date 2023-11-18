<?php
  require_once('functions/function.php');
  needtologin();
  get_header();
  get_sidebar();
  user();
    
  if($_SESSION['success_alert']=='1'){
  ?>
    <script>
      swal({title: "Done!", text: "Reviewed Successfully!", icon: "success", button: "OK",});
    </script>
  
  <?php
    $_SESSION['success_alert']='0';
  }
  if($_SESSION['success_alert']=='5'){
  ?>
    <script>
      swal({title: "Opps!", text: "Review process failed!", icon: "error", button: "OK",});
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
                <b>Review</b>
              </div>
              <div class="col-md-2 card_header_for_one_button">
                
              </div>
            </div>
          </div>
          <form method="post" action="submit-review.php">
            
          <div class="card-body">
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label">Review <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="" name="review" required>
                </div>
                <div class="col-sm-1"></div>
              </div>
          </div>
          
          <div class="card-footer text-muted text-center">
            <button type="submit" class="btn btn-success">Review</button>
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