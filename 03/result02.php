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
            if($_POST['id'] == $id AND $_POST['pw'] == $pw){
                echo "ようこそ、".$id."さん！。よろしく！";
            } else if($_POST['id'] == $gold_id AND $_POST['pw'] == $gold_pw) {
                echo "ようこそ、".$id."様。よろしくお願いいたします。";
            }else{
                echo "ログインID・パスワードのどちらか、もしくはいづれも間違っています。。";
            }
        ?>
    </body>
</html>
