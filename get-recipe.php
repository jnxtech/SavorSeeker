<?php

include 'connect.php';

session_start();

$user_id = $_SESSION['id'];

if (!isset($user_id)) {
    header('location:login.php');
}

$sql = "SELECT * FROM recipes WHERE user_id = '$user_id'";
$result = $conn->query($sql);

$recipes = [];

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $recipes[] = [
      'id' => $row['id'],
      'label' => $row['label'],
      'image' => $row['image'],
      'url' => $row['url'],
      'ingredients' => $row['ingredients'],
    ];
  }
}

// Return the recipes as a JSON response
header('Content-Type: application/json');
echo json_encode($recipes);

$conn->close();

?>
