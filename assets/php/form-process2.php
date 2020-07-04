<?php
error_reporting(0);
$errorMSG = "";

// NAME

if (empty($_POST["name_2"])) {
    $errorMSG1 = "Name is required ";
} else {
    $name = stripslashes($_POST["name_2"]);
   
}

// EMAIL
if (empty($_POST["email_2"])) {
    $errorMSG1 .= "Email is required ";
} else {
    $email = stripslashes($_POST["email_2"]);
}

// MSG SUBJECT
if (empty($_POST["city_2"])) {
    $errorMSG .= "Subject is Required ";
} else {
    $city= stripslashes($_POST["city_2"]);
}
if (empty($_POST["company_2"])) {
    $errorMSG .= "Company is Required ";
} else {
    $company= stripslashes($_POST["company_2"]);
}
if (empty($_POST["title_2"])) {
    $errorMSG .= "Title is Required ";
} else {
    $title= stripslashes($_POST["title_2"]);
}
if (empty($_POST["phone_2"])) {
    $errorMSG .= "Phone is Required ";
} else {
    $phone= stripslashes($_POST["phone_2"]);
}

// MESSAGE
if (empty($_POST["message_2"])) {
    $errorMSG1 .= "Message is required ";
} else {
    $message = stripslashes($_POST["message_2"]);
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

$EmailTo = "doug.bain@hubss.com , cleve.stordy@hubss.com";
$Subject = "New Message From Hub Surface Systems REQUEST Form";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Phone Number: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "City: ";
$Body .= $city;
$Body .= "\n";
$Body .= "Company: ";
$Body .= $company;
$Body .= "\n";
$Body .= "Title: ";
$Body .= $title;
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
