<?php
session_start();
echo "<script>console.log('ERROR')</script>";

$db = new mysqli("localhost", "root", "", "blogs");
// $db = new mysqli("sql104.epizy.com", "epiz_34036901", "tNH4q0qWuV", "epiz_34036901_users");

if (!isset($_SESSION["username"])) {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $stmt = $db->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user["password"])) {
                $_SESSION["username"] = $username;
                $_SESSION["profilepic"] = $user["profilepic"];
                header("Location: index.php");
                echo "<script>console.log('OK')</script>";
            } else {
                echo "<script>console.log('ERROR')</script>";
            }
        } else {
            echo "<script>console.log('ERROR')</script>";
        }
    }
} else {
    $_SESSION = array();
    session_destroy();
    header("Location: index.php");
    exit();
}
