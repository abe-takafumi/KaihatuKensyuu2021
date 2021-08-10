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
                width: 150px;

            }
        </style>
        <title>個人認証</title>
    </head>
    <body>
        <table border="1">
            <?php
                $siki = array(
                    array(
                        "kisetu" => "季節",
                        "hana" => "花",
                        "kudamono" => "旬の果物",
                        "kikan" => "期間",
                        "event" => "行事",
                    ),
                    array(
                        "kisetu" => "春",
                        "hana" => "桜",
                        "kudamono" => "さくらんぼ<br>・マンゴー",
                        "kikan" => "3~5月",
                        "event" => "入学式・卒業式",
                    ),
                    array(
                        "kisetu" => "夏",
                        "hana" => "ひまわり",
                        "kudamono" => "スイカ・桃",
                        "kikan" => "6~8月",
                        "event" => "七夕",
                    ),
                    array(
                        "kisetu" => "秋",
                        "hana" => "コスモス",
                        "kudamono" => "梨・柿",
                        "kikan" => "9~11月",
                        "event" => "ハロウィン",
                    ),
                    array(
                        "kisetu" => "冬",
                        "hana" => "山茶花",
                        "kudamono" => "みかん・いちご",
                        "kikan" => "12~2月",
                        "event" => "クリスマス",
                    )
                );
                foreach($siki as $team){
                    echo "<tr>";
                    foreach($team as $x){
                        echo "<td>".$x."</td>" ;
                    }
                    "</tr>";
                }
                echo "<pre>";
                var_dump($siki);
                "</pre>";
            ?>
        </table>
    </body>
</html>
