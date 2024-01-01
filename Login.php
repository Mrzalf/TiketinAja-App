<?php include('./connection.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<div class="section">
        <div class="welcome">
            <h1 class="title1">Selamat Datang di TikeinAja App</h1>
        </div>
    </div>
<body>
    <div class="container">
        <div class="login">
            <h1 class="title">Login</h1>
        </div>
        <div class="form">
            <form action="./proses/ProsesLogin.php" method="POST">
                <table border="0">
                    <tr>
                        <td colspan="2">
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="username" required placeholder="Masukkan Username Anda...">
                        </td>
                    </tr>
                    <tr>
                         <td colspan="2">
                            <label for="password">Password:</label><br>
                            <input type="password" id="password" name="password" minlength="8" maxlength="16" required placeholder="Masukkan Password Anda...">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="button"><button type="submit" value="Login">Login</button></td>
                    </tr>
                    <tr>
                        <td>Belum punya akun?</td>
                        <td class="link"><a href="./Register.php">Daftar</a></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
<?php include 'notif.php'; ?>
</html>

