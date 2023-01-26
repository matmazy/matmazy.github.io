<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<?php include "header.php" ?>
<main>
    <div>
        <div class="fr">
            <h2>Přihlaš se sousede</h2>
            <h1 style="color: #6DC400">Přihlášení</h1>
            <div class="fb">
                <a href="facebook.com">
                    <img src="data/fbIco.svg">
                    <p>Přihlásit se přes Facebook</p>
                </a>
            </div>
            <div class="g">
                <a href="google.com">
                    <img src="data/GoogleIco.svg">
                    <p>Přihlásit se přes Google</p>
                </a>
            </div>
            <p>------Nebo pomocí vytvořeného účtu------</p>
            <form action="profile.php">
                <label>
                    Email*
                    <input type="text" placeholder="example@email.cz">
                </label>
                <label>
                    Heslo*
                    <input type="password" placeholder="Vaše heslo">
                </label>
                <button class="btnSave">Přihlaš se</button>
            </form>
            <p class="cUc">Ještě nemáš účet? <a href="register.php">Registruj se</a></p>
        </div>
        <div class="sc">
            <img src="data/log3.svg">
        </div>
    </div>
</main>
<?php include "footer.php" ?>
</body>
</html>
