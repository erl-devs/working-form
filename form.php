
<?php
   session_start();

    require_once('test.php');

   if($_SERVER['REQUEST_METHOD']=='POST' || isset($_POST['submit'])){

    sendMailTo($_REQUEST['name'] , $_REQUEST['email'], $_REQUEST['message'] , $_SERVER['REMOTE_ADDR']);

    header("HTTP/1.1 303 See Other");
    header("Location: http://$_SERVER[HTTP_HOST]/testweb/confirmation.php");

    die();
   } else{
       echo "Failed";
       session_unset();
       session_destroy();
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    
<div class="container">
    <form method="POST">
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name">
    </div>
    <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="text" name="email" class="form-control" id="email" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label class="form-label">Message</label>
        <textarea name="message" class="form-control" id="message" rows="3"></textarea>
    </div>
    <div class="col-auto">
        <input type="hidden" name="form-submit" value="submit">   
        <button type="submit" class="btn btn-primary mb-3">Submit</button>
    </div>
    </form>
</div>
</body>
</html>