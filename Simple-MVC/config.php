<?php

//set timezone
date_default_timezone_set('Europe/Berlin');

//site address
define('DIR','https://studi.f4.htw-berlin.de/~s0539721/Simple-MVC/');
define('DOCROOT', dirname(__FILE__));

// Credentials for the local server
//define('DB_TYPE','mysql');
//define('DB_HOST','localhost');
//define('DB_NAME','products');
//define('DB_USER','root');
//define('DB_PASS','root');

// Credentials for the HTW server
 define('DB_TYPE','mysql');
 define('DB_HOST','db.f4.htw-berlin.de');
 define('DB_NAME','_s0539721__webtech_ue5_produkte');
 define('DB_USER','s0539721');
 define('DB_PASS','trullala');

//set prefix for sessions
define('SESSION_PREFIX','splendr_');

//optionall create a constant for the name of the site
define('SITETITLE','Splendr');


//kjgk
?>