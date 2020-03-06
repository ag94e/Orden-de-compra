<?php
    include_once 'model/acciones.php';
    $userSession = new session();
    if(isset($_SESSION['usuario'])){
        $user = new compra();
        $SeeUser = $user->setUser($userSession->getCurrentUser());
        foreach($SeeUser as $user){
            $rol = $user['rol'];
        }
        switch($rol){
            case 1:
            echo '
                <script>
                    window.location.href=\'views/inicio.php\';
                </script>
            ';
            break;
            case 2:
            echo '
                <script>
                    window.location.href=\'views/home-captura.php\';
                </script>
            ';
            break;
            case 3:
            echo '
                <script>
                    window.location.href=\'views/compra.php\';
                </script>
                ';
            break;
            case 4:
            echo '
                <script>
                    window.location.href=\'views/inicio.php\';
                </script>
            ';
            break;
            default: '
                <script>
                    alert(\'Usuario sin rol, verifique con el administrador\');
                    window.location.href=\'/\';
                </script>
            ';
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/login.css">
    <title>Login</title>
</head>
<body>
    <section class="login">
        <div class="login__container">
                <h2>Inicia sesión</h2>
                <form action="controller/login.php" class="login__container--form" method="post">
                    <input type="text" class="input" placeholder="Usuario" name='usuario'>
                    <input type=password class="input" placeholder="Contraseña" name='contra'>
                    <button class="button">Iniciar sesión</button>
                </form>
        </div>
    </section>
</body>
</html>