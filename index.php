<?php
declare(strict_types=1);
/**
 * Student Portal - Form Page
 * POST form submission
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Student Info Portal</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { max-width: 500px; margin: 0 auto; }
        label { display: block; margin-top: 10px; }
        input, button { padding: 8px; margin-top: 5px; }
    </style>
</head>
<body>
    <h1>Welcome to Student Info Portal</h1>

    <!-- Form using POST method for secure data transmission -->
    <form method="POST" action="process.php">
        <label>Your Name:</label>
        <input type="text" name="student_name" placeholder="Enter your name" required>
        
        <label>Favorite Color:</label>
        <input type="text" name="favorite_color" placeholder="Enter your favorite color" required>
        
        <button type="submit">Submit</button>
    </form>

    <p>Visit our <a href="greet.php">greeting page</a> to test GET parameters.</p>

</body>
</html>