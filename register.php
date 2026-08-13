<?php
// الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "history_site"; // قاعدة البيانات نفسها

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// معالجة تسجيل الحساب عند الإرسال
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // تأكد أن الحقول ليست فارغة
    if(!empty($user) && !empty($pass)){
        $sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";
        if ($conn->query($sql) === TRUE) {
            $success = "تم إنشاء الحساب بنجاح! يمكنك تسجيل الدخول الآن.";
        } else {
            $error = "حدث خطأ: " . $conn->error;
        }
    } else {
        $error = "يرجى ملء جميع الحقول";
    }
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
<title>إنشاء حساب - موقع البرمجة</title>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<style>
body {
    font-family: 'Cairo', sans-serif;
    margin: 0;
    padding: 0;
    background: linear-gradient(120deg, #1f4037, #99f2c8);
    color: #333;
}
.container {
    max-width: 500px;
    margin: 80px auto;
    padding: 30px;
    background: rgba(255,255,255,0.9);
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.3);
}
h1 {
    text-align: center;
    color: #0a3d62;
    margin-bottom: 30px;
}
form input[type="text"], form input[type="password"] {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border-radius: 8px;
    border: 1px solid #ccc;
}
form button {
    width: 100%;
    padding: 12px;
    background: #27ae60;
    border: none;
    color: #fff;
    font-weight: bold;
    border-radius: 8px;
    cursor: pointer;
    transition: background 0.3s;
}
form button:hover {
    background: #2ecc71;
}
.message {
    text-align: center;
    margin-bottom: 15px;
    font-weight: bold;
}
.login-link {
    display: block;
    text-align: center;
    margin-top: 15px;
    color: #2980b9;
    text-decoration: none;
    font-weight: bold;
}
.login-link:hover {
    text-decoration: underline;
}
</style>
</head>
<body>

<div class="container">
    <h1>إنشاء حساب جديد</h1>

    <?php if(isset($error)) echo "<div class='message' style='color:red;'>$error</div>"; ?>
    <?php if(isset($success)) echo "<div class='message' style='color:green;'>$success</div>"; ?>

    <form method="POST" action="">
        <input type="text" name="username" placeholder="اسم المستخدم" required>
        <input type="password" name="password" placeholder="كلمة المرور" required>
        <button type="submit">إنشاء حساب</button>
    </form>

    <a class="login-link" href="login.php">لديك حساب بالفعل؟ تسجيل الدخول</a>
</div>

</body>
</html>