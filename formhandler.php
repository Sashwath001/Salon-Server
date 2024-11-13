<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $C_Name = $_POST["C_Name"] ?? null;
    $Mobile_no = $_POST["Mobile_no"] ?? null;
    $S_Name = $_POST["S_Name"] ?? null;
    $Service_1 = $_POST["Service_1"] ?? null;
    $Service_2 = $_POST["Service_2"] ?? null;
    $Service_3 = $_POST["Service_3"] ?? null;
    $Service_4 = $_POST["Service_4"] ?? null;
    $Date_1 = $_POST["Date_1"] ?? null;
    $Time_1 = $_POST["Time_1"] ?? null;

    if ($Date_1 === null || $Time_1 === null) {
        die("Error: Date_1 and Time_1 cannot be null");
    }

    try {
        require_once "Link.php";

        // Display connection success message
        echo "Connected successfully to the database!<br>";

        $query = "INSERT INTO salon_53 (C_Name, Mobile_no, S_Name, Service_1, Service_2, Service_3, Service_4, Date_1, Time_1) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $stmt = $pdo->prepare($query);

        if ($stmt->execute([$C_Name, $Mobile_no, $S_Name, $Service_1, $Service_2, $Service_3, $Service_4, $Date_1, $Time_1])) {
            echo "Registration successful!<br>";
        } else {
            echo "An error occurred during registration. Please try again later.<br>";
        }

        $pdo = null;
        $stmt = null;

    } catch (PDOException $e) {
        error_log("Query failed: " . $e->getMessage());
        die("An error occurred during registration: " . $e->getMessage());
    }
} else {
    header("Location: ./index.php");
    exit();
}
?>

