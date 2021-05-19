<?php

    class Vimprimir
    {
        static function imprimir( $resultado )
        {
            $salida = "<table border='1px'>";

            while( $fila = mysqli_fetch_array( $resultado ) )
            {
                $salida .= "<tr>";

                for( $i = 0; $i < mysqli_num_fields( $resultado ); $i ++ )
                {
                    $salida .= "<td>".$fila[ $i ]."</td>";

                    if( $i + 1 == mysqli_num_fields( $resultado ) )
                    {
                        $salida .= "<td><a href='#'>Editar</a></td>";
                        $salida .= "<td><a href='#'>Borrar</a></td>";
                    }
                }

                $salida .= "</tr>";
            }            

            $salida .= "</table>";

            return $salida;
        }
    }
    