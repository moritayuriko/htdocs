<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>配列からリストを作る</title>
</head>
<body>
<h1>配列からリストを作る</h1>
<ul> 
    <?php
    $country=["日本","アメリカ","中国"];
foreach($country as $v){
 echo "<li>" .$v. "</li>";

}
    
    ?>
 </ul>   
</body>
</html>