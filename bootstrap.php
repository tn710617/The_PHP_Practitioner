<?php
require_once 'database/Connection.php';
require_once 'database/QueryBuilder.php';

Connection::make();
return new QueryBuilder(Connection::make());
