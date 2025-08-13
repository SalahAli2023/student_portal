<?php
declare(strict_types=1);
/**
 * Greeting Page
 * Demonstrates GET parameter handling
 */

// Using GET for this page as it's a simple, non-sensitive request
// GET is appropriate here because:
// 1. No sensitive data is being transmitted
// 2. The request is idempotent (no side effects)
// 3. The URL can be bookmarked or shared

$name = htmlspecialchars($_GET['name'] ?? 'Guest');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Greeting Page</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
    </style>
</head>
<body>
    <h1>Greeting Page</h1>
    
    <!-- Display greeting based on GET parameter -->
    <p><?php echo "Hello, $name!"; ?></p>
    
    <form method="GET">
        <label>Enter your name:</label>
        <input type="text" name="name" placeholder="Your name">
        <button type="submit">Greet</button>
    </form>
    
    <p>Try these links:</p>
    <ul>
        <li><a href="greet.php?name=Ahmed">Greet Ahmed</a></li>
        <li><a href="greet.php">Greet Guest</a></li>
    </ul>
    
    <a href="index.php">Back to main form</a>
</body>
</html>