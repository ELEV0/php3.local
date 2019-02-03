<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>1 homework</title>
</head>
<body>

<?php

$num11 = $_GET['first'];
$num11 = (int)$num11;

$num22 = $_GET['second'];
$num22 = (int)$num22;

$sign = $_GET['sign'];

switch ($sign) {
    case 'plus':
        $result = $num11 + $num22;
        $output = ' + ';
        break;
    case 'minus':
        $result = $num11 - $num22;
        $output = ' - ';
        break;
    case 'multiply':
        $result = $num11 * $num22;
        $output = ' * ';
        break;
    case 'division':
        $result = $num11 / $num22;
        $output = ' / ';
        break;
    default:
        $result = null;
        break;
}
if (null !== $result) {
    echo $num11 . $output . $num22 . ' = ' . $result;
} else {
    echo 'error';
}

?>
</body>
</html>
