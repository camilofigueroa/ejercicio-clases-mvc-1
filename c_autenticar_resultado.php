<?php

    //Incluimos las clases
    include( "Consultas.php" );
    include( "Vimprimir.php" );
    include( "Sesiones.php" );

    Sesiones::iniciar_sesion();

    //Capturamos variables del formulario
    $documento = $_POST[ 'documento' ];
    $clave = $_POST[ 'clave' ];

    //echo $documento." ".$clave;

    //Usamos el método autenticar.
    $r = Consultas::autenticacion( $documento, $clave );

    //Imprimir si estamos autenticados o no.
    if( Vimprimir::imprimir( $r, 1 ) == "1" )
    {
        $_SESSION[ 'usuario' ] = $documento;
        header( "location: c_seccion.php" );

    }else{
            header( "location: c_autenticar.php" );
        }