<?php

$app = [];

$app['config'] = require 'config.php';

require 'core/router.php';
require 'core/request.php';
require 'core/database/connection.php';
require 'core/database/queryBuilder.php';

$app['database'] = new queryBuilder(
    connection::connect($app['config']['database'])
);  