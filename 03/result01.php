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
            $password="password";
            if($_POST['id'] == $id AND $_POST['password'] == $password){
                echo "ようこそ、".$id."さん！";
            } else if($_POST['id'] == $id AND $_POST['password'] != $password) {
                echo "パスワードが間違っています。お忘れでしょうか？";
            }else if($_POST['id'] != $id AND $_POST['password'] == $password){
                echo "ログインIDが間違っています。お忘れでしょうか？";
            }else{
                echo "ログインID、パスワードともに間違っています。<br>個人情報の登録は行いましたか？";
            }
        ?>
    </body>
</html>
