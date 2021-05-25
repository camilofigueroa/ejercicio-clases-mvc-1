<?php

    include( "Sesiones.php" );
    Sesiones::verificar_sesion();

    //Aquí la vista.
    include( "v_seccion_buscar_persona.php" );

    