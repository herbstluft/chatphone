
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatPhoneID</title>
    <link rel="icon" href="../img/logo .png">


    <!--Boostrap-->   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/estilos.css">
    <!--Boostrap--> 
</head>

<body style="background-color: #f7f7f7;">


        <!--Barra de navegacion-->
        <nav style="padding-left: 15%; border-bottom: 1px solid #d8d8d8;     backdrop-filter: saturate(180%) blur(20px);
        background-color: rgba(255,255,255,.72);" class="barra navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a style="font-weight: 500;" class="navbar-brand" href="../index.php">ChatPhone</a>
              <button style="border: 0px ; background-color: transparent;" class="" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <svg  xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="d-block d-sm-none bi bi-chevron-down" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
                <svg  xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="d-none d-sm-block d-md-none bi bi-chevron-down" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
                <svg  xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="d-none d-md-block d-lg-none bi bi-chevron-down" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
                
              </button>
              
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div style="margin-left: 45%;"></div>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link text-bar" aria-current="page" href="login.php">Iniciar sesión</a>
                    
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-bar" href="#">Crear tu ChatPhone ID</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-bar" href="preguntas.php">Preguntas frecuentes</a>
                  </li>
                </ul>
               
              </div>
            </div>
        </nav>
        <!--Barra de navegacion-->

                <!--Logo y login-->
                <div class="container sombras" style=" background-color: #f7f7f7; border-radius: 15px; padding-bottom: 5%;">
                   
                    <div style=" padding: 3%; padding-top: 3%;">
                    <br><br><br>
            <center>
            <svg version="1.1" width="200px" height="200px" fill="#2787f5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 46 46" enable-background="new 0 0 46 46" xml:space="preserve">
                        <polygon opacity="0.7" points="45,11 36,11 35.5,1 "></polygon>
                        <polygon points="35.5,1 25.4,14.1 39,21 "></polygon>
                        <polygon opacity="0.4" points="17,9.8 39,21 17,26 "></polygon>
                        <polygon opacity="0.7" points="2,12 17,26 17,9.8 "></polygon>
                        <polygon opacity="0.7" points="17,26 39,21 28,36 "></polygon>
                        <polygon points="28,36 4.5,44 17,26 "></polygon>
                        <polygon points="17,26 1,26 10.8,20.1 "></polygon>
                    </svg>
            </center>
            <br><br>
                        </div>
                    <div  style="margin-top:-5%">
                        <h1 style="font-size: 35px; color: rgb(73, 73, 73);; font-style: inherit;" class="text-center">Crea tu ChatPhone ID</h1>
                        <p style="font-size: 18px; " class="text-center">Sólo necesitas un ChatPhone ID para acceder al servicio de mensajeria.</p>
                        <p style="font-size: 18px; " class="text-center">¿Ya tienes un ChatPhone ID? <a href="login.php">Inicia sesión </a> </p>
                       

                        <div style="width:80%; margin: auto; position: relative; left: 5%;">
                            <form action="" method="post">
                                
                                    <div class="row">
                                        <div class="col-11 col-md-5">
                                            <div class="form-floating">
                                                <input  style="width:100%; margin:auto; background-color:#ebf1f7; color: #848484; margin-bottom:1.5%;  border:0px; border-radius:10px; height:8%;" type="text" class="form-control input" id="floatingInput" name="nombre" required>
                                                <label for="floatingInput">Nombre &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                                                </label> 
                                            </div>
                                        </div>
                                    <br><br><br>
                                        <div class="col-11 col-md-5 offset-md-1 ">
                                            <div class="form-floating">
                                                <input style="width:100%; margin:auto; background-color:#ebf1f7; color: #848484; margin-bottom:1.5%;  border:0px; border-radius:10px; height:8%;"  type="text" class="form-control input" id="floatingInput" name="apellido" required>
                                                <label for="floatingInput">Apellidos &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                                                </label> 
                                            </div>
                                        </div>

                                    </div>
                                <br>
                                    <div class="form-floating" style="width: 91.5%;">
                                        <input style="width:100%; margin:auto; background-color:#ebf1f7; color: #848484; margin-bottom:1.5%;  border:0px; border-radius:10px; height:8%;"  type="tel" class="form-control input" id="floatingInput" name="telefono" required maxlength="10" minlength="10">
                                        <label for="floatingInput">Numero de telefono &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                                            </label> 
                                    </div>

                                    <br>
                                    <div class="form-floating" style="width: 91.5%;">
                                        <input style="width:100%; margin:auto; background-color:#ebf1f7; color: #848484; margin-bottom:1.5%;  border:0px; border-radius:10px; height:8%;"  type="email" class="form-control input" id="floatingInput" name="correo" required>
                                        <label for="floatingInput">Correo electrónico &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                                            </label> 
                                    </div>

                                <br>

                                <div class="form-floating" style="width: 91.5%;">
                                    <input style="width:100%; margin:auto; background-color:#ebf1f7; color: #848484; margin-bottom:1.5%;  border:0px; border-radius:10px; height:8%;"  type="password" class="form-control input" id="floatingInput" name="contrasena1" required minlength="8"  maxlength="20">
                                    <label for="floatingInput">Contraseña &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</label> 
                                </div>

                                <br>

                                <div class="form-floating" style="width: 91.5%;">
                                    <input style="width:100%; margin:auto; background-color:#ebf1f7; color: #848484; margin-bottom:1.5%;  border:0px; border-radius:10px; height:8%;"  type="password" class="form-control input" id="floatingInput" name="contrasena2" required  minlength="8"  maxlength="20">
                                    <label for="floatingInput">Confirmar Contraseña &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</label> 
                                </div>
                                <br>

                                <div class="form-check" style="width: 94%;">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                      <b>Avisos</b>
                                      <p>Recibe correos electrónicos y comunicaciones de ChatPhone incluyendo avisos, recomendaciones y actualizaciones sobre los servicios y el software de ChatPhone.</p>
                                    </label>
                                  </div>

                                

                                  <div class="text-center" style="width: 94%;">
                                    <svg style="margin-bottom: 1%;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#0071e3" class="bi bi-shield-fill-check" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647z"/>
                                      </svg>
                                    
                                      <p  class="d-none d-sm-block" style="font-size: 13px; padding-left: 20%;  padding-right: 20%; color: rgb(85, 85, 85);">La información de tu ChatPhone ID se usa para permitirte iniciar sesión de forma segura y para acceder a tus datos. ChatPhone conserva ciertos datos de uso por motivos de seguridad, soporte y reporte. Si aceptas, es posible que ChatPhone también use información de tu ChatPhone ID para enviarte correos electrónicos de comunicaciones, incluyendo los que están basados en tu uso de servicios de ChatPhone.</p>
                                      <p class="d-block d-sm-none" style="font-size: 13px; padding-left: 5%;  padding-right: 5%; color: rgb(85, 85, 85);">La información de tu ChatPhone ID se usa para permitirte iniciar sesión de forma segura y para acceder a tus datos. ChatPhone conserva ciertos datos de uso por motivos de seguridad, soporte y reporte. Si aceptas, es posible que ChatPhone también use información de tu ChatPhone ID para enviarte correos electrónicos de comunicaciones, incluyendo los que están basados en tu uso de servicios de ChatPhone.</p>
                                  </div>
                                  <br>
                                <center>
                                    <button type="submit"  style="margin-left: -7%; border:none; border-radius:15px; background-color: #0071e3; color: white; padding: 10px 25px; ">Crear ChatPhone ID</button>
                                    </center>
                                    
                              
                                
                            </form>
                        </div>


                    </div>
        

                </div>
                <!--Logo y login-->
                    



