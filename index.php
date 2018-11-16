<?php
require_once 'functions.php';
$query = require_once 'bootstrap.php';

$tasks = $query->selectAll('mytodo');


require_once 'index.view.php';
