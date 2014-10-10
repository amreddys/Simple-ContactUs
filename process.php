<?php
$mail="contactus@amreddys.com";		//Mail through which you wish to be notified.
$subject="A new entry to the contact us"; 	// This is the subject of the mail you are going to receive when a user submits a query.


$name=filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
$number=filter_input(INPUT_POST, 'number', FILTER_SANITIZE_SPECIAL_CHARS);
$query=filter_input(INPUT_POST, 'query', FILTER_SANITIZE_SPECIAL_CHARS);
$msg="A new contact query

Name : {$name}
Email : {$email}
Mobile : {$number}
Query : {$query}

Please respond at the earliest.

";
mail($mail, $subject, $msg);
?>
<script>
alert("Entry submitted successfully.");
window.location="./";
</script>
