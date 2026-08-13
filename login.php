<?php
session_start();
$errors = "";

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // مثال للتبسيط: تسجيل دخول أي شخص
    // لاحقاً يمكن ربطه بقاعدة بيانات
    if($email != "" && $password != ""){
        $_SESSION['user'] = $email;
        header("Location: index.php"); // بعد تسجيل الدخول يروح للصفحة الرئيسية
        exit();
    }else{
        $errors = "الرجاء إدخال البريد وكلمة المرور";
    }
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>تسجيل الدخول - الدورة الدموية</title>
<style>
body {
    font-family: Arial, sans-serif;
    direction: rtl;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}
.container {
    max-width: 400px;
    margin: 100px auto;
    background-color: #fff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    text-align: center;
}
h2 {
    color: #e60000;
    margin-bottom: 25px;
}
input[type="email"], input[type="password"] {
    width: 100%;
    padding: 12px;
    margin: 8px 0;
    border-radius: 8px;
    border: 1px solid #ccc;
    font-size: 16px;
}
button {
    background-color: #e60000;
    color: white;
    padding: 12px 25px;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 10px;
}
button:hover {
    background-color: #b30000;
}
p.error {
    color: red;
    margin-top: 10px;
}
p.register {
    margin-top: 15px;
    font-size: 14px;
}
p.register a {
    color: #e60000;
    text-decoration: none;
    font-weight: bold;
}
p.register a:hover {
    text-decoration: underline;
}
</style>
</head>
<body>
<div class="container">
    <h2>تسجيل الدخول</h2>
    <form method="POST" action="">
        <input type="email" name="email" placeholder="البريد الإلكتروني">
        <input type="password" name="password" placeholder="كلمة المرور">
        <button type="submit" name="login">دخول</button>
        <?php if($errors != "") { echo "<p class='error'>$errors</p>"; } ?>
    </form>
    <p class="register">ليس لديك حساب؟ <a href="register.php">إنشاء حساب</a></p>
</div>
</body>
</html>