<?php

require_once 'functions.php';
require_once 'Database.php';
// require_once 'router.php';

// Connexion à la base de données
$config = require_once('config.php');
$db = new Database($config['database'], 'root', '03061994');

// Requête sécurisée

$id = $_GET['id'];
$query = 'select * from posts where id = ?';
$posts = $db->query($query, [$id])->fetch(PDO::FETCH_ASSOC);

dd($posts[]);

// foreach ($posts as $post) {
//     echo "<hgroup><h2>" . $post['title'] . '</h2><p>écrit par ' . $post['author'] . '</p></hgroup>';
//     echo "<p>" . $post['content'] . '</p>';
// }