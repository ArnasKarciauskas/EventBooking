<?php
if (isset($_POST['submit'])) {
	  $name = $_POST['name'];
      $email = $_POST['email'];
	  $phone = $_POST['phone'];
      $textarea = $_POST['textarea'];
	  $promotional = $_POST['promotional'];     
      
      //Load previous XML file
      $xml = simplexml_load_file("./xmld/contact.xml") or die("ERROR: Cannot load contact.xml.");

      //Add a new node
      $feedback = $xml->addChild('enquiry');

      //Add the details from forms to XML file
	  $feedback->addChild('name', $name);
      $feedback->addChild('email', $email);
	  $feedback->addChild('phone', $phone);
      $feedback->addChild('textarea', $textarea);
	  $feedback->addChild('promotional', $promotional);   

       //Save the new XML file
      $xml->asXml('./xmld/contact.xml');     

      header("Location: ../thankyou.html");
} else {
      header("Location: ../index.html");
}

?>



