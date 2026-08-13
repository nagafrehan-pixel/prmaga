<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
<title>الدورة الدموية</title>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<style>
body {
    font-family: 'Cairo', Arial, sans-serif;
    background:#f0f8ff;
    text-align:center;
    padding:20px;
}

header {
    background:#ff4d4d;
    color:white;
    padding:20px;
}

h1 { margin-bottom:20px; }

.container {
    display:flex;
    flex-wrap: wrap;
    justify-content:center;
    margin-top:20px;
}

.card {
    background:white;
    border-radius:15px;
    box-shadow:0 0 10px rgba(0,0,0,0.2);
    margin:10px;
    padding:20px;
    width:220px;
    text-align:center;
    transition: transform 0.3s;
}

.card:hover {
    transform:scale(1.05);
}

.card a {
    display:block;
    text-decoration:none;
    color:white;
    background:#ff4d4d;
    padding:10px;
    border-radius:10px;
    font-weight:600;
    margin-top:10px;
}

.card a:hover {
    background:#ff6666;
}
</style>
</head>
<body>

<header>
<h1>الدورة الدموية للإنسان</h1>
<a href="index.php" style="color:white; text-decoration:underline; font-size:16px;">العودة للرئيسية</a>
</header>

<main class="container">

<div class="card">
<h3>الأهداف التعليمية</h3>
<a href="goals.php">اذهب</a>
</div>

<div class="card">
<h3>الاختبار القبلي</h3>
<a href="pre_test.php">اذهب</a>
</div>

<div class="card">
<h3>مقدمة عن الدورة الدموية</h3>
<a href="unit1.php">اذهب</a>
</div>

<div class="card">
<h3>مكونات الدم</h3>
<a href="unit2.php">اذهب</a>
</div>

<div class="card">
<h3>وظيفة القلب</h3>
<a href="unit3.php">اذهب</a>
</div>

<div class="card">
<h3>الدورة الدموية الكبرى</h3>
<a href="unit4.php">اذهب</a>
</div>

<div class="card">
<h3>الدورة الدموية الصغرى</h3>
<a href="unit5.php">اذهب</a>
</div>

<div class="card">
<h3>الاختبار البعدي</h3>
<a href="post_test.php">اذهب</a>
</div>

<div class="card">
<h3>تسجيل الخروج</h3>
<a href="logout.php">خروج</a>
</div>

</main>
</body>
</html>