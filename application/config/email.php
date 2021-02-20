<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $config = Array(
//     'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
//     'smtp_host' => 'smtp.mailtrap.io',
//     'smtp_port' => 2525,
//     'smtp_user' => '', # username
//     'smtp_pass' => '', # password
//     'crlf' => "\r\n",
//     'newline' => "\r\n"
//   ); # mailtrap configuration.

// $config = array(
//     'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
//     'smtp_host' => 'smtp.gmail.com', 
//     'smtp_port' => 587, // 587 => TLS,  465 => SSL
//     'smtp_user' => '', # username
//     'smtp_pass' => '', # password
//     'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
//     'mailtype' => 'html', //plaintext 'text' mails or 'html'
//     'smtp_timeout' => '4', //in seconds
//     'charset' => 'iso-8859-1',
//     'wordwrap' => TRUE
// ); # gmail configuration, watch this video to activate your smtp settings : https://www.youtube.com/watch?v=ql5Dex4m40w

$config = array(
    'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
    'smtp_host' => 'smtp-relay.sendinblue.com', 
    'smtp_port' => 587,
    'smtp_user' => '', # username
    'smtp_pass' => '', # password
    'mailtype' => 'text', //plaintext 'text' mails or 'html'
    'smtp_timeout' => '4', //in seconds
    'charset' => 'iso-8859-1',
    'wordwrap' => TRUE
); # sendinblue configuration