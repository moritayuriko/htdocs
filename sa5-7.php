<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>フォームサンプル（１）</title>
</head>

<body>
    <h1>入力された値</h1>
    <table>
        <tr>
            <th>名前：</th>
            <td><?php echo $_GET["name"]; ?></td>

        </tr>
        <tr>
            <th>属性：</th>
            <td><?php echo $_GET["fate"]; ?></td>
        </tr>
    </table>
    <a href="sa5-7.html">入力ホームに戻る </a>

</body>

</html>