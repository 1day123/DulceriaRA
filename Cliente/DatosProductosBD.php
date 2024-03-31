<?php
            include("../Servidor/Conexion.php");

            $id_producto=$_POST['id_producto'];
            
            
            $consulta = "SELECT * FROM productos WHERE id_producto = $id_producto";
            $ejecutar = mysqli_query($conexion, $consulta);
            
            if (mysqli_num_rows($ejecutar)>0) {
                while ($datos = mysqli_fetch_assoc($ejecutar)) {
                    $precio = $datos['precio'];
                    $nombreproducto = $datos['nombre'];
                    $caducidad = $datos['caducidad'];

                    
                    echo "Nombre: ".$nombreproducto." Precio: ".$precio."Caducidad: ".$caducidad;
            
                }
            } else {
                echo "te fallo master";
            }
            




            ?>