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
            $nakata = array(
                'position' => 'ファースト',
                'height' => 183,
                'highschool' => '大阪桐蔭',
                'age' => 32,
                'title_2020' => '打点王'
                );
            echo "<pre>";
            var_dump($nakata);
            "</pre>";
            echo "ポジション：".$nakata['position']."<br>";
            echo "身長：".$nakata['height']."<br>";
            echo "出身高校：".$nakata['highschool']."<br>";
            echo "年齢：".$nakata['age']."<br>";
            echo "2020年でのタイトル：".$nakata['title_2020']."<br>";
            echo "<hr>";
            // 書き方その２（php5.4以降)
            $ohta = array(
                'position' => 'ライト',
                'height' => 188,
                'highschool' => '東海大相模',
                'age' => 31,
                'title_2020' => 'GG'
                );
            echo "<pre>";
            var_dump($ohta);
            "</pre>";
            echo "ポジション：".$ohta['position']."<br>";
            echo "身長：".$ohta['height']."<br>";
            echo "出身高校：".$ohta['highschool']."<br>";
            echo "年齢：".$ohta['age']."<br>";
            echo "2020年でのタイトル：".$ohta['title_2020']."<br>";
            echo "<hr>";
            // 書き方その３
            $uwasawa['position'] = 'ピッチャー';
            $uwasawa['height'] = '187';
            $uwasawa['highschool'] = '専修大学松戸';
            $uwasawa['age'] = 27;
            $uwasawa['title_2020'] = 'なし';
            echo "<pre>";
            var_dump($uwasawa);
            "</pre>";
            echo "ポジション：".$uwasawa['position']."<br>";
            echo "身長：".$uwasawa['height']."<br>";
            echo "出身高校：".$uwasawa['highschool']."<br>";
            echo "年齢：".$uwasawa['age']."<br>";
            echo "2020年でのタイトル：".$uwasawa['title_2020']."<br>";
            echo "<hr>";
        ?>
    </body>
</html>
