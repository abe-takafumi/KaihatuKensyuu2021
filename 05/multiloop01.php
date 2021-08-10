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
                width: 75px;
            }
        </style>
        <title>個人認証</title>
    </head>
    <body>
        <table border="1">
            <?php
                $sta = array("上沢", "伊藤", "加藤", "池田", "立野");
                $mid = array("堀", "河野", "ロド", "井口", "杉浦");
                $inf = array("石川", "高濱", "渡邊", "野村", "石井");
                $out = array("西川", "近藤", "淺間", "万波", "王");
                $hamu = array($sta, $mid, $inf, $out);

                foreach($hamu as $team){
                    echo "<tr>";
                    foreach($team as $x){
                        echo "<td>".$x."</td>" ;
                    }
                    "</tr>";
                }
                echo "<pre>";
                var_dump($hamu);
                "</pre>";
            ?>
        </table>
    </body>
</html>
