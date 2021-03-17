<?php

function sendMailTo($name, $email, $message, $ipadd){
  /* The receiver of the form */
  $to = 'erlou.c@itseducation.asia'; 

  /* The body of the form that will be sent to the receiver */
  $body = '<p> Name: </p>' .$name ;
  $body .= '<p>Email: </p>' .$email;
  $body .= '<p>Message: </p>' .$message;
  $body .= '<p>Ip Address: </p>' .$ipadd;

  /* Subject of the form */
  $email_subject ="Sample Form" ;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  mail($to, $email_subject ,$body, $headers);

}