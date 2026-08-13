<?php
// التحقق من وصول البيانات عبر POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // إجابات المستخدم
    $q1 = $_POST['q1'] ?? '';
    $q2 = $_POST['q2'] ?? '';
    $q3 = $_POST['q3'] ?? '';

    // الإجابات الصحيحة
    $answers = [
        'q1' => 'أ',
        'q2' => 'أ',
        'q3' => 'أ'
    ];

    // حساب النتيجة
    $score = 0;
    foreach ($answers as $key => $correct) {
        if (isset($$key) && $$key === $correct) {
            $score++;
        }
    }
    $total = count($answers);
} else {
    // إعادة التوجيه إذا تم الوصول للصفحة بدون اختبار
    header("Location: quiz.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
<title>نتيجة الاختبار - موقع البرمجة</title>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<style>
body {
    font-family: 'Cairo', sans-serif;
    margin: 0;
    padding: 0;
    background: linear-gradient(120deg, #2c3e50, #3498db);
    color: #fff;
}
.container {
    max-width: 700px;
    margin: 80px auto;
    padding: 30px;
    background: rgba(0,0,0,0.7);
    border-radius: 15px;
    text-align: center;
    box-shadow: 0 5px 20px rgba(0,0,0,0.5);
}
h1 {
    color: #ffcc00;
    margin-bottom: 25px;
}
p {
    font-size: 22px;
    margin: 15px 0;
    color: #00ffff;
}
.correct {
    color: #2ecc71;
    font-weight: bold;
}
.incorrect {
    color: #e74c3c;
    font-weight: bold;
}
.btn-home {
    display: inline-block;
    margin-top: 25px;
    padding: 12px 25px;
    background: #e67e22;
    color: #fff;
    border-radius: 8px;
    text-decoration: none;
    font-weight: bold;
    transition: background 0.3s;
}
.btn-home:hover {
    background: #d35400;
}
</style>
</head>
<body>

<div class="container">
    <h1>نتيجة الاختبار</h1>
    <p>لقد حصلت على <span class="correct"><?php echo $score; ?></span> من <span class="correct"><?php echo $total; ?></span></p>

    <h2>التفاصيل:</h2>
    <p>السؤال 1: <?php echo ($q1 === 'أ') ? "<span class='correct'>صحيح</span>" : "<span class='incorrect'>خطأ</span>"; ?></p>
    <p>السؤال 2: <?php echo ($q2 === 'أ') ? "<span class='correct'>صحيح</span>" : "<span class='incorrect'>خطأ</span>"; ?></p>
    <p>السؤال 3: <?php echo ($q3 === 'أ') ? "<span class='correct'>صحيح</span>" : "<span class='incorrect'>خطأ</span>"; ?></p>

    <a href="index.php" class="btn-home">العودة للصفحة الرئيسية</a>
</div>

</body>
</html>