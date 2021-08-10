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
                width: 120px;
            }
        </style>
        <title>個人認証</title>
    </head>
    <body>
        <table border="1">
            <?php
                $me_data = array(
                    'fruit' => 'スイカ',
                    'sport' => '野球',
                    'town' => '横浜',
                    'age' => 21,
                    'food' => 'カレーライス'
                );

                foreach($me_data as $each){
                    echo $each . "<br/>";
                }

                foreach($me_data as $key => $value){
                    echo "<tr><td>".$key."</td><td>".$value."</td></tr>";
                }
                echo "<pre>";
                var_dump($me_data);
                "</pre>";
            ?>
        </table>
    </body>
</html>
