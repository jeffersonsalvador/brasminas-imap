<?php
require '../config.php';

$mailbox = new PhpImap\Mailbox('{imap.gmail.com:993/imap/ssl}INBOX', EMAIL, PWD, ANEXOS);

$unreadEmails = $mailbox->searchMailbox('UNSEEN');

if(!$unreadEmails) {
	die('Nenhum e-mail novo');
} else {
	echo 'Foram encontrados '.count($unreadEmails).' e-mails.<br>';
}

foreach ($unreadEmails as $id) {
	$mail = $mailbox->getMail($id, true);
}