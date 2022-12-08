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

          <?php
          $input_array = array();
          while($input_line = fgets($openFile)){
            array_push($input_array, $input_line);
          }

          

        $format_object = [
          '教会式'=> 0,
          '神前式'=> 0,
          '人前式'=> 0,
          'こだわらない'=> 0,
        ];

        $place_object = [
          'local'=> 0,
          'memory'=> 0,
          'now_live'=> 0,
          'no_format'=> 0,
        ];

        $gest_object = [
          'two'=> 0,
          'family'=> 0,
          'family_friend'=> 0,
          'unkown'=> 0,
        ];

        $price_object = [
          'verylow'=> 0,
          'low'=> 0,
          'middle'=> 0,
          'hight'=> 0,
        ];

        $question_object = [
          'mouth'=> 0,
          'net'=> 0,
          'geeks'=> 0,
          'rumor'=> 0,
        ];

        
        // $tekito = 'こだわらない';
        for ($i=0; $i < count($input_array); $i++){
          // print_r($input_array[i]);
          $value = explode(" , ", $input_array[$i]);
          // echo $value[3]; 
          $format_object[$value[3]]++;

          // $value[3]
        };

        print $format_object['教会式'].'<br>'; 
        print $format_object['神前式'].'<br>'; 
        print $format_object['人前式'].'<br>'; 
        print $format_object['こだわらない'].'<br>'; 

      

          // for ($i=0; $i < count(); $i++){
          //   $format_object['cris']++;
          //   print $format_object['cris']; 
            


          // };
          ?>

        
        <!-- <tr>
          <th>名前</th>
          <th>mail</th>
          <th>居住地</th>
          <th>形式</th>
          <th>場所</th>
          <th>ゲスト</th>
          <th>予算</th>
          <th>情報</th>
        </tr> -->

        <!-- <tr>
          <td><?= $input_array[0];?></td>
          <td><?= $input_array[1];?></td>
          <td><?= $input_array[2];?></td>
          <td><?= $input_array[3];?></td>
          <td><?= $input_array[4];?></td>
          <td><?= $input_array[5];?></td>
          <td><?= $input_array[6];?></td>
          <td><?= $input_array[7];?></td> -->


      </table>

      

      
      
      
      
      
      <!-- <p>お名前｜メールアドレス｜居住地｜形式｜場所｜ゲスト｜予算｜情報</p> -->
      
      <?php
          // ファイルを開く
          // $openFile = fopen('./data/data.txt', 'r'); ←使えるやつ
          
          
          // ファイル内容を1行ずつ読み込んで出力
          // ----以下講義の書き方------//
          // while ($str = fgets($openFile)) {
          //   echo nl2br($str); 
          // };


// ここから

            
      //     if (!$openFile){
      //       echo "Somehow the file cannot be opened! :)";
      //       exit;
      //     }
          
      //     echo "<table border = 4>";
      //     $counter = 1;
      //     while(!feof($openFile))
      //     {
      //       $zeile = fgets($openFile);
      //       // ,を｜に変える

      //       $str= str_replace(' , ' , ' | ' ,$zeile);
      //       echo "<tr><td>$counter</td>";
      //       // echo "<td>$zeile</td>";
      //       echo "<td>$str</td>";
      //       $counter++;

      //     }
      //       echo "</table>";


// ここまで 


      // // ファイルを閉じる
      // fclose($openFile);






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