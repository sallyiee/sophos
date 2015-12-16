<?php

$EmailFrom = "sally@atlasagency.com.au";
$EmailTo = "sally@atlasagency.com.au";
$Subject = "Smart Freight USP Contact Form";
$Name = Trim(stripslashes($_POST['Name'])); 
$Country = Trim(stripslashes($_POST['Country'])); 
$Company = Trim(stripslashes($_POST['Company'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Phone = Trim(stripslashes($_POST['Phone'])); 
$Message = Trim(stripslashes($_POST['Message'])); 




// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Country: ";
$Body .= $Country;
$Body .= "\n";
$Body .= "Company: ";
$Body .= $Company;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $Phone;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";


// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=/#success\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=/#error\">";
}
?>