

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



<?php
$f = 'http://php3.local:7888/homework/homework.php';
?>

<form method="get" action="result.php">
    <input type="text" name="first" placeholder="first number">
    <select name="sign">
        <option value="<?php echo 'plus' ?>"> +</option>
        <option value="<?php echo 'minus' ?>"> -</option>
        <option value="<?php echo 'multiply' ?>"> x</option>
        <option value="<?php echo 'division' ?>"> /</option>
    </select>
    <input type="text" name="second" placeholder="second number">
    <input type="submit" value="=">



</form>


</body>
</html>



