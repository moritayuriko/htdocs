<!DOCTYPE html>

<head>
   <meta charset="UTF-8">
   <title>リストの生成</title>
</head>


<body>
   <h1>都道府県のリスト</h1>
   <?php
   require_once("study6-3.php");
   $ls = new NumList();
   $data = ["東京都", "大阪府", "愛知県"];
   $ls->show($data);

   ?>
</body>

</html>