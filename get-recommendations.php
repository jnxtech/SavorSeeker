<?php
include 'connect.php';
session_start();

$user_id = $_SESSION['id'];

if (!isset($user_id)) {
    header('location:login.php');
    exit();
}

// Fetch favorite cuisine types
$query = "SELECT cuisine_type FROM users WHERE id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);
$favoriteCuisineTypes = explode(",", $row["cuisine_type"]);

// Fetch frequently saved recipes
$recipesQuery = "SELECT label, SUM(save_count) as total_save_count FROM recipes WHERE user_id = ? GROUP BY label ORDER BY total_save_count DESC, label ASC LIMIT 5";
$recipesStmt = mysqli_prepare($conn, $recipesQuery);
mysqli_stmt_bind_param($recipesStmt, "i", $user_id);
mysqli_stmt_execute($recipesStmt);
$recipesResult = mysqli_stmt_get_result($recipesStmt);
$savedRecipes = mysqli_fetch_all($recipesResult, MYSQLI_ASSOC);

// Fetch frequently searched words
$searchQuery = "SELECT search_term, SUM(search_count) as total_search_count FROM search_history WHERE user_id = ? GROUP BY search_term ORDER BY total_search_count DESC, search_term ASC LIMIT 5";
$searchStmt = mysqli_prepare($conn, $searchQuery);
mysqli_stmt_bind_param($searchStmt, "i", $user_id);
mysqli_stmt_execute($searchStmt);
$searchResult = mysqli_stmt_get_result($searchStmt);
$searchHistory = mysqli_fetch_all($searchResult, MYSQLI_ASSOC);

$recommendations = [
  'favoriteCuisineTypes' => $favoriteCuisineTypes,
  'frequentlySavedMenus' => array_column($savedRecipes, 'label'),
  'frequentlySearchedWords' => array_column($searchHistory, 'search_term'),
];

header("Content-Type: application/json");


echo json_encode($recommendations);

?>