</body>
</html>


<?php 

            
          use MyApp\data\Database;
          use MyApp\query\ejecuta;
          use MyApp\query\Select;
          //ocultar warnings
error_reporting(E_ERROR | E_PARSE);

          require("../vendor/autoload.php");

          $query = new Select();
          $insert = new ejecuta();

          if($_POST){

          extract($_POST);

          $verficiacion_nombres="SELECT * from personas WHERE personas.nombre='$nombre' and  personas.apellido='$apellido'";
          $valor_nombres=$query->seleccionar($verficiacion_nombres);

          if(empty($valor_nombres)){

            $verficiacion_telefono="SELECT * from usuarios WHERE usuarios.telefono='$telefono'";
            $valor_telefono=$query->seleccionar($verficiacion_telefono);   
              if(empty($valor_telefono)){

                $verficiacion_correo="SELECT * from personas WHERE personas.correo='$correo'";
                $valor_correo=$query->seleccionar($verficiacion_correo);      
                if(empty($valor_correo)){

                        if($contrasena1==$contrasena2)
                            {
                                  $insert_reg="INSERT INTO personas (nombre, apellido, correo) VALUES ('$nombre', '$apellido', '$correo')";
                                  $insert  -> ejecutar($insert_reg);
                        
                                  //obtener el id del cliente
                                  $cadena="select personas.id_persona as id from personas WHERE personas.nombre='$nombre' and personas.apellido='$apellido' and personas.correo='$correo'";
                        
                                  $id=$query -> seleccionar($cadena);
                        
                                 
                                  
                                  foreach ($id as $i)
                                  $id_persona= $i->id;
                          
                                  //Encriptar contraseña
                                  $passCifrada1 = password_hash($contrasena2,PASSWORD_DEFAULT);
                                  $passCifrada = "$passCifrada1";

                                  $insert_cliente="INSERT INTO usuarios (telefono, contrasena, id_persona) VALUES ('$telefono','$passCifrada','$id_persona')";
                                  $insert->ejecutar($insert_cliente);
                      
                               
                                  echo  "<div class='alert alert-success text-center' role='alert' style='margin-left:10%; margin-right:10%;'>
                                  Chatphone ID creado exitosamente, <a href='login.php'> Inicie sesión </a>!
                                </div>";    
                                /*Registro exitoso y despues se dirige a la pagina principal*/
                            }
                            else{
                              echo  "<div class='alert alert-warning text-center' role='alert' style='margin-left:10%; margin-right:10%;'>
                              Las contraseñas no coinciden!
                            </div>";    
                            }  

                } 
                else{
                  echo  "<div class='alert alert-danger text-center' role='alert' style='margin-left:10%; margin-right:10%;'>
                  Este correo ya existe, eliga otro!
                </div>";  
              }
            }
                else{
                  echo  "<div class='alert alert-danger text-center' role='alert' style='margin-left:10%; margin-right:10%;'>
                  Este numero ya existe, introduzca otro!
                </div>";   
              }  
            
          


           
   
          }
          else{
            echo  "<div class='alert alert-danger text-center' role='alert' style='margin-left:10%; margin-right:10%;'>
            Estos nombres ya existen en el sistema!
          </div>";                
            
          }
        }
        ?>
