<?php
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$from_email = "max@maxsauber.com";
$subject = "SOMEBODY VISITED MY RESUME!!!!!!!";

putenv("TZ=US/Eastern");					// set time zone
$today= date("l, F dS, Y - h:i:s A");		//date output

if (getenv(HTTP_CLIENT_IP)){ 
$user_ip = getenv(HTTP_CLIENT_IP); 
} 
else { 
$user_ip = getenv(REMOTE_ADDR); 
$user_ip_location = "http://www.ip2location.com/$user_ip";

}
//email body

$mailbody .=
"SOMEBODY VISITED MY RESUME!!! \n 
IP: $user_ip\n
IP Location: <a href='$user_ip_location'>View location</a>\n
Date: $today";

// send email
mail("$from_email", "$subject", "$mailbody", "From: $from_email");  // Send the email to the visitor.
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Max Sauber - Resume</title>
  <meta http-equiv="refresh" content="0;URL='http://portfolio.maxsauber.com/resume.pdf'" />  
</head>
<body>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-19183713-3');
</script>

</body>

</html>