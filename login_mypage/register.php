<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>マイページ作成</title>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>

<body>
    <header>
        <img src="4eachblog_logo.jpg" alt="logo">
            <div class="login"><a href="login.php">ログイン</a></div>
    </header>

    <main>
        <form action="register_confirm.php" method="post" enctype="multipart/form-data">
            <div class="form_container">
                <h2>会員登録</h2>

                <div class="information">
                    <div class="hissu">必須</div><label>氏名</label><br>
                    <input type="text" class="formbox" size="40" name="name" required>
                </div><!-- .information -->
                <div class="information">
                    <div class="hissu">必須</div><label>メールアドレス</label><br>
                    <input type="text" class="formbox" size="40" name="mail" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                </div><!-- .information -->
                <div class="information">
                    <div class="hissu">必須</div><label>パスワード（半角英数字6文字以上）</label><br>
                    <input type="password" class="formbox" size="40" name="password" id="password" pattern="^[a-zA-Z0-9]{6,}$" required>
                </div><!-- .information -->
                <div class="information">
                    <div class="hissu">必須</div><label>パスワード確認</label><br>
                    <input type="password" class="formbox" size="40" name="confirm_password" id="confirm" oninput="ConfirmPassword(this)" required>
                </div><!-- .information -->
                <div class="information">
                    <label>プロフィール写真</label><br>
                    <input type="hidden" name="max_file_size" value="1000000" />
                    <input type="file" class="formbox" size="40" name="picture" />
                </div><!-- .information -->
                <div class="information">
                    <label>コメント</label><br>
                    <textarea rows="5" cols="45" name="comments"></textarea>
                </div><!-- .information -->

                <div class="toroku">
                    <input type="submit" value="登録する" value="35" class="submit_button">
                </div><!-- .toroku -->
            </div><!-- .form_container -->
        </form>
    </main>

    <footer>
        © 2018 InterNous.inc. All rights reserved.
    </footer>

    <script>
        function ConfirmPassword(confirm) {
            var input1 = password.value;
            var input2 = confirm.value;
            if(input1 != input2) {
                confirm.setCustomValidity("パスワードが一致しません。");
            } else {
                confirm.setCustomValidity("");
            }
        }
    </script>

</body>
</html>