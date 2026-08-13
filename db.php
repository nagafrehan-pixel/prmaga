<?php
// إعدادات قاعدة البيانات
$servername = "localhost";
$username = "root";      // عادة اسم المستخدم المحلي هو root
$password = "";          // كلمة المرور (اتركها فارغة على XAMPP أو MAMP)
$dbname = "history_site"; // اسم قاعدة البيانات

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// لضمان أن الترميز UTF-8 لجميع الصفحات
$conn->set_charset("utf8");

// --- اختياري: يمكنك تهيئة جدول المستخدمين إذا لم يكن موجود ---
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8";

$conn->query($sql);

?>