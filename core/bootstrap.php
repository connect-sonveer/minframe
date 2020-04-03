<?php

use MinFrame\Core\Library\{Database,Connection};
use MinFrame\Core\App;

(new App)->bind('config', require 'config.php');

(new App)->bind('database', new Database(
    Connection::connect((new App)->get('config')['database'])
));

function view($name, $data = [])
{
    extract ($data);
    return require "app/views/{$name}.view.php";
}

function redirect($path)
{
    header("Location: {$_SERVER['SCRIPT_NAME']}{$path}");
}