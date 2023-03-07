<?php
    $conn = mysqli_connect('localhost','Dario','test1234','drustvenamreza');
    if(!$conn){
        echo 'Connection error: '. mysqli_connect_error();
    }

    $temp =1;
    if(isset($_POST['Login']))
    {       
        if($_POST['Login'] == "true")
        {
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            $password = mysqli_real_escape_string($conn,$_POST['lozinka']);
            $sql =  'SELECT * FROM users ORDER BY Id';
            $result = mysqli_query($conn,$sql);
            $users = mysqli_fetch_all($result,MYSQLI_ASSOC);
            mysqli_free_result($result);
            print_r($email);
            foreach($users as $user)
            {
                if($user['email']== $email && $user['password']== $password)
                    header('Location: hexa.php');

            }
        }
    } if(isset($_POST['Register'])){
        if($_POST['Register'] == "true")
        {
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            $username = mysqli_real_escape_string($conn,$_POST['username']);
            $password = mysqli_real_escape_string($conn,$_POST['password']);
            $sql = "INSERT INTO users(username,email,password) values ('$username','$email','$password')";
            if(mysqli_query($conn,$sql)){
                header('Location: hexa.php');
            }

        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleIndex.css">
    <title>Hexa</title>
</head>
<body>
    <div class="logo">
        <img src="img/logo.png" alt="" srcset="">
    </div>
    <h1>Drustvena mreza namenjena hakerima</h1>
    
    <div class="main-wrapper">
        <form id="loginForm" class="loginForm" method="post" action="index.php" >
            <h2>Login</h2>

            <div>
                <label>Email:</label>
                <input type="email" name="email" id="login_email" placeholder="example@email.com">
            </div>

            <div>
                <label>Lozinka:</label>
                <input type="password" name="lozinka" id="login_lozinka" placeholder="******">
            </div>
            
            <div>
                <button id="btn" type="submit" name="Login" value="false">Uloguj se</button>
            </div>
        </form>
    </div>
    <div class="main-wrapper registerContainer">
        <form id="registrationForm" method="POST" action="index.php">
            <h2>Registracija korisnika</h2>
            <div>
                <label for="korisnicko_ime">Korisnicko ime: *</label>
                <input type="text" id="korisnicko_ime" name="username" placeholder="example123">
            </div>

            <div>
                <label for="email">Email adresa: *</label>
                <input type="text" id="email" name="email" placeholder="example@email.com">
            </div>

            <div>
                <label for="lozinka">Lozinka: *</label>
                <input type="password" id="lozinka" name="password" placeholder="******">
            </div>

            <div>
                <label for="ponovi_lozinku">Ponovi lozinku: *</label>
                <input type="password" id="password2" name="password2" placeholder="******">
            </div>

            <div>
                <button id="btn" type="submit" name="Register" value="false">Registruj se</button>
            </div>
        </form>
    </div> 
    <div class="no-acc-register">
        <p>Nemas nalog?</p>
        <button id="registracija">Registruj se</button>
    </div>
    
    <script src="js/Validator.js"></script>
    <script src="js/app.js"></script>
   
    
</body>
</html>