<?php

require_once dirname(__FILE__) . '/../app/Miniblog_Controller.php';

/**
 * If you want to enable the UrlHandler, comment in following line,
 * and then you have to modify $action_map on app/Miniblog_UrlHandler.php .
 *
 */
// $_SERVER['URL_HANDLER'] = 'index';

/**
 * Run application.
 */
Miniblog_Controller::main('Miniblog_Controller', 'index');

