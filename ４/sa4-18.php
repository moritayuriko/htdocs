<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>簡単なテーブルのサンプルt</title>
</head>

<body>
    <h1>簡単なテーブルのサンプル</h1>
    <table border="1" style="border-collapse:collapse;">
        <tr>
            <th>名前</th>
            <th>性別</th>
            <th>年齢</th>
            <th>住所</th>
        </tr>
        <?php
        $member = [
            ["穹", "?", 1, "rail"],
            ["カフカ", "女", 32, "erio"],
            ["刃", "男", 400, "erio"]
        ];
        foreach ($member as $v) {
            echo <<<識別子
            <tr>
            <td>{$v[0]}</td><td>{$v[1]}</td><td>{$v[2]}</td><td>{$v[3]}</td>
        </tr>
        識別子;
        }
        ?>
    </table>

</body>

</html>