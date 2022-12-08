<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>アンケート課題</title>

  <!--resetとcssの順番は重要 -->
  <!-- <link rel="stylesheet" href="css/reset.css"> -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>


<body>


<!-- <form action="99_form_post.php" method="post"> -->
<form action="02_write.php" method="post">
  <p class = "input_name">名前：<input type="text" name="name" size="20"></p>
  <p class= "input_mail" >MAIL：<input type="text" name="mail" size="20"></p>
  <p class= "input_live" >居住地：<input type="text" name="live" size="20"></p>
  <!-- <p>出身地<input type="text" name="birthPlace" size="20"></p> -->

  <!-- 以下アンケート内容 -->
  <h1 class=main_text>あなたが挙げたい結婚式について教えてください♪</h1>
  
  <h2>質問①：挙式の形式を選んでください</h2>
  <label><input type="radio" name="format" value="教会式">教会式</label><br>
  <label><input type="radio" name="format" value="神前式">神前式</label><br>
  <label><input type="radio" name="format" value="人前式">人前式</label><br>
  <label><input type="radio" name="format" value="こだわらない">こだわらない</label><br>
  <label><input type="radio" name="format" value="未回答" checked="checked">未回答</label><br>


  <h2>質問②：場所を選んでください</h2>
  <label><input type="radio" name="place" value="地元">地元</label><br>
  <label><input type="radio" name="place" value="二人の思い出の場所">二人の思い出の場所</label><br>
  <label><input type="radio" name="place" value="今住んでいる場所">今住んでいる場所</label><br>
  <label><input type="radio" name="place" value="こだわらない">こだわらない</label><br>
  <label><input type="radio" name="place" value="未回答" checked="checked">未回答</label><br>


  <h2>質問③：招待を考えてる人を教えてください</h2>
  <label><input type="radio" name="gest" value="ふたり">ふたり</label><br>
  <label><input type="radio" name="gest" value="家族">家族</label><br>
  <label><input type="radio" name="gest" value="家族と友達">家族と友達</label><br>
  <label><input type="radio" name="gest" value="知らない人でも可">知らない人でも可</label><br>
  <label><input type="radio" name="gest" value="未回答" checked="checked">未回答</label><br>


  <h2>質問④：予算を教えてください</h2>
  <label><input type="radio" name="price" value="0～30万円">0～30万円</label><br>
  <label><input type="radio" name="price" value="30万円～50万円">30万円～50万円</label><br>
  <label><input type="radio" name="price" value="50万円～100万円">50万円～100万円</label><br>
  <label><input type="radio" name="price" value="100万円～">100万円～</label><br>
  <label><input type="radio" name="price" value="未回答" checked="checked">未回答</label><br>


  <h2>質問⑤：このアンケートを何で知りましたか？</h2>
  <label><input type="radio" name="question" value="口コミ">口コミ</label><br>
  <label><input type="radio" name="question" value="ネット広告">ネット広告</label><br>
  <label><input type="radio" name="question" value="ジーズの課題">ジーズの課題</label><br>
  <label><input type="radio" name="question" value="風のうわさ">風のうわさ</label><br>
  <label><input type="radio" name="question" value="未回答" checked="checked">未回答</label><br>

  <input type="submit" value="送信">

</form>


<!-- チックボックスの欄 -->
  <!-- <form method="post" action="check.php">
    利用の目的（複数選択可）<br>
    <label><input type="checkbox" name="q[]" value="本を見つけるため">本を見つけるため</label><br>
    <label><input type="checkbox" name="q[]" value="参考書を探すため">参考書を探すため</label><br>
    <label><input type="checkbox" name="q[]" value="暇つぶし">暇つぶし</label><br> 
    <input type="submit" value="送信"> -->


</body>
</html>