<?php

require_once __DIR__ . '/../app/config/Database.php';

$db = new Database();

echo $db->testConnection();
