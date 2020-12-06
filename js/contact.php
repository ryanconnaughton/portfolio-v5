<?php

$EmailFrom = trim(stripslashes($_POST['email']));
$EmailTo = "ryan.connaughton@gmail.com, hello@ryanconnaughton.com";
$Subject = "Portfolio Contact";
$Name = trim(stripslashes($_POST['name']));
$Email = trim(stripslashes($_POST['email']));
$Message = trim(stripslashes($_POST['message']));

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

//the below needs to be tested

// redirect to success page 
if ($success){
  // print "<meta http-equiv=\"refresh\" content=\"0;URL=message-sent.php\">";
  $result = "successful";
  echo $result;
} 
else{
  // print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
  $result = "unsuccessful";
  echo $result;
}
?>