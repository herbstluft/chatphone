<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!--Boostrap-->   
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/estilos.css">
    <link rel="stylesheet" href="../../css/home.css">
    <!--Boostrap--> 
</head>
<body>

<div class="mobile d-block d-md-block d-lg-none" >


<div class="col-lg-4" style="background-color:#f6f9fb; overflow-x:hidden; overflow-y:scroll; height:49rem; padding:2%">

<div style="margin:1%;">


<div  class="row" style=" margin-bottom:3%">
        <div class="col-6">
        <h5 style="font-size: 22px; font-weight: 500;">Crea un grupo</h5>  
        </div> 

        <div class="col-6 text-end">
            <a href="" style="text-decoration: none;">
               
            </a>
        </div>
    </div>
    
<div style="margin-top:-5% ;"></div>
<br>
<input type="text" style="width:100%; background-color:#ebf1f7; border:0px; border-radius:10px; height:7%; padding:4%; padding-left:5%; color: #848484; outline:none" placeholder="Busca chats o usuarios">
  
  <br>
          

  <div style="margin-left:0%;margin-right:0%">

<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item col-6" role="presentation">
    <button class="nav-link active" style="width:98%; margin: auto; margin-left:3%; opacity:0.9; padding:5%" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Detalles</button>
  </li>
  <li class="nav-item col-6" role="presentation">
    <button class="nav-link" style="width:98%; margin: auto; padding:5%" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" tabindex="-1">Miembros</button>
  </li>
</ul>

<div class="tab-content" id="pills-tabContent">
    
<!-- Contenido de Detalles-->
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

  <div style="margin-left: 0%; margin-right:0%; width:100%">



<div style="width: 100%; background:white; border-radius:10px; margin-top:10%">
<center>
  <input for="imagen" type="file" id="imagen" name="imagen" accept="image/*" onchange="mostrarImagen(event)" class="input-imagen">
    
    <label for="imagen" class="label-imagen">
        <div id="imagen-preview" class="imagen-preview">
            <center>
            <label for="imagen" class="label-imagen">
            <svg style="position:relative; top:15px; margin:auto" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
            </label>
            </center>
        </div>
    </label>
    </center>

    <input type="text" style="width:94%; background-color:#ebf1f7; border:0px; border-radius:10px; height:6%; padding:3%; padding-left:5%; margin-top:-1.5%; color: #848484; margin-left:3%; margin-right:20%; outline:none" placeholder="Ingrese el nombre del grupo" maxlength="30">
    <br>
    <input type="text" style="width:94%; background-color:#ebf1f7; border:0px; border-radius:10px; height:6%; padding:3%; padding-left:5%; margin-bottom:1%; margin-top:1.7%; color: #848484; margin-left:3%; margin-right:20%; outline:none" placeholder="Descripcion del grupo">
    <div style="margin-left:3%;  margin-right:3%">
    <span style="--bs-text-opacity: 1;color: rgb(191, 204, 223) !important;font-size: 0.875em;">Ingrese el nombre del grupo, una breve descripcion y agregue una foto opcional.</span>
    </div>
    <br>
                             
</div>
        <br>
<button style="margin-left: 3%; width:94%; padding:3%; background:#227afc; color:white" class="btn d-flex align-items-center" type="button">
                                    Crear grupo
                                    <span class="icon ms-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </span>
                                </button>
                            

<style>

.input-imagen {
  display: block;
  margin-bottom: 20px;
  padding: 10px;
  border: 2px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  color: #333;
}

.imagen-preview {
    margin: auto;
  max-width: 100%;
  max-height: 100%;
  width: 75px;
  height: 75px;
  border-radius:50%;
  border: 5px solid white;
    position: relative;
    top:-30px;
    background-color: #2787f5;
}

.imagen-preview img {
  margin: auto;
  max-width: 100%;
  max-height: 100%;
  width: 75px;
  height: 75px;
  border-radius:50%;
}
</style>

