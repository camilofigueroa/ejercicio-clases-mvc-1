<?php
    $b = $_GET['nombre_buscado'];

    //No se me antoja inclurilo
    include( "Consultas.php" );
    include( "Vimprimir.php" );

    include( "Sesiones.php" );
    Sesiones::verificar_sesion();

    $r = Consultas::consultar_persona_nombre( $b );
    $r = Vimprimir::imprimir( $r );

    include( "v_buscar_persona_respuesta.php" );