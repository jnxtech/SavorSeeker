<?php
include 'connect.php';

session_start();

// Check if user is logged in
if (!isset($_SESSION['id'])) {
    header('location:login.php');
    exit;
}

$user_id = $_SESSION['id'];
$data = json_decode(file_get_contents('php://input'), true);
$search_term = $data['searchTerm'];


$sql = "INSERT INTO search_history (user_id, search_term, search_count) VALUES (?, ?, 1) ON DUPLICATE KEY UPDATE search_count = search_count + 1";

if ($stmt = $conn->prepare($sql)) {
    
    $stmt->bind_param('is', $user_id, $search_term);

    
    if ($stmt->execute()) {
       
        http_response_code(200);
        echo json_encode(['success' => true]);
    } else {
        
        http_response_code(500);
        echo json_encode(['error' => 'Failed to save search']);
    }
} else {
    
    http_response_code(500);
    echo json_encode(['error' => 'Failed to prepare SQL statement']);
}


$stmt->close();
$conn->close();
?>
