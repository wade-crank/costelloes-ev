<?
$mail_to_send_to = "contact@ev.costelloes.co.uk ";
$from_email = "contact@ev.costelloes.co.uk";
$sendflag = $_REQUEST['sendflag'];    
$name=$_REQUEST['primaryDriver'];
$installaddress=$_REQUEST['InstallAddress'];
$customernumber=$_REQUEST['CustomerNumber'];
if ( $sendflag == "send" )
        {
                $subject= $installaddress;
                $email = $_REQUEST['CustomerEmail'] ;
                $message= "\r\n" . "Name: $name" . "\r\n"; 
                $message = $message.$_REQUEST['message'] . "\r\n" ;
                $headers = "From: $from_email" . "\r\n" . "Reply-To: $email"  ;
                $a = mail( $mail_to_send_to, $subject, $message, $headers );
                if ($a)
                {
                     print("Message was sent, you can send another one");
                } else {
                     print("Message wasn't sent, please check that you have changed emails in the bottom");
                }
        }
        ?>