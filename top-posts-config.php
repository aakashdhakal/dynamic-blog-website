<?php
$conn = new mysqli("localhost", "root", "", "blogs");
// $conn = new mysqli("sql104.epizy.com", "epiz_34036901", "tNH4q0qWuV", "epiz_34036901_users");

$sql = "SELECT id, title, date, thumbnail, author, status ,content, category,likes
        FROM posts 
        WHERE status = '1'
        ORDER BY likes DESC
        LIMIT 3";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
        if (mysqli_num_rows($result) > 0) {
                $top_id = $row["id"];
                $top_title = $row["title"];
                $top_author = $row["author"];
                $top_thumbnail = $row["thumbnail"];
                $top_content = $row["content"];
                $top_category = $row["category"];
                $top_likes = formatNumber($row["likes"]);

                $sql2 = "SELECT profilepic, firstname, lastname FROM users WHERE username = '$top_author'";
                $result2 = mysqli_query($conn, $sql2);
                if (mysqli_num_rows($result2) > 0) {
                        $row2 = mysqli_fetch_assoc($result2);
                        $top_name = $row2["firstname"] . " " . $row2["lastname"];
                }
                include 'top-post.php';
        }
}
