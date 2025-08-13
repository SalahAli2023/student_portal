<?php
declare(strict_types=1);
/**
 * Student Portal - Process Page
 * Handles form submission and demonstrates:
 * - POST data handling
 * - Server time display
 * - HTTP redirects
 * - PSR-12 coding standards
 */

// TODO 1: Capture and sanitize POST data
$studentName = htmlspecialchars($_POST['student_name'] ?? '');
$favoriteColor = htmlspecialchars($_POST['favorite_color'] ?? '');

// Validate required fields
if (empty($studentName) || empty($favoriteColor)) {
    // Return HTTP 400 if validation fails
    http_response_code(400);
    die('Name and favorite color are required fields.');
}

// TODO 2: Prepare data for the result page
session_start();
$_SESSION['student_name'] = $studentName;
$_SESSION['favorite_color'] = $favoriteColor;
$_SESSION['server_time'] = date('Y-m-d H:i:s');

// TODO 3: Redirect to result page with 302 status code
// Using POST with redirect (PRG pattern) prevents form resubmission
header("Location: result.php", true, 302);
exit();