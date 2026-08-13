<?php
// الاتصال بقاعدة البيانات
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
<title>الوحدات الدراسية - تعلم البرمجة</title>

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

/* الحاوية */
.unit-container {
    max-width: 1000px;
    margin: 50px auto;
    background: rgba(255,255,255,0.95);
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 5px 25px rgba(0,0,0,0.3);
}

/* العنوان */
.unit-container h1 {
    color: #3498db;
    text-align: center;
    margin-bottom: 30px;
}

/* الوحدات */
.unit {
    margin-bottom: 20px;
    padding: 15px 20px;
    background: #ecf0f1;
    border-radius: 10px;
    transition: transform 0.3s;
    text-align: right;
}

.unit:hover {
    transform: scale(1.02);
    background: #d6eaf8;
}

.unit a {
    text-decoration: none;
    font-weight: bold;
    color: #2c3e50;
    display: block;
}

.unit a:hover {
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

    <h1>الوحدات الدراسية - تعلم البرمجة</h1>

    <div class="unit"><a href="unit1.php">الوحدة 1: مقدمة عن البرمجة</a></div>
    <div class="unit"><a href="unit2.php">الوحدة 2: لغات البرمجة الأساسية</a></div>
    <div class="unit"><a href="unit3.php">الهياكل البيانية والخوارزميات: الوحدة 3</a></div>
    <div class="unit"><a href="unit4.php">الوحدة 4: البرمجة الشيئية (OOP)</a></div>
    <div class="unit"><a href="unit5.php">الوحدة 5: تطوير مواقع الويب</a></div>
    <div class="unit"><a href="unit6.php">الوحدة 6: قواعد البيانات SQL و PHP</a></div>
    <div class="unit"><a href="unit7.php">الوحدة 7: مشاريع عملية في البرمجة</a></div>

    <a href="index.php" class="home-btn">العودة للصفحة الرئيسية</a>

</div>

</body>
</html>