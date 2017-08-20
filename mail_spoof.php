<?php
  $to = '';
  $from = '';
  $subject = '';
  $message = '';
  
  if(isset($_POST['to']) && isset($_POST['from']) && isset($_POST['subject']) && isset($_POST['message'])) {
    if($_POST['to'] != '' && $_POST['from'] != '' && $_POST['subject'] != '' && $_POST['message'] != '') {
      mail($to, $subject, $message, "From: ".$message);
    } else {
      echo "One of the spoofing arguments is invalid.";
    }
   } else {
      echo "One of the spoofing arguments is not provided.";
   }
  ?>
