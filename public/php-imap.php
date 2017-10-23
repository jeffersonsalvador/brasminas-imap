<?php
require '../config.php';

echo '<pre>';

$mailbox = new PhpImap\Mailbox('{imap.gmail.com:993/imap/ssl}INBOX', 'nfe@brasminas.com.br', '147741brasminas', ANEXOS);

$emailsNaoLidos = $mailbox->searchMailbox(); // 'UNSEEN'
if(!$emailsNaoLidos) {
	die('Nenhum e-mail novo');
} else {
	echo 'Foram encontrados '.count($emailsNaoLidos).' e-mails.<br>';
}
//$emails = $mailbox->getMailsInfo($emailsNaoLidos);
//print_r($emails); exit;

foreach ($emailsNaoLidos as $id) {
	$mail = $mailbox->getMail($id, false);

	/*
	print_r($mail);
	echo "\n\nAttachments:\n";
	print_r($mail->getAttachments());
	*/
}


echo '</pre>';