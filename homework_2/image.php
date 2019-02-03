<?php
$photos = [1 => 'square.jpg',
    'Circle.jpg',
    'Triangle.jpg',
];

$id = $_GET['id'];
if ( isset($photos[$id]) ) {
    $image_name = $photos[$id];
    $image_path = '/homework_2/img/' . $image_name;

    var_dump($image_name);
    var_dump($image_path);
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
    <img src="<?php echo $image_path; ?>">
    </body>
    </html>

    <?php
}
?>



