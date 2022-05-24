
<!DOCTYPE html>
    <head>
        <!--<meta http-equiv="refresh" content="5" />-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registrazione</title>
        <link rel="icon" href="../../src/assets/img/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="../../bootstrap/css/styles.css" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    </head>
    <body id="page-top" class="back5">
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container">
                <a class="logo" href="#page-top"><img src="../../src/assets/img/logo.png" width="120px" height="110px" object-fit="scale-down" alt="logo"></a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav__links navbar-nav ms-auto">
                        <li id="indietro" class="nav-item"><a class="nav-link" href="../login/index.php">Indietro</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="mb-custom"></div>
        <div id="loader" style="display: none;"></div>
        <div id="form" class="text">
            <form action="signup.php" class="form-signup" method="post" name="myRegistr" onsubmit="return validaForm();">
                <div class="subtext">Registrati</div>
                <label class="checky" for="nome">Nome:</label>
                <input type="nome" name="nome" class="form-control" placeholder="Nome" size="30" maxlength="30"><!--box-shadow: 0 0 0 0.25rem #ffc4657a;-->
                <div class="mb-3"></div>
                <label class="checky" for="cognome">Cognome:</label>
                <input type="cognome" name="cognome" class="form-control" placeholder="Cognome" size="30" maxlength="30">
                <div class="mb-3"></div>
                <label class="checky" for="email">Email:</label>
                <input type="email" name="email" class="form-control" placeholder="Indirizzo email" size="40" maxlength="40">
                <div class="mb-3"></div>
                <label class="checky" for="confermaemail">Conferma email:</label>
                <input type="email" name="confermaemail" class="form-control" placeholder="Indirizzo email" size="40" maxlength="40">
                <div class="mb-3"></div>
                <label class="checky" for="password">Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Password" size="30" maxlength="30">
                <div class="mb-3"></div>
                <label class="checky" for="confermapassword">Conferma password:</label>
                <input type="password" name="confermapassword" class="form-control" placeholder="Password" size="30" maxlength="30">
                <div class="mb-3"></div>
                <label class="checky" for="tel">Telefono:</label>
                <input type="tel" name="tel" class="form-control" placeholder="Telefono" max="12">
                <div class="mb-3"></div>
                <label class="checky" for="data">Data di nascita:</label>
                <input type="date" name="data" class="form-control" max="2021-12-31" min="1900-01-01">
                <div class="mb-3"></div>
                <button class="btn-grad" name="signupButton" type="submit">Registrati</button>
                <!--<input type="submit" value="Registrati">-->
            </form>
        </div>
        <script src="../../bootstrap/js/bootstrap.bundle.js"></script>
        <script src="validaForm.js"></script>
        <script src="../../scripts/loader.js" ></script>
    </body>
</html>