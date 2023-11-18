<?php
  require_once('functions/function.php');
  needtologin();
  get_header();
  get_sidebar();
  admin();

  $select='SELECT * FROM user where role_id="2" ORDER BY id DESC';
  $Query=mysqli_query($con,$select);

  if($_SESSION['success_alert']=='1'){
  ?>
  <script>
    swal({title: "Done!", text: "Motivator registration successfull!", icon: "success", button: "OK",});
  </script>
  <?php
    $_SESSION['success_alert']='0';
  }elseif($_SESSION['success_alert']=='2'){
  ?>
  
  <script>
    swal({title: "Done!", text: "Motivator information updated successfully!", icon: "success", button: "OK",});
  </script>
  <?php
    $_SESSION['success_alert']='0';
  }elseif($_SESSION['success_alert']=='3'){
  ?>
  <script>
    swal({title: "Done!", text: "Motivator deleted successfully!", icon: "success", button: "OK",});
  </script>
  <?php
    $_SESSION['success_alert']='0';
  }elseif($_SESSION['success_alert']=='4'){
  ?>
  <script>
    swal({title: "Done!", text: "Motivator blocked successfully!", icon: "success", button: "OK",});
  </script>
  <?php
    $_SESSION['success_alert']='0';
  }elseif($_SESSION['success_alert']=='5'){
  ?>
  <script>
    swal({title: "Done!", text: "Motivator unblocked successfully!", icon: "success", button: "OK",});
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
                    <b>All Motivator</b>
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
                        <th>Motivator Name</th>
                        <th>Motivator Email</th>
                        <th>Motivator Phone</th>
                        <th>Motivator joining date</th>
                        <th>Manage</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        foreach($Query as $data){
                      ?>
                        <tr>
                          <td><?= $data['name']; ?></td>
                          <td><?= $data['email']; ?></td>
                          <td><?= $data['mobile']; ?></td>
                          <td><?= $data['joining_date']; ?></td>
                          <td>
                            <a href="view-motivator.php?v=<?= $data['slug']; ?>"><i class="fas fa-plus-square"></i></a>
                            <a href="edit-motivator.php?e=<?= $data['slug']; ?>"><i class="fas fa-edit"></i></a>
                            <a href="delete-motivator.php?d=<?= $data['slug']; ?>"><i class="fas fa-trash-alt"></i></a>
                          </td>
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