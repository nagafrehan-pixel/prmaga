<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title>الأهداف التعليمية - تعلم البرمجة</title>

<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">

<style>
body {
    font-family: 'Cairo', sans-serif;
    margin: 0;
    padding: 0;
    background: linear-gradient(135deg, #1f1c2c, #928dab);
    color: #fff;

    direction: rtl;
    text-align: right;
}

.container {
    max-width: 1000px;
    margin: 40px auto;
    padding: 20px;
}

h1 {
    text-align: center;
    font-size: 36px;
    margin-bottom: 40px;
    color: #ffcc00;
}

.goal-card {
    background: rgba(255,255,255,0.05);
    border-radius: 12px;
    padding: 25px;
    margin-bottom: 30px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.5);
    transition: transform 0.3s, box-shadow 0.3s;
}

.goal-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.7);
}

.goal-card h2 {
    color: #00bfff;
    margin-bottom: 15px;
}

.goal-card ul {
    list-style: none;
    padding-right: 0;
}

.goal-card ul li {
    margin-bottom: 8px;
    line-height: 1.7;
}

/* زر الرجوع */
.btn-home {
    display: inline-block;
    padding: 12px 25px;
    margin-top: 20px;
    background: #00bfff;
    color: #fff;
    border-radius: 8px;
    text-decoration: none;
    font-weight: bold;
    transition: background 0.3s;
}

.btn-home:hover {
    background: #00ffcc;
}
</style>
</head>

<body>

<div class="container">

    <h1>الأهداف التعليمية - تعلم البرمجة</h1>

    <div class="goal-card">
        <h2>الأهداف المعرفية (Cognitive)</h2>
        <ul>
            <li>فهم أساسيات البرمجة ومفاهيمها الأساسية مثل المتغيرات، الشروط والحلقات.</li>
            <li>التعرف على لغات البرمجة المختلفة واستخداماتها.</li>
            <li>تفسير كيفية عمل البرامج والخوارزميات.</li>
            <li>فهم بنية التطبيقات والمواقع البرمجية وعلاقتها بالمستخدم.</li>
            <li>تحليل الأخطاء وتصحيحها أثناء تطوير البرامج.</li>
        </ul>
    </div>

    <div class="goal-card">
        <h2>الأهداف المهارية (Psychomotor)</h2>
        <ul>
            <li>كتابة برامج بسيطة بلغة البرمجة المختارة.</li>
            <li>تصميم صفحات ويب باستخدام HTML وCSS وJavaScript.</li>
            <li>إنشاء قواعد بيانات وربطها مع تطبيقات بسيطة.</li>
            <li>اختبار البرامج وتشخيص الأخطاء وتصحيحها.</li>
        </ul>
    </div>

    <div class="goal-card">
        <h2>الأهداف الوجدانية (Affective)</h2>
        <ul>
            <li>تبني السلوكيات الصحيحة أثناء تعلم البرمجة مثل الصبر والمثابرة.</li>
            <li>العمل الجماعي وحل المشكلات ضمن فريق تطوير.</li>
            <li>تقدير أهمية البرمجة في حل المشكلات اليومية وتطوير المجتمع.</li>
        </ul>
    </div>

    <a href="index.php" class="btn-home">العودة للصفحة الرئيسية</a>

</div>

</body>
</html>