<?php
error_reporting(0);
$errorMSG = "";

// NAME
$name2 = '';
if (empty($_POST["name"])) {
    $errorMSG1 = "Name is required ";
} else {
    $name = stripslashes($_POST["name"]);
    $name2 = explode(" ",$name);
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG1 .= "Email is required ";
} else {
    $email = stripslashes($_POST["email"]);
}

// MSG SUBJECT
if (empty($_POST["msg_subject"])) {
    $errorMSG .= "Subject is Required ";
} else {
    $msg_subject = stripslashes($_POST["msg_subject"]);
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG1 .= "Message is required ";
} else {
    $message = stripslashes($_POST["message"]);
}

//Captcha
$secret="6LfJWp0UAAAAABfVViH91W2nAUotc5bcVmnuWLnx";
$response=$_POST["captcha"];
$verify=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$response}");
$captcha_success=json_decode($verify);
if ($captcha_success->success==false) {
   $errorMSG .= "Captcha Incorrect";
 }
else if ($captcha_success->success==true) {
  $response=$_POST["captcha"];
}

$EmailTo = "doug.bain@hubss.com , cleve.stordy@hubss.com" ;
$Subject = "New Message From Hub Surface Systems SAY HI Form";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Subject: ";
$Body .= $msg_subject;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

  /* $headers = array('Content-Type: text/plain; charset="UTF-8";',
            'From: ' . $email,
            'Reply-To: ' . $email,
            'Return-Path: ' . $email,
        ); */
// send email
//$success = mail($EmailTo, $Subject, $Body, implode("\n", $headers));

$from = $email;

$headers .= 'From: <'.$from.'>' . "\r\n";
// $headers .= 'Cc: email@gmail.com, email@gmail.com,' . "\r\n";

$success = 0;
if( strlen($message) < 2 ) {} else {
  if ( mail($EmailTo,$Subject,$Body, $headers) ) {
      $success = 1;




  } else {
    $success = 0;
  }
}


// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>
