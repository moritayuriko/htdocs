<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>セッションの活用</title>
</head>
<body>
   <h1>セッションの値の生成</h1>
   <?php
   session_start();
   $_SESSION["data"]="ストリックランド";
   echo "<p>設定した値：{$_SESSION["data"]}</p>";
   ?>
   <a href="sa6-8_2.php">次へ</a>
   
</body>
</html>