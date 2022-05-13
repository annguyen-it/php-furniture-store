<?php

$ini_array = parse_ini_file('db.ini');

if (!defined('HOST')) define('HOST', $ini_array['HOST'] ?? 'localhost');
if (!defined('USER')) define('USER', $ini_array['USER'] ?? 'root');
if (!defined('PASSWORD')) define('PASSWORD', $ini_array['PASSWORD'] ?? '');
if (!defined('DATABASE_NAME')) define('DATABASE_NAME', 'ecommerceapp');

if (!defined('CURRENCY')) define('CURRENCY', '$');
