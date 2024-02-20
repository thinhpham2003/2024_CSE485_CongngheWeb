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
            'image' => "https://img.freepik.com/free-photo/cute-domestic-kitten-sits-window-staring-outside-generative-ai_188544-12519.jpg",
            'title' => 'Học viên quốc tế',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
        Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên 
        quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],

        [
            'image' => "https://img.freepik.com/free-photo/cute-domestic-kitten-sits-window-staring-outside-generative-ai_188544-12519.jpg",
            'title' => 'Học 2 quốc tế',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
        Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên 
        quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],

        [
            'image' => "https://img.freepik.com/free-photo/cute-domestic-kitten-sits-window-staring-outside-generative-ai_188544-12519.jpg",
            'title' => 'Học 3 quốc tế',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
        Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên 
        quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],

        [
            'image' => "https://img.freepik.com/free-photo/cute-domestic-kitten-sits-window-staring-outside-generative-ai_188544-12519.jpg",
            'title' => 'Học 4 quốc tế',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
        Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên 
        quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],

        [
            'image' => "https://img.freepik.com/free-photo/cute-domestic-kitten-sits-window-staring-outside-generative-ai_188544-12519.jpg",
            'title' => 'Học 5 quốc tế',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
        Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên 
        quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],

        [
            'image' => "https://img.freepik.com/free-photo/cute-domestic-kitten-sits-window-staring-outside-generative-ai_188544-12519.jpg",
            'title' => 'Học 6 quốc tế',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
        Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên 
        quốc tế.',
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