<?php    
    
    include( "Consultas.php" );
    include( "Vimprimir.php" );

    $r = Consultas::consultar_citas_medicas();
    $r = Vimprimir::imprimir( $r );

    echo $r;
    