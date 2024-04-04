<select name="repartidor" class="selectrepartidor">
                <option value="">Selecciona un repartidor</option><!-- muestra el encabezado para el select con la primera opcion -->

                <?php // agregamos codigo php para poder realizar una consulta en nuestro html
                include_once("../Servidor/conexion.php"); //importamos todas la variables del documento conexion.php para poderlas usar aqui
                $consulta = "SELECT id_usuario,id_repartidor FROM repartidores"; //consultamos los id_usuarios y id_repartidor que existen en la tabla repartidores
                $ejecutar = mysqli_query($conexion, $consulta); //ejecutamos la consulta estableciendo conexion con la bd y pedirle la consulta 


                if (mysqli_num_rows($ejecutar) > 0) { // revisamos que la ejecucion tiene filas con datos
                  while ($persona = mysqli_fetch_array($ejecutar)) { //hacemos un arreglo con los datos que obtubimos en ejecutar osea la consulta
                    $id_repartidor = $persona['id_repartidor'];

                    $consulta2 = "SELECT nombre FROM usuarios WHERE id_usuario=$id_repartidor";
                    $ejecutar2 = mysqli_query($conexion, $consulta2);

                    if ($ejecutar2) {
                      echo "si la armo";
                ?>
                      <option value="<?php echo $persona['id_usuario']; ?>"><!-- imprimimos el arreglo con el id repartidor en este caso es lo que va valer-->
                        <?php echo $persona['nombre']; ?><!--imprimimos el arreglo con el id usuario en este caso es lo que va mostrar la opcion-->
                      </option>
                <?php
                    }else{
                      echo "te fallo master";
                    }
                  }
                } ?>
              </select>
