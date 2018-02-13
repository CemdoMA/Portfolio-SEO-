<?php
require_once('dbconnect.php');
$dbc = mysqli_connect(HOST, USER, PASS, DBNAME) or die('Error connect');

//$name = strip_tags(mysqli_real_escape_string($dbc, trim(htmlentities($_POST['input-name'])))); 
$name = strip_tags($_POST['input-name']); 
$email = strip_tags($_POST['input-email']);
$subject = strip_tags($_POST['input-subject']);
$messageUser = strip_tags($_POST['input-message']);

$subject2 = "Bevestiging Bericht";
if(isset($_POST['submit'])){
    

$to = "22315@ma-web.nl";

$message = "
<!DOCTYPE HTML>
<html>
<head>
    <meta charset=\"UTF-8\">
 
</head>
<body>
<div class=\"container\">
  <form id=\"contact\" action=\"\" method=\"post\">
    <h1>Nieuw bericht van contact forum portfolio!</h2>
    <h4>Ingezonden door: " . $name . "</h4>
    <h4>Email: " . $email . "</h4>
      <h4>Onderwerp: " . $subject . "</h4>
    <h4>Bericht: " . $messageUser . "</h4>

  </form>
</div>
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      -webkit-font-smoothing: antialiased;
      -moz-font-smoothing: antialiased;
      -o-font-smoothing: antialiased;
      font-smoothing: antialiased;
      text-rendering: optimizeLegibility;
    }

    body {
      font-family: \"Roboto\", Helvetica, Arial, sans-serif;
      font-weight: 100;
      font-size: 12px;

      color: #777;
      background: #4CAF50;
    }

    .container {
      max-width: 30%;
      margin: 0 auto;
      position: relative;
    }

    #contact {
      background: #F9F9F9;
      padding: 25px;
      margin: 150px 0;
      box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }

    #contact h3 {
      display: block;
      font-size: 30px;
      font-weight: 300;
      margin-bottom: 10px;
    }

    #contact h4 {
      margin: 5px 0 15px;
      display: block;
      font-size: 13px;
      font-weight: 400;
    }

    fieldset {
      border: medium none !important;
      margin: 0 0 10px;
      min-width: 100%;
      padding: 0;
      width: 100%;
    }

</style>
</body>

</html>
";

$message2 = "
<!DOCTYPE HTML>
<html>
<head>
    <meta charset=\"UTF-8\">
 
</head>
<body>
<div class=\"container\">
  <form id=\"contact\" action=\"\" method=\"post\">
    <h1>Bedankt voor het versturen van een bericht!</h1>
    <h2>U zult zo snel mogelijk een antwoord krijgen.</h2>
    <h3>Hieronder een kopie van uw bericht:</h3><br/>
      <h4>Onderwerp: " . $subject . "</h4>
    <h4>Bericht: " . $messageUser . "</h4>

  </form>
</div>
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      -webkit-font-smoothing: antialiased;
      -moz-font-smoothing: antialiased;
      -o-font-smoothing: antialiased;
      font-smoothing: antialiased;
      text-rendering: optimizeLegibility;
    }

    body {
      font-family: \"Roboto\", Helvetica, Arial, sans-serif;
      font-weight: 100;
      font-size: 12px;

      color: #777;
      background: #4CAF50;
    }

    .container {
      max-width: 30%;
      margin: 0 auto;
      position: relative;
    }

    #contact {
      background: #F9F9F9;
      padding: 25px;
      margin: 150px 0;
      box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }

    #contact h3 {
      display: block;
      font-size: 30px;
      font-weight: 300;
      margin-bottom: 10px;
    }

    #contact h4 {
      margin: 5px 0 15px;
      display: block;
      font-size: 13px;
      font-weight: 400;
    }

    fieldset {
      border: medium none !important;
      margin: 0 0 10px;
      min-width: 100%;
      padding: 0;
      width: 100%;
    }

</style>
</body>

</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <22315@ma-web.nl>' . "\r\n";


mail($to,$subject,$message,$headers) or die("FATAL ERROR! Sending mail failed!");
mail($email,$subject2,$message2,$headers) or die("FATAL ERROR! Sending mail failed!");


    echo "<script>alert('Gelukt! U krijgt zo snel mogelijk een reactie terug.')</script>";
    header("Location:../index.php");
    
}