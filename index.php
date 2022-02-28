<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Kwai</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">

            <div class="kwai__logo">
                <img src="./assets/img/kwai.png" alt="Kwai" class="kwai__logo-img" />
            </div>
            <div class="kwai__headings">
                <div class="kwai__title">Iniciar Sesión en Kwai</div>
                <div class="kwai__subtitle">Inicia esión para ver más videos interesantes</div>
            </div>
            
            <div class="kwai__social">
                <div class="social__button facebook">
                    <img 
                    class="kwai__social-icon" 
                    src="./assets/img/facebook.svg" 
                    alt="facebook" />
                    <span>Iniciar sesión con facebook</span></div>
                <div class="social__button Google">
                    <img 
                    class="kwai__social-icon" 
                    src="./assets/img/google.svg" 
                    alt="Google" />
                    <span>Iniciar sesión con Google</span></div>
                <div class="social__button Twitter">
                    <img 
                    class="kwai__social-icon" 
                    src="./assets/img/mobile.svg" 
                    alt="Teléfono" /
                    >Iniciar sesión con Teléfono</div>

            </div>
            <div class="kwai__form">
                <form action="">
                    <input type="text" name="email" placeholder="email" class="kwai__form-input "/>
                    <input type="password" name="password" placeholder="password" class="kwai__form-input" />
                    <button class="button" type="submit">Login</button>
                </form>
            </div>

    </div>
</body>
</html>