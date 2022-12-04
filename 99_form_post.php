<?php
// xxs対応のfile
// include("funcs.php");

$name = $_POST["name"];
$mail = $_POST["mail"];

// チェックボックスの配列の確認
// var_dump($_POST["q"]);


?>

<html>
  <head>
    <meta charset="utf-8">
  </head>

  <body>
    <p>受け取った名前 <?= $name; ?></p>
    <p>受け取ったメール <?= $mail; ?></p>
  </body>


<?php
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

?>



</html>