<?php

require __DIR__.'/vendor/autoload.php';


use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$factory = (new Factory)->withServiceAccount(__DIR__ . '/includes/ogads--postback-firebase-adminsdk-jk71b-228ba52743.json')->withDatabaseUri('https://ogads--postback-default-rtdb.firebaseio.com/')->createDatabase();



?>