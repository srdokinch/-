<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>sample</title>
  </head>
  <body>
    <?php
$str = "検索対象の文字列をここに指定します。文字列です。文字列。";
$word = "文字列";
if (substr_count($str, $word) >= 2) {
echo $word;
}
?>

  </body>
</html>
