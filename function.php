<?php 

if(isset($_POST['btn-submit-contact'])){
  $my_email = "istianseva26@gmail.com";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $subject = "Portfolio Alert (By " . $name . " || " . $email . ")";

  $insert_contact_user = mysqli_query($con, "INSERT INTO `contact_tbl`(`user_name`, `user_email`, `user_message`) VALUES ('$name', '$email', '$message')");

  if($insert_contact_user){
    $_SESSION['submit-contact-session'] = true; 
  }
  else{
    $_SESSION['submit-contact-session'] = false;
  }

}

if(isset($_SESSION['submit-contact-session'])){
  
    if($_SESSION['submit-contact-session'] == true){
      echo "<script>
          $(document).ready(function(){
            $('#contact-success-alert').modal('show');
        });
      </script>";
      unset($_SESSION['submit-contact-session']);
    }
    else{
      echo "<script>
          $(document).ready(function(){
            $('#contact-failed-alert').modal('show');
        });
      </script>";
      unset($_SESSION['submit-contact-session']);
    }
  }

?>