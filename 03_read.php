<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>fileの確認</title>

  <!--resetとcssの順番は重要 -->
  <!-- <link rel="stylesheet" href="css/reset.css"> -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
      
<body>      
      
      
      
      <table>
        <?php
        // ファイルを開く
        $openFile = fopen('./data/data.txt', 'r');

        // ファイル内容を1行ずつ読み込んで出力
        //   ----以下講義の書き方------//
          // while ($str = fgets($openFile)) {
          //   echo nl2br($str); 
          //   echo('<pre>');
          //   var_dump($str);
          //   echo('<pre>'); 
          // };

          
          $str = fgets($openFile);
          // // echo $str[0];
          // foreach($str as $key => $value){
          //   echo  $key. 'の値は'.$value. 'です。'.'<br>' ;
          // }          

          ?>

<!-- <p>お名前｜メールアドレス｜居住地｜形式｜場所｜ゲスト｜予算｜情報</p> -->
<p>お名前｜メールアドレス｜居住地</p>


<!-- <?php            
  // if (!$openFile){
  //   echo "Somehow the file cannot be opened! :)";
  //   exit;
  // }
  
  // echo "<table border = 4>";
  // $counter = 1;
  // while(!feof($openFile))
  // {
  //   $zeile = fgets($openFile);
  //   // ,を｜に変える

  //   $str= str_replace(' , ' , ' | ' ,$zeile);
  //   echo "<tr><td>$counter</td>";
  //   // echo "<td>$zeile</td>";
  //   echo "<td>$str</td>";
  //   $counter++;

  // }
  //   echo "</table>";

?>
ここまで  -->

<?php
echo "<table border = 4>";
    $input_array = array();
    $counter = 0;
    while($input_line = fgets($openFile)){
      array_push($input_array, $input_line);

      $str_r = str_replace(' , ' , ' | ' ,$input_line);
      echo "<tr><td>$counter</td>";
      // echo "<td>$input_line</td>";
      echo "<td>$str_r</td>";
      $counter++;
    }
    echo "</table>";
?>
    

<?php
// echo "<table border = 4>";
//   // $counter = 1;
//   //   while(!feof($openFile))
//   // {
//     $zeile = fgets($openFile);
//   //   // ,を｜に変える

//     $str_r= str_replace(' , ' , ' | ' ,$input_line);
//     // echo "<tr><td>$counter</td>";
//     echo "<td>$input_line</td>";
//     echo "<td>$str_r</td>";
//   //   $counter++;

//   // }
//     echo "</table>";

?>



<?php    

  // 質問項目を作成する
  $format_object = [
    '教会式'=> 0,
    '神前式'=> 0,
    '人前式'=> 0,
    'こだわらない'=> 0,
    '未回答'=> 0,
  ];

  $place_object = [
    '地元'=> 0,
    '二人の思い出の場所'=> 0,
    '今住んでいる場所'=> 0,
    'こだわらない'=> 0,
    '未回答'=> 0,
  ];

  $gest_object = [
    'ふたり'=> 0,
    '家族'=> 0,
    '家族と友達'=> 0,
    '知らない人でも可'=> 0,
    '未回答'=> 0,
  ];

  $price_object = [
    '0～30万円'=> 0,
    '30万円～50万円'=> 0,
    '50万円～100万円'=> 0,
    '100万円～'=> 0,
    '未回答'=> 0,
  ];

  $question_object = [
    '口コミ'=> 0,
    'ネット広告'=> 0,
    'ジーズの課題'=> 0,
    '風のうわさ'=> 0,
    '未回答'=> 0,
  ];


  // $tekito = 'こだわらない';
  for ($i=0; $i < count($input_array); $i++){
    // print_r($input_array[i]);
    $value = explode(" , ", $input_array[$i]);
    // echo $value[3]; 
    // $value = explode(" , ", $input_array[$i]);

      $format_object[$value[3]]++;
      $place_object[$value[4]]++;
      $gest_object[$value[5]]++;
      $price_object[$value[6]]++;
      // $question_object[$value[7]]++;          
  };    

