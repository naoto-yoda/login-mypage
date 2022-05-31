<?php
if(isset($_SESSION['id'])) {
    header("Location:mypage.php");
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
    <header>
        <img src="4eachblog_logo.jpg" alt="logo">
        <div class="login"><a href="login.php">ログイン</a></div>
    </header>
    
    <main>
        <div class="form_container">
            <form action="mypage.php" method="post">

            <div class="error_message">メールアドレスまたはパスワードが間違っています。</div>

            <div class="information">
                <label>メールアドレス</label><br>
                <input type="text" name="mail" size="65" class="formbox" value="">
            </div><!-- .information -->
            <div class="information">
                <label>パスワード</label>
                <input type="text" name="password" size="65" class="formbox" value="">
            </div><!-- .information -->

            <div class="login_check">
                <label><input type="checkbox" class="checkbox" size="40" name="login_keep" value="login_keep">ログイン状態を保持する</label>
            </div><!-- .login_check -->

            <div class="login_error">
                    <input type="submit" class="submit_button" size="35" value="ログイン">
            </div><!-- .login_error -->
            </form>
        </div><!-- .form_container -->
    </main>

    <footer>
        © 2018 InterNous.inc. All rights reserved
    </footer>

</body>
</html>