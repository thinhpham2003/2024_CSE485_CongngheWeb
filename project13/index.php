<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Danh sách khóa học</title>
    <link rel="stylesheet" href="indexcss.css">
    <style>
    </style>
</head>
<body>
<div class="courses-container">
    <?php
    $courses = [
        [
            'image' => "https://aptech.vn/wp-content/uploads/2024/01/banner-1900x750-1.png.webp",
            'title' => 'LẬP TRÌNH VIÊN QUỐC TẾ',
            'description' => 'Chương trình đào tạo chuẩn quốc tế và toàn diện. Phù hợp với học sinh tốt nghiệp THPT, sinh viên và người định hướng theo nghề lập trình chuyên nghiệp.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],

        [
            'image' => "https://aptech.vn/wp-content/uploads/2023/08/banner-1920x750_ITT.png.webp",
            'title' => 'LẬP TRÌNH WEB FULLSTACK',
            'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người chuyển nghề. Trang bị từ frontend đến backend, xây dựng website hoàn chỉnh sau khóa học.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],

        [
            'image' => "https://aptech.vn/wp-content/uploads/2021/05/lap-trinh-java.png.webp",
            'title' => 'LẬP TRÌNH JAVA FULLSTACK',
            'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao bằng Java, các ứng dụng doanh nghiệp sử dụng J2EE, Servlet, JSP, Spring Framework, EJB,...',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],

        [
            'image' => "https://aptech.vn/wp-content/uploads/2021/05/lap-trinh-java.png.webp",
            'title' => 'LẬP TRÌNH PHP & LARAVEL',
            'description' => 'PHP là một trong các ngôn ngữ thiết kế web mạnh nhất. Khóa học trang bị kỹ năng xây dựng web hoàn chỉnh sử dụng PHP kết hợp Laravel Framework.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],

        [
            'image' => "https://aptech.vn/wp-content/uploads/2021/05/lap-trinh-.net_.png.webp",
            'title' => 'KHOÁ HỌC LẬP TRÌNH .NET',
            'description' => 'Phát triển ứng dụng web sử dụng nền tảng ASP.NET Core MVC. Để học tốt khóa học yêu cầu học viên đã có kiến thức C# và Frontend.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],

        [
            'image' => "https://aptech.vn/wp-content/uploads/2021/06/lap-trinh-csdl-voi-sql.png.webp",
            'title' => 'LẬP TRÌNH SQL SEVER',
            'description' => 'Trang bị những kiến thức nền tảng vững chắc về SQL Server như các kỹ thuật: lọc dữ liệu, phân tích, thiết kế và quản trị cơ sở dữ liệu,...',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
    ];

    $array_length = sizeof($courses);
    if($array_length > 6) $array_length = 6;

    for($i=0; $i<$array_length; $i++) {
        echo '<div class = "course" >';
        echo '<img src="' . $courses[$i]['image'] . '" >';
        echo '<h2>' . $courses[$i]['title'] . '</h2>';
        echo '<p>' . $courses[$i]['description'] . '</p>';
        echo '<p><i class="fas fa-gift" style="color:darkred"></i> Học phí: ' . $courses[$i]['fee'] . '</p>';
        echo '<p><i class="fas fa-clock" style="color:darkred"></i> Khải giảng: ' . $courses[$i]['start_date'] . '</p>';
        echo '<p><i class="fas fa-bookmark" style="color:darkred"></i> Thời lượng: ' . $courses[$i]['duration'] . '</p>';
        echo '</div>';
    }
    ?>
</div>
</body>
</html>