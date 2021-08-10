<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>個人認証</title>
    </head>
    <body>
        <?php
            $fruit = array("りんご", "すいか", "みかん", "なし", "イチゴ", "かき");

            echo $fruit[3]; // なし と表示される

            echo $fruit[0]; // りんご と表示される

            echo $fruit[9]; // エラーになる

            $fruit[2] = "いちじく"; // 上書きされる

            $fruit[6] = "キウイ"; // 追加される

            var_dump($fruit); // 配列の中身がすべて表示される

            // ブラウザで表示させるときは<pre>で囲むと見やすく表示される
        ?>
        <pre>
            <?php
                var_dump($fruit);
            ?>
        </pre>
    </body>
</html>
