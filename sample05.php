<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sample05</title>
</head>
<body>
    <?php
    print('性別：' . htmlspecialchars($_POST['gender'], ENT_QUOTES));
    ?>
</body>
</html>