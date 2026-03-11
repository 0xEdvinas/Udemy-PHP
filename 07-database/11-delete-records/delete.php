<?php
require 'database.php';

function deletePost($id)
{
  global $pdo;

  $sql = 'DELETE FROM posts WHERE id = :id';

  $stmt = $pdo->prepare($sql);

  $stmt->execute(['id' => $id]);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['_method'] ?? '' === 'delete') && isset($_POST['id']))
{
  $id = $_POST['id'];
  deletePost($id);
  header('Location: index.php');
  exit;
}


// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

?>