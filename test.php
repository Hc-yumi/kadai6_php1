
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

<html>

<head>
<title>テーブルタグの利用</title>
</head>

<body>

<?php

echo"<table border=1>";
echo "<tr><td>東京</td><td>晴れ</td></tr>";
echo "<tr><td>大阪</td><td>雨</td></tr>";
echo "<tr><td>名古屋</td><td>曇り</td></tr>";
echo "</table>";

?>



<table border="1">
　<tr>
　　<th>日付</th>
　　<th>集合場所</th>
　</tr>
　<tr>
　　<td>2016/4/8</td>
　　<td>渋谷</td>
　</tr>
　<tr>
　　<td>2016/5/20</td>
　　<td>原宿</td>
　</tr>
</table>
1
2
3
4
5
6
7
8
9
10
11
12
13
14
<table border="1">
　<tr>
　　<th>日付</th>
　　<th>集合場所</th>
　</tr>
　<tr>
　　<td>2016/4/8</td>
　　<td>渋谷</td>
　</tr>
　<tr>
　　<td>2016/5/20</td>
　　<td>原宿</td>
　</tr>
</table>

</body>

</html>