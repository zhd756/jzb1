<?php
require_once __DIR__.'/../environmental.inc.php';

define('BIND_MODULE', 'Api');
\think\App::run()->send();