<html>
<?php
$name = $_post['name'];
$email = $_post['email'];
$tel = $_post['tel'];
$subject = $_post['subject'];
$message = $_post['messag'];

$mailheader = "from:".$name."<".$email.">\r\n";

$recipient = "divinesuccess011@gmail.com";

mail($recipient, $subject, $message, $mailheader)
or die("Error!");

echo"message sent";

?>
</html>
