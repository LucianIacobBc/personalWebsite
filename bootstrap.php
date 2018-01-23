<?php

require "database/Connect.php";
require "database/QueryCreator.php";
require "Person.php";



return $result = new QueryCreator(ConnectDB::CreateDBConnection());
