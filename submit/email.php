<?php
 $to = 'todd.barsalou@infusionsoft.com';
 $subject = "An Infusionsoft customer needs your help, you're our only hope! May the Fourth be with you!";
 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $message = $_POST['message'];
 $from = $_POST['email'];
 $res = mail($to, $subject, "\n Name: ".$name ."\n Phone: ".$phone ."\n".$message, "From: $from");
 if (!$res)
   die('email failed');
 else
   header('Location: http://www.startinfusionsoft.com/partners');

?>
