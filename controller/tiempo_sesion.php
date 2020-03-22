<?php
    if(isset($_SESSION['tiempo'])) {
        $inactivo = 1200;
        $vida_session = time() - $_SESSION['tiempo'];
            if($vida_session > $inactivo)
            {
                session_unset();
                session_destroy();
                header("Location: ../");
                exit();
            }
    }
    $_SESSION['tiempo'] = time();
?>