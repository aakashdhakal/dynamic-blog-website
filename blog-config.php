<?php

$conn = new mysqli("localhost", "root", "", "blogs");

// Query to get 3 recent posts
$sql = "SELECT id, title, date, likes, thumbnail, content, author, status 
        FROM posts 
        WHERE status = '1' 
        ORDER BY date DESC 
        LIMIT 3";
$result = mysqli_query($conn, $sql);

// Loop through the result set and display each recent post
while ($row = mysqli_fetch_assoc($result)) {
    $recent_title = $row["title"];
    $recent_content = $row["content"];
    $recent_author = $row["author"];
    $recent_date = $row["date"];
    $recent_thumbnail = $row["thumbnail"];
    $sql2 = "SELECT profilepic, firstname, lastname FROM users WHERE username = '$recent_author'";
    $result2 = mysqli_query($conn, $sql2);
    if (mysqli_num_rows($result2) > 0) {
        $row2 = mysqli_fetch_assoc($result2);
        $recent_profile_pic = $row2["profilepic"];
        $recent_name = $row2["firstname"] . " " . $row2["lastname"];
    }

    include 'includes/recent_blogs.php';

    // Query to get the author's profile pic and name

}
