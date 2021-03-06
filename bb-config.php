<?php 
return array (
  'debug' => false,
  'salt' => '550b6be3f3c4caa54799a1d55a1cce2c',
  'url' => 'http://localhost:8004/',
  'admin_area_prefix' => '/bb-admin',
  'sef_urls' => false,
  'timezone' => 'UTC',
  'locale' => 'en_US',
  'locale_date_format' => '%A, %d %B %G',
  'locale_time_format' => ' %T',
  'path_data' => '/var/www/public/bb-data',
  'path_logs' => '/var/www/public/bb-data/log/application.log',
  'log_to_db' => true,
  'db' => 
  array (
    'type' => 'mysql',
    'host' => 'database',
    'name' => 'boxbilling',
    'user' => 'root',
    'password' => 'niagahoster',
  ),
  'twig' => 
  array (
    'debug' => true,
    'auto_reload' => true,
    'cache' => '/var/www/public/bb-data/cache',
  ),
  'api' => 
  array (
    'require_referrer_header' => false,
    'allowed_ips' => 
    array (
    ),
    'rate_span' => 3600,
    'rate_limit' => 1000,
  ),
);