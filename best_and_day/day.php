<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="5">
    <script type="text/javascript">
        var today = new Date();
        console.log(today);
        document.write('<h2>Time and date: ' + today + ' from the head</h2>');
    </script>
</head>
<body>
    <h1>This is HTML</h1>
    <script type="text/javascript">
        console.log('Hello World!');
        document.write('<h1>This is JS</h1>');
        var i = 0;
        while (i < 5) {
            document.write('<div class="' + i + '"><p>THIS IS DONE BY A WHILE LOOP IN JS</p></div>');
            i++;
        }
    </script>
    <script src="best.js"></script>
    <?php
        echo '<h1>This is PHP</h1>';
        for ($i=10; $i > 0; $i--) { 
            echo '<p>PHP IS THE BEST</p>';
        }
        include_once 'best.php';
    ?>
</body>
</html>