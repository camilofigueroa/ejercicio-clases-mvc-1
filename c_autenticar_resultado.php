<?php

    //Incluimos las clases
    include( "Consultas.php" );
    include( "Vimprimir.php" );

    //Capturamos variables del formulario
    $documento = $_GET[ 'documento' ];
    $clave = $_GET[ 'clave' ];

    //echo $documento." ".$clave;

    //Usamos el método autenticar.
    $r = Consultas::autenticacion( $documento, $clave );

    //Imprimir si estamos autenticados o no.
    if( Vimprimir::imprimir( $r, 1 ) == "1" )
    {
        header( "location: c_seccion.php" );

    }else{
            header( "location: c_autenticar.php" );
        }