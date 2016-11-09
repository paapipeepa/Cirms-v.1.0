<?php
require 'vendor/autoload.php';
use Mailgun\Mailgun;

$mgClient = new Mailgun('key-6e380159dacc569f5fe3d45211197677');
$domain = "sandboxd149e0b9e4ce4363a8411227427f2ae5.mailgun.org";

$result=$mgClient->sendMessage($domain, array(
    'from'    => 'Excited User <mailgun@sandboxd149e0b9e4ce4363a8411227427f2ae5.mailgun.org>',
    'to'      => 'TSSP <praneethtkonda@gmail.com>',
    'subject' => 'Hello',
    'text'    => 'We are trying somethin new!'
));
?>