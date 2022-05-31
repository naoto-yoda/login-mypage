<?php
mb_internal_encoding("utf8");

try {
$pdo = new PDO("mysql:dbname=lesson02;host=localhost;", "root", "mysql");
} catch(PDOException $e) {
    die("<p>申し訳ございません。現在サーバーが混み合っており一時的にアクセスが出来ません。<br>しばらくしてから再度’ログインをして下さい。</p>
    <a href='http://localhost/login_mypage/login.php'>ログイン画面へ</a>");
}

$stmt = $pdo -> prepare("insert into login_mypage(name, mail, password, picture, comments)values(?, ?, ?, ?, ?)"); 

$stmt -> bindValue(1, $_POST['name']);
$stmt -> bindValue(2, $_POST['mail']);
$stmt -> bindValue(3, $_POST['password']);
$stmt -> bindValue(4, $_POST['picture']);
$stmt -> bindValue(5, $_POST['comments']);

$stmt -> execute();
$pdo = NULL;

header('Location:after_register.html');
?>