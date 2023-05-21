<?php

$conn = new mysqli("localhost", "root", "", "blogs");
// $conn = new mysqli("sql104.epizy.com", "epiz_34036901", "tNH4q0qWuV", "epiz_34036901_users");
$sql = "SELECT id, title, date, thumbnail, author, status, likes 
        FROM posts 
        WHERE status = '1'
        AND featured = '0'
        LIMIT 3";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    if (mysqli_num_rows($result) > 0) {
        $featured_title = $row["title"];
        $featured_author = $row["author"];
        $featured_date = $row["date"];
        $featured_thumbnail = $row["thumbnail"];
        $sql2 = "SELECT profilepic, firstname, lastname FROM users WHERE username = '$featured_author'";
        $result2 = mysqli_query($conn, $sql2);
        if (mysqli_num_rows($result2) > 0) {
            $row2 = mysqli_fetch_assoc($result2);
            $list_name = $row2["firstname"] . " " . $row2["lastname"];
        }
        include 'post-lists.php';
    }
}
