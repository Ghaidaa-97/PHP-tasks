<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if(isset($_POST['btn1']))
    {
        echo 'button 1 is selected';
    }
    if(isset($_POST['btn2']))
    {
        echo 'button 2 is selected';
    }
    if(isset($_POST['btn3']))
    {
    echo 'button 3 is selected';
    }
    ?>

    <form method="POST">
        <input type="submit" name="btn1" value="button1">
        <input type="submit" name="btn2" value="button2">
        <input type="submit" name="btn3" value="button3">
    </form>
</body>

</html>