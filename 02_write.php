<?php

$name = $_POST['name'];
$mail = $_POST['mail'];
$birthPlace = $_POST['birthPlace'];

$time = date('Y-m-d H:i:s');

// ファイルに書き込み
// ①開く
$file = fopen('data/data.txt', 'a');
// ②書く
fwrite($file, $time. $name. $mail. $birthPlace. "\n");
// ③閉じる
fclose($file);
//文字作成

?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="03_read.php">確認する</a></li>
        <li><a href="01_post.php">戻る</a></li>
    </ul>
</body>

</html>
