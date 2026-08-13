<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title>الاختبار القبلي - تعلم البرمجة</title>

<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">

<style>
body {
    font-family: 'Cairo', sans-serif;
    margin: 0;
    padding: 0;
    background: linear-gradient(120deg, #2c3e50, #4ca1af);
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

    <h1>الاختبار القبلي - تعلم البرمجة</h1>

    <form id="preQuizForm">

        <div class="question">
            <p>1. أي لغة برمجة تُستخدم لإنشاء تطبيقات الهاتف؟</p>
            <div class="options">
                <label><input type="radio" name="q1" value="أ"> أ) HTML</label>
                <label><input type="radio" name="q1" value="ب"> ب) Java / Kotlin</label>
                <label><input type="radio" name="q1" value="ج"> ج) CSS</label>
                <label><input type="radio" name="q1" value="د"> د) SQL</label>
            </div>
        </div>

        <div class="question">
            <p>2. الحلقات (Loops) تُستخدم في البرمجة لـ:</p>
            <div class="options">
                <label><input type="radio" name="q2" value="أ"> أ) تكرار تنفيذ كود معين</label>
                <label><input type="radio" name="q2" value="ب"> ب) تخزين البيانات</label>
                <label><input type="radio" name="q2" value="ج"> ج) تصميم واجهة المستخدم</label>
                <label><input type="radio" name="q2" value="د"> د) تشغيل قواعد البيانات</label>
            </div>
        </div>

        <div class="question">
            <p>3. أي من التالي يُعتبر قاعدة بيانات؟</p>
            <div class="options">
                <label><input type="radio" name="q3" value="أ"> أ) MySQL</label>
                <label><input type="radio" name="q3" value="ب"> ب) Python</label>
                <label><input type="radio" name="q3" value="ج"> ج) JavaScript</label>
                <label><input type="radio" name="q3" value="د"> د) HTML</label>
            </div>
        </div>

        <button type="button" onclick="submitPreQuiz()">إرسال الاختبار</button>
    </form>

    <div id="preResult" class="result"></div>

    <a href="index.php" class="btn-home">العودة للصفحة الرئيسية</a>

</div>

<script>
function submitPreQuiz() {
    let score = 0;

    const answers = {
        q1: "ب",
        q2: "أ",
        q3: "أ"
    };

    const form = document.getElementById('preQuizForm');

    for (let key in answers) {
        const selected = form[key].value;
        if (selected === answers[key]) score++;
    }

    document.getElementById('preResult').innerText =
        "نتيجتك: " + score + " / " + Object.keys(answers).length;
}
</script>

</body>
</html>