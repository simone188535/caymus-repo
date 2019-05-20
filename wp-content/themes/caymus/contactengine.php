<?php

$EmailFrom = "Caymus Equity Website";
$EmailTo = "admin@caymusequity.com";
$Subject = "Caymus Equity Website Message";
$Name = $_POST['name']; 
$Email = $_POST['email'];
$Contactmessage = $_POST['contactmessage'];  

// validation
/*
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}
*/
// prepare email body text
$Body = "";
$Message = "
Name: $Name \n
Email: $Email \n
Message: $Contactmessage \n
";

// send email 
$success = mail($EmailTo, $Subject, $Message, "From: <$EmailFrom>");

// redirect to success page 
//if ($success){
//  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
//}
//else{
 // print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
//}
/*
   if ($success) {
       $message = "Your request has been sent! Thank you.";
       echo '
<script>
function goBack()
  {
  window.history.back()
  }
</script>
<div  style="font-family: sans-serif;
  font-size: 30px;">'.$message.'<div id="close-button"><input type="button" value="Back" onclick="goBack()" /></div></div>
';
   } else {
       $message = "Oops...Go back and fill in all the required";
       echo '
<script>
function goBack()
  {
  window.history.back()
  }
</script>
<div  style="font-family: sans-serif;
  font-size: 30px;">'.$message.'<div id="close-button"><input type="button" value="Back" onclick="goBack()" /></div></div>
';
   }
*/   
?>
