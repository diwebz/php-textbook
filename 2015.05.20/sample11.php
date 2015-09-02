<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sample11.php</title>
</head>
<body>
    <?php
    if (empty($_REQUEST['my_name'])) {
        print('please write name<br/>');
    }
    else {
        print('it is correct');
    }
    ?>
</body>
</html>