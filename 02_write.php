<?php

$name = $_POST['name'];
$mail = $_POST['mail'];
$live = $_POST['live'];
$format = $_POST['format'];
$place = $_POST['place'];
$gest = $_POST['gest'];
$price = $_POST['price'];
$question = $_POST['question'];

// $time = date('Y-m-d H:i:s');



// ラジオボタンのfor文 ====>チャレンジしたい！
// $let array = ['format', 'place','gest', 'price', 'question'];
// for($let =0; i < array.length; i++);{

//   if(isset($_POST[i])){
//     $array[i] =$_POST[i];
//     echo '形式:' . array[i] .'<br>';
//   } else {
//     $array = '未回答';
//     echo '選択されていません。<br>';
//   }

// }



// ラジオボタンの確認
// 質問①
if(isset($_POST['format'])){
  $format =$_POST['format'];
  echo '形式:' . $format .'<br>';
} else {
  $format = '未回答';
  echo '選択されていません。<br>';
}

// 質問②
if(isset($_POST['place'])){
  $place =$_POST['place'];
  echo '場所:' . $place .'<br>';
} else {
  $place = '未回答';
  echo '選択されていません。<br>';
}

// 質問③
if(isset($_POST['gest'])){
  $gest =$_POST['gest'];
  echo 'ゲスト:' . $gest .'<br>';
} else {
  $gest = '未回答';
  echo '選択されていません。<br>';
}

// 質問④
if(isset($_POST['price'])){
  $price =$_POST['price'];
  echo '予算:' . $price .'<br>';
} else {
  $price = '未回答';
  echo '選択されていません。<br>';
}

// 質問⑤
if(isset($_POST['question'])){
  $question =$_POST['question'];
  echo '情報:' . $question .'<br>';
} else {
  $question = '未回答';
  echo '選択されていません。<br>';
}


// チェックボックスの確認
// if (isset($_POST['q'])) {
//   $q = implode(", ", $_POST["q"]);
//   echo '利用の目的：' . $q . '<br>';
// } else {
//   echo 'チェックされていません。<br>';
// }



// ファイルに書き込み
// ①開く
$file = fopen('data/data.txt', 'a');

// ②書く
fwrite($file, $name.' , '. $mail.' , '. $live. ' , '.$format.' , '. $place . ' , '. $gest .' , '.$price .' , '.$question . "\n");
// fwrite($file, $name. $mail. $birthPlace. $cs. $q."\n");

// ③閉じる
fclose($file);
?>


<!-- 文字作成 -->


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
