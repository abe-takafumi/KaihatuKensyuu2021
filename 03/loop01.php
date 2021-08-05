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
        <title>行数ループ</title>
    </head>
    <body>
        <h1>行数ループ</h1>
        <form method='post' action='loop01.php'>
            <p>
                <input type="text" name="hamu" placeholder="整数を入力" />
                行のテーブルを生成する
            </p>
            <input type="submit" value="送信">
            <input type="reset" value="リセット">
            <table border="1">
                <?php
                    for($i=1; $i <= $_POST['hamu']; $i++){
                        if($i%2==0){
                            $clo='style="background-color: #1e90ff;"';
                            echo "<tr $clo><td>淺間</td><td >西川</td><td>高濱</td><td>中田</td><td>王</td></tr>";
                        }else{
                            echo "<tr><td>淺間</td><td>西川</td><td>高濱</td><td>中田</td><td>王</td></tr>";
                        }

                    }
                ?>
            </table>
        </form>
    </body>
</html>
