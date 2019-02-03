<?php
$photos = [1 => 'square.jpg',
    'Circle.jpg',
    'Triangle.jpg',
];
?>

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
foreach ($photos as $index => $imageName) {
    $image_path = '/homework_2/img/' . $imageName;
    ?>

    <a href="/homework_2/image.php?id=<?php echo $index; ?>">
        <img src="<?php echo $image_path; ?>">
    </a>
    <?php
}
?>

</body>
</html>