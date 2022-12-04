      <?php
          // ファイルを開く
          $openFile = fopen('./data/data.txt', 'r');
          
          
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
            // $str= str_replace(' , ' , ' | ' ,$zeile);
            // echo nl2br($str);
            echo "<tr><td>$counter</td>";
            echo "<td>$zeile</td>";
            $counter++;

            var_dump($zeile);
          }
            echo "</table>";
  

           // $file = fopen("info.txt", "r") or die("Unable to open file!");
          // while (!feof($openFile)){   
          // $data = fgets($openFile); 

          // echo "<tr><td>" . str_replace('|','</td><td>',$data) . '</td></tr>';
      //     $str = str_replace(" ", " | ", $openFile); 
      //           echo nl2br($str);
      // }


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