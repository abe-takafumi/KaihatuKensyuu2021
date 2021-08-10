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
                width: 80px;
                text-align:left;
            }
        </style>
        <title>個人認証</title>
    </head>
    <body>
        <table border="1">
            <?php
                $players = array(
                    array(
                        "id" => "背番号",
                        "name" => "名前",
                        "position" => "ポジション",
                        "from" => "出身地",
                        "year" => "入団年",
                    ),
                    array(
                        "id" => "3",
                        "name" => "梶谷隆幸",
                        "position" => "外野手",
                        "from" => "島根",
                        "year" => "2007",
                    ),
                    array(
                        "id" => "44",
                        "name" => "佐野恵太",
                        "position" => "外野手",
                        "from" => "岡山",
                        "year" => "2017",
                    ),
                    array(
                        "id" => "15",
                        "name" => "井納翔一",
                        "position" => "投手",
                        "from" => "東京",
                        "year" => "2013",
                    )
                );

                foreach($players as $team){
                    echo "<tr>";
                    foreach($team as $x){
                        echo "<td>".$x."</td>" ;
                    }
                    "</tr>";
                }
                echo "<pre>";
                var_dump($players);
                "</pre>";
            ?>
        </table>
    </body>
</html>
