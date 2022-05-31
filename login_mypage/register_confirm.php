<?php
mb_internal_encoding("utf8");

$temp_pic_name = $_FILES['picture']['tmp_name'];

$original_pic_name = $_FILES['picture']['name'];
$path_filename = './image/'.$original_pic_name;

move_uploaded_file($temp_pic_name, './image/'.$original_pic_name);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="register_confirm.css">
</head>

<body>
    <header>
        <a href="#"><img src="4eachblog_logo.jpg" alt="logo"></a>
        <div class="login"><a href="login.php">ログイン</a></div>
    </header>

    <main>
        <div class="form_container">
            <h2>会員登録 確認</h2>

            <p class="pfirst">こちらの内容で登録しても宜しいでしょうか？</p>
            <div class="information">
                <p>氏名：<?php echo $_POST['name']; ?></p>
            </div><!-- .information -->
            <div class="information">
                <p>メール：<?php echo $_POST['mail']; ?></p>
            </div><!-- .information -->
            <div class="information">
                <p>パスワード：<?php echo $_POST['password']; ?></p>
            </div><!-- .information -->
            <div class="information">
                <p>プロフィール画像：<?php echo $original_pic_name; ?></p>
            </div><!-- .information -->
            <div class="information">
                <p>コメント：<?php echo $_POST['comments']; ?></p>
            </div><!-- .information -->

            <div class="buttons">       
                <div class="return_button">
                    <a href="register.php">戻って修正する</a>
                </div><!-- .return_button -->
                    
                <form action="register_insert.php" method="post">
                    <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
                    <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
                    <input type="hidden" value="<?php echo $_POST['password']; ?>" name="password">
                    <input type="hidden" value="<?php echo $path_filename; ?>" name="picture"> 
                    <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
                    <input type="submit" value="登録する" class="register_button" />
                </form>
            </div><!-- .buttons -->
        </div><!-- .form_container -->
    </main>

    <footer>
        © 2018 InterNous.inc. All rights reserved
    </footer>

</body>
</html>