<?php

define('APP', dirname(__FILE__));

require_once(APP . '/config/autoload.php');
require_once(APP . '/config/db.conf.php');

spl_autoload_register('load');


Router::add(array(
    'admin/delete/([\d]+)' => 'admin/delete/$1'
));
Router::add(array(
    'admin/update' => 'admin/update'
));
Router::add(array(
    'admin/add' => 'admin/add'
));
Router::add(array(
    'admin' => 'admin/index'
));
Router::add(array(
    'auth' => 'auth/index'
));
Router::add(array(
    '/' => 'home/index'
));
Router::dispatch();

?>