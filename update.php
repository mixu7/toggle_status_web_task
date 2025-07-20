<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $status = $_POST["status"];

    // نعكس القيمة: إذا 0 تصير 1، وإذا 1 تصير 0
    $newStatus = $status == 0 ? 1 : 0;

    $sql = "UPDATE users SET status = '$newStatus' WHERE id = '$id'";
    $conn->query($sql);
}

$conn->close();
?>