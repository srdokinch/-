<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>sample</title>
  </head>
  <body>
    <?php
$list = file('list.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$word = "美しい";
if (array_count_values($list)[$word] >= 2) {
    echo $word;
    echo nl2br("\n");
}
$word2 = 'php';
if (array_count_values($list)[$word2] >= 2) {
    echo $word2;
}
?>

  </body>
</html>
