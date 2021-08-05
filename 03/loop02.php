<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <style type="text/css">
            table {
                text-align: center;
            }
            th,td {
                width: 100px;
            }
        </style>
        <title>行×列ループ</title>
    </head>
    <body>
        <h1>行×列ループ</h1>
        <form method='post' action='loop02.php'>
            <p>
                <input type="text" name="gyou" placeholder="整数を入力" />行×
                <input type="text" name="retu" placeholder="整数を入力" />列
            </p>
            <input type="submit" value="送信">
            <input type="reset" value="リセット">
            <table border="1">
                <?php
                    for($i=0; $i < $_POST['gyou']; $i++)
                    {
                        echo "<tr>";
                        for($j=0; $j < $_POST['retu']; $j++)
                        {
                            echo "<td>テスト</td>";
                        }
                        "</tr>";
                    }
                ?>
            </table>
        </form>
    </body>
</html>
