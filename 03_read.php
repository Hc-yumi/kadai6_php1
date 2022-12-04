<?php
// ファイルを開く
$openFile = fopen('./data/data.txt', 'r');

// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($openFile)) {
  echo nl2br($str); 
};

// ファイルを閉じる
fclose($openFile);

?>



<html>

<head>
    <meta charset="utf-8">
    <title>readFileの確認</title>
</head>

<body>

  <p><a href="01_post.php">アンケートに戻る</a></p>

</body>

</html>