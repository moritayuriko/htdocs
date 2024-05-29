<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>郵便番号の確認</title>
</head>
<body><h1>郵便番号の確認</h1>
<form method="POST" action="study5-3.php">
    <input type="text" name="radius" placeholder="例）123-456">
    <br>
    <p>
        <?php
        if(isset($_POST["radius"])){
            $k =$_POST["radius"];
            if (preg_match("/^[0-9]{3}-?[0-9]{4}$/",$k)==1){
                echo "{$k}は郵便番号です。";
            }else if($k===""){
                echo "入力してください。";
            }else{
                echo "これは何ですか？郵便番号ではありません。";
            }   
             }
             ?>
    </p>
</form>
    
</body>
</html>