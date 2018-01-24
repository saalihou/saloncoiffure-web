<?php

$config['protocol'] = 'smtp';
$config['smtp_host'] = $_ENV["SMTP_HOST"];
$config['smtp_user'] = $_ENV["SMTP_USER"];
$config['smtp_pass'] = $_ENV["SMTP_PASSWORD"];
$config['smtp_port'] = 587;
$config['smtp_timeout'] = 15;
