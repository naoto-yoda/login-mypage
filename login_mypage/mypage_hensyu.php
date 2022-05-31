<?php
mb_internal_encoding("utf8");

if (empty($_POST['from_mypage'])) {
    header("Location:login_error.php");
}

session_start();
?>


<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
</head>

<body>
    <header>
        <img src="4eachblog_logo.jpg">
        <div class="logout"><a href="log_out.php">ログアウト</a></div>
    </header>

    <main>
        <div class="form_container">
            <h2>会員情報</h2>
            <div class="form_inner">
                <p>こんにちは！　<?php echo $_SESSION['name']."さん"; ?></p>

                <form action="mypage_update.php" method="post">
                    <div class="form_content">    
                        <img src="<?php echo $_SESSION['picture']; ?>" class="picture">
                        <div class="form_content_right">
                            <p>氏名：<input type="text" size="30" value="<?php echo $_SESSION['name'];  ?>" name="name"></p>
                            <p>メール：<input type="text" size="30" value="<?php echo $_SESSION['mail'];  ?>" name="mail"></p>
                            <p>パスワード：<input type="text" size="30" value="<?php echo $_SESSION['password'];  ?>" name="password">
                            </p>
                        </div><!-- .form_content_right -->
                    </div><!-- .form_content -->
                    <textarea rows="3" cols="75" name="comments"><?php echo $_SESSION['comments']; ?></textarea>

                    <div class="button_change">
                        <input type="submit" class="submit_button" size="35" value="この内容に変更する">
                    </div><!-- .button_change -->
                </form>
            </div><!-- .form_inner -->
        </div><!-- .form_container -->
    </main>

    <footer>
        © 2018 InterNous.inc. All rights reserved
    </footer>

</body>
</html>


