<?php

$conn = new mysqli("localhost", "root", "", "blogs");
// $conn = new mysqli("sql104.epizy.com", "epiz_34036901", "tNH4q0qWuV", "epiz_34036901_users");
$sql = "SELECT id, title, date, thumbnail, author, status ,content, category
        FROM posts 
        WHERE status = '1'
        ORDER BY date DESC
        LIMIT 4";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    if (mysqli_num_rows($result) > 0) {
        $recent_title = $row["title"];
        $recent_author = $row["author"];
        $recent_thumbnail = $row["thumbnail"];
        $recent_content = $row["content"];
        $recent_category = $row["category"];
        $time_ago = getTimeAgo($row["date"]);


        $sql2 = "SELECT profilepic, firstname, lastname FROM users WHERE username = '$recent_author'";
        $result2 = mysqli_query($conn, $sql2);
        if (mysqli_num_rows($result2) > 0) {
            $row2 = mysqli_fetch_assoc($result2);
            $recent_name = $row2["firstname"] . " " . $row2["lastname"];
        }
        include 'recent-post.php';
    }
}
