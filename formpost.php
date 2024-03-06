
<!DOCTYPE html>
<html>
    <head>
        <meta> charset ="utf-8">
        <title>Form Get</title>
    </head>
<body>
    <h1>Save to file</h1>
    <a href="form.html">Back to Form</a> <br />
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

//save to file
$output = $name . " # " . $email . "\n";
$file = fopen("formdata.txt", "ab");
fwrite($file, $output);
fclose($file);
echo "Data writen to file !!!";
?>
</body>
</html>