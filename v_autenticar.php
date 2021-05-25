<html>
    <head>
        <title></title>

        <?php include( "estilo.php" ); ?>
    </head>

    <body>

        <form action="c_autenticar_resultado.php" method="POST">
            Documento: <input type="text" name="documento"><br>
            Clave: <input type="text" name="clave"><br>
            <input type="submit" value="Enviar">
        </form>

    </body>
</html>