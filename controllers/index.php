<?php

$_SESSION['name'] = 'Rana';

$heading = "Home";
const BASE_PATH = __DIR__.'/../';

require(BASE_PATH.'/views/partials/header.php');
require BASE_PATH.'/views/partials/nav.php';
require BASE_PATH.'/views/partials/banner.php';  

require(BASE_PATH.'/views/home.view.php');