<script>
function mostrarImagen(event) {
  const input = event.target;
  const preview = document.getElementById('imagen-preview');

  const reader = new FileReader();

  reader.onload = function() {
    const imagen = document.createElement('img');
    imagen.src = reader.result;
    preview.innerHTML = '';
    preview.appendChild(imagen);
  }

  reader.readAsDataURL(input.files[0]);
}
</script>


  </div>

  </div>
  <!-- Contenido de Detalles-->

  <!-- Contenido de Miembros-->
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">

  
  <div class="card-body" style="padding-top: 3.7%; padding-bottom:3.7%; height: 17%; background:white; border-radius: 15px; margin-bottom: 1.5%;">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <img src="https://avatars.githubusercontent.com/u/74835918?s=96&amp;v=4" alt="#" class="img-profile">
                                                        </div>
                                                    </div>

                                                    <div class="col" style="margin-left: -2%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                                                        </div>

                                                        <div class="d-flex align-items-center" style="margin-top: 0%;">
                                                            <div class="line-clamp me-auto">
                                                                Hello! Yeah, I'm going 
                                                            </div>
                                                            
                                                            <div class="form-check" style="margin-top: -20px;">
                                                                <input style="border:3px solid #0d6dfd6a;" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
 </div>
  
 <div class="card-body" style="padding-top: 3.7%; padding-bottom:3.7%; height: 17%; background:white; border-radius: 15px; margin-bottom: 1.5%;">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <img src="https://avatars.githubusercontent.com/u/74835918?s=96&amp;v=4" alt="#" class="img-profile">
                                                        </div>
                                                    </div>

                                                    <div class="col" style="margin-left: -2%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                                                        </div>

                                                        <div class="d-flex align-items-center" style="margin-top: 0%;">
                                                            <div class="line-clamp me-auto">
                                                                Hello! Yeah, I'm going 
                                                            </div>
                                                            
                                                            <div class="form-check" style="margin-top: -20px;">
                                                                <input style="border:3px solid #0d6dfd6a;" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
 </div>
   
 <div class="card-body" style="padding-top: 3.7%; padding-bottom:3.7%; height: 17%; background:white; border-radius: 15px; margin-bottom: 1.5%;">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <img src="https://avatars.githubusercontent.com/u/74835918?s=96&amp;v=4" alt="#" class="img-profile">
                                                        </div>
                                                    </div>

                                                    <div class="col" style="margin-left: -2%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                                                        </div>

                                                        <div class="d-flex align-items-center" style="margin-top: 0%;">
                                                            <div class="line-clamp me-auto">
                                                                Hello! Yeah, I'm going 
                                                            </div>
                                                            
                                                            <div class="form-check" style="margin-top: -20px;">
                                                                <input style="border:3px solid #0d6dfd6a;" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
 </div>
 

  </div>
  <!-- Contenido de Miembros-->


</div>


</div>

                                       
</div>
</div>
    
   <!-- Barra de navegacion-->
   <nav class="navbar-mobile">
  <ul>
    <li> 
            <a href="crear-grupo.php" class="a nav-link  py-3 rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home" data-bs-original-title="Home">
          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#96abc9" class="a bi bi-pencil-square " viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg>
        </a>
    </li>

    <li>
            <a href="amigos.php" class="a nav-link  py-3 rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home" data-bs-original-title="Home">
                            <div class="icon icon-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#0d6efd" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            </div>
        </a>
    </li>
    
 
    <li>    
            <a href="../app/home.php" class="nav-link py-3 rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Orders" data-bs-original-title="Orders">
        <button type="button" style="background-color: transparent; border:none" class="position-relative">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#96abc9" class="bi bi-chat-left" viewBox="0 0 16 16">
          <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
        </svg>

        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
            1
        </span>
        </button>
        </a>
    </li>
    
     <li>         
     <a href="grupos.php" class="nav-link py-3 rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Products" data-bs-original-title="Products">
        <button type="button" style="background-color: transparent; border:none" class="position-relative">
        <img src="https://img.icons8.com/ios/30/96abc9/groups.png">
        
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
            2
        </span>
        </button>
        </a> 
    </li>
    
    <li>          
        <a href="ajustes.php" class="nav-link py-3 rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Customers" data-bs-original-title="Customers">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#96abc9" class="bi bi-gear" viewBox="0 0 16 16">
          <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
          <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
        </svg>
        </a>
    </li>

  </ul>
</nav>
    <!-- Barra de navegacion-->


</div>
</body>
</html>