<?php
    session_start();
    include 'config.php';
  
    if(isset($_SESSION['login'])){
        header("Location: index.php");
        exit;
    }
    
    require "config.php";
    if(isset($_POST['submit'])){
        $user = $_POST['user'];
        $password = $_POST['password'];
        $query = mysqli_query($db, "SELECT * FROM akun WHERE username = '$user' OR email = '$user'");
        $result = mysqli_fetch_assoc($query);
        $username = $result['username'];
        if(password_verify($password,$result['password'])){
        
            echo "
            <script>
                alert('Selamat Datang $username');
                document.location.href = 'index.php';
            </script>
            ";
            
        } else {
            echo "
            <script>
                alert('Username dan Password Salah');
            </script>
            ";
        }
    }

    if(password_verify($password,$result['password'])) {
        $_SESSION['login'] = true;
        header("Location: index.php");
        exit;
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsiveP.css">
    <title>Login</title>
</head>
<body>
    <header class="headerPusat">
        <div class="Heads">
            <span class="header-kiri">
                <img src="assets/logo1.png" alt="">
            </span>   
    
            <div id="header-kanan">
                <a href="http://localhost/posttest7Web/" class="headK">Home</a>
                <button onclick="darkmode()" class="headK" class = "modes">
                  Mode
                </button>
              </div>
        </div>
    </header>
    <br><br><br><br><br>
    
    <div class="container login">
        <div class="form-login">
            <h3>Login</h3>
            <form action="" method="post">
                <p>Username : </p>
                <input type="text" name="user" placeholder="username" class="input">
                <p>Password :</p>
                <input type="password" name="password" placeholder="password" class="input">

                <input type="submit" name="submit" value="Login" class="submit"><br><br>
            </form>

            <p>Belum punya akun?
                <a href="register.php">Register</a>
            </p>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="jquery.js"></script>
</body>
</html>