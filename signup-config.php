<?php
session_start();

// $db = new mysqli("sql104.epizy.com", "epiz_34036901", "tNH4q0qWuV", "epiz_34036901_users");
$db = new mysqli("localhost", "root", "", "blogs");
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

if (isset($_POST["username"])) {
    $stmt = $db->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $_POST["username"]);
    $stmt->execute();
    if ($stmt->get_result()->num_rows > 0) {
        echo "exists";
    } else {
        echo "not_exists";
    }
}

if (isset($_POST["username"], $_POST["password"], $_POST["email"], $_POST["gender"], $_POST["dob"], $_POST["first_name"], $_POST["last_name"])) {
    $target_file = "images/noimage.png";
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $role = "user";
    if (isset($_FILES["profile_picture"]) && $_FILES["profile_picture"]["error"] == 0) {
        $target_dir = "images/";
        $target_file = $target_dir . uniqid('', true) . '.' . strtolower(pathinfo($target_dir . basename($_FILES["profile_picture"]["name"]), PATHINFO_EXTENSION));
        if (!getimagesize($_FILES["profile_picture"]["tmp_name"])) {
            die("<script>alert('File is not an image!')</script>");
        }
        if ($_FILES["profile_picture"]["size"] > 500000) {
            die("<script>alert('File is too large!')</script>");
        }
        if (!move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)) {
            die("<script>alert('Error uploading file!')</script>");
        }
    }
    $sql = "INSERT INTO users (username, password, email, gender, dateofbirth, profilepic, firstname, lastname, role) VALUES (?, ?, ?, ?, ?, ?, ?, ?,?)";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("sssssssss", $_POST["username"], $password, $_POST["email"], $_POST["gender"], $_POST["dob"], $target_file, $_POST["first_name"], $_POST["last_name"], $role);
    if ($stmt->execute()) {
        echo "<script>alert('Account created successfully!')</script>";
        header("Location: login.php");
    } else {
        echo "<script>alert('Error creating account!')</script>";
    }
}
