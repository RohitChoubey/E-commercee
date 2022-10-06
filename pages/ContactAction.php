<?php
 
    $Name = "";
    $Email = "";
    $Message = "";
	$Phone = "";
    $recipient ="rohitchoubey15847@gmail.com";
    if(isset($_POST['Name'])) {
        $Name = filter_var($_POST['Name'], FILTER_SANITIZE_STRING);
    }
    
    if(isset($_POST['Email'])) {
        $Email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['Email']);
        $Email = filter_var($Email, FILTER_VALIDATE_EMAIL);
    }
	
	if(isset($_POST['number'])) {
        $Phone = filter_var($_POST['number'], FILTER_SANITIZE_STRING);
    }
	
    if(isset($_POST['Message'])) {
        $Message = htmlspecialchars($_POST['Message']);
    }
  
     $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $Phone . "\r\n" . 'Name: ' . $Name . "\r\n"
	.'Subject to Contact: ' . $subject . "\r\n" . 'Quote: ' . $service . "\r\n";
	
	 
	 
    if(mail($recipient, $Message, $headers)) {
		 ?>
        <script language="JavaScript">
            alert('Thank you for contacting us, $Name. You will get a reply within 24 hours.');
            document.location='contactus.php';
        </script>
        <?php
    } else {
		?>
        <script language="JavaScript">
            alert('We are sorry but the email did not go through.');
            document.location='contact-us.php';
        </script>
        <?php
    }
     
 
 
?>