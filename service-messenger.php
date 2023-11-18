<?php
  require_once('functions/function.php');
  needtologin();
  get_header();
  get_sidebar();


  $slug=$_GET['s'];
  $select="SELECT * FROM services where service_slug='$slug'";
  $Query=mysqli_query($con,$select);
  $data=mysqli_fetch_assoc($Query);
  $service_id=$data['service_id'];
  
  // $emp_id=$data['assigned_employee_id'];
  // $emp_details_q="SELECT * FROM employee WHERE emp_id='$emp_id'";
  // $emp_details_c=mysqli_query($con,$emp_details_q);
  // $emp_details=mysqli_fetch_assoc($emp_details_c);

  $select_msg="SELECT * FROM service_messenger INNER JOIN user ON service_messenger.sender_id=user.id WHERE service_id='$service_id' ORDER BY service_messenger_id ASC";
  $messages=mysqli_query($con,$select_msg);

  if($_SESSION['success_alert']=='8'){

  ?>

      <script>
        swal({title: "Oops!", text: "Task work submit process failed!", icon: "error", button: "OK",});
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
                <b>Service Details</b>
              </div>
              <div class="col-md-2 card_header_for_one_button">
      
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <table class="table table-striped table-bordered view_table">
                <tr>

                  <td>Service Details</td>
                  <td>:</td>
                  <td>
                      <?=$data['service_details']?>
                  </td>
                </tr>
              </table>
            </div>
            <div class="col-md-2"></div>
            </div>
  
            <div class="row">
              <div class="col-md-12">
  
              <hr>
              <h5 class="text-center text-dark"><b>Messaging Conversation</b></h5>
              <hr>
                <div class="table-responsive">
                  <table class="table table-striped table-bordered">

                    <thead>
                      <tr>
                          <th>Sender</th>
                          <th>Message</th>
                          <th>Time</th>
                          <th>Date</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                    <?php
                        foreach($messages as $message){
                          if($message['sender_id']==$_SESSION['id']){ 
                    ?>
                      <tr class="bg-info text-white">
                          <?php
                          }
                            else{
                              ?>
                              <tr>
                                <?php
                            }
                          if($message['sender_id']==$_SESSION['id']){ 
                          ?>
                          <td>Me</td>
                          <?php
                          }else{
                          ?>
                          <td><?= $message['name']; ?></td>
                          <?php
                          }
                          ?>
                          <td><?= $message['messages']; ?></td>
                          <td><?= $message['message_time']; ?></td>
                          <td><?= $message['message_date']; ?></td>
                      </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="submit-service-messenger.php">
                    <div class="card-body">
                            <input type="hidden" class="form-control" id="" name="service_id" value="<?= $data['service_id'] ?>" required>
                            <input type="hidden" class="form-control" id="" name="sender_id" value="<?= $_SESSION['id']; ?>" required>
                            <input type="hidden" class="form-control" id="" name="service_slug" value="<?=$data['service_slug']?>" required>
                        <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label"><b>Message here: <span class="text-danger">*</span></b></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" name="message" required>
                        </div>
                        <div class="col-sm-1"></div>
                        </div>
                    </div>
                    
                    <div class="card-footer text-muted text-center">
                      <button type="submit" class="btn btn-success">Send</button>

                    </div>
                    </form>
                </div>
            </div>
          </div>
          <div class="card-footer text-muted">

          </div>
        </div>
      </div>        
      <!-- /.content -->
      </div>
    <!-- /.content-wrapper -->
<?php

  get_footer();

?>