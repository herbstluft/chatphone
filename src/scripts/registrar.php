<?php 

            
          use MyApp\data\Database;
          use MyApp\query\ejecuta;
          use MyApp\query\Select;
          

          require("../../vendor/autoload.php");

          $query = new Select();
          $insert = new ejecuta();

          if($_POST){

          extract($_POST);

          $verficiacion_nombre="SELECT * from personas WHERE personas.nombre='$nombre'";
          $valor_nombre=$query->seleccionar($verficiacion_nombre);

          if(empty($valor_nombre)){

            $verficiacion_apellido="SELECT * from personas WHERE personas.apellido='$apellido'";
            $valor_apellido=$query->seleccionar($verficiacion_apellido);      
            if(empty($valor_apellido)){

                $verficiacion_correo="SELECT * from personas WHERE personas.correo='$correo'";
                $valor_correo=$query->seleccionar($verficiacion_correo);      
                if(empty($valor_correo)){

                    $insert_reg="INSERT INTO personas (nombre, apellido, correo) VALUES ('$nombre', '$apellido', '$correo')";
                    $insert  -> ejecutar($insert_reg);
          
                    //obtener el id del cliente
                    $cadena="select personas.id_persona as id from personas WHERE personas.nombre='$nombre' and personas.apellido='$apellido' and personas.correo='$correo'";
          
                    $id=$query -> seleccionar($cadena);
          
                    echo $cadena;
                    
                    foreach ($id as $i)
                    $id_persona= $i->id;
            
                    $insert_cliente="INSERT INTO usuarios (telefono, contrasena, id_persona) VALUES ('$telefono','$contrasena2','$id_persona')";
                    $insert -> ejecutar($insert_cliente);
        
        
                  echo "<div class='alert alert-success'> Cliente Registrado </div>";
                  /*Registro exitoso y despues se dirige a la pagina principal*/

                }   
                else{
                    echo "<div class='alert alert-success'> Este correo ya existe ya existe </div>";
                }  
            }
            else{
                echo "<div class='alert alert-success'> Este apellido ya existe </div>";
            } 


           
   
          }
          else{
            echo "<div class='alert alert-success'> Este nombre de usuario ya existe </div>";
          }
        }
        ?>