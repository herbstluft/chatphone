<?php
 use MyApp\query\Select;
 use MyApp\query\ejecuta;
         require("vendor/autoload.php");
         $insert= new ejecuta();
         $query = new Select();

         $cadena = "SELECT * from personas";
//Ejecutar consulta
         $productos = $query->seleccionar($cadena);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatPhone Inicio</title>
    <link rel="icon" href="img/logo .png">

<!--Boostrap-->   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css">
<!--Boostrap--> 
</head>



<body>
        <!--Barra de navegacion-->
        <nav style="padding-left: 15%; border-bottom: 1px solid #d8d8d8;     backdrop-filter: saturate(180%) blur(20px);
        background-color: rgba(255,255,255,.72);" class="barra navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a style="font-weight: 500;" class="navbar-brand" href="#">ChatPhone</a>
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
                    <a class="nav-link text-bar" aria-current="page" href="views/login.php">Iniciar sesión</a>
                    
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-bar" href="views/crear-chatphone-id.php">Crear tu ChatPhone ID</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-bar" href="views/preguntas.php">Preguntas frecuentes</a>
                  </li>
                </ul>
               
              </div>
            </div>
        </nav>
        <!--Barra de navegacion-->

        <!--Logo y presentacion texto-->
        <div class="container">
            <div style=" padding: 3%; padding-top: 5%;">
            <br><br><br>
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
            
            <div  style="margin-top:-5%">
                <div>
                <h1 style="font-size: 45px; color: black; font-style: inherit;" class="text-center d-none d-xxl-block">Pasa el rato dónde y cuándo quieras</h1>
                <h1 style="font-size: 43px; color: black; font-style: inherit;" class="text-center d-none d-xl-block d-xxl-none">Pasa el rato dónde y cuándo quieras</h1>
                <h1 style="font-size: 43px; color: black; font-style: inherit;" class="text-center d-none d-lg-block d-xl-none">Pasa el rato dónde y cuándo quieras</h1>
                <h1 style="font-size: 43px; color: black; font-style: inherit;" class="text-center d-none d-md-block d-lg-none">Pasa el rato dónde y cuándo quieras</h1>
                <h1 style="font-size: 35px; color: black; font-style: inherit;" class="text-center d-none d-sm-block d-md-none">Pasa el rato dónde y cuándo quieras</h1>
                <h1 style="font-size: 30px; color: black; font-style: inherit;" class="text-center d-block d-sm-none">Pasa el rato dónde y cuándo quieras</h1>
                </div>
                <br>

                <center>
                <div style="width: 80%;">
                <p class="text-center d-none d-sm-block" style="font-size: 25.5px;font-weight: 400; text-align: center;letter-spacing: .011em;line-height: 1.381002381;">
                    Un solo numero de telefono y una sola contraseña te dan acceso a todos los servicios de ChatPhone. Inicia sesión para administrar tu cuenta.
                </p>
                <p class="text-center d-block d-sm-none" style="font-size: 20px;font-weight: 400; text-align: center;letter-spacing: .011em;line-height: 1.381002381;">
                    Un solo numero de telefono y una sola contraseña te dan acceso a todos los servicios de ChatPhone. Inicia sesión para administrar tu cuenta.
                </p>
                </div>
                </center>
            </div>

            <br>
            <center>
              <a href="views/login.php">
            <button type="button" style="margin-left: 5.5%; border:none; border-radius:980px; background-color: #0071e3; color: white; padding: 10px 25px; ">Iniciar sesión</button>
              </a>
            </center>
            <br>
        </div>
        <!--Logo y presentacion texto-->
           <br><br> 

        <!--Cards-->   
        <div style="margin-left: 10%; margin-right: 10%;">
          <div class="row">
            <div class="col-12 col-lg-5 sombras offset-lg-1" style="padding: 5%; margin-bottom: 7%; background-color: white; border-radius: 30px;">
              <br>
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#0071e3" class="bi bi-sliders2-vertical" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M0 10.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1H3V1.5a.5.5 0 0 0-1 0V10H.5a.5.5 0 0 0-.5.5ZM2.5 12a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2a.5.5 0 0 0-.5-.5Zm3-6.5A.5.5 0 0 0 6 6h1.5v8.5a.5.5 0 0 0 1 0V6H10a.5.5 0 0 0 0-1H6a.5.5 0 0 0-.5.5ZM8 1a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2A.5.5 0 0 0 8 1Zm3 9.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1H14V1.5a.5.5 0 0 0-1 0V10h-1.5a.5.5 0 0 0-.5.5Zm2.5 1.5a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 1 0v-2a.5.5 0 0 0-.5-.5Z"/>
              </svg>
              <br><br>
              <h3 style="font-size: 30px;font-weight: 500;color: black; letter-spacing: .009em;line-height: 1.16667;">Tienes el control</h3>
              <p style="font-size: 23px;font-weight: 400; text-align: left;letter-spacing: .011em;line-height: 1.381002381;">Revisa o actualiza la información importante como tu nombre, contraseña y tus detalles de seguridad. Comprueba cómo otras personas pueden contactarte, consulta tu información de pago y administra los dispositivos conectados a tu cuenta.</p>
            </div>
            
              <div class="col-12 col-lg-5 sombras offset-lg-1" style="padding: 5%; margin-bottom:7%; background-color: white; border-radius: 30px;">
                <br>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#0071e3" class="bi bi-shield-fill-check" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647z"/>
                </svg>
                <br><br>
                <h3 style="font-size: 30px;font-weight: 500;color: black; letter-spacing: .009em;line-height: 1.16667;">Privada y segura</h3>
                <p style="font-size: 23px;font-weight: 400; text-align: left;letter-spacing: .011em;line-height: 1.381002381;">La privacidad y seguridad están integradas. Con funciones de seguridad como la autenticación de dos factores, ChatPhone te ayuda a mantener tu cuenta segura, protege tu privacidad y te permite mantener el control de tu información.</p>
            </div>
        </div>
        </div>
        <!--Cards-->

        <div style="background-color: white; padding-top: 12%; padding-left: 22%; padding-right: 22%; text-align:left;" class="sombras">
          <svg style="margin-bottom: 1%;" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#0071e3" class="bi bi-chat-right" viewBox="0 0 16 16">
            <path d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z"/>
          </svg><br>
          <span class="text-label">¿Qué es un ChatPhone&nbsp;ID?</span>
          <p style="margin-top: 2%;" >
          <span class="text-body">Un ChatPhone&nbsp;ID es la cuenta personal que usas para acceder al servicio de mensajeria de ChatPhone. Incluye la información que usas para iniciar sesión, así como toda la información de contacto y detalles de seguridad que usarás en ChatPhone.</span>
          </p>

          <br>

          <span class="text-label">¿Cuándo utilizo mi ChatPhone&nbsp;ID?</span>
          <p style="margin-top: 2%;" >
          <span class="text-body">Cada vez que configures un nuevo dispositivo, se te solicitará que inicies sesión con tu ChatPhone ID y contraseña. Una vez que hayas iniciado sesión tendrás acceso al servicio y a toda la información personal de tu cuenta.</span>
          </p>
          <br><br>
        </div>



</body>
</html>