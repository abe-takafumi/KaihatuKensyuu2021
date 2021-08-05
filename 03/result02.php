<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>個人情報認証結果</title>
    </head>
    <body>
        <h1>個人情報認証結果画面</h1>
        <?php
            $id="admin";
            $pw="pass";
            $gold_id="admin_gold";
            $gold_pw="pass_gold";
            if($_POST['id'] == $gold_id AND $_POST['pw'] == $gold_pw){
                echo "名前：".$id."<br>登録内容：ゴールド会員";
            } else if($_POST['id'] == $gold_id AND $_POST['pw'] == $gold_pw) {
                echo "名前".$id."<br>登録内容：ノーマル会員";
            }else{
                echo "登録内容と一致しません。個人情報の登録は行いましたか？";
            }
        ?>
    </body>
</html>
