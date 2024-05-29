<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>円の面積と円周の長さを求める</title>
</head>

<body>
    <h1>円の面積と円周の長さを求める</h1>
    <form method="POST" action="sa5-9.php">
        <p><b>円の半径（㎝）：正の数を入力してください</b></p>
        <input type="text" name="radius" placeholder="例）1.2">
        <br>
        <p>
            <?php
            if (isset($_POST["radius"])) {
                $r = $_POST["radius"];
                if (preg_match("/^([1-9]\d*|0)(\.\d+)?$/", $r) == 1) {
                    if ($r > 0.0) {
                        $pi = 3.14;
                        $area = $pi * $r * $r;
                        $cir = 2 * $pi * $r;
                        echo "<p>面積:{$area}cm2&nbsp;円周:{$cir}cm</p>";
                    } else {
                        echo "<p>半径には整数を入力してください";
                    }
                } else {
                    echo "<p>半径には正の数を入力してください";
                }
            }
            ?>
        </p>
    </form>

</body>

</html>