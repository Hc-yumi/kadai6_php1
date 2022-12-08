
<!--一次元配列 -->
<?php
$fruits = ['app', 'banana', 'orange', 'strawberry', 'pineapple'];

foreach($fruits as $value){
  echo $value.'<br>';
}
?>

<!-- 連想配列 -->
<?php
$test_score = [
  '英語' => 86,
  '数学' => 90,
  '国語' => 73
];

foreach($test_score as $subject => $score){
  echo $subject.'の点数は'.$score.'点です。'.'<br>';
}

?>

<?php
$array = [1, 2, 3, 4, 5];

foreach($array as $value){
  echo $value.'<br>';

  if($value === 1 ){
    echo '終了'.'<br>';
    break;
  }
}
?>

<?php
$array = [1, 2, 3, 4, 5];
foreach($array as $value){
  if($value ===3 ){
    continue;
  }
  echo $value.'<br>';
}

?>