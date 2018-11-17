<?php
require_once 'core/database/Connection.php';
require_once 'core/database/QueryBuilder.php';

$config = require_once 'config.php';

return new QueryBuilder(Connection::make($config['database']));

