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
        <?php
            $players = array(
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
        ?>
        <table border="1">
            <tr><th>背番号</th><th>名前</th><th>ポジション</th><th>出身</th><th>入団年</th></tr>
            <?php
                foreach ($players as $x) {
                    echo "<tr><td>" . $x['id'] . "</td>";
                    echo "<td>" . $x['name'] . "</td>";
                    echo "<td>" . $x['position'] . "</td>";
                    echo "<td>" . $x['from'] . "</td>";
                    echo "<td>" . $x['year'] . "</td></tr>";
                }
            ?>
        </table>
        <pre>
            <?php
                var_dump($players);
            ?>
        </pre>
    </body>
</html>
