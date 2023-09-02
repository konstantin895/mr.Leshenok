<?php
require_once('boot.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $stmt = get_mysqli()->query("SELECT text, comment FROM confirmentry");
  $participants = $stmt->fetch_all(MYSQLI_ASSOC);

  header('Content-Type: application/json');
  echo json_encode($participants);
  exit();
}
?>