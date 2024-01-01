<?php include('./connection.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <div class="register">
            <h1 class="title">Register</h1>
        </div>
        <div class="form">
            <form action="./proses/ProsesRegister.php" method="POST">
                <table border="0">
                    <tr>
                        <td>
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="username" required>
                        </td>
                        <td>
                            <label for="nama">Nama:</label><br>
                            <input type="text" id="nama" name="nama" required>
                        </td>
                    </tr>
                

                    <tr>
                        <td colspan="2">
                            <label for="telepon">Nomor Telepon:</label><br>
                            <input type="text" id="telepon" name="telepon" minlength="8" maxlength="15" required>
                        </td>
                    </tr>
                    

                    <tr>
                        <td colspan="2">
                        <label for="email">Email:</label><br>
                        <input type="email" id="email" name="email" required>
                        </td>
                    </tr>

                    <tr>  
                        <td >
                            <label for="tempat_lahir">Tempat Lahir:</label><br>
                            <input type="text" id="tempat_lahir" name="tempat_lahir" required>
                        </td>
                        <td>
                            <label for="tgl_lahir">Tanggal Lahir:</label><br>
                            <input type="date" id="tgl_lahir" name="tgl_lahir" required>
                        </td>
                    </tr>
                    

                    <tr>
                        <td colspan="2">
                            <label>Jenis Kelamin:</label><br>
                            <input type="radio" id="laki" name="jenis_kelamin" value="Laki-laki" required>
                            <label for="laki">Laki-laki</label>
                            &emsp13;
                            <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
                            <label for="perempuan">Perempuan</label>
                        </td>
                    </tr>
                
                    
                    <tr>
                        <td colspan="2">
                            <label for="password">Password:</label><br>
                            <input type="password" id="password" name="password" minlength="8" maxlength="16" required>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <label for="ulangi_password">Ulangi Password:</label><br>
                            <input type="password" id="ulangi_password" name="ulangi_password" minlength="8" maxlength="16" required>
                        </td>
                    </tr>
                
                    <tr>
                        <td colspan="2"  class="button"><button type="submit" value="Daftar">Daftar</button></td>
                    </tr>

                    <tr>
                        <td>Sudah punya akun?</td>
                        <td class="link"><a href="./Login.php">Login</a></td>
                    </tr>
                </table>    
            </form>
        </div>
     </div>
    
    
</body>
<?php include 'notif.php'; ?>
</html>
