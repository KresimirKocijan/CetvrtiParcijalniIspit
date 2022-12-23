<?php

return [
  'driver' => 'mysql',
  'mysql' => [
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'db' => 'algebra_auth',
    'charset' => 'utf8'
  ],
  'sqlite' => [],
  'pgsql' => [],
  'fetch' => PDO::FETCH_OBJ // PDO::FETCH_ASSOC
];