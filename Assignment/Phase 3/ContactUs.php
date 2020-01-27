<?php
$to = "saif-kh133@hotmail.com";
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

  if (mail($to, $email, $name, $phone, $message)) {
    echo file_get_contents("ContactUs.html");
  }
  else {
    echo "failed";
  }

?>
