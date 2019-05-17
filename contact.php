		<?php
 
if(isset($_POST['email'])) {
 
     $subject = $_POST['subject']; // required
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "marvvol@yahoo.ca";
 
    $email_subject = "Forever Aqua Mission - Uganda Contact Form: $subject";
	

	

    $name = $_POST['name']; // required
 
    $email = $_POST['email']; // required
 
    $subject = $_POST['subject']; // required
 
    $message = $_POST['message']; // required
	
	
	function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
	
	
	$email_message = "Message details are as below:\n\n";
	
	$email_message .= "Name: ".clean_string($name)."\n";
	
    $email_message .= "Email: ".clean_string($email)."\n";
	
	$email_message .= "Subject: ".clean_string($subject)."\n";
 
    $email_message .= "Message: ".clean_string($message)."\n";    
   
 try{
// create email headers
 
$headers = 'From: '.$email."\r\n".
 
'Reply-To: '.$email."\r\n" ;


mail($email_to, $email_subject, $email_message, $headers);

		//else catch the exception and show the error.
		} catch(PDOException $e) {
		   // $error_message[] = $e->getMessage();
		}
		
		
		}
?>		