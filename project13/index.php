<!-- courses.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khóa học</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include 'data.php';
// Hiển thị danh sách khóa học
$cout = 0;
echo '<div class = "coursefull">';
foreach ($courses as $course) {
    echo '<div class="course">';
    echo '<img src="img.jfif">';
    echo '<h2>' . $course['title'] . '</h2>';
    echo '<p>' . $course['description'] . '</p>';
    echo '<p><i class="fas fa-gift"></i>Học phí: ' . $course['fee'] . '</p>';
    echo '<p><i class="fas fa-clock"></i>Khải giảng: ' . $course['start_date'] . '</p>';
    echo '<p><i class="fas fa-bookmark"></i>Thời lượng: ' . $course['duration'] . '</p>';
    echo '</div>';
    $cout++;
    if ($cout==6) break;
}
echo '</div>';
?>
</body>
</html>
