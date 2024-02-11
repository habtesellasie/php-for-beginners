<?php
require 'function.php';
require 'Database.php';
require 'router.php';
$config = require('config.php');

// try {
//     $db = new Database($config['database']);
// } catch (PDOException $e) {
//     die("Database connection failed: " . $e->getMessage());
// }

$db = new Database($config['database']);

$posts = $db->query('select * from posts')->fetchAll();
dd($posts);
