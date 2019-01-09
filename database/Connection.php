<?php

function getConnection($dbName) {
    $config = yaml_parse_file("./config.yml");
    $dbConfig = $config['db'];
    $connection = new mysqli("127.0.0.1", $dbConfig['user'], $dbConfig['password'], $dbName);
    return $connection;
}

