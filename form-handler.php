<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$emil_from = '';

$emil_subject = 'New Form Submission';

$emil_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User Subject: $subject.\n".
                "User Message: $message.\n";

$to = 'umarfarooq249256@gmail.com';

$headers = "From:  $emil_from \r\n";

$headers .= "Reply-To:  $visitor_email \r\n";

mail($to,$emil_subject,$emil_body,$headers);

header("Location: contact.html");

?>