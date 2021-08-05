<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>個人認証</title>
    </head>
    <body>
        <h1>個人認証画面</h1>
        <form method='post' action='result02.php'>
            <p>
                ログインID<br>
                <input type="text" name="id" placeholder="ログインIDを入力" />
            </p>
            <p>
                パスワード<br>
                <input type="password" name="pw" placeholder="パスワードを入力" />
            </p>
            <input type="submit" value="ログイン">
            <input type="reset" value="リセット">
        </form>
    </body>
</html>
