<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form get</title>
</head>
<body>
    <h1>FORM GET</h1>
    <a href="form.html">Back to form</a> <br>
    <?php
        $name = $_GET['name'];
        $email = $_GET['email'];

        echo "Name: $name - Email: $email"
    ?>
</body>
</html>