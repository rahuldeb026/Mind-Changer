<?php
  require_once('functions/function.php');
  needtologin();
  get_header();
  get_sidebar();
  admin();

  $select='SELECT * FROM contact_us ORDER BY id DESC';
  $Query=mysqli_query($con,$select);
  
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
                    <b>All Contact Us Info</b>
                  </div>
                  <div class="col-md-2 card_header_for_one_button">
                    
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered" id="dataTable">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Details</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                        foreach($Query as $data){
                      ?>

                        <tr>

                          <td><?= $data['name']; ?></td>
                          <td><?= $data['mobile']; ?></td>
                          <td><?= $data['email']; ?></td>
                          <td><?= $data['details']; ?></td>
              
                        </tr>
                      <?php
                        }
                        
                      ?>
                    </tbody>
                    
                  </table>
                </div>
              </div>
              <div class="card-footer text-muted">

              </div>
            </div>
          </div>
        </div>
      </div> 
    </section>         
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

<?php
  get_footer();
?>

<script>
    
    $(document).ready(function(){
      $('#dataTable').DataTable();
    });

</script>