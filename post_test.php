<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title>الاختبار البعدي - تعلم البرمجة</title>

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

.container {
    max-width: 900px;
    margin: 50px auto;
    padding: 20px;
}

h1 {
    text-align: center;
    font-size: 36px;
    color: #ffcc00;
    margin-bottom: 40px;
}

/* الفورم */
form {
    background: rgba(255,255,255,0.05);
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.5);
}

/* الأسئلة */
.question {
    margin-bottom: 25px;
}

.question p {
    font-size: 20px;
    margin-bottom: 10px;
    color: #00ffff;
}

/* الاختيارات */
.options label {
    display: block;
    margin-bottom: 8px;
    cursor: pointer;
}

/* الزر */
button {
    padding: 12px 25px;
    background: #00bfff;
    border: none;
    color: #fff;
    font-weight: bold;
    border-radius: 8px;
    cursor: pointer;
    transition: background 0.3s;
}

button:hover {
    background: #00ffcc;
}

/* النتيجة */
.result {
    margin-top: 30px;
    text-align: center;
    font-size: 22px;
    color: #ffcc00;
}

/* زر العودة */
.btn-home {
    display: inline-block;
    padding: 12px 25px;
    margin-top: 20px;
    background: #ff5722;
    color: #fff;
    border-radius: 8px;
    text-decoration: none;
    font-weight: bold;
    transition: background 0.3s;
}

.btn-home:hover {
    background: #ff7043;
}
</style>
</head>

<body>

<div class="container">

    <h1>الاختبار البعدي - تعلم البرمجة</h1>

    <form id="quizForm">

        <div class="question">
            <p>1. أي لغة برمجة تُستخدم لإنشاء صفحات ويب تفاعلية؟</p>
            <div class="options">
                <label><input type="radio" name="q1" value="أ"> أ) Python</label>
                <label><input type="radio" name="q1" value="ب"> ب) HTML/CSS/JavaScript</label>
                <label><input type="radio" name="q1" value="ج"> ج) C++</label>
                <label><input type="radio" name="q1" value="د"> د) Java</label>
            </div>
        </div>

        <div class="question">
            <p>2. المتغيرات في البرمجة تُستخدم لـ:</p>
            <div class="options">
                <label><input type="radio" name="q2" value="أ"> أ) تخزين البيانات</label>
                <label><input type="radio" name="q2" value="ب"> ب) تصميم واجهة المستخدم</label>
                <label><input type="radio" name="q2" value="ج"> ج) إنشاء قواعد البيانات</label>
                <label><input type="radio" name="q2" value="د"> د) تشغيل الخوادم</label>
            </div>
        </div>

        <div class="question">
            <p>3. أي من التالي هو نوع من الهياكل الشرطية في البرمجة؟</p>
            <div class="options">
                <label><input type="radio" name="q3" value="أ"> أ) if ... else</label>
                <label><input type="radio" name="q3" value="ب"> ب) for loop</label>
                <label><input type="radio" name="q3" value="ج"> ج) switch statement</label>
                <label><input type="radio" name="q3" value="د"> د) جميع ما سبق</label>
            </div>
        </div>

        <button type="button" onclick="submitQuiz()">إرسال الاختبار</button>
    </form>

    <div id="result" class="result"></div>

    <a href="index.php" class="btn-home">العودة للصفحة الرئيسية</a>

</div>

<script>
function submitQuiz() {
    let score = 0;

    const answers = {
        q1: "ب",
        q2: "أ",
        q3: "د"
    };

    const form = document.getElementById('quizForm');

    for (let key in answers) {
        const selected = form[key].value;
        if (selected === answers[key]) score++;
    }

    document.getElementById('result').innerText =
        "نتيجتك: " + score + " / " + Object.keys(answers).length;
}
</script>

</body>
</html>