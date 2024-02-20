<!-- courses.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khóa học</title>
    <link rel="stylesheet" >
    <style>
        /* Thêm các định kiểu CSS của bạn ở đây */
        .course {
            background-color: #f9f9f9;
            padding: 10px;
            margin-bottom: 20px;
            width: 350px;
        }
        .course h2 {
            color: #333;
            font-family: Arial;
            font-size: 20px;
        }
        .course p {
            color: #666;
        }
        .images{
            width: 350px;
            height: 150px;
        }

    </style>
</head>
<body>
<?php
// Dữ liệu khóa học lưu động trong mảng
$courses = [
    [
        'title' => 'Học viên quốc tế',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm'
    ],
    // Thêm các khóa học khác vào đây
];
$courses = [
    [   'image' => '<img class="images" src="aptech.png" alt="Logo của Aptech">',
        'title' => 'Lập trình viên quốc tế',
        'description' => 'Chương trình đào tạo chuẩn quốc tế và toàn diên.
         Phù hợp với học sinh tốt nghiệp THPT, sinh viên và người định hướng theo 
         nghề lập trình chuyên nghiệp',
        'fee' => 'Học bổng khoảng 15.000.000VNĐ',
        'start_date' => 'Khai giảng: 2/2024',
        'duration' => 'Thời lượng 2-2.5 năm',
        ],
    ['title' => 'LẬP TRÌNH WEB FULLSTACK',
        'description' => 'Khóa học phù hợp với người bắt đầu lập trình
        hoặc người chuyển nghề. Trang bị từ frontend đến backend, 
        xây dựng website hoàn chỉnh sau khóa học',
        'fee' => 'Ưu đãi giảm 15% học phí',
        'start_date' => 'Khai giảng 2/2024',
        'duration' => 'Thời lượng 6 tháng',
        'image' => '<img class="images" src="img/WebPHP.png" alt="Logo của Aptech">'],
    ['title' => 'LẬP TRÌNH JAVA FULLSTACK',
        'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao
        bằng Java, các ứng dụng doanh nghiệp sử dụng J2EE, JSP, Spring Framework, EJB...',
        'fee' => 'Ưu đãi giảm 15% học phí',
        'start_date' => 'Khai giảng 2/2024',
        'duration' => 'Thời lượng: 236 giờ',
        'image' => '<img class="images" src="img/Java.png" alt="Logo của Aptech">'],
    ['title' => 'Lập trình PHP',
        'description' => 'PHP là một trong những ngôn ngữ thiết ế web mạnh nhất
    . KHóa học trang bị kỹ năng xây dựng web hoàn chỉnh sử dụng PHP kết hợp Laravel Framework',
        'fee' => 'Học phí: 9.600.000',
        'start_date' => 'Khai giảng 2/2024',
        'duration' => 'Thời lượng: 236 giờ',
        'image' => '<img class="images" src="img/PHP.png" alt="Logo của Aptech">'],
    ['title' => 'Khóa học lập trình .Net',
        'description' => 'PHP là một trong những ngôn ngữ thiết ế web mạnh nhất
    . KHóa học trang bị kỹ năng xây dựng web hoàn chỉnh sử dụng PHP kết hợp Laravel Framework',
        'fee' => 'Học phí: 9.600.000',
        'start_date' => 'Khai giảng 2/2024',
        'duration' => 'Thời lượng 6 tháng',
        'image' => '<img class="images" src="img/NET.png" alt="Logo của Aptech">'],
    ['title' => 'Lập trình SQL',
        'description' => 'PHP là một trong những ngôn ngữ thiết ế web mạnh nhất
    . KHóa học trang bị kỹ năng xây dựng web hoàn chỉnh sử dụng PHP kết hợp Laravel Framework',
        'fee' => 'Học phí: 9.600.000',
        'start_date' => 'Khai giảng 2/2024',
        'duration' => 'Thời lượng 6 tháng',
        'image' => '<img class="images" src="img/Sql.png " alt="Mô tả hình ảnh">'],
];
// Hiển thị danh sách khóa học
echo '<table>';
$index = 0;
for ($row = 0; $row < 2; $row++) {
    echo '<tr>';
    for ($col = 0; $col < 3; $col++) {
        echo '<td>';
        if (isset($courses[$index])) {
            $course = $courses[$index];
            echo '<div class="course">';
            echo $course['image'];
            echo '<h2>' . $course['title'] . '</h2>';
            echo '<p>' . $course['description'] . '</p>';
            echo '<p>Học phí: ' . $course['fee'] . '</p>';
            echo '<p>Khải giảng: ' . $course['start_date'] . '</p>';
            echo '<p>Thời lượng: ' . $course['duration'] . '</p>';
            echo '</div>';
            $index++;
        }
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>
</body>
</html>

