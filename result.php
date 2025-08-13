<?php
declare(strict_types=1);
/**
 * Result Page
 * Displays form submission results
 */

// Start session to access stored data
session_start();

// Check if required session data exists
if (!isset($_SESSION['student_name']) || !isset($_SESSION['favorite_color'])) {
    http_response_code(400);
    die('Invalid request. Please submit the form first.');
}

// Retrieve data from session
$studentName = $_SESSION['student_name'];
$favoriteColor = $_SESSION['favorite_color'];
$serverTime = $_SESSION['server_time'];

// Clear session data
session_unset();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Submission Result</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { max-width: 500px; margin: 0 auto; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Submission Result</h1>
        
        <!-- Display greeting with student name -->
        <p><?php echo "Hello, $studentName!"; ?></p>
        
        <!-- Display favorite color with inline style -->
        <p>Your favorite color is: 
            <span style="color: <?php echo $favoriteColor; ?>">
                <?php echo $favoriteColor; ?>
            </span>
        </p>
        
        <!-- Display server time -->
        <p>Server time at submission: <?php echo $serverTime; ?></p>
        
        <a href="index.php">Back to form</a>
    </div>
</body>
</html>