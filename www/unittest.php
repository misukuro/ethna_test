<?php
error_reporting(E_ALL);
require_once dirname(__FILE__) . '/../app/Miniblog_Controller.php';

Miniblog_Controller::main('Miniblog_Controller', array(
    '__ethna_unittest__',
    )
);
