<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Login</h3>
    <form method="POST">
        <label for="">Email</label>
        <input type="text" name="email" id="email"><br>

        <label for="">Password</label>
        <input type="password" name="password" id="password"><br>

        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>
<?php 
$email_login = 'admin@gmail.com';
$pw_login = '123456';
if (isset($_POST['login'])) {
    $email= $_POST['email'];
    $password= $_POST['password'];

    if (($email === $email_login) AND ($password === $pw_login)){
        echo "Berhasil";
        // $pw_md5 = md5($pw_login);
        session_start();
        $_SESSION['email']=$email;
        $_SESSION['pw']=$password;
        header('location: index.php');

    } else {
        echo "Gagal";
    }
}
 ?>