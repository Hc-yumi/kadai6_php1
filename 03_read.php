      <p>お名前｜メールアドレス｜居住地｜形式｜場所｜ゲスト｜予算｜情報</p>
      
      <?php
          // ファイルを開く
          $openFile = fopen('./data/data.txt', 'r+');
          
          
          // ファイル内容を1行ずつ読み込んで出力
          // ----以下講義の書き方------//
          // while ($str = fgets($openFile)) {
          //   echo nl2br($str); 
          // };
            
          if (!$openFile){
            echo "Somehow the file cannot be opened! :)";
            exit;
          }
          
          echo "<table border = 4>";
          $counter = 1;
          while(!feof($openFile))
          {
            $zeile = fgets($openFile);
            // ,を｜に変える

            $str= str_replace(' , ' , ' | ' ,$zeile);
            echo "<tr><td>$counter</td>";
            // echo "<td>$zeile</td>";
            echo "<td>$str</td>";
            $counter++;

            // var_dump($zeile);
          }

            echo "</table>";
  
      // echo '</table>';

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