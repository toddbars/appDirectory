<?php
 $to = 'todd.barsalou@infusionsoft.com';
 $name = $_POST['name'];
 $email = $_POST['email'];
 $short = $_POST['short'];
 $link = $_POST['link'];
 $price = $_POST['price'];
 $discount = $_POST['discount'];
 $claim = $_POST['claim'];
 $video = $_POST['video'];
 $affiliateLink = $_POST['affiliatelink'];
 $type = $_POST['type'];
 $verticals = $_POST['vertivals'];
 $trial = $_POST['trial'];
 $isThereAVideo = $_POST['isthereavideo'];
 $from = $_POST['email'];
 $subject = " New Developer entry for app directory";
 $res = mail($to, $subject, "{ \n
              \"name\": \"".$name."\", \n
              \"email\": \"".$email."\",\n
              \"short\": \"".$short."\",\n
              \"link\": \"".$link."\",\n
              \"price\": \"".$price."\",\n
              \"discount\": \"".$discount."\",\n
              \"claim\": \"".$claim."\",\n
              \"video\": \"".$video."\",\n
              \"affiliiate link\": \"".$affiliateLink."\",\n
              \"type\": \"".$type."\",\n
              \"verticals\": \"".$verticals."\",\n
              \"trial\": \"".$trial."\",\n
              \"isthereavideo\": \"".$isThereAVideo."\",\n
                              },", "From: $from");
 if (!$res)
   die('email failed');
 else
   header('Location: http://www.startinfusionsoft.com/partners');

?>
