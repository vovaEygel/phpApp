<?php
    $db = require 'core/imports.php';
    require router::load('routes.php')->direct(request::uri());
?>