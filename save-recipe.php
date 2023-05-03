<?php

include 'connect.php';

session_start();

if (!isset($_SESSION['id'])) {
    header('location:login.php');
    exit;
}



$data = json_decode(file_get_contents("php://input"), true);
$recipe = $data["recipe"];

$user_id = $_SESSION['id'];
$label = mysqli_real_escape_string($conn, $recipe["label"]);
$image = mysqli_real_escape_string($conn, $recipe["image"]);
$url = mysqli_real_escape_string($conn, $recipe["url"]);
$ingredients = mysqli_real_escape_string($conn, json_encode($recipe["ingredients"]));

$query = "INSERT INTO recipes (user_id, label, image, url, ingredients) VALUES ('$user_id', '$label', '$image', '$url', '$ingredients')";

if (mysqli_query($conn, $query)) {
  $response = [
    "success" => true,
    "message" => "Recipe saved successfully",
  ];
} else {
  $response = [
    "success" => false,
    "message" => "Error: " . mysqli_error($conn),
  ];
}

mysqli_close($conn);

echo json_encode($response);

?>
