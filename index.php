<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title>موقع تعلم البرمجة</title>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">

<style>
body {
    font-family: 'Cairo', sans-serif;
    margin: 0;
    padding: 0;
    background: linear-gradient(120deg, #1f1c2c, #928dab);
    color: #fff;

    direction: rtl;
    text-align: right;
}

/* القائمة العلوية */
nav {
    background-color: #ff5722;
    padding: 15px 0;
    display: flex;

    flex-direction: row;        /* مهم */
    justify-content: flex-end;  /* يبدأ من اليمين */
    gap: 40px;

    padding-right: 40px;
}

nav a {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    font-size: 18px;
}

nav a:hover {
    text-decoration: underline;
}

/* المحتوى */
.container {
    max-width: 1200px;
    margin: 40px auto;
    padding: 20px;
}

.header {
    text-align: center;
    margin-bottom: 50px;
}

.header h1 {
    font-size: 42px;
    color: #ffcc00;
    margin-bottom: 10px;
}

.header p {
    font-size: 20px;
    line-height: 1.6;
    color: #e0e0e0;
}

/* الكروت */
.cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 25px;
}

.card {
    background: rgba(255,255,255,0.05);
    border-radius: 15px;
    padding: 25px;
    text-align: center;
    box-shadow: 0 4px 20px rgba(0,0,0,0.5);
    transition: transform 0.3s, box-shadow 0.3s;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.7);
}

.card h3 {
    color: #00bfff;
    margin-bottom: 15px;
}

.card a {
    display: inline-block;
    margin-top: 15px;
    padding: 10px 20px;
    background: #00bfff;
    color: #fff;
    border-radius: 8px;
    text-decoration: none;
    font-weight: bold;
    transition: background 0.3s;
}

.card a:hover {
    background: #00ffcc;
}

/* الفوتر */
footer {
    text-align: center;
    margin: 50px 0 20px;
    color: #ccc;
}
</style>
</head>

<body>

<!-- القائمة العلوية (الرئيسية أولاً) -->
<nav>
    <a href="index.php">الرئيسية</a>
    <a href="goals.php">الأهداف التعليمية</a>
    <a href="unit.php">الوحدات الدراسية</a>
    <a href="pre_test.php">الاختبار القبلي</a>
    <a href="post_test.php">الاختبار البعدي</a>
    <a href="register.php">تسجيل الدخول / إنشاء حساب</a>
</nav>

<div class="container">

    <div class="header">
        <h1>مرحباً بك في موقع تعلم البرمجة!</h1>
        <p>
            هذا الموقع مصمم لتعلم أساسيات البرمجة، تصميم التطبيقات والمواقع، وفهم الخوارزميات بشكل تفاعلي.<br>
            استكشف الوحدات التعليمية، اختبر مهاراتك، وابدأ رحلتك البرمجية الآن!
        </p>
    </div>

    <div class="cards">

        <div class="card">
            <h3>الأهداف التعليمية</h3>
            <p>تعرف على الأهداف المعرفية، المهارية، والسلوكية لمهارات البرمجة.</p>
            <a href="goals.php">عرض الأهداف</a>
        </div>

        <div class="card">
            <h3>الوحدات الدراسية</h3>
            <p>استكشف الوحدات التعليمية خطوة بخطوة، من المفاهيم الأساسية إلى المشاريع العملية.</p>
            <a href="unit.php">عرض الوحدات</a>
        </div>

        <div class="card">
            <h3>الاختبار القبلي</h3>
            <p>اختبر معلوماتك الأولية حول البرمجة لتحديد مستواك الحالي.</p>
            <a href="pre_test.php">ابدأ الاختبار</a>
        </div>

        <div class="card">
            <h3>الاختبار البعدي</h3>
            <p>قم بالاختبار بعد إكمال الوحدات لتقييم مهاراتك وفهمك للمفاهيم.</p>
            <a href="post_test.php">ابدأ الاختبار</a>
        </div>

        <div class="card">
            <h3>إنشاء حساب / تسجيل الدخول</h3>
            <p>سجل حسابك بسهولة وابدأ التعلم فوراً بدون تعقيدات.</p>
            <a href="register.php">تسجيل الدخول</a>
        </div>

    </div>

</div>

<footer>
    جميع الحقوق محفوظة © موقع تعلم البرمجة
</footer>

</body>
</html>