<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>個人認証</title>
    </head>
    <body>
        <?php
            $konbini[0] = "ローソン";
            $konbini[1] = "ファミマ";
            $konbini[2] = "セブン";
            $konbini[3] = "ミニストップ";
            $konbini[4] = "ヤマザキ";
            echo "<pre>";
            var_dump($konbini);
            "</pre>";

            echo "<hr>";

            $needle1 = "ヤマザキ";
            $needle2 = "デイリーヤマザキ";
            if(in_array($needle1, $konbini)) {
                echo $needle1 . " がfruitの要素の値に存在しています";
            } else {
                echo $needle1 . " がfruitの要素の値に存在しません";
            }

            echo "<br>";

            if(in_array($needle2, $konbini)) {
                echo $needle2 . " がfruitの要素の値に存在しています";
            } else {
                echo $needle2 . " がfruitの要素の値に存在しません";
            }
        ?>
    </body>
</html>
