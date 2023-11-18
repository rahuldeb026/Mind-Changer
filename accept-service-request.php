<?php
  require_once('functions/function.php');
  needtologin();
  motivator();

  $slug=$_GET['s'];
  $update="UPDATE services SET service_request_pending_status='0' WHERE service_slug='$slug'";

  $Q=mysqli_query($con,$update);

  if($Q){
    $_SESSION['success_alert']='1';
    header('Location: motivator-approved-requests.php');
  }else{
    $_SESSION['success_alert']='5';
    header('Location: motivator-pending-requests.php');
  }

?>