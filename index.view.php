<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1
        {
            text-align: center;
            padding: 20px;
            width: 500px;
            margin: 20px auto;
            background: #888;
            /* color: white; */
        }
    </style>
</head>
<body>
    <ul>
        <!-- <?php foreach($task as $key=>$detail){
            echo "<li>$key - $detail</li>";
            echo "<br>";
        }?> -->

        <?php foreach($task as $key=>$detail) :?>
            <li><?= "$key - $detail" ?></li><br>
        <?php endforeach?>
    </ul>
</body>
</html>