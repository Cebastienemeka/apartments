<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{
    public $fromEmail  = 'cebastienemeka@gmail.com';
    public $fromName   = 'Service Apartment';
    public $recipients = [];  // Initialize as empty

    public $protocol = 'smtp';
    public $SMTPHost = 'sandbox.smtp.mailtrap.io';
    public $SMTPUser = 'ac9cd8a9807031';
    public $SMTPPass = '540356f285f02b';
    public $SMTPPort = 2525;
    public $SMTPCrypto = 'tls';

    public $mailType = 'html';  // Set mail type to HTML
    public $charset  = 'utf-8';
    public $wordWrap = true;

    // Add line ending settings
    public $newline = "\r\n";
    public $CRLF = "\r\n";
}
