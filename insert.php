<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];

    // الحالة الابتدائية تكون 0
    $status = 0;

    // أمر الإدخال
    $sql = "INSERT INTO users (name, age, status) VALUES ('$name', '$age', '$status')";

    $conn->query($sql);
}
$conn->close();

// بعد الإدخال يرجع للصفحة الرئيسية
header("Location: index.html");
exit();
?>