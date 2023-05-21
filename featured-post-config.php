<?php

$conn = new mysqli("localhost", "root", "", "blogs");
// $conn = new mysqli("sql104.epizy.com", "epiz_34036901", "tNH4q0qWuV", "epiz_34036901_users");
$sql = "SELECT id, title, date, thumbnail, content, author,category
        FROM posts 
        WHERE status = '1' AND featured = '1'
        LIMIT 1";
$result = mysqli_query($conn, $sql);
$main_featured = false;

$row = mysqli_fetch_assoc($result);
if (mysqli_num_rows($result) > 0) {
    $featured_title = $row["title"];
    $featured_author = $row["author"];
    $date = $row["date"];
    $featured_date = date("F j, Y", strtotime($date));
    $featured_category = $row["category"];
    $featured_thumbnail = $row["thumbnail"];
    $featured_content = $row["content"];
    $sql2 = "SELECT profilepic, firstname, lastname FROM users WHERE username = '$featured_author'";
    $result2 = mysqli_query($conn, $sql2);
    if (mysqli_num_rows($result2) > 0) {
        $row2 = mysqli_fetch_assoc($result2);
        $featured_name = $row2["firstname"] . " " . $row2["lastname"];
        $featured_profile = $row2["profilepic"];
    }
    include 'featured-posts.php';
}
