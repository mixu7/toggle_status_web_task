<?php
// إعدادات الاتصال بقاعدة البيانات
$host = "localhost";
$user = "root";       // اسم المستخدم
$password = "";       // كلمة المرور (فارغة محليًا)
$dbname = "run_pose_db"; // اسم قاعدة البيانات

// إنشاء الاتصال
$conn = new mysqli($host, $user, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>