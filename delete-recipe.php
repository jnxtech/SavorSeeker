<?php

include 'connect.php';

session_start();

if (!isset($_SESSION['id'])) {
    header('location:login.php');
    exit;
}

$json = file_get_contents('php://input');
$data = json_decode($json, true);
$id = $data['id'];


$sql = "DELETE FROM recipes WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);
$result = $stmt->execute();

if ($result) {
  echo json_encode(['success' => true]);
} else {
  echo json_encode(['success' => false]);
}

$conn->close();

?>