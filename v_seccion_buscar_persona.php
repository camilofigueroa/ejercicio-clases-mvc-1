<html>
    <head>
        <title></title>

        <?php include( "estilo.php" ); ?>
    </head>

    <body>
        
        <?php include( "menu.php" ); ?>

        Buscar persona.
        <br><br><br>

        <form action="c_buscar_persona_respuesta.php">
            Digite el nombre
            <input type="text" name="nombre_buscado">
            <input type="submit">     
        </form>

    </body>
</html>