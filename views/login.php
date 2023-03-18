

<!DOCTYPE html>
<html lang="en" style="background-color: white;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--Boostrap-->   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/estilos.css">
    <!--Boostrap--> 
</head>
<body style="background-color: white;">


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
                    <a class="nav-link text-bar" aria-current="page" href="#">Iniciar sesión</a>
                    
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-bar" href="crear-chatphone-id.php">Crear tu ChatPhone ID</a>
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
                <div class="container">
                    <div style=" padding: 3%; padding-top: 3%;">
                    <br><br><br>
                    <?php
 use MyApp\query\Select;
 use MyApp\query\ejecuta;
         require("../vendor/autoload.php");
         $insert= new ejecuta();
         $query = new Select();
         error_reporting(E_ERROR | E_PARSE);

         
if($_POST){
  extract($_POST);
        $consulta_hash="Select * from usuarios inner join
        personas on personas.id_persona=usuarios.id_persona 
        where usuarios.telefono='$phone'";
        $date_person=$query->seleccionar($consulta_hash);
        
        foreach ($date_person as $decrypted)
        $password_hash= $decrypted->contrasena;
    
        $name_complete=$decrypted->nombre.' '.$decrypted->apellido;
        

      if(password_verify($password,$password_hash)){
        session_start();
        $_SESSION['user']=$name_complete;
        header('location:app/home.php?inicio');
      }
      else{
        echo  "<div class='alert alert-danger text-center' role='alert' style='margin-left:10%; margin-top:-2%; margin-bottom:7%; margin-right:10%;'>
        Contraseña o numero incorrecto.
      </div>";  
      }
}
?>
            <center>
            <svg version="1.1" width="250px" height="250px" fill="#2787f5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 46 46" enable-background="new 0 0 46 46" xml:space="preserve">
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
                  
                    
                    <!--FORM-->
                    <div  style="margin-top:-5%;">
                        <h1 style="font-size: 35px; color: rgb(73, 73, 73);; font-style: inherit;" class="text-center">ChatPhone ID</h1>
                        <p style="font-size: 18px; " class="text-center">Administra tu cuenta de ChatPhone</p>
                       

                        <div style="width: 350px; margin: auto;">
                            <form action="" method="post">
                                <div class="form-floating">
                                    <input style="border-radius: 10px 10px 0px 0px;" type="tel" class="form-control input" id="floatingInput"  required maxlength="10" minlength="10" name="phone">
                                    <label for="floatingInput">Numero de telefono &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                                        </label> 
                                </div>

                                <div class="form-floating">
                                    <input style="border-radius: 0px 0px 10px 10px;" type="password" class="form-control input" id="floatingInput" required name="password">
                                    <label for="floatingInput">Contraseña &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</label> 
                                </div>

                                
                                <br>
                                <center>
                                    <button type="submit" style="margin-left: 5.5%; border:none; border-radius:15px; background-color: #0071e3; color: white; padding: 10px 25px; ">Iniciar sesión</button>
                                    </center>
                                    
                                    <hr>
                                <p style="font-size: 17px; " class="text-center">Con ChatPhone, estar cerca de tus personas favoritas es fácil y divertido.</p>
                                
                               
                            </form>
                        </div>


                    </div>
                    <!--FORM-->

                </div>
                <!--Logo y login-->
                   <br><br> 

</body>
</html>




