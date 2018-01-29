<?php

require "database/Connect.php";
require "database/QueryCreator.php";
require "Person.php";
require "Router.php";
require "Request.php";
require "Skill.php";
require "MemberType.php";

$config = require "config.php";


return $result = new QueryCreator(ConnectDB::CreateDBConnection($config));
