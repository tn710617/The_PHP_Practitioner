<?php
require_once 'database/Connection.php';
require_once 'database/QueryBuilder.php';

$config = require_once 'config.php';

return new QueryBuilder(Connection::make($config['database']));

