<?php

$conn = new mysqli("localhost", "root", "", "blogs");
// $conn = new mysqli("sql104.epizy.com", "epiz_34036901", "tNH4q0qWuV", "epiz_34036901_users");
$sql = "SELECT username, firstname, lastname, profilepic,followers,bio,id
        FROM users 
        WHERE role = 'author'
        ORDER BY followers DESC
        LIMIT 3";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $author_username = $row["username"];
        $author_firstname = $row["firstname"];
        $author_lastname = $row["lastname"];
        $author_name = $author_firstname . " " . $author_lastname;
        $author_profile = $row["profilepic"];
        $author_followers = formatNumber($row["followers"]);
        $author_bio = $row["bio"];
        $author_id = $row["id"];
        $follower_class = "not-followed";
        $follower_text = "fas fa-user-plus";


        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            if ($username == $author_username) {
                continue;
            }
            $sql1 = "SELECT author_username
                     FROM followers_data
                     WHERE user_username = '$username'";
            $result1 = mysqli_query($conn, $sql1);
            if (mysqli_num_rows($result1) > 0) {
                while ($row1 = mysqli_fetch_assoc($result1)) {;
                    if ($author_username == $row1['author_username']) {
                        $follower_class = "followed";
                        $follower_text = "fas fa-user-check";
                    }
                }
            }
        }

        include 'top-authors.php';
    }
}
