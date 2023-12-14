<?php
// Set the password
$password = "ouroboros";

// Check if the password is correct
if ($_POST["password"] === $password) {
    // Password is correct, allow access
    header("Location: /");
    exit;
} else {
    // Password is incorrect, display an error message
    echo "Invalid password. Please try again.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Password Protected Page</title>
</head>
<body>
    <h1>Password Protected Page</h1>
    <form method="post">
        <label for="password">Enter password:</label>
        <input type="password" name="password" id="password">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
