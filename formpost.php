<?php
// Lấy dữ liệu từ POST
$name = $_POST['name'];
$email = $_POST['email'];

// Xử lý dữ liệu (ví dụ: lưu trữ vào cơ sở dữ liệu, gửi email)
// ...

// Hiển thị thông báo cho người dùng
echo "<h2>Cảm ơn bạn đã gửi thông tin!</h2>";
echo "<p>Tên: " . $name . "</p>";
echo "<p>Email: " . $email . "</p>";
?>