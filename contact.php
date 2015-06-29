<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$mail_to = 'o9sanatate@gmail.com.com';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Va multumesc pentru messaj.');
		window.location = 'http://sanatateata.github.io/indexST.html#contact';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Mesajul dumneavoastra nu a fost trimis. Va rugam trimiteti un email la adresa: o9sanatate@gmail.com');
		window.location = 'http://sanatateata.github.io/indexST.html#contact';
	</script>
<?php
}
?>