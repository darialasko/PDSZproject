<?php
require_once 'mailer.class.php';
$mail = new Mailer( true );
$mail->sendEmail( 'olek+bai@cichowicz.eu', 'Aleksander', 'Cichowicz' );