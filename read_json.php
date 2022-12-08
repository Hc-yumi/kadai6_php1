<?php
$jsonUrl = "test.json"; //JSONファイルの場所とファイル名を記述
if (file_exists($jsonUrl)) {
	$json = file_get_contents($jsonUrl);
	$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
	$obj = json_decode($json, true);
	$obj = $obj["res"]["blogData"];
	foreach($obj as $key => $val) {
		echo "<div class='box' style='margin: 0 0 40px'>";
		echo "<p>".$val["title"].
		" カテゴリ：".$val["category"][0].
		"</p>";
		echo "<p>名前： ".$val["author"].
		"</p>";
		echo "<p>日付：".$val["days"][0]["year"].
		"年 ".$val["days"][0]["month"].
		"月 ".$val["days"][0]["day"].
		"日</p>";
		echo "<p>内容: ".$val["content"].
		"</p>";
		echo "</div>";
	}
} else {
	echo "データがありません";
}
?>