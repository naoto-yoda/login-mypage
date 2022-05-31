<?php
session_start();

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
        <form action="mypage.php" method="post">
            <div class="form_container">
                <div class="information">
                    <label>メールアドレス</label><br>
                    <input type="text" name="mail" class="formbox" value="<?php echo $_COOKIE['mail']; ?>">
                </div><!-- .information --> 
                <div class="information">
                    <label>パスワード</label><br>
                    <input type="password" name="password" class="formbox" value="<?php echo $_COOKIE['password']; ?>">
                </div><!-- .information -->

                <div class="login_check">
                    <label><input type="checkbox" name="login_keep" value="login_keep" class="checkbox"
                    <?php
                    if(isset($_COOKIE['login_keep'])) {
                        echo "checked='checked'";
                    }
                    ?>>
                    ログイン状態を保持する</label>
                </div><!-- .login_check -->

                <div class="login_button">
                        <input type="submit" class="submit_button" size="35" value="ログイン">
                </div><!-- .login_button -->
            </div><!-- .form_container -->
        </form>
    </main>

    <footer>
        © 2018 InterNous.inc. All rights reserved
    </footer>

</body>
</html>