?>

  <div>
      <p class=sum_text>形式の集計</p>
      <table border="1">
        <tr>
          <th>教会式</th>
          <th>神前式</th>
          <th>人前式</th>
          <th>こだわらない</th>
          <th>未回答</th>
        </tr>
        <tr>
          <td><?= $format_object['教会式'];?></td>
          <td><?= $format_object['神前式']; ?></td>
          <td><?= $format_object['人前式']; ?></td>
          <td><?= $format_object['こだわらない']; ?></td>
          <td><?= $format_object['未回答']; ?></td>
        </tr>
        </table>
  </div>


  <p class=sum_text>場所の集計</p>
      <table border="1">
        <tr>
          <th>地元</th>
          <th>二人の思い出の場所</th>
          <th>今住んでいる場所</th>
          <th>こだわらない</th>
          <th>未回答</th>
        </tr>
        <tr>
          <td><?= $place_object['地元'];?></td>
          <td><?= $place_object['二人の思い出の場所']; ?></td>
          <td><?= $place_object['今住んでいる場所']; ?></td>
          <td><?= $place_object['こだわらない']; ?></td>
          <td><?= $place_object['未回答']; ?></td>
        </tr>
        </table>
  </div>

  <p class=sum_text>ゲストの集計</p>
      <table border="1">
        <tr>
          <th>ふたり</th>
          <th>家族</th>
          <th>家族と友達</th>
          <th>知らない人でも可</th>
          <th>未回答</th>
        </tr>
        <tr>
          <td><?= $gest_object['ふたり'];?></td>
          <td><?= $gest_object['家族']; ?></td>
          <td><?= $gest_object['家族と友達']; ?></td>
          <td><?= $gest_object['知らない人でも可']; ?></td>
          <td><?= $gest_object['未回答']; ?></td>
        </tr>
        </table>
  </div>

  <p class=sum_text>予算の集計</p>
      <table border="1">
        <tr>
          <th>0～30万円</th>
          <th>30万円～50万円</th>
          <th>50万円～100万円</th>
          <th>100万円～</th>
          <th>未回答</th>
        </tr>
        <tr>
          <td><?= $price_object['0～30万円'];?></td>
          <td><?= $price_object['30万円～50万円']; ?></td>
          <td><?= $price_object['50万円～100万円']; ?></td>
          <td><?= $price_object['100万円～']; ?></td>
          <td><?= $price_object['未回答']; ?></td>
        </tr>
        </table>
  </div>

  <p class=sum_text>情報の集計</p>
      <table border="1">
        <tr>
          <th>口コミ</th>
          <th>ネット広告</th>
          <th>ジーズの課題</th>
          <th>風のうわさ</th>
          <th>未回答</th>
        </tr>
        <tr>
          <td><?= $question_object['口コミ'];?></td>
          <td><?= $question_object['ネット広告']; ?></td>
          <td><?= $question_object['ジーズの課題']; ?></td>
          <td><?= $question_object['風のうわさ']; ?></td>
          <td><?= $question_object['未回答']; ?></td>
        </tr>
        </table>
  </div>


    
<?php
    // ファイルを開く
    // $openFile = fopen('./data/data.txt', 'r'); ←使えるやつ
    
    
    // ファイル内容を1行ずつ読み込んで出力
    // ----以下講義の書き方------//
    // while ($str = fgets($openFile)) {
    //   echo nl2br($str); 
    // };


// ここから

            
          // if (!$openFile){
          //   echo "Somehow the file cannot be opened! :)";
          //   exit;
          // }
          
          // echo "<table border = 4>";
          // $counter = 1;
          // while(!feof($openFile))
          // {
          //   $zeile = fgets($openFile);
          //   // ,を｜に変える

          //   $str= str_replace(' , ' , ' | ' ,$zeile);
          //   echo "<tr><td>$counter</td>";
          //   // echo "<td>$zeile</td>";
          //   echo "<td>$str</td>";
          //   $counter++;

          // }
          //   echo "</table>";


// ここまで 
?>


    <p><a href="01_post.php">アンケートに戻る</a></p>

  </body>

</html>