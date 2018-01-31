<?php

use App\Core\App;

App::bind ('config',  require "config.php");

App::bind('database', new QueryCreator(ConnectDB::CreateDBConnection(App::get('config'))));
