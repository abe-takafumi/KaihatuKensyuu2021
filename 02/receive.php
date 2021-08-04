<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>第二回課題、フォーム部品練習</title>
    </head>
    <body>
        <pre> <!//DEBUGプリントのため、あくまで試作用>
            <?php
                var_dump($_GET);//送られたデータすべてを出力
                ?>
        </pre>
        <?php
            echo "これは". $_GET['name'] . " さんのアンケート結果です<br/>";
            echo "このアンケート結果は " . $_GET['post'] . " へ送信されます<br/>";
            echo $_GET['name'] . "さんが一番好きな食べ物は「 " . $_GET['radio'] . "」です。<br/>";
            echo "食べたい季節は " . $_GET['kisetu'] . " だそうです。<br/>";
            echo "好きなトッピングは " . $_GET['hobby'][0] . ", " . $_GET['hobby'][1] . ", " . $_GET['hobby'][2] .  " ですね。<br/>";
            echo $_GET['name'] . "さんからのご意見です。<br/> 「" . $_GET['kansou']."」" ;
        ?>

    </body>
</html>
