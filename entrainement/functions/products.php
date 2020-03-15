<?php
require_once __DIR__ . "/db.php";

function getProducts(): array
{
  $pdo = getPdo();

  $stmt = $pdo->query("SELECT * FROM produits WHERE visible=1");
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}