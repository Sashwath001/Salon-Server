<?php
echo "I am here";

// Check if the request is a POST request (form submission)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        require_once "linkdb.php";

        $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT);

        $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$username, $hashedPwd, $email]);

        $pdo = null;
        $stmt = null;

        
        header("Location: ./lindb.html");
        exit(); 
    } catch (PDOException $e) {
       
        error_log("Query failed: " . $e->getMessage());
        die("An error occurred during registration. Please try again later.");
    }
} else {
    // Redirect if the request is not a POST request
    header("Location: ../lindb.html");
    exit(); // Ensure no further code runs after redirection
}
?>
