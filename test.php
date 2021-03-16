<?php

function sendMailTo($name, $email, $message, $ipadd){
  $to = 'erlou.c@itseducation.asia';
  $body = '<p> Name: </p>' .$name ;
  $body .= '<p>Email: </p>' .$email;
  $body .= '<p>Message: </p>' .$message;
  $body .= '<p>Ip Address: </p>' .$ipadd;

  $email_subject ="Sample Form" ;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  mail($to, $email_subject ,$body, $headers);

}