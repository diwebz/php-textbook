<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <dl>
            <dt>日にち</dt>
            <dd>
                <?php print(date('n')); ?>月
                <select name="day" id="day">
                    <?php
                    for ($day=1; $day<=date('t'); $day++)
                        $day = 10;
                        while ($day <= 15;){
                        print('<option value="' . $day . '">' . $day . '日</option>');
                        $day = $day + 1;
                    }
                    ?>
                </select>
            </dd>
        </dl>
        <input type="submit" value="表示する" />
    </form>
    
</body>
</html>