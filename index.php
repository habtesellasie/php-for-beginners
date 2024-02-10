<?php
require 'function.php';
require 'router.php';
require 'Database.php';
$config = require('config.php');

// try {
//     $db = new Database($config['database']);
// } catch (PDOException $e) {
//     die("Database connection failed: " . $e->getMessage());
// }

$db = new Database($config['database']);

$posts = $db->query('select * from posts')->fetchAll();
dd($posts);
