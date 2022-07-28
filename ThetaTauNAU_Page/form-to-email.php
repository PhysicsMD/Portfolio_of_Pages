<?php
  $subject = $_POST['subject'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
  $copytosender = $_POST['copytosender'];
  $hidden = $_POST['hidden'];

function IsInjected($str)
{
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
               
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

	$email_from = $visitor_email;

	$email_subject = "New Submission: $subject";

	$email_body = "You have received a new message from the Webform.\n".
                            "The message is:\n $message";
if($hidden == hidden)
{
    $headers = "From: Anonymous \r\n";
    if($copytosender == checkbox_value)
{
    $to = "alennwright@thetataunau.online, $email_from";
}
        $headers .= "MIME-Version: 1.0\n" ;
        $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
        $headers .= "X-Priority: 1 (Highest)\n";
        $headers .= "X-MSMail-Priority: High\n";
        $headers .= "Importance: High\n";
  mail($to,$email_subject,$email_body,$headers);
}else{
if($copytosender == checkbox_value)
{
    $to = "alennwright@thetataunau.online, $email_from";
}
else{
  $to = "alennwright@thetataunau.online";
}

  $headers = "From: $email_from \r\n";
  $headers .= "MIME-Version: 1.0\n" ;
    $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
    $headers .= "X-Priority: 1 (Highest)\n";
    $headers .= "X-MSMail-Priority: High\n";
    $headers .= "Importance: High\n";
  mail($to,$email_subject,$email_body,$headers);}
  header('location: index.html');
?>