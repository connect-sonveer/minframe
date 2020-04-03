<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
use MinFrame\Core\{Router,Request};

require_once 'vendor/autoload.php';
require_once 'core/bootstrap.php';
Router::load('app/routes.php')->direct(Request::uri(), Request::method());