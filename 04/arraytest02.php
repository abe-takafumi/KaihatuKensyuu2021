<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>個人認証</title>
    </head>
    <body>
        <?php
            // 書き方その１
            $fruit = array("りんご", "すいか", "みかん", "なし", "イチゴ", "かき");
            echo "<pre>";
            var_dump($fruit);
            "</pre>";
            for($i=0; $i < count($fruit) ; $i++){
                echo $fruit[$i] . "<br/>";
            }
            echo "<hr>";

            // 書き方その２（php5.4以降)
            $kisetu = ["春", "夏", "秋", "冬"];
            echo "<pre>";
            var_dump($kisetu);
            "</pre>";
            for($i=0; $i < count($kisetu) ; $i++){
                echo $kisetu[$i] . "<br/>";
            }
            echo "<hr>";

            // 書き方その３
            $konbini[0] = "ローソン";
            $konbini[1] = "ファミマ";
            $konbini[2] = "セブン";
            $konbini[3] = "ミニストップ";
            $konbini[4] = "ヤマザキ";
            echo "<pre>";
            var_dump($konbini);
            "</pre>";
            for($i=0; $i < count($konbini) ; $i++){
                echo $konbini[$i] . "<br/>";
            }
        ?>
    </body>
</html>
