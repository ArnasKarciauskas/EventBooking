<?php
if (isset($_POST['submit'])) {
      $event = $_POST['event'];
      $date = $_POST['date'];
      $persons = $_POST['persons'];
      $seat = $_POST['seat'];
	  $fname = $_POST['fname'];
	  $lname = $_POST['lname'];
	  $bemail = $_POST['bemail'];
	        
      //Load previous XML file
      $xml = simplexml_load_file("./xmld/booking.xml") or die("Cannot load booking.xml");
	  
      //Add a new feedback node
      $feedback = $xml->addChild('booking');

      //Add the details from forms to XML file
      $feedback->addChild('event', $event);
      $feedback->addChild('date', $date);
      $feedback->addChild('persons', $persons);
      $feedback->addChild('seat', $seat);
	  $feedback->addChild('fname', $fname);
	  $feedback->addChild('lname', $lname);
	  $feedback->addChild('bemail', $bemail);

       //Save the new XML file
      $xml->asXml('./xmld/booking.xml"');
      
      header("Location: ../success.html"); 
} else {
      header("Location: ../index.html");
}
?>