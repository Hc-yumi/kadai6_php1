<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>フォーム</title>
</head>
<body>

<!-- <form action="form_post.php" method="post"> -->
<form action="99_form_post.php" method="post">
  <p>名前<input type="text" name="name" size="20"></p>
  <p>MAIL<input type="text" name="mail" size="20"></p>


  <p>アンケート</p>
  <label><input type="radio" name="cs" value="満足">満足</label><br>
  <label><input type="radio" name="cs" value="やや満足">やや満足</label><br>
  <label><input type="radio" name="cs" value="やや不満">やや不満</label><br>
  <label><input type="radio" name="cs" value="不満">不満</label><br>
  <!-- <p>性別<input type="text" name="sex" size="20"></p>
  <p>要望<input type="text" name="hope" size="40"></p> -->

  
  <p>チェックボックスのアンケート</p>
  <form method="post" action="check.php">
    利用の目的（複数選択可）<br>
    <label><input type="checkbox" name="q[]" value="本を見つけるため">本を見つけるため</label><br>
    <label><input type="checkbox" name="q[]" value="参考書を探すため">参考書を探すため</label><br>
    <label><input type="checkbox" name="q[]" value="暇つぶし">暇つぶし</label><br>
    <input type="submit" value="送信">
</form>



</form>






</body>
</html>