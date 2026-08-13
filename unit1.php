<?php
// اتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "history_site";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title>الوحدة 1: مقدمة عن البرمجة</title>

<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">

<style>
body {
    font-family: 'Cairo', sans-serif;
    margin: 0;
    padding: 0;
    background: #f4f6f7;

    direction: rtl;
    text-align: right;
}

.unit-container {
    max-width: 1000px;
    margin: 50px auto;
    background: rgba(255,255,255,0.95);
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 5px 25px rgba(0,0,0,0.3);
}

.unit-container h1 {
    color: #3498db;
    text-align: center;
    margin-bottom: 30px;
}

/* الموارد */
.resource {
    background: #ecf0f1;
    padding: 15px 20px;
    margin-bottom: 15px;
    border-radius: 10px;
    transition: transform 0.3s;
    text-align: right;
}

.resource:hover {
    transform: scale(1.02);
    background: #d6eaf8;
}

.resource a {
    text-decoration: none;
    font-weight: bold;
    color: #2c3e50;
}

.resource a:hover {
    color: #2980b9;
}

/* زر الرجوع */
.home-btn {
    display: inline-block;
    margin-top: 25px;
    padding: 12px 25px;
    background-color: #3498db;
    color: #fff;
    text-decoration: none;
    border-radius: 8px;
    transition: background 0.3s;
}

.home-btn:hover {
    background-color: #2980b9;
}
</style>
</head>

<body>

<div class="unit-container">

    <h1>الوحدة 1: مقدمة عن البرمجة</h1>

    <div class="resource">
        <p>🎥 فيديو تعليمي: <a href="https://www.youtube.com/playlist?list=PLoP3S2S1qTfBCtTYJ2dyy3mpn7aWAAjdN" target="_blank">كيف تتعلم البرمجة للمبتدئين ببساطة - Professor X</a></p>
    </div>

    <div class="resource">
        <p>📖 مرجع علمي: <a href="https://ar.wikipedia.org" target="_blank">Wikipedia</a></p>
    </div>

    <a href="unit.php" class="home-btn">العودة للوحدات الدراسية</a>

</div>

</body>
</html>