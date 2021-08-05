<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <style type="text/css">
            table {
                text-align: center;
            }
            table,th,td {
                width: 200px;
            }
        </style>
        <title>行×列ループ[クラス]</title>
    </head>
    <body>
        <h1>行×列ループ[クラス]</h1>
        <form method='post' action='loop03.php'>
            <p>
                <input type="text" name="gyou" placeholder="整数を入力" />行×
                <input type="text" name="retu" placeholder="整数を入力" />列
            </p>
            <input type="submit" value="送信">
            <input type="reset" value="リセット">
            <table border="1">
                <?php
                    for($i=1; $i <= $_POST['gyou']; $i++){
                        echo "<tr>";
                        for($j=1; $j <= $_POST['retu']; $j++){
                            echo "<td>$i-$j</td>";
                        }
                        "</tr>";
                    }
                ?>
            </table>
        </form>
    </body>
</html>
