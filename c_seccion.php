<?php

    include( "Consultas.php" );
    include( "Vimprimir.php" );

    $r = Consultas::consultar_personas();
    $r = Vimprimir::imprimir( $r );

    //Aquí la vista.
    include( "v_seccion.php" );

    