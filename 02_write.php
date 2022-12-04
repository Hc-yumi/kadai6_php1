<?php

$name = $_POST['name'];
$mail = $_POST['mail'];
$birthPlace = $_POST['birthPlace'];
$cs = $_POST['cs'];
$q = $_POST['q'];

// $time = date('Y-m-d H:i:s');


// ラジオボタンの確認
if(isset($_POST['cs'])){
  $cs =$_POST['cs'];
  echo '満足度:' . $cs .'<br>';
} else {
  echo '満足度が選択されていません。<br>';
}


// チェックボックスの確認
if (isset($_POST['q'])) {
  $q = implode(", ", $_POST["q"]);
  echo '利用の目的：' . $q . '<br>';
} else {
  echo 'チェックされていません。<br>';
}



// ファイルに書き込み
// ①開く
$file = fopen('data/data.txt', 'a');
// ②書く
// fwrite($file, $name." " .$mail." " .$birthPlace. " ".$cs." " .$q." " .$time. "\n")
// $file_w = array($name,$mail,$birthPlace,$cs,$q);
// fwrite($file, $file_w);
fwrite($file, $name.' , ' .$mail.' , ' .$birthPlace. ' , '.$cs.' , '.$q . "\n");
// fwrite($file, $name. $mail. $birthPlace. $cs. $q."\n");
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
<!-- 
    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2> -->
    <p>アンケートありがとうございました。</p>

    <p><a href="03_read.php"> 集計結果はこちら</p>
    <p><a href="01_post.php">アンケートに戻る</p>

</body>

</html>
