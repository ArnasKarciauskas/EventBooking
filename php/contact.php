<?php
$from ="arnaskarciauskas@gmail.com";
$to = "arnaskarciauskas@gmail.com";
	  $name = $_POST['name'];
      $email = $_POST['email'];
	  $phone = $_POST['phone'];
      $textarea = $_POST['textarea'];
	  $promotional = $_POST['promotional'];
$body .="Name: ";
$body .=$name;
$body .="E=mail ";
$body .=$email;
$body .="Phone: ";
$body .=$phone;
$body .="Textarea :";
$body .=$textarea;
$body .="Promotional?";
$body .=$promo;

$go = mail($to, $subject, $body, "From:<$from>");

if($go){
		print("Success!");
}
else{
	print("Unable to send");
}

?>



