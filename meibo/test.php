<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>DB</title>
    </head>
    <body>
        <table  border="1" >
            <tr><th>ID</th><th>名前</th><th>ジャンル</th><th>値段</th><th>一言</th></tr>
            <?php
                $DB_DSN = "mysql:host=localhost; dbname=tabe; charset=utf8";
                $DB_USER = "webaccess";
                $DB_PW = "toMeu4rH";
                $pdo = new PDO($DB_DSN, $DB_USER, $DB_PW);


                $query_str = "SELECT * FROM menu_izakaya WHERE 1";   // 実行するSQL文を作成して変数に保持

                echo $query_str;                                                           // 実行するSQL文を画面に表示するだけ（デバッグプリント
                $sql = $pdo->prepare($query_str);                              // PDOオブジェクトにSQLを渡す
                $sql->execute();                                                            // SQLを実行する
                $result = $sql->fetchAll();              // 実行結果を取得して$resultに代入する

                foreach ($result as $x) {
                    echo "<tr><td>" . $x['ID'] . "</td>";
                    echo "<td>" . $x['name'] . "</td>";
                    echo "<td>" . $x['genre'] . "</td>";
                    echo "<td>" . $x['price'] . "</td>";
                    echo "<td>" . $x['memo'] . "</td></tr>";
                }
            ?>
        </table>
    </body>
    <pre>
        <?php var_dump($result) ?>
    </pre>
</html>
