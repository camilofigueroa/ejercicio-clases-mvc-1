<?php

    include( "Sesiones.php" );

    Sesiones::iniciar_sesion();
    $_SESSION[ 'usuario' ] = "";

    include( "v_autenticar.php" );