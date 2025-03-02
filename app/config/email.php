<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
	'protocol' => "smtp",
    'smtp_host' => "smtp.gmail.com", 
    'smtp_port' => 465,
    'smtp_user' => "admin@admin.com",
    'smtp_pass' => "admin",
    'smtp_crypto' => "tls",
    'mailtype' => 'text/plan',
    'smtp_timeout' => '4',
    'charset' => 'utf-8',
    'wordwrap' => TRUE,
    'crlf'    => "\r\n",
    'newline' => "\r\n"
);