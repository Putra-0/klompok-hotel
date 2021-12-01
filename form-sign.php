<?php
session_start();

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}
include 'koneksi.php';

if (isset($_POST["signup"])) {
    if (registrasi($_POST) > 0) {
        echo "
<script>
    alert('Registrasi Berhasil!');
    document.location.href = 'form-sign.php';
</script>
";
    } else {
        echo mysqli_error($db);
    }
}
if (isset($_POST["login"])) {

    //tangkap data
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($db, "SELECT * FROM tb_customer WHERE email = '$email'");
    //cek username
    if (mysqli_num_rows($result) === 1) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["pass"])) {

            //set session
            $_SESSION["login"] = true;
            $_SESSION["email"] = $email;

            header("Location: dashboard.php");
            exit;
        }
    }
    $error = true;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Mercure</title>
    <link rel="icon" href="images/logo-m.png">
    <link rel="stylesheet" href="css/sign.css">
</head>

<body>
    <div class="container right-panel-active">
        <!-- Sign Up -->
        <div class="container__form container--signup">
            <form action="#" class="form" method="post">
                <h2 class=" form__title">Sign Up</h2>
                <input type="email" placeholder="Email" name="email" id="email" class="input" required />
                <input type="password" placeholder="Password" name="password" id="password" class="input" required />
                <input type="password" placeholder="Re-type Password" name="password2" id="password" class="input" required />
                <input type="submit" class="btn" name="signup" value="Create Account">
            </form>
        </div>

        <!-- Sign In -->
        <div class="container__form container--signin">
            <form action="#" class="form" method="POST">
                <h2 class="form__title">Sign In</h2>
                <?php if (isset($error)) : ?>
                    <p style="color: red; font-style: italic;">Username/Password Salah!</p>
                <?php endif ?>
                <input type="email" placeholder="Email" name="email" class="input" />
                <input type="password" placeholder="Password" name="password" class="input" />
                <a href="#" class="link">Forgot your password?</a>
                <button class="btn" name="login">Sign In</button>
            </form>
        </div>

        <!-- Overlay -->
        <div class="container__overlay">
            <div class="overlay">
                <div class="overlay__panel overlay--left">
                    <button class="btn" id="signIn">Sign Up</button>
                </div>
                <div class="overlay__panel overlay--right">
                    <button class="btn" id="signUp">Sign In</button>
                </div>
            </div>
        </div>
    </div>
    <script src="js/sign.js"></script>
</body>

</html>