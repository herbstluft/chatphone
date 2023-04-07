<?php
 use MyApp\query\Select;
 use MyApp\query\ejecuta;
         require("../../vendor/autoload.php");
         $insert= new ejecuta();
         $query = new Select();
session_start();

        

if(isset($_SESSION['user'])){
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../img/logo .png">
    <title>Document</title>
       <!--Boostrap-->   
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/estilos.css">
    <!--Boostrap--> 
</head>

<style>
  
     input[type="file"] {
        display: none;
      }
  .row{
    margin: 0;
  }
  ::-webkit-scrollbar {
    display: none;
}
.img-profile{
  height: 44px;
  width: 44px;
  border-radius: 50%;

  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.line-clamp {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    color: #9faacc;
}
.me-auto {
    margin-right: auto!important;
}
.badge-circle {
    position: relative;
    border-radius: 2.25rem;
    height: calc(1em + .778em);
    padding: .389em;
}
.bg-primary {
    --bs-bg-opacity: 0.9;
    background-color: rgba(var(--bs-primary-rgb),var(--bs-bg-opacity))!important;
}
.ms-5 {
    margin-left: 1rem!important;
}
.badge {
    display: inline-block;
    padding: .389em .6em;
    font-size: .6em;
    font-weight: 500;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 10px;
}
.message {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: end;
    -ms-flex-align: end;
    align-items: flex-end;
}
.message-inner {
    max-width: 100%;
    min-width: 0;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
}
.message-content {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
.message-content:not(:last-child) .message-text {
    border-bottom-left-radius: .25rem;
}
.message-text {
    background: #ebf1f7;
    border-radius: .6rem;
    padding: 1rem 1.25rem;
    color: #95aac9;
}
.dropdown-item:hover{
    background-color: #f1f1f1;

}
.message-out .message-gallery, .message-out .message-text {
    margin-left: .25rem;
    margin-right: 0;
}
.message.message-out {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: reverse;
    -ms-flex-direction: row-reverse;
    flex-direction: row-reverse;
}
.message-out .message-content:not(:last-child) .message-text {
    border-bottom-left-radius: .6rem;
    border-bottom-right-radius: .25rem;
}
.message-content:not(:last-child) .message-text {
    border-bottom-left-radius: .25rem;
}
.message-out .message-text {
    background: #2787f5;
    border-radius: .6rem;
    color: #fff;
}
.message-gallery, .message-text {
    overflow: hidden;
    margin-right: .25rem;
}
.message-footer {
    line-height: 1.3;
    margin-top: .1rem;
    margin-bottom: .5rem;
    margin-left: .5rem;
}
.extra-small {
    font-size: .665em;
}
.text-muted {
    --bs-text-opacity: 1;
    color: #bfccdf!important;
}
.message-inner {
    margin-left: 1rem;
}
.message-inner {
    margin-left: .5rem;
}
.sombras{
  box-shadow: 0px -1px 8px -2px rgba(0,0,0,0.04);
-webkit-box-shadow: 0px -1px 8px -2px rgba(0,0,0,0.04);
-moz-box-shadow: 0px -1px 8px -2px rgba(0,0,0,0.04);
}


.nav-pills {
    background: #ebf1f7;
    border-radius: .6rem;
    padding: .3125rem;
}

.nav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}

dl, ol, ul {
    margin-top: 0;
    margin-bottom: 1rem;
}

ol, ul {
    padding-left: 2rem;
}


ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}

/*barra navegacion mobile */
.navbar-mobile {
backdrop-filter: saturate(180%) blur(20px);
  background-color: rgba(255,255,255,.72);
  width: 100%;
  left:0;
  right:0;
  height: 50px;
  position:fixed;
  bottom:0;
  padding-top:0.5%;
}

.navbar-mobile ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: space-around;
  align-items: center;
  height: 100%;
}

.navbar-mobile li a {
  display: block;
  color: #fff;
  text-align: center;
  font-size: 16px;
  text-decoration: none;
  padding: 10px;
}
/*barra navegacion mobile */


</style>

<body style="background-color: #f6f9fb;">



<div class="mobile d-block d-md-block d-lg-none" >



    <div style="margin:3%;">

    <div  class="row" style=" margin-bottom:3%">
        <div class="col-6">
        <h5 style="font-size: 22px; font-weight: 500;">Chats</h5>  
        </div> 

        <div class="col-6 text-end">
            <a href="" style="text-decoration: none;">
                Ir a Archivados
            </a>
        </div>
    </div>
  
    
    <input type="text" style="width:100%; background-color:#ebf1f7; border:0px; border-radius:10px; height:8%; padding:4%; padding-left:5%; color: #848484; outline:none" placeholder="Busca chats o usuarios">
   
    
    <!-- Lista de chats-->
<br><br>



<a href="?archivadoid=1" style="text-decoration: none; color:black">
<div style="background-color: white; margin:1%; border-radius:15px;padding:2%; margin-top:3%; margin-bottom:3%">
    <div class="row" style="margin:2%;">
        <div class="col-2">
            <div class="avatar avatar-online"  style="margin: auto;">
                <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
            </div>
        </div>


        <div class="col-10">
            <div class="d-flex align-items-center mb-3">
                <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                <span class="text-muted ms-2" style=" --bs-text-opacity: 1;color: #bfccdf!important;font-size: .665em; margin-right: 2%;">12:45 PM</span>
            </div>
        </div>
        
    </div>

    <div class="row" style="margin-left: 2%; margin-right:2%; margin-top:-4%">
        <div class="col-2"></div>
        <div class="col-10 text-truncate">
        <div class="d-flex align-items-center mb-3">
            <div class="line-clamp me-auto" style="width: 80%;">
                Hello! Yeah, I'm going to meet my friend.
            </div>

            <div class="badge badge-circle bg-primary ms-5" style="margin-right: 5%;">
                <span>3</span>
            </div>

            </div>

        </div>

    </div>
</div>
</a>

<a href="?archivadoid=1" style="text-decoration: none; color:black">
<div style="background-color: white; margin:1%; border-radius:15px;padding:2%; margin-top:3%; margin-bottom:3%">
    <div class="row" style="margin:2%;">
        <div class="col-2">
            <div class="avatar avatar-online"  style="margin: auto;">
                <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
            </div>
        </div>


        <div class="col-10">
            <div class="d-flex align-items-center mb-3">
                <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                <span class="text-muted ms-2" style=" --bs-text-opacity: 1;color: #bfccdf!important;font-size: .665em; margin-right: 2%;">12:45 PM</span>
            </div>
        </div>
        
    </div>

    <div class="row" style="margin-left: 2%; margin-right:2%; margin-top:-4%">
        <div class="col-2"></div>
        <div class="col-10 text-truncate">
        <div class="d-flex align-items-center mb-3">
            <div class="line-clamp me-auto" style="width: 80%;">
                Hello! Yeah, I'm going to meet my friend.
            </div>

            <div class="badge badge-circle bg-primary ms-5" style="margin-right: 5%;">
                <span>3</span>
            </div>

            </div>

        </div>

    </div>
</div>
</a>

<a href="?archivadoid=1" style="text-decoration: none; color:black">
<div style="background-color: white; margin:1%; border-radius:15px;padding:2%; margin-top:3%; margin-bottom:3%">
    <div class="row" style="margin:2%;">
        <div class="col-2">
            <div class="avatar avatar-online"  style="margin: auto;">
                <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
            </div>
        </div>


        <div class="col-10">
            <div class="d-flex align-items-center mb-3">
                <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                <span class="text-muted ms-2" style=" --bs-text-opacity: 1;color: #bfccdf!important;font-size: .665em; margin-right: 2%;">12:45 PM</span>
            </div>
        </div>
        
    </div>

    <div class="row" style="margin-left: 2%; margin-right:2%; margin-top:-4%">
        <div class="col-2"></div>
        <div class="col-10 text-truncate">
        <div class="d-flex align-items-center mb-3">
            <div class="line-clamp me-auto" style="width: 80%;">
                Hello! Yeah, I'm going to meet my friend.
            </div>

            <div class="badge badge-circle bg-primary ms-5" style="margin-right: 5%;">
                <span>3</span>
            </div>

            </div>

        </div>

    </div>
</div>
</a>

<a href="?archivadoid=1" style="text-decoration: none; color:black">
<div style="background-color: white; margin:1%; border-radius:15px;padding:2%; margin-top:3%; margin-bottom:3%">
    <div class="row" style="margin:2%;">
        <div class="col-2">
            <div class="avatar avatar-online"  style="margin: auto;">
                <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
            </div>
        </div>


        <div class="col-10">
            <div class="d-flex align-items-center mb-3">
                <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                <span class="text-muted ms-2" style=" --bs-text-opacity: 1;color: #bfccdf!important;font-size: .665em; margin-right: 2%;">12:45 PM</span>
            </div>
        </div>
        
    </div>

    <div class="row" style="margin-left: 2%; margin-right:2%; margin-top:-4%">
        <div class="col-2"></div>
        <div class="col-10 text-truncate">
        <div class="d-flex align-items-center mb-3">
            <div class="line-clamp me-auto" style="width: 80%;">
                Hello! Yeah, I'm going to meet my friend.
            </div>

            <div class="badge badge-circle bg-primary ms-5" style="margin-right: 5%;">
                <span>3</span>
            </div>

            </div>

        </div>

    </div>
</div>
</a>


<a href="?archivadoid=1" style="text-decoration: none; color:black">
<div style="background-color: white; margin:1%; border-radius:15px;padding:2%; margin-top:3%; margin-bottom:3%">
    <div class="row" style="margin:2%;">
        <div class="col-2">
            <div class="avatar avatar-online"  style="margin: auto;">
                <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
            </div>
        </div>


        <div class="col-10">
            <div class="d-flex align-items-center mb-3">
                <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                <span class="text-muted ms-2" style=" --bs-text-opacity: 1;color: #bfccdf!important;font-size: .665em; margin-right: 2%;">12:45 PM</span>
            </div>
        </div>
        
    </div>

    <div class="row" style="margin-left: 2%; margin-right:2%; margin-top:-4%">
        <div class="col-2"></div>
        <div class="col-10 text-truncate">
        <div class="d-flex align-items-center mb-3">
            <div class="line-clamp me-auto" style="width: 80%;">
                Hello! Yeah, I'm going to meet my friend.
            </div>

            <div class="badge badge-circle bg-primary ms-5" style="margin-right: 5%;">
                <span>3</span>
            </div>

            </div>

        </div>

    </div>
</div>
</a>

<a href="?archivadoid=1" style="text-decoration: none; color:black">
<div style="background-color: white; margin:1%; border-radius:15px;padding:2%; margin-top:3%; margin-bottom:3%">
    <div class="row" style="margin:2%;">
        <div class="col-2">
            <div class="avatar avatar-online"  style="margin: auto;">
                <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
            </div>
        </div>


        <div class="col-10">
            <div class="d-flex align-items-center mb-3">
                <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                <span class="text-muted ms-2" style=" --bs-text-opacity: 1;color: #bfccdf!important;font-size: .665em; margin-right: 2%;">12:45 PM</span>
            </div>
        </div>
        
    </div>

    <div class="row" style="margin-left: 2%; margin-right:2%; margin-top:-4%">
        <div class="col-2"></div>
        <div class="col-10 text-truncate">
        <div class="d-flex align-items-center mb-3">
            <div class="line-clamp me-auto" style="width: 80%;">
                Hello! Yeah, I'm going to meet my friend.
            </div>

            <div class="badge badge-circle bg-primary ms-5" style="margin-right: 5%;">
                <span>3</span>
            </div>

            </div>

        </div>

    </div>
</div>
</a>

<a href="?archivadoid=1" style="text-decoration: none; color:black">
<div style="background-color: white; margin:1%; border-radius:15px;padding:2%; margin-top:3%; margin-bottom:3%">
    <div class="row" style="margin:2%;">
        <div class="col-2">
            <div class="avatar avatar-online"  style="margin: auto;">
                <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
            </div>
        </div>


        <div class="col-10">
            <div class="d-flex align-items-center mb-3">
                <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                <span class="text-muted ms-2" style=" --bs-text-opacity: 1;color: #bfccdf!important;font-size: .665em; margin-right: 2%;">12:45 PM</span>
            </div>
        </div>
        
    </div>

    <div class="row" style="margin-left: 2%; margin-right:2%; margin-top:-4%">
        <div class="col-2"></div>
        <div class="col-10 text-truncate">
        <div class="d-flex align-items-center mb-3">
            <div class="line-clamp me-auto" style="width: 80%;">
                Hello! Yeah, I'm going to meet my friend.
            </div>

            <div class="badge badge-circle bg-primary ms-5" style="margin-right: 5%;">
                <span>3</span>
            </div>

            </div>

        </div>

    </div>
</div>
</a>

<a href="?archivadoid=1" style="text-decoration: none; color:black">
<div style="background-color: white; margin:1%; border-radius:15px;padding:2%; margin-top:3%; margin-bottom:3%">
    <div class="row" style="margin:2%;">
        <div class="col-2">
            <div class="avatar avatar-online"  style="margin: auto;">
                <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
            </div>
        </div>


        <div class="col-10">
            <div class="d-flex align-items-center mb-3">
                <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                <span class="text-muted ms-2" style=" --bs-text-opacity: 1;color: #bfccdf!important;font-size: .665em; margin-right: 2%;">12:45 PM</span>
            </div>
        </div>
        
    </div>

    <div class="row" style="margin-left: 2%; margin-right:2%; margin-top:-4%">
        <div class="col-2"></div>
        <div class="col-10 text-truncate">
        <div class="d-flex align-items-center mb-3">
            <div class="line-clamp me-auto" style="width: 80%;">
                Hello! Yeah, I'm going to meet my friend.
            </div>

            <div class="badge badge-circle bg-primary ms-5" style="margin-right: 5%;">
                <span>3</span>
            </div>

            </div>

        </div>

    </div>
</div>
</a>

<a href="?archivadoid=1" style="text-decoration: none; color:black">
<div style="background-color: white; margin:1%; border-radius:15px;padding:2%; margin-top:3%; margin-bottom:3%">
    <div class="row" style="margin:2%;">
        <div class="col-2">
            <div class="avatar avatar-online"  style="margin: auto;">
                <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
            </div>
        </div>


        <div class="col-10">
            <div class="d-flex align-items-center mb-3">
                <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                <span class="text-muted ms-2" style=" --bs-text-opacity: 1;color: #bfccdf!important;font-size: .665em; margin-right: 2%;">12:45 PM</span>
            </div>
        </div>
        
    </div>

    <div class="row" style="margin-left: 2%; margin-right:2%; margin-top:-4%">
        <div class="col-2"></div>
        <div class="col-10 text-truncate">
        <div class="d-flex align-items-center mb-3">
            <div class="line-clamp me-auto" style="width: 80%;">
                Hello! Yeah, I'm going to meet my friend.
            </div>

            <div class="badge badge-circle bg-primary ms-5" style="margin-right: 5%;">
                <span>3</span>
            </div>

            </div>

        </div>

    </div>
</div>
</a>


    <!-- Lista de chats-->

    </div>


    <!-- Barra de navegacion-->
    <nav class="navbar-mobile">
  <ul>
    <li> 
        <?php if((isset($_GET['ng']))){ ?>
         <a href="?ng" class="a nav-link  py-3 rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home" data-bs-original-title="Home">
          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#0d6efd" class="a bi bi-pencil-square " viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg>
        </a>
        <?php } else{ ?>
            <a href="?ng" class="a nav-link  py-3 rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home" data-bs-original-title="Home">
          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#96abc9" class="a bi bi-pencil-square " viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg>
        </a>
        <?php }?>
    </li>

    <li>
    <?php if((isset($_GET['personas']))){ ?>
        <a href="?personas"class="a nav-link  py-3 rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home" data-bs-original-title="Home">
                            <div class="icon icon-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#0d6efd" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            </div>
        </a>
        <?php } else{ ?>
            <a href="?personas" class="a nav-link  py-3 rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home" data-bs-original-title="Home">
                            <div class="icon icon-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#96abc9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            </div>
        </a>
        <?php }?>  
    </li>
    
 
    <li>    
    <?php if((isset($_GET['inicio']))){ ?>    
    <a href="?inicio" class="nav-link py-3 rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Orders" data-bs-original-title="Orders">
        <button type="button" style="background-color: transparent; border:none" class="position-relative">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#0d6efd" class="bi bi-chat-left" viewBox="0 0 16 16">
          <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
        </svg>

        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
            1
        </span>
        </button>
        </a>
        <?php } else{ ?>
            <a href="?inicio" class="nav-link py-3 rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Orders" data-bs-original-title="Orders">
        <button type="button" style="background-color: transparent; border:none" class="position-relative">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#96abc9" class="bi bi-chat-left" viewBox="0 0 16 16">
          <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
        </svg>

        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
            1
        </span>
        </button>
        </a>
        <?php }?>  
    </li>
    
     <li>    
     <?php if((isset($_GET['grupos']))){ ?>       
     <a href="?grupoid" class="nav-link py-3 rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Products" data-bs-original-title="Products">
        <button type="button" style="background-color: transparent; border:none" class="position-relative">
        <img src="https://img.icons8.com/ios/30/0d6efd/groups.png">
        
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
            2
        </span>
        </button>
        </a> 
        <?php } else{ ?>
            <a href="?grupos" class="nav-link py-3 rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Products" data-bs-original-title="Products">
        <button type="button" style="background-color: transparent; border:none" class="position-relative">
        <img src="https://img.icons8.com/ios/30/96abc9/groups.png">
        
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
            2
        </span>
        </button>
        </a> 
        <?php }?>  
    </li>
    
    <li> 
    <?php if((isset($_GET['ajustes']))){ ?>           
    <a href="?ajustes" class="nav-link py-3 rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Customers" data-bs-original-title="Customers">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#0d6efd" class="bi bi-gear" viewBox="0 0 16 16">
          <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
          <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
        </svg>
        </a>
        <?php } else{ ?>
        <a href="?ajustes" class="nav-link py-3 rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Customers" data-bs-original-title="Customers">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#96abc9" class="bi bi-gear" viewBox="0 0 16 16">
          <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
          <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
        </svg>
        </a>
        <?php }?>  
    </li>

  </ul>
</nav>
    <!-- Barra de navegacion-->

</div>











<div class="desktop d-none d-md-none d-lg-block">
<div class="row">

<!--Barra herramientas-->
<div class="col-lg-1 text-center" style="background-color:white; overflow-x:hidden; overflow-y:scroll;  height:49rem">
     <!--Logo--> 
    <a href="home.php?inicio" class="d-block p-3 link-dark text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only" style="margin-top:10%">
    <svg version="1.1" width="50px" height="50px" fill="#2787f5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 46 46" enable-background="new 0 0 46 46" xml:space="preserve">
                        <polygon opacity="0.7" points="45,11 36,11 35.5,1 "></polygon>
                        <polygon points="35.5,1 25.4,14.1 39,21 "></polygon>
                        <polygon opacity="0.4" points="17,9.8 39,21 17,26 "></polygon>
                        <polygon opacity="0.7" points="2,12 17,26 17,9.8 "></polygon>
                        <polygon opacity="0.7" points="17,26 39,21 28,36 "></polygon>
                        <polygon points="28,36 4.5,44 17,26 "></polygon>
                        <polygon points="17,26 1,26 10.8,20.1 "></polygon>
                    </svg>
      <span class="visually-hidden">Icon-only</span>
    </a>
    <br><br><br><br><br>
    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center" style="background-color: white;">
      <li class="nav-item">
         <!--Nuevo grupo--> 
         <?php if(isset($_GET['ng'])){?>
        <a href="?ng" class="a nav-link  py-3 rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home" data-bs-original-title="Home">
          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#0d6efd" class="a bi bi-pencil-square " viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg>
        </a>
        <?php } else{ ?>
            <a href="?ng" class="a nav-link  py-3 rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home" data-bs-original-title="Home">
          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#96abc9" class="a bi bi-pencil-square " viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg>
        </a>
        <?php } ?>
      </li>
      <li>
        <br>
        <!--Personas--> 
        <?php if(isset($_GET['personas'])  || isset($_GET['persona'])) {?>
        <a href="?personas" class="nav-link py-3 rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Dashboard" data-bs-original-title="Dashboard">
          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#0d6efd" class="bi bi-people" viewBox="0 0 16 16">
            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
          </svg>
          
        </a>
        <?php } else{ ?>
            <a href="?personas" class="nav-link py-3 rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Dashboard" data-bs-original-title="Dashboard">
          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#96abc9" class="bi bi-people" viewBox="0 0 16 16">
            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
          </svg>
          
        </a>
        <?php } ?>

      </li>
      <li>
      <br>
        <!--Grupos--> 
<?php
if(isset($_GET['grupos'])  || isset($_GET['grupoid'])) {?>
    <a href="?grupos" class="nav-link py-3 rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Dashboard" data-bs-original-title="Dashboard">
        <button type="button" style="background-color: transparent; border:none" class="position-relative">
        <img src="https://img.icons8.com/ios/30/0d6efd/groups.png"/>        
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
            5
        </span>
</button>
    </a>
    <?php } else{ ?>
        <a href="?grupos" class="nav-link py-3 rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Dashboard" data-bs-original-title="Dashboard">
        <button type="button" style="background-color: transparent; border:none" class="position-relative">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAErUlEQVR4nM1Wa4xdUxQe4hGPRFASCZFSaf3xakT8EG8Sj/iBCBWRYiKhXkVDxOCHCCbM9Kx1ezX1qI6ZrnUuSak3E6mZu9ZxY6bSIsUPP9pI1avqUaVXvn3OnTn3zpnOXCqxk5Ocs8/e37fWtx57d3T8X0ekdhmJrWSxd0n9oSeWjx7QuqZHPj6M1J5k8fdZ7EWS5Mx/RcriD7DaNlbrJrF7WW2E1NfnycuV2hEktonFPiC1u1msRGrbI/Hr/5mn8dDRpPYHq53RmBNZtw+Jj7JY15hx6s+y2hv1en2PnMHXkPjW8qra/u17q34li31VML+Ixd5pfJPa5yXxefk1XYODe5H6b0vET2+bmOLkUhb7oVyu7d00r/4Ui60a+xYfjdTuzK8p99VmkNjOUsVObJu4W4b3Y/WNrEYNciQNif0SiV3RWMfiC0n9G9LqCfiOZPBAFqvAoLz8bY2MaCep/QjZWb3O4i9NkFV8kNX+YvUvkIyQuRzX5kybqBRXj2O1+0msh8QXIINJ7UtWf5TF7mHxV5BwJbFbG3tY7DHMkdqKzPvHU6V8DYt1svrTwIxkeFaxd+o3s/gOUvNQi+rr4UVJquc3q2AXh3WxnU1i17H6z1RJTp2QH+p1Et9A6v3ADBUi1tlEiuwj9T9RBmMSdtX3hKek9u3il/3Q/HpW6yWxN1n9U9Rua2Kx2BYSeyQf45L4PBgcafW0vLfLWW2gVQVsJLHPWO2WZmK/JK1xrzeSalwRX8Bi64oSi9WFxJ4fnxAbQnwKIoA6XYGYj333V49HOYVES+WMMTdObD0IVREWiy8EV97KmNS4kFjsIzSNzMC5IcPVBuB1+tgA6h3/svX3sVhSTGwleN10ELD6r5H4Sc3eJtey2O+9YjMz773IQFJfQuJVvJf7a8eiV7d2M9bkZJQZEq/FM4/wI1gFSdQlZK/YDWFjZehwSAvgVmKUSvjXV5uRSXpjtndlJm8pYKv1drQ2AdRa2gRsM6t/wuo/QUKS5KrgSVybE+Lat+bgVuKlMnxI2lyS2ZmCVwf5gRGwbDOwEQZwhU3IPlZ/gdS+JrULGtmIkyhYrrYNDaPn9Q37svr3+ZLLh4TUv0tPr+rtqG1Wm99otYEj9gvBwWrPBQ70XWzCMViYEHFyXqg/GZ4Fi1HXmMv/D3Pqi9D5skZxThFWr9jMoERcvRyxHcyfr4Xk6q/hhoGmgk6UlpFtCheArH+nDce68yfXJFgP46aCFN9S0upZu1qc3iz8LRa7A1kOcBK/K/RmsVcxB4lJ/e3J+kFjoNWCExbUGzU42QjNHoSIXYGMkfq54YqUGtU5BdZccE6fOHQqmz/Zmkj9pgxresSkth33plJcvQjBL0vtIGRdKBFJZmfJ9x5KA1k7GWB2H9uKtdiDvcAAFjCBDQ5wgTNt+OKrs7qrFzwbwxEpvnZXnqTe+Nr0OA3n8UQsQV/w1eAc2wTLcD9G2SyuDJ/CcXIMLM1JXZuSWL3WkBp7gQEsYAK77atQSmwjUxPbyFQxbmsga3FRSCW3Z0jsQVa/DQ/eSW1pFo4dWNuxOwf1J0fhQkDiyxAnEvswffDuy/Cvp2JH7lbS/2L8DWpbXfMayLtNAAAAAElFTkSuQmCC">
        
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
            5
        </span>
</button>
    </a>
    <?php } ?>
      </li>
      <li>
        <br>

        <!--Chats--> 
        <?php if(isset($_GET['inicio']) || isset($_GET['id'])) {?>
        <a href="?inicio" class="nav-link py-3 rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Orders" data-bs-original-title="Orders">
        <button type="button" style="background-color: transparent; border:none" class="position-relative">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#0d6efd" class="bi bi-chat-left" viewBox="0 0 16 16">
          <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
        </svg>

        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
            1
        </span>
</button>
        </a>
        <?php } else{ ?>
            <a href="?inicio" class="nav-link py-3 rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Orders" data-bs-original-title="Orders">
        <button type="button" style="background-color: transparent; border:none" class="position-relative">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#96abc9" class="bi bi-chat-left" viewBox="0 0 16 16">
          <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
        </svg>

        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
            1
        </span>
</button>
        </a>
        <?php } ?>

      </li>
      <li>
        <br>
        <!--Archivados--> 
        <?php if(isset($_GET['archivados']) || isset($_GET['archivadoid'])) {?>
        <a href="?archivados" class="nav-link py-3 rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Products" data-bs-original-title="Products">
        <button type="button" style="background-color: transparent; border:none" class="position-relative">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#0d6efd" class="bi bi-archive" viewBox="0 0 16 16">
          <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
        </svg>
        
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
            2
        </span>
</button>
        </a>
        <?php } else{ ?>
            <a href="?archivados" class="nav-link py-3 rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Products" data-bs-original-title="Products">
        <button type="button" style="background-color: transparent; border:none" class="position-relative">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#96abc9" class="bi bi-archive" viewBox="0 0 16 16">
          <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
        </svg>
        
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
            2
        </span>
</button>
        </a>
        <?php } ?>

      </li>
      <li>
        <br>
        <!--Ajustes-->
        <?php if(isset($_GET['ajustes'])) {?>
        <a href="?ajustes" class="nav-link py-3 rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Customers" data-bs-original-title="Customers">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#0d6efd" class="bi bi-gear" viewBox="0 0 16 16">
          <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
          <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
        </svg>
        </a>
        <?php } else{ ?>
        <a href="?ajustes" class="nav-link py-3 rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Customers" data-bs-original-title="Customers">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#96abc9" class="bi bi-gear" viewBox="0 0 16 16">
          <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
          <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
        </svg>
        </a>
        <?php } ?>
      </li>
    </ul>
<br>
</div>
<!--Barra herramientas-->




<!--Barra de Chats-->
<?php
if(isset($_GET['inicio']) || isset($_GET['id']))
{
?>
<div class="col-lg-4" style="background-color:#f6f9fb; overflow-x:hidden; overflow-y:scroll; height:49rem; padding:2%">
  <p style="font-size: 24px; font-weight: 600;">Chats</p>
  
<div style="margin-top:-2% ;"></div>

  <img src="https://img.icons8.com/ios/23/a2b5cf/search--v1.png" style="position:relative; top:5.9%; left:5%"/>
  <input type="text"  style="width:100%; background-color:#ebf1f7; border:0px; border-radius:10px; height:8%; padding:5%; padding-left:15%; color: #848484; outline:none" placeholder="Busca chats o usuarios">
  
  <br><br><br>
          <a href="?id=1" style="text-decoration: none; color:black">
                                            <div class="card-body" style="background-color: white; padding-top: 5%;  height: 17%; border-radius: 15px; margin-bottom: 4%;">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
                                                        </div>
                                                    </div>

                                                    <div class="col" style="margin-left: -7%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                                                            <span class="text-muted ms-2" style=" --bs-text-opacity: 1;color: #bfccdf!important;font-size: .665em;">12:45 PM</span>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <div class="line-clamp me-auto">
                                                                Hello! Yeah, I'm going to meet my friend of mine at the departments stores now.
                                                            </div>

                                                            <div class="badge badge-circle bg-primary ms-5">
                                                                <span>3</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                            </div>
          </a>


          <a href="?id=2" style="text-decoration: none; color:black">
                                            <div class="card-body" style="background-color: white; padding-top: 5%;  height: 17%; border-radius: 15px; margin-bottom: 4%;">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
                                                        </div>
                                                    </div>

                                                    <div class="col" style="margin-left: -7%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                                                            <span class="text-muted ms-2" style=" --bs-text-opacity: 1;color: #bfccdf!important;font-size: .665em;">12:45 PM</span>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <div class="line-clamp me-auto">
                                                                Hello! Yeah, I'm going to meet my friend.
                                                            </div>

                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                            </div>
          </a>

          <a href="?id=3" style="text-decoration: none; color:black">
                                            <div class="card-body"  style="background-color: white; padding-top: 5%;  height: 17%; border-radius: 15px; margin-bottom: 4%;">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
                                                        </div>
                                                    </div>

                                                    <div class="col" style="margin-left: -7%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                                                            <span class="text-muted ms-2" style=" --bs-text-opacity: 1;color: #bfccdf!important;font-size: .665em;">12:45 PM</span>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <div class="line-clamp me-auto">
                                                                Hello! Yeah, I'm going to meet my friend of mine at the departments stores now.
                                                            </div>

                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                            </div>
          </a>


          <a href="" style="text-decoration: none; color:black">
                                            <div class="card-body"  style="background-color: white; padding-top: 5%;  height: 17%; border-radius: 15px; margin-bottom: 4%;">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
                                                        </div>
                                                    </div>

                                                    <div class="col" style="margin-left: -7%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                                                            <span class="text-muted ms-2" style=" --bs-text-opacity: 1;color: #bfccdf!important;font-size: .665em;">12:45 PM</span>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <div class="line-clamp me-auto">
                                                                Hello! Yeah, I'm going to meet my friend of mine at the departments stores now.
                                                            </div>

                                                            <div class="badge badge-circle bg-primary ms-5">
                                                                <span>3</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                            </div>
          </a>

          <a href="" style="text-decoration: none; color:black">
                                            <div class="card-body"  style="background-color: white; padding-top: 5%;  height: 17%; border-radius: 15px; margin-bottom: 4%;">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
                                                        </div>
                                                    </div>

                                                    <div class="col" style="margin-left: -7%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                                                            <span class="text-muted ms-2" style=" --bs-text-opacity: 1;color: #bfccdf!important;font-size: .665em;">12:45 PM</span>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <div class="line-clamp me-auto">
                                                                Hello! Yeah, I'm going to meet my friend of mine at the departments stores now.
                                                            </div>

                                                            <div class="badge badge-circle bg-primary ms-5">
                                                                <span>3</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                            </div>
          </a>


          <a href="" style="text-decoration: none; color:black">
                                            <div class="card-body"  style="background-color: white; padding-top: 5%;  height: 17%; border-radius: 15px; margin-bottom: 4%;">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
                                                        </div>
                                                    </div>

                                                    <div class="col" style="margin-left: -7%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                                                            <span class="text-muted ms-2" style=" --bs-text-opacity: 1;color: #bfccdf!important;font-size: .665em;">12:45 PM</span>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <div class="line-clamp me-auto">
                                                                Hello! Yeah, I'm going to meet my friend of mine at the departments stores now.
                                                            </div>

                                                            <div class="badge badge-circle bg-primary ms-5">
                                                                <span>3</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                            </div>
          </a>

          <a href="" style="text-decoration: none; color:black">
                                            <div class="card-body"  style="background-color: white; padding-top: 5%;  height: 17%; border-radius: 15px; margin-bottom: 4%;">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
                                                        </div>
                                                    </div>

                                                    <div class="col" style="margin-left: -7%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                                                            <span class="text-muted ms-2" style=" --bs-text-opacity: 1;color: #bfccdf!important;font-size: .665em;">12:45 PM</span>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <div class="line-clamp me-auto">
                                                                Hello! Yeah, I'm going to meet my friend of mine at the departments stores now.
                                                            </div>

                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                            </div>
          </a>


          <a href="" style="text-decoration: none; color:black">
                                            <div class="card-body"  style="background-color: white; padding-top: 5%;  height: 17%; border-radius: 15px; margin-bottom: 4%;">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
                                                        </div>
                                                    </div>

                                                    <div class="col" style="margin-left: -7%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                                                            <span class="text-muted ms-2" style=" --bs-text-opacity: 1;color: #bfccdf!important;font-size: .665em;">12:45 PM</span>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <div class="line-clamp me-auto">
                                                                Hello! Yeah, I'm going to meet my friend of mine at the departments stores now.
                                                            </div>

                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                            </div>
          </a>

          <a href="" style="text-decoration: none; color:black">
                                            <div class="card-body" style="background-color: white; padding-top: 5%;  height: 17%; border-radius: 15px; margin-bottom: 4%;">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
                                                        </div>
                                                    </div>

                                                    <div class="col" style="margin-left: -7%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                                                            <span class="text-muted ms-2" style=" --bs-text-opacity: 1;color: #bfccdf!important;font-size: .665em;">12:45 PM</span>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <div class="line-clamp me-auto">
                                                                Hello! Yeah, I'm going to meet my friend of mine at the departments stores now.
                                                            </div>

                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                            </div>
          </a>


          <a href="" style="text-decoration: none; color:black">
                                            <div class="card-body" style="background-color: white; padding-top: 5%;  height: 17%; border-radius: 15px; margin-bottom: 4%;">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
                                                        </div>
                                                    </div>

                                                    <div class="col" style="margin-left: -7%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                                                            <span class="text-muted ms-2" style=" --bs-text-opacity: 1;color: #bfccdf!important;font-size: .665em;">12:45 PM</span>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <div class="line-clamp me-auto">
                                                                Hello! Yeah, I'm going to meet my friend of mine at the departments stores now.
                                                            </div>

                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                            </div>
          </a>
                                            
</div>
<?php
}
?>
<!--Barra de Chats-->



<!--Barra de grupos-->
<?php
if(isset($_GET['grupos']) || isset($_GET['grupoid']))
{
?>
<div class="col-lg-4" style="background-color:#f6f9fb; overflow-x:hidden; overflow-y:scroll; height:49rem; padding:2%">
  <p style="font-size: 24px; font-weight: 600;">Grupos</p>
  
<div style="margin-top:-2% ;"></div>

  <img src="https://img.icons8.com/ios/23/a2b5cf/search--v1.png" style="position:relative; top:5.9%; left:5%"/>
  <input type="text"  style="width:100%; background-color:#ebf1f7; border:0px; border-radius:10px; height:8%; padding:5%; padding-left:15%; color: #848484; outline:none" placeholder="Busca chats o usuarios">
  
  <br><br><br>
          <a href="?grupoid=1" style="text-decoration: none; color:black">
                                            <div class="card-body" style="background-color: white; padding-top: 5%;  height: 17%; border-radius: 15px; margin-bottom: 4%;">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
                                                        </div>
                                                    </div>

                                                    <div class="col" style="margin-left: -7%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                                                            <span class="text-muted ms-2" style=" --bs-text-opacity: 1;color: #bfccdf!important;font-size: .665em;">12:45 PM</span>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <div class="line-clamp me-auto">
                                                                Hello! Yeah, I'm going to meet my friend of mine at the departments stores now.
                                                            </div>

                                                            <div class="badge badge-circle bg-primary ms-5">
                                                                <span>3</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                            </div>
          </a>


          <a href="?grupoid=2" style="text-decoration: none; color:black">
                                            <div class="card-body" style="background-color: white; padding-top: 5%;  height: 17%; border-radius: 15px; margin-bottom: 4%;">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
                                                        </div>
                                                    </div>

                                                    <div class="col" style="margin-left: -7%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                                                            <span class="text-muted ms-2" style=" --bs-text-opacity: 1;color: #bfccdf!important;font-size: .665em;">12:45 PM</span>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <div class="line-clamp me-auto">
                                                                Hello! Yeah, I'm going to meet my friend.
                                                            </div>

                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                            </div>
          </a>

          

        
                                            
</div>
<?php
}
?>
<!--Barra de grupos-->


<!--Barra de Archivados-->
<?php
if(isset($_GET['archivados']) || isset($_GET['archivadoid']))
{
?>
<div class="col-lg-4" style="background-color:#f6f9fb; overflow-x:hidden; overflow-y:scroll; height:49rem; padding:2%">
  <p style="font-size: 24px; font-weight: 600;">Archivados</p>
  
<div style="margin-top:-2% ;"></div>

  <img src="https://img.icons8.com/ios/23/a2b5cf/search--v1.png" style="position:relative; top:5.9%; left:5%"/>
  <input type="text"  style="width:100%; background-color:#ebf1f7; border:0px; border-radius:10px; height:8%; padding:5%; padding-left:15%; color: #848484; outline:none" placeholder="Busca chats o usuarios">
  
  <br><br><br>
          <a href="?archivadoid=1" style="text-decoration: none; color:black">
                                            <div class="card-body" style="background-color: white; padding-top: 5%;  height: 17%; border-radius: 15px; margin-bottom: 4%;">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
                                                        </div>
                                                    </div>

                                                    <div class="col" style="margin-left: -7%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                                                            <span class="text-muted ms-2" style=" --bs-text-opacity: 1;color: #bfccdf!important;font-size: .665em;">12:45 PM</span>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <div class="line-clamp me-auto">
                                                                Hello! Yeah, I'm going to meet my friend of mine at the departments stores now.
                                                            </div>

                                                            <div class="badge badge-circle bg-primary ms-5">
                                                                <span>3</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                            </div>
          </a>


          <a href="?archivadoid=2" style="text-decoration: none; color:black">
                                            <div class="card-body" style="background-color: white; padding-top: 5%;  height: 17%; border-radius: 15px; margin-bottom: 4%;">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
                                                        </div>
                                                    </div>

                                                    <div class="col" style="margin-left: -7%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                                                            <span class="text-muted ms-2" style=" --bs-text-opacity: 1;color: #bfccdf!important;font-size: .665em;">12:45 PM</span>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <div class="line-clamp me-auto">
                                                                Hello! Yeah, I'm going to meet my friend.
                                                            </div>

                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                            </div>
          </a>

          

        
                                            
</div>
<?php
}
?>
<!--Barra de Archivados-->




<!--Barra de Ajustes-->
<?php
if(isset($_GET['ajustes']))
{
?>
<div class="col-lg-11" style="background-color:#f6f9fb; overflow-x:hidden; overflow-y:scroll; height:49rem; padding:2%">
  <p style="font-size: 24px; font-weight: 600;">Ajustes</p>
  
<div style="margin-top:-2% ;"></div>
<br><br>
<div class="card border-0">
                                        <div class="card-body">
                                            <div class="row align-items-center gx-5">
                                                <div class="col-auto">
                                                    <div class="avatar">
                                                        <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" style="height: 50px;width: 50px;border-radius: 50%;position: relative;display: -webkit-box;display: -ms-flexbox;display: flex;">

                                                      
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <h5 style="font-size: 15.5px; font-weight: 600;">William Pearson</h5>
                                                    <p style="font-size:15px; color:#95aac9">¡Hola! estoy usando ChatPhone.</p>
                                                </div> 
                                                <div class="col-auto">
                                                    <a href="#" class="text-muted">
                                                        <div class="icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
</div>
  <br><br>

 &ensp;&ensp; <span style="--bs-text-opacity: 1;color: rgb(191, 204, 223) !important;font-size: 0.875em;">Cuenta</span>
    <br><br>

    <div class="card border-0">
                                        <div class="card-body">
                                            <div class="row align-items-center gx-5">
                                                <div class="col">
                                                <h5 style="font-size: 15.5px; font-weight: 600;">Configuracion del perfil</h5>
                                                    <p style="font-size:15px; color:#95aac9">Cambiar la configuracion de tu perfil</p>
                                                </div>
                                                
                                                
                                                <br><hr style="width:96%; margin:auto; color:#95aac9; opacity:0.2; margin-bottom:3%">

                                            <form action="" method="post">
                                                <input type="text" style="width:96%; margin:auto; background-color:#ebf1f7; border:0px; margin-bottom:2.5%; border-radius:10px; height:8%; padding:1.6%; padding-left:3%; color: #848484; outline:none" placeholder="Nombe">
                                                <input type="text" style="width:96%; margin:auto; background-color:#ebf1f7; margin-bottom:2.5%; border:0px; border-radius:10px; height:8%; padding:1.6%; padding-left:3%; color: #848484; outline:none" placeholder="Apellidos">
                                                <input type="text" style="width:96%; margin:auto; background-color:#ebf1f7; margin-bottom:2.5%; border:0px; border-radius:10px; height:8%; padding:1.6%; padding-left:3%; color: #848484; outline:none" placeholder="Correo Electronico">
                                                <input type="text" style="width:96%; margin:auto; background-color:#ebf1f7; margin-bottom:2.5%; border:0px; border-radius:10px; height:8%; padding:1.6%; padding-left:3%; color: #848484; outline:none" placeholder="Info.">
                                                <button type="submit" class="btn btn-primary" style="width: 96%; margin-top:1.2%; padding-top:1.5%; padding-bottom:1.5%"> Guardar</button>
                                            </form>
                                            
                                        </div>
                                        </div>
</div>    
<br><br>

&ensp;&ensp; <span style="--bs-text-opacity: 1;color: rgb(191, 204, 223) !important;font-size: 0.875em;">Seguridad</span>
<br><br>
<div class="card border-0">
                                        <div class="card-body">
                                            <div class="row align-items-center gx-5">
                                                <div class="col">
                                                <h5 style="font-size: 15.5px; font-weight: 600;">Contraseña</h5>
                                                    <p style="font-size:15px; color:#95aac9">Cambia tu contraseña</p>
                                                </div>
                                                
                                                
                                                <br><hr style="width:96%; margin:auto; color:#95aac9; opacity:0.2; margin-bottom:3%">

                                            <form action="" method="post">
                                                <input type="password" style="width:96%; margin:auto; background-color:#ebf1f7; border:0px; margin-bottom:2.5%; border-radius:10px; height:8%; padding:1.6%; padding-left:3%; color: #848484; outline:none" placeholder="Contraseña actual">
                                                <input type="password" style="width:96%; margin:auto; background-color:#ebf1f7; margin-bottom:2.5%; border:0px; border-radius:10px; height:8%; padding:1.6%; padding-left:3%; color: #848484; outline:none" placeholder="Nueva contraseña">
                                                <input type="password" style="width:96%; margin:auto; background-color:#ebf1f7; margin-bottom:2.5%; border:0px; border-radius:10px; height:8%; padding:1.6%; padding-left:3%; color: #848484; outline:none" placeholder="Verifica la contraseña">
                                                <button type="submit" class="btn btn-primary" style="width: 96%; margin-top:1.2%; padding-top:1.5%; padding-bottom:1.5%"> Guardar</button>
                                            </form>
                                            
                                        </div>
                                        </div>
</div>    

</div>        
                                            
</div>
<?php
}
?>
<!--Barra de Ajustes-->


<!--Barra de personas-->
<?php
if(isset($_GET['personas']) || isset($_GET['persona']))
{
?>
<div class="col-lg-4" style="background-color:#f6f9fb; overflow-x:hidden; overflow-y:scroll; height:49rem; padding:2%">
  <p style="font-size: 24px; font-weight: 600;">Personas</p>
  
<div style="margin-top:-2% ;"></div>

  <img src="https://img.icons8.com/ios/23/a2b5cf/search--v1.png" style="position:relative; top:5.9%; left:5%"/>
  <input type="text"  style="width:100%; background-color:#ebf1f7; border:0px; border-radius:10px; height:8%; padding:5%; padding-left:15%; color: #848484; outline:none" placeholder="Buscar usuarios o amigos">
  
  <br><br><br>
          
  <a href="?persona=1" style="text-decoration: none; color:black">
          <div class="card-body">
                                                <div class="row gx-5"  style="background-color: white; padding-top: 5%; padding-bottom:5%; height: 17%; border-radius: 15px; margin-bottom: -8%;" >
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
                                                        </div>
                                                    </div>

                                                    <div class="col" style="margin-left: -7%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                                                            
                                                            
                                                            <div style="background-color: #ebf1f7; position:relative; left:-5%; top:20px; padding:3%; border-radius:8px">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#9faacc" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                                                                <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                                <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                                                </svg>
                                                                </div>
                                                                
                                                        </div>

                                                        <div class="d-flex align-items-center text-truncate" style="width:70%; position:relative; top:-10px">
                                                            <div class="line-clamp me-auto text-truncate">
                                                            disfruta la vida feliz
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                            </div>
          </a>

          
          <a href="?persona=2" style="text-decoration: none; color:black">
          <div class="card-body">
                                                <div class="row gx-5"  style="background-color: white; padding-top: 5%; padding-bottom:5%; height: 17%; border-radius: 15px; margin-bottom: -8%;" >
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
                                                        </div>
                                                    </div>

                                                    <div class="col" style="margin-left: -7%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                                                            
                                                            
                                                            <div style="background-color: #ebf1f7; position:relative; left:-5%; top:20px; padding:3%; border-radius:8px">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#9faacc" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                                                                <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                                <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                                                </svg>
                                                                </div>
                                                                
                                                        </div>

                                                        <div class="d-flex align-items-center text-truncate" style="width:70%; position:relative; top:-10px">
                                                            <div class="line-clamp me-auto text-truncate">
                                                            disfruta la vida feliz
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                            </div>
          </a>

          <a href="?persona=3" style="text-decoration: none; color:black">
          <div class="card-body">
                                                <div class="row gx-5"  style="background-color: white; padding-top: 5%; padding-bottom:5%; height: 17%; border-radius: 15px; margin-bottom: -8%;" >
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
                                                        </div>
                                                    </div>

                                                    <div class="col" style="margin-left: -7%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                                                            
                                                            
                                                            <div style="background-color: #ebf1f7; position:relative; left:-5%; top:20px; padding:3%; border-radius:8px">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#9faacc" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                                                                <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                                <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                                                </svg>
                                                                </div>
                                                                
                                                        </div>

                                                        <div class="d-flex align-items-center text-truncate" style="width:70%; position:relative; top:-10px">
                                                            <div class="line-clamp me-auto text-truncate">
                                                            disfruta la vida feliz
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                            </div>
          </a>

          

        
                                            
</div>
<?php
}
?>
<!--Barra de personas -->



<!--Barra de bienvenida-->
<?php 
if(isset($_GET['inicio']) || isset($_GET['grupos'])  || isset($_GET['archivados'])  || isset($_GET['personas']) )
{
?>
<div class="col-lg-7" style="background-color:white; overflow-x:hidden; overflow-y:scroll;  height:49rem">

    <div style="margin-top:40%; margin-left:20%; margin-right:20%" class="text-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#96abc9" class="bi bi-chat" viewBox="0 0 16 16">
        <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
        </svg>
        <br><br>
        <p class="text-center" style="color:#9faacc">Elige una persona o un grupo del menú de la izquierda y comienza tu conversación.</p>
    </div>

</div>
<?php
}
?>
<!--Barra de bienvenida-->


<!--Barra de crear grupo-->
<?php 
if(isset($_GET['ng']))
{
?>
<div class="col-lg-11" style="background-color:#f6f9fb; overflow-x:hidden; overflow-y:scroll;  height:49rem">

<form action="" method="post">
<p style="font-size: 24px; font-weight: 600; margin-left:3%; margin-top:2%">Crea un grupo</p>
<img src="https://img.icons8.com/ios/23/a2b5cf/search--v1.png" style="position:relative; bottom:-30.5px; left:6%">
<input type="text" style="width:95%; background-color:#ebf1f7; border:0px; border-radius:10px; height:8%; padding:2%; padding-left:7.5%; margin-top:-1.5%; color: #848484; margin-left:3%; margin-right:20%; outline:none" placeholder="Buscar usuarios o amigos">
<br><br>

<div style="margin-left:3%;margin-right:2%">

<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item col-6" role="presentation">
    <button class="nav-link active" style="width:98%; margin: auto; opacity:0.9" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Detalles</button>
  </li>
  <li class="nav-item col-6" role="presentation">
    <button class="nav-link" style="width:98%; margin: auto" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Miembros</button>
  </li>
</ul>

<div class="tab-content" id="pills-tabContent">
    <!-- Contenido de Detalles-->
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

  <div style="margin-left: 0%; margin-right:0%; width:100%">



<div style="width: 100%; background:white; border-radius:10px; margin-top:5.5%">
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

    <input type="text" style="width:94%; background-color:#ebf1f7; border:0px; border-radius:10px; height:6%; padding:1.5%; padding-left:2%; margin-top:-1.5%; color: #848484; margin-left:3%; margin-right:20%; outline:none" placeholder="Ingrese el nombre del grupo" maxlength="30">
    <input type="text" style="width:94%; background-color:#ebf1f7; border:0px; border-radius:10px; height:6%; padding:1.5%; padding-left:2%; margin-bottom:1%; margin-top:1.7%; color: #848484; margin-left:3%; margin-right:20%; outline:none" placeholder="Descripcion del grupo">
    <span style="--bs-text-opacity: 1;color: rgb(191, 204, 223) !important;margin-left:3%;font-size: 0.875em;">Ingrese el nombre del grupo, una breve descripcion y agregue una foto opcional.</span>
    <br><br><br>
                            <button style="margin-left: 3%; width:94%; padding:1.5%; background:#227afc; color:white" class="btn d-flex align-items-center" type="button">
                                    Crear grupo
                                    <span class="icon ms-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </span>
                                </button>
                                <br>
</div>
                                    
                            

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
  <br>
  
  <div class="card-body" style="padding-top: 1.7%; padding-bottom:1.7%; height: 17%; background:white; border-radius: 15px; margin-bottom: 1.5%;">
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
  
 <div class="card-body" style="padding-top: 1.7%; padding-bottom:1.7%; height: 17%; background:white; border-radius: 15px; margin-bottom: 1.5%;">
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
   
 <div class="card-body" style="padding-top: 1.7%; padding-bottom:1.7%; height: 17%; background:white; border-radius: 15px; margin-bottom: 1.5%;">
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
</form>
</div>
<?php
}
?>
<!--Barra de crear grupo-->



<!--Barra de conversacion chat-->
<?php 
if(isset(($_GET['id'])))
{
?>
<div class="col-lg-7" style="background-color:white; overflow-x:hidden; overflow-y:scroll;  height:49rem">


  <div style="background-color:rgba(255, 255, 255, 0.87); backdrop-filter: blur(35px); padding:1%; width:59%; height:80px; position:fixed; margin-left:-0.8%">
  <div class="card-body">
                                                <div class="row" style="padding-top: 0.5%;">
                                                    <div class="col-auto" >
                                                        <div class="avatar avatar-online">
                                                            <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-10 " style="margin-left: -1%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">Juan angel</h5>
                                                            <div style="position:relative; left:5%; top: 10px;"  data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg  xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#2787f5" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                                                  </svg>
                                                            </div>
                                                            <div class="dropdown-center">
                                                               
                                                                <ul style="background-color:#ffffff; backdrop-filter: blur(35px); border: 0.5px; margin: 60%;" class="sombras dropdown-menu">
                                                                  <li class="dropdown-item" style="margin-top: 5%;" data-bs-toggle="modal" data-bs-target="#info_chat">Info. del contacto</a></li>
                                                                  <li><a class="dropdown-item" style="margin-top: 5%;" href="#">Vaciar mensajes</a></li>
                                                                  <li><a class="dropdown-item" style="margin-top: 5%; color: red;" href="#">Eliminar chat</a></li>
                                                                </ul>
                                                              </div>
                                                        </div>

                                                        <div class="line-clamp me-auto text-truncate" style="margin-top:-2%; width:50%">
                                                                Hello! Yeah, I'm going to meet my friend of mine at the departments stores now.
                                                            </div>
                                                    </div>
                                                </div>
                                                <br><br>
    </div>
  </div>

<br><br><br><br><br>

  <div class="message">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
                                            <img class="avatar-img" src="assets/img/avatars/2.jpg" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                                    </div>
                                                </div>
<br>
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p>Send me the files please.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="message-footer">
                                                <span class="extra-small text-muted">08:45 PM</span>
                                            </div>
                                        </div>  
    </div>


<div class="message message-out">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
                                            <img class="avatar-img" src="assets/img/avatars/1.jpg" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <blockquote class="blockquote overflow-hidden">
                                                            <h6 class="text-reset text-truncate">William Wright</h6>
                                                            <p class="small text-truncate">Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                                        </blockquote>
                                                        <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                                    </div>
                                                </div>
<br>
                                                <div class="message-content">
                                                    <div class="message-text">

                                                        <div class="row align-items-center gx-4">
                                                            <div class="col-auto">
                                                                <a href="#" class="avatar avatar-sm">
                                                                    <div class="avatar-text bg-white text-primary">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col overflow-hidden">
                                                                <h6 class="text-truncate text-reset">
                                                                    <a href="#" class="text-reset">filename.json</a>
                                                                </h6>
                                                                <ul class="list-inline text-uppercase extra-small opacity-75 mb-0">
                                                                    <li class="list-inline-item">79.2 KB</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="message-footer">
                                                <span class="extra-small text-muted">08:45 PM</span>
                                            </div>
                                        </div>
</div>

<div class="message">
    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
        <img class="avatar-img" src="assets/img/avatars/2.jpg" alt="">
    </a>

    <div class="message-inner">
        <div class="message-body">
            <div class="message-content">
                <div class="message-text">
                    <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                </div>
            </div>
<br>
            <div class="message-content">
                <div class="message-text">
                    <p>Send me the files please.</p>
                </div>
            </div>
        </div>

        <div class="message-footer">
            <span class="extra-small text-muted">08:45 PM</span>
        </div>
    </div>  
</div>


<div class="message message-out">
    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
        <img class="avatar-img" src="assets/img/avatars/1.jpg" alt="">
    </a>

    <div class="message-inner">
        <div class="message-body">
            <div class="message-content">
                <div class="message-text">
                    <blockquote class="blockquote overflow-hidden">
                        <h6 class="text-reset text-truncate">William Wright</h6>
                        <p class="small text-truncate">Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                    </blockquote>
                    <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                </div>
            </div>
<br>
            <div class="message-content">
                <div class="message-text">

                    <div class="row align-items-center gx-4">
                        <div class="col-auto">
                            <a href="#" class="avatar avatar-sm">
                                <div class="avatar-text bg-white text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>
                                </div>
                            </a>
                        </div>
                        <div class="col overflow-hidden">
                            <h6 class="text-truncate text-reset">
                                <a href="#" class="text-reset">filename.json</a>
                            </h6>
                            <ul class="list-inline text-uppercase extra-small opacity-75 mb-0">
                                <li class="list-inline-item">79.2 KB</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="message-footer">
            <span class="extra-small text-muted">08:45 PM</span>
        </div>
    </div>
</div>
<div class="message">
    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
        <img class="avatar-img" src="assets/img/avatars/2.jpg" alt="">
    </a>

    <div class="message-inner">
        <div class="message-body">
            <div class="message-content">
                <div class="message-text">
                    <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                </div>
            </div>
<br>
            <div class="message-content">
                <div class="message-text">
                    <p>Send me the files please.</p>
                </div>
            </div>
        </div>

        <div class="message-footer">
            <span class="extra-small text-muted">08:45 PM</span>
        </div>
    </div>  
</div>


<div class="message message-out">
    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
        <img class="avatar-img" src="assets/img/avatars/1.jpg" alt="">
    </a>

    <div class="message-inner">
        <div class="message-body">
            <div class="message-content">
                <div class="message-text">
                    <blockquote class="blockquote overflow-hidden">
                        <h6 class="text-reset text-truncate">William Wright</h6>
                        <p class="small text-truncate">Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                    </blockquote>
                    <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                </div>
            </div>
<br>
            <div class="message-content">
                <div class="message-text">

                    <div class="row align-items-center gx-4">
                        <div class="col-auto">
                            <a href="#" class="avatar avatar-sm">
                                <div class="avatar-text bg-white text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>
                                </div>
                            </a>
                        </div>
                        <div class="col overflow-hidden">
                            <h6 class="text-truncate text-reset">
                                <a href="#" class="text-reset">filename.json</a>
                            </h6>
                            <ul class="list-inline text-uppercase extra-small opacity-75 mb-0">
                                <li class="list-inline-item">79.2 KB</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="message-footer">
            <span class="extra-small text-muted">08:45 PM</span>
        </div>
    </div>
</div>

 <br><br><br>
<div style="background-color:rgba(255, 255, 255, 0.87); backdrop-filter: blur(35px); padding:1%; width:59%; height:65px; position:fixed; margin-left:-0.8%; top: 91.1%; ">
    <input type="text" style="margin-left: 3%; margin-right: 3%; width: 94%; height: 110%; border: 0px; background-color: transparent; outline: none; color: #848484;" placeholder="Escribe tu mensaje">
 </div>
  
</div>
<!--Barra de conversacion chat-->
<?php
}
?>


<!--Barra de conversacion chat archivado-->
<?php 
if(isset(($_GET['archivadoid'])))
{
?>
<div class="col-lg-7" style="background-color:white; overflow-x:hidden; overflow-y:scroll;  height:49rem">


  <div style="background-color:rgba(255, 255, 255, 0.87); backdrop-filter: blur(35px); padding:1%; width:59%; height:80px; position:fixed; margin-left:-0.8%">
  <div class="card-body">
                                                <div class="row" style="padding-top: 0.5%;">
                                                    <div class="col-auto" >
                                                        <div class="avatar avatar-online">
                                                            <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-10 " style="margin-left: -1%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">Juan angel archivado</h5>
                                                            <div style="position:relative; left:5%; top: 10px;"  data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg  xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#2787f5" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                                                  </svg>
                                                            </div>
                                                            <div class="dropdown-center">
                                                               
                                                                <ul style="background-color:#ffffff; backdrop-filter: blur(35px); border: 0.5px; margin: 60%;" class="sombras dropdown-menu">
                                                                  <li class="dropdown-item" style="margin-top: 5%;" data-bs-toggle="modal" data-bs-target="#info_chat">Info. del contacto</a></li>
                                                                  <li><a class="dropdown-item" style="margin-top: 5%;" href="#">Vaciar mensajes</a></li>
                                                                  <li><a class="dropdown-item" style="margin-top: 5%; color: red;" href="#">Eliminar chat</a></li>
                                                                </ul>
                                                              </div>
                                                        </div>

                                                        <div class="line-clamp me-auto text-truncate" style="margin-top:-2%; width:50%">
                                                                Hello! Yeah, I'm going to meet my friend of mine at the departments stores now.
                                                            </div>
                                                    </div>
                                                </div>
                                                <br><br>
    </div>
  </div>

<br><br><br><br><br>

  <div class="message">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
                                            <img class="avatar-img" src="assets/img/avatars/2.jpg" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                                    </div>
                                                </div>
<br>
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p>Send me the files please.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="message-footer">
                                                <span class="extra-small text-muted">08:45 PM</span>
                                            </div>
                                        </div>  
    </div>


<div class="message message-out">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
                                            <img class="avatar-img" src="assets/img/avatars/1.jpg" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <blockquote class="blockquote overflow-hidden">
                                                            <h6 class="text-reset text-truncate">William Wright</h6>
                                                            <p class="small text-truncate">Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                                        </blockquote>
                                                        <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                                    </div>
                                                </div>
<br>
                                                <div class="message-content">
                                                    <div class="message-text">

                                                        <div class="row align-items-center gx-4">
                                                            <div class="col-auto">
                                                                <a href="#" class="avatar avatar-sm">
                                                                    <div class="avatar-text bg-white text-primary">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col overflow-hidden">
                                                                <h6 class="text-truncate text-reset">
                                                                    <a href="#" class="text-reset">filename.json</a>
                                                                </h6>
                                                                <ul class="list-inline text-uppercase extra-small opacity-75 mb-0">
                                                                    <li class="list-inline-item">79.2 KB</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="message-footer">
                                                <span class="extra-small text-muted">08:45 PM</span>
                                            </div>
                                        </div>
</div>

<div class="message">
    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
        <img class="avatar-img" src="assets/img/avatars/2.jpg" alt="">
    </a>

    <div class="message-inner">
        <div class="message-body">
            <div class="message-content">
                <div class="message-text">
                    <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                </div>
            </div>
<br>
            <div class="message-content">
                <div class="message-text">
                    <p>Send me the files please.</p>
                </div>
            </div>
        </div>

        <div class="message-footer">
            <span class="extra-small text-muted">08:45 PM</span>
        </div>
    </div>  
</div>


<div class="message message-out">
    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
        <img class="avatar-img" src="assets/img/avatars/1.jpg" alt="">
    </a>

    <div class="message-inner">
        <div class="message-body">
            <div class="message-content">
                <div class="message-text">
                    <blockquote class="blockquote overflow-hidden">
                        <h6 class="text-reset text-truncate">William Wright</h6>
                        <p class="small text-truncate">Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                    </blockquote>
                    <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                </div>
            </div>
<br>
            <div class="message-content">
                <div class="message-text">

                    <div class="row align-items-center gx-4">
                        <div class="col-auto">
                            <a href="#" class="avatar avatar-sm">
                                <div class="avatar-text bg-white text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>
                                </div>
                            </a>
                        </div>
                        <div class="col overflow-hidden">
                            <h6 class="text-truncate text-reset">
                                <a href="#" class="text-reset">filename.json</a>
                            </h6>
                            <ul class="list-inline text-uppercase extra-small opacity-75 mb-0">
                                <li class="list-inline-item">79.2 KB</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="message-footer">
            <span class="extra-small text-muted">08:45 PM</span>
        </div>
    </div>
</div>
<div class="message">
    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
        <img class="avatar-img" src="assets/img/avatars/2.jpg" alt="">
    </a>

    <div class="message-inner">
        <div class="message-body">
            <div class="message-content">
                <div class="message-text">
                    <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                </div>
            </div>
<br>
            <div class="message-content">
                <div class="message-text">
                    <p>Send me the files please.</p>
                </div>
            </div>
        </div>

        <div class="message-footer">
            <span class="extra-small text-muted">08:45 PM</span>
        </div>
    </div>  
</div>


<div class="message message-out">
    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
        <img class="avatar-img" src="assets/img/avatars/1.jpg" alt="">
    </a>

    <div class="message-inner">
        <div class="message-body">
            <div class="message-content">
                <div class="message-text">
                    <blockquote class="blockquote overflow-hidden">
                        <h6 class="text-reset text-truncate">William Wright</h6>
                        <p class="small text-truncate">Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                    </blockquote>
                    <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                </div>
            </div>
<br>
            <div class="message-content">
                <div class="message-text">

                    <div class="row align-items-center gx-4">
                        <div class="col-auto">
                            <a href="#" class="avatar avatar-sm">
                                <div class="avatar-text bg-white text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>
                                </div>
                            </a>
                        </div>
                        <div class="col overflow-hidden">
                            <h6 class="text-truncate text-reset">
                                <a href="#" class="text-reset">filename.json</a>
                            </h6>
                            <ul class="list-inline text-uppercase extra-small opacity-75 mb-0">
                                <li class="list-inline-item">79.2 KB</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="message-footer">
            <span class="extra-small text-muted">08:45 PM</span>
        </div>
    </div>
</div>

 <br><br><br>
<div style="background-color:rgba(255, 255, 255, 0.87); backdrop-filter: blur(35px); padding:1%; width:59%; height:65px; position:fixed; margin-left:-0.8%; top: 91.1%; ">
    <input type="text" style="margin-left: 3%; margin-right: 3%; width: 94%; height: 110%; border: 0px; background-color: transparent; outline: none; color: #848484;" placeholder="Escribe tu mensaje">
 </div>
  
</div>
<!--Barra de conversacion chat archivado-->
<?php
}
?>


<!--Barra de conversacion Persona nueva-->
<?php 
if(isset(($_GET['persona'])))
{
?>
<div class="col-lg-7" style="background-color:white; overflow-x:hidden; overflow-y:scroll;  height:49rem">


  <div style="background-color:rgba(255, 255, 255, 0.87); backdrop-filter: blur(35px); padding:1%; width:59%; height:80px; position:fixed; margin-left:-0.8%">
  <div class="card-body">

 
                                                <div class="row" style="padding-top: 0.5%;">
                                                    <div class="col-auto" >
                                                        <div class="avatar avatar-online">
                                                            <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-10 " style="margin-left: -1%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">Juan angel nueva persona</h5>
                                                            <div style="position:relative; left:5%; top: 10px;"  data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg  xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#2787f5" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                                                  </svg>
                                                            </div>
                                                            <div class="dropdown-center">
                                                               
                                                                <ul style="background-color:#ffffff; backdrop-filter: blur(35px); border: 0.5px; margin: 60%;" class="sombras dropdown-menu">
                                                                  <li class="dropdown-item" style="margin-top: 5%;" data-bs-toggle="modal" data-bs-target="#info_chat">Info. del contacto</a></li>
                                                                  <li><a class="dropdown-item" style="margin-top: 5%;" href="#">Vaciar mensajes</a></li>
                                                                  <li><a class="dropdown-item" style="margin-top: 5%; color: red;" href="#">Eliminar chat</a></li>
                                                                </ul>
                                                              </div>
                                                        </div>

                                                        <div class="line-clamp me-auto text-truncate" style="margin-top:-2%; width:50%">
                                                                Hello! Yeah, I'm going to meet my friend of mine at the departments stores now.
                                                            </div>
                                                    </div>
                                                </div>
                                                <br><br>
    </div>
  </div>

<br><br><br><br>

  <center>
  <div style="background-color: #ebf1f7; width:15%; border-radius:10px;">
    <p class="line-clamp">05/06/22</p>
  </div>
  </center>

  <center>
  <div style="background-color: #ebf1f7; width:60%; border-radius:10px; padding-top:1.5%; padding-left:2%; padding-right:2%; padding-bottom:0.1%">
    <p class="line-clamp"><img src="https://img.icons8.com/emoji/30/null/waving-hand-emoji.png"/> &ensp; Saluda a Juan angel para agregarlo a tu lista de chats.</p>
  </div>
  </center>
  <br>


  <div class="message">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
                                            <img class="avatar-img" src="assets/img/avatars/2.jpg" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                                    </div>
                                                </div>
<br>
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p>Send me the files please.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="message-footer">
                                                <span class="extra-small text-muted">08:45 PM</span>
                                            </div>
                                        </div>  
    </div>


<div class="message message-out">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
                                            <img class="avatar-img" src="assets/img/avatars/1.jpg" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <blockquote class="blockquote overflow-hidden">
                                                            <h6 class="text-reset text-truncate">William Wright</h6>
                                                            <p class="small text-truncate">Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                                        </blockquote>
                                                        <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                                    </div>
                                                </div>
<br>
                                                <div class="message-content">
                                                    <div class="message-text">

                                                        <div class="row align-items-center gx-4">
                                                            <div class="col-auto">
                                                                <a href="#" class="avatar avatar-sm">
                                                                    <div class="avatar-text bg-white text-primary">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col overflow-hidden">
                                                                <h6 class="text-truncate text-reset">
                                                                    <a href="#" class="text-reset">filename.json</a>
                                                                </h6>
                                                                <ul class="list-inline text-uppercase extra-small opacity-75 mb-0">
                                                                    <li class="list-inline-item">79.2 KB</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="message-footer">
                                                <span class="extra-small text-muted">08:45 PM</span>
                                            </div>
                                        </div>
</div>

<div class="message">
    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
        <img class="avatar-img" src="assets/img/avatars/2.jpg" alt="">
    </a>

    <div class="message-inner">
        <div class="message-body">
            <div class="message-content">
                <div class="message-text">
                    <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                </div>
            </div>
<br>
            <div class="message-content">
                <div class="message-text">
                    <p>Send me the files please.</p>
                </div>
            </div>
        </div>

        <div class="message-footer">
            <span class="extra-small text-muted">08:45 PM</span>
        </div>
    </div>  
</div>


<div class="message message-out">
    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
        <img class="avatar-img" src="assets/img/avatars/1.jpg" alt="">
    </a>

    <div class="message-inner">
        <div class="message-body">
            <div class="message-content">
                <div class="message-text">
                    <blockquote class="blockquote overflow-hidden">
                        <h6 class="text-reset text-truncate">William Wright</h6>
                        <p class="small text-truncate">Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                    </blockquote>
                    <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                </div>
            </div>
<br>
            <div class="message-content">
                <div class="message-text">

                    <div class="row align-items-center gx-4">
                        <div class="col-auto">
                            <a href="#" class="avatar avatar-sm">
                                <div class="avatar-text bg-white text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>
                                </div>
                            </a>
                        </div>
                        <div class="col overflow-hidden">
                            <h6 class="text-truncate text-reset">
                                <a href="#" class="text-reset">filename.json</a>
                            </h6>
                            <ul class="list-inline text-uppercase extra-small opacity-75 mb-0">
                                <li class="list-inline-item">79.2 KB</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="message-footer">
            <span class="extra-small text-muted">08:45 PM</span>
        </div>
    </div>
</div>
<div class="message">
    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
        <img class="avatar-img" src="assets/img/avatars/2.jpg" alt="">
    </a>

    <div class="message-inner">
        <div class="message-body">
            <div class="message-content">
                <div class="message-text">
                    <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                </div>
            </div>
<br>
            <div class="message-content">
                <div class="message-text">
                    <p>Send me the files please.</p>
                </div>
            </div>
        </div>

        <div class="message-footer">
            <span class="extra-small text-muted">08:45 PM</span>
        </div>
    </div>  
</div>


<div class="message message-out">
    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
        <img class="avatar-img" src="assets/img/avatars/1.jpg" alt="">
    </a>

    <div class="message-inner">
        <div class="message-body">
            <div class="message-content">
                <div class="message-text">
                    <blockquote class="blockquote overflow-hidden">
                        <h6 class="text-reset text-truncate">William Wright</h6>
                        <p class="small text-truncate">Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                    </blockquote>
                    <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                </div>
            </div>
<br>
            <div class="message-content">
                <div class="message-text">

                    <div class="row align-items-center gx-4">
                        <div class="col-auto">
                            <a href="#" class="avatar avatar-sm">
                                <div class="avatar-text bg-white text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>
                                </div>
                            </a>
                        </div>
                        <div class="col overflow-hidden">
                            <h6 class="text-truncate text-reset">
                                <a href="#" class="text-reset">filename.json</a>
                            </h6>
                            <ul class="list-inline text-uppercase extra-small opacity-75 mb-0">
                                <li class="list-inline-item">79.2 KB</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="message-footer">
            <span class="extra-small text-muted">08:45 PM</span>
        </div>
    </div>
</div>

 <br><br><br>
<div style="background-color:rgba(255, 255, 255, 0.87); backdrop-filter: blur(35px); padding:1%; width:59%; height:65px; position:fixed; margin-left:-0.8%; top: 91.1%; ">
    <input type="text" style="margin-left: 3%; margin-right: 3%; width: 94%; height: 110%; border: 0px; background-color: transparent; outline: none; color: #848484;" placeholder="Escribe tu mensaje">
 </div>
  
</div>
<!--Barra de conversacion Persona nueva-->
<?php
}
?>

<!--Barra de conversacion grupos-->
<?php 
if(isset(($_GET['grupoid'])))
{
?>
<div class="col-lg-7" style="background-color:white; overflow-x:hidden; overflow-y:scroll;  height:49rem">


  <div style="background-color:rgba(255, 255, 255, 0.87); backdrop-filter: blur(35px); padding:1%; width:59%; height:80px; position:fixed; margin-left:-0.8%">
  <div class="card-body">
                                                <div class="row" style="padding-top: 0.5%;">
                                                    <div class="col-auto" >
                                                        <div class="avatar avatar-online">
                                                            <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-10 " style="margin-left: -1%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">Grupo1</h5>
                                                            <div style="position:relative; left:5%; top: 10px;"  data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg  xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#2787f5" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                                                  </svg>
                                                            </div>
                                                            <div class="dropdown-center">
                                                               
                                                                <ul style="background-color:#ffffff; backdrop-filter: blur(35px); border: 0.5px; margin: 60%;" class="sombras dropdown-menu">                                                             
                                                                <li class="dropdown-item" style="margin-top: 5%;" data-bs-toggle="modal" data-bs-target="#info_group">Info. del grupo</li>
                                                                <li class="dropdown-item" style="margin-top: 5%;" data-bs-toggle="modal" data-bs-target="#edit_description">Editar Descripcion</li>  
                                                                <li class="dropdown-item" style="margin-top: 5%;" data-bs-toggle="modal" data-bs-target="#add_members" >Añadir miembros</li>
                                                                <li><a class="dropdown-item" style="margin-top: 5%; color:red" href="#">Salir del grupo</a></li>
                                                                </ul>
                                                              </div>
                                                        </div>

                                                        <div class="line-clamp me-auto text-truncate" style="margin-top:-2%; width:50%">
                                                                Hello! Yeah, I'm going to meet my friend of mine at the departments stores now.
                                                            </div>
                                                    </div>
                                                </div>
                                                <br><br>
    </div>
    
  </div>

<br><br><br><br><br>

  <div class="message">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
                                            <img class="avatar-img" src="assets/img/avatars/2.jpg" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                                    </div>
                                                </div>
<br>
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p>Send me the files please.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="message-footer">
                                                <span class="extra-small text-muted">08:45 PM</span>
                                            </div>
                                        </div>  
    </div>


<div class="message message-out">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
                                            <img class="avatar-img" src="assets/img/avatars/1.jpg" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <blockquote class="blockquote overflow-hidden">
                                                            <h6 class="text-reset text-truncate">William Wright</h6>
                                                            <p class="small text-truncate">Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                                        </blockquote>
                                                        <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                                    </div>
                                                </div>
<br>
                                                <div class="message-content">
                                                    <div class="message-text">

                                                        <div class="row align-items-center gx-4">
                                                            <div class="col-auto">
                                                                <a href="#" class="avatar avatar-sm">
                                                                    <div class="avatar-text bg-white text-primary">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col overflow-hidden">
                                                                <h6 class="text-truncate text-reset">
                                                                    <a href="#" class="text-reset">filename.json</a>
                                                                </h6>
                                                                <ul class="list-inline text-uppercase extra-small opacity-75 mb-0">
                                                                    <li class="list-inline-item">79.2 KB</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="message-footer">
                                                <span class="extra-small text-muted">08:45 PM</span>
                                            </div>
                                        </div>
</div>

<div class="message">
    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
        <img class="avatar-img" src="assets/img/avatars/2.jpg" alt="">
    </a>

    <div class="message-inner">
        <div class="message-body">
            <div class="message-content">
                <div class="message-text">
                    <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                </div>
            </div>
<br>
            <div class="message-content">
                <div class="message-text">
                    <p>Send me the files please.</p>
                </div>
            </div>
        </div>

        <div class="message-footer">
            <span class="extra-small text-muted">08:45 PM</span>
        </div>
    </div>  
</div>


<div class="message message-out">
    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
        <img class="avatar-img" src="assets/img/avatars/1.jpg" alt="">
    </a>

    <div class="message-inner">
        <div class="message-body">
            <div class="message-content">
                <div class="message-text">
                    <blockquote class="blockquote overflow-hidden">
                        <h6 class="text-reset text-truncate">William Wright</h6>
                        <p class="small text-truncate">Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                    </blockquote>
                    <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                </div>
            </div>
<br>
            <div class="message-content">
                <div class="message-text">

                    <div class="row align-items-center gx-4">
                        <div class="col-auto">
                            <a href="#" class="avatar avatar-sm">
                                <div class="avatar-text bg-white text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>
                                </div>
                            </a>
                        </div>
                        <div class="col overflow-hidden">
                            <h6 class="text-truncate text-reset">
                                <a href="#" class="text-reset">filename.json</a>
                            </h6>
                            <ul class="list-inline text-uppercase extra-small opacity-75 mb-0">
                                <li class="list-inline-item">79.2 KB</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="message-footer">
            <span class="extra-small text-muted">08:45 PM</span>
        </div>
    </div>
</div>
<div class="message">
    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
        <img class="avatar-img" src="assets/img/avatars/2.jpg" alt="">
    </a>

    <div class="message-inner">
        <div class="message-body">
            <div class="message-content">
                <div class="message-text">
                    <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                </div>
            </div>
<br>
            <div class="message-content">
                <div class="message-text">
                    <p>Send me the files please.</p>
                </div>
            </div>
        </div>

        <div class="message-footer">
            <span class="extra-small text-muted">08:45 PM</span>
        </div>
    </div>  
</div>


<div class="message message-out">
    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
        <img class="avatar-img" src="assets/img/avatars/1.jpg" alt="">
    </a>

    <div class="message-inner">
        <div class="message-body">
            <div class="message-content">
                <div class="message-text">
                    <blockquote class="blockquote overflow-hidden">
                        <h6 class="text-reset text-truncate">William Wright</h6>
                        <p class="small text-truncate">Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                    </blockquote>
                    <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                </div>
            </div>
<br>
            <div class="message-content">
                <div class="message-text">

                    <div class="row align-items-center gx-4">
                        <div class="col-auto">
                            <a href="#" class="avatar avatar-sm">
                                <div class="avatar-text bg-white text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>
                                </div>
                            </a>
                        </div>
                        <div class="col overflow-hidden">
                            <h6 class="text-truncate text-reset">
                                <a href="#" class="text-reset">filename.json</a>
                            </h6>
                            <ul class="list-inline text-uppercase extra-small opacity-75 mb-0">
                                <li class="list-inline-item">79.2 KB</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
 
        <div class="message-footer">
            <span class="extra-small text-muted">08:45 PM</span>
        </div>
    </div>
</div>


 <br><br><br>
<div style="background-color:rgba(255, 255, 255, 0.87); backdrop-filter: blur(35px); padding:1%; width:59%; height:65px; position:fixed; margin-left:-0.8%; top: 91.1%; ">
    <input type="text" style="margin-left: 3%; margin-right: 3%; width: 94%; height: 110%; border: 0px; background-color: transparent; outline: none; color: #848484;" placeholder="Escribe tu mensaje">
 </div>
  
</div>
<!--Barra de conversacion grupos-->
<?php
}
?>

</div>





<!-- Modals -->

<!-- Modal añadir miembros a un grupo -->

<div class="modal fade" id="add_members" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="background-color: transparent;">
    <div class="modal-content" style="background-color:  rgba(255, 255, 255, 0.886); backdrop-filter:blur(20px)">
      <div class="modal-body">
        <br>
        <div style="margin-left: 5%;"  data-bs-dismiss="modal">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#2787f5" class="bi bi-chevron-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
        </svg>
        </div>
        
                                                <div class="col text-center" style="margin-top: -5%;">
                                                <h5 class="me-auto mb-0" style="font-size: .9995rem;">Miembros</h5>
                                                    <p style="margin-top: 1.5%;font-size:15px; color:#95aac9">Agrega nuevos miembros</p>
                                                </div> 
                                                
                                            <input type="text" style="width:100%; background-color:#ebf1f7; border:0px; border-radius:10px; height:8%; padding:5%; padding-left:15%; color: #848484; outline:none" placeholder="Busca chats o usuarios">
                                            <img src="https://img.icons8.com/ios/23/a2b5cf/search--v1.png" style="position:relative; bottom:37px; left:5%">

                    
                     <!--offcanvas miembros --->

                    <div class="card-body" style="padding-top: 3%; padding-bottom:3%; height: 17%; border-radius: 15px; margin-bottom: 4%;">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
                                                        </div>
                                                    </div>

                                                    <div class="col" style="margin-left: -7%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                                                        </div>

                                                        <div class="d-flex align-items-center" style="margin-top: -3%;">
                                                            <div class="line-clamp me-auto">
                                                                Hello! Yeah, I'm going 
                                                            </div>
                                                            
                                                            <div class="form-check">
                                                                <input style="border:none;" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                            </div>

                                                        </div>
                                                        <hr style="width:100%; margin:auto; color:#95aac9; opacity:0.2; position:relative; top:20px">
                                                    </div>
                                                </div>
                                              
                                            </div>   
                                                   
                                            <div class="card-body" style="padding-top: 3%; padding-bottom:3%; height: 17%; border-radius: 15px; margin-bottom: 4%;">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
                                                        </div>
                                                    </div>

                                                    <div class="col" style="margin-left: -7%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                                                        </div>

                                                        <div class="d-flex align-items-center" style="margin-top: -3%;">
                                                            <div class="line-clamp me-auto">
                                                                Hello! Yeah, I'm going 
                                                            </div>
                                                            
                                                            <div class="form-check">
                                                                <input style="border:none;" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                            </div>

                                                        </div>
                                                        <hr style="width:100%; margin:auto; color:#95aac9; opacity:0.2; position:relative; top:20px">
                                                    </div>
                                                </div>
                                            </div>          


                                            <div class="card-body" style=" padding-top: 3%; padding-bottom:3%; height: 17%; border-radius: 15px; margin-bottom: 4%;">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
                                                        </div>
                                                    </div>

                                                    <div class="col" style="margin-left: -7%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                                                        </div>

                                                        <div class="d-flex align-items-center" style="margin-top: -3%;">
                                                            <div class="line-clamp me-auto">
                                                                Hello! Yeah, I'm going 
                                                            </div>

                                                            <div class="form-check">
                                                                <input style="border:none;" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                            </div>

                                                        </div>
                                                        <hr style="width:100%; margin:auto; color:#95aac9; opacity:0.2; position:relative; top:20px">
                                                    </div>
                                                </div>
                                            </div>                         
                      
                        <!--offcanvas miembros --->              
      </div>
      <center>
      <form action="" method="post">
                <a href="">
                <button style="margin:2; margin-bottom:5%; margin-top:-3%; width:50%; padding-top:2%; padding-bottom:2%; border-radius:10px;" type="button" class="btn btn-primary" >Añadir miembros</button>
                </a>
            </form>   
            </center>
    </div>
  </div>
</div>

<!-- Modal añadir miembros a un grupo -->


<!-- Modal informacion sobre grupo -->
<div class="modal fade" id="info_group" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="background-color: transparent;">
    <div class="modal-content" style="background-color:  rgba(255, 255, 255, 0.886); backdrop-filter:blur(20px)">
      <div class="modal-body">
        <br>
        <div style="margin-left: 5%;"  data-bs-dismiss="modal">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#2787f5" class="bi bi-chevron-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
        </svg>
        </div>
            <center>
            <div class="avatar">
                <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" style="height: 75px;width: 75px;border-radius:50%;border: 5px solid  rgba(233, 233, 233, 0.886) ;position: relative;display: -webkit-box;display: -ms-flexbox;display: flex;">
             </div>
             </center>
                                              
                                                <div class="col text-center" style="margin-top: 3%;">
                                                <h5 class="me-auto mb-0" style="font-size: .9995rem;">Grupo1</h5>
                                                    <p style="margin-top: 1.5%;font-size:15px; color:#95aac9">Descripcion del grupo1.</p>
                                                </div> 

                     <!--Tabs --->
                                              
                                                <ul class="ul nav nav-pills nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="pill" href="#miembros" role="tab" aria-controls="offcanvas-group-tab-members" aria-selected="true">
                                Miembros
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#documentos" role="tab" aria-controls="offcanvas-group-tab-files" aria-selected="false">
                                Documentos
                            </a>
                        </li>
                    </ul>
                    <!--Tabs --->
                    <br>

                    
                     <!--offcanvas miembros --->
                    <div class="tab-pane fade active show" id="miembros" role="tabpanel">
                    <div class="card-body" style="background-color: rgba(245, 245, 245, 0.896); padding-top: 3%; padding-bottom:3%; height: 17%; border-radius: 15px; margin-bottom: 4%;">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
                                                        </div>
                                                    </div>

                                                    <div class="col" style="margin-left: -7%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                                                        </div>

                                                        <div class="d-flex align-items-center" style="margin-top: -3%;">
                                                            <div class="line-clamp me-auto">
                                                                Hello! Yeah, I'm going 
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>          
                                            <div class="card-body" style="background-color: rgba(245, 245, 245, 0.896); padding-top: 3%; padding-bottom:3%; height: 17%; border-radius: 15px; margin-bottom: 4%;">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
                                                        </div>
                                                    </div>

                                                    <div class="col" style="margin-left: -7%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                                                        </div>

                                                        <div class="d-flex align-items-center" style="margin-top: -3%;">
                                                            <div class="line-clamp me-auto">
                                                                Hello! Yeah, I'm going 
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>          
                                            <div class="card-body" style="background-color: rgba(245, 245, 245, 0.896); padding-top: 3%; padding-bottom:3%; height: 17%; border-radius: 15px; margin-bottom: 4%;">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" class="img-profile">
                                                        </div>
                                                    </div>

                                                    <div class="col" style="margin-left: -7%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                                                        </div>

                                                        <div class="d-flex align-items-center" style="margin-top: -3%;">
                                                            <div class="line-clamp me-auto">
                                                                Hello! Yeah, I'm going 
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                         
                        </div>
                        <!--offcanvas miembros --->              
      </div>
    </div>
  </div>
</div>
<!-- Modal informacion sobre grupo -->


<!-- Modal Editar descripcion de  un grupo -->
<div class="modal fade" id="edit_description" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="background-color: transparent;">
    <div class="modal-content" style="background-color:  rgba(255, 255, 255, 0.886); backdrop-filter:blur(20px); padding-right:2.5%">
      <div class="modal-body">
        <br>
        <div style="margin-left: 5%;"  data-bs-dismiss="modal">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#2787f5" class="bi bi-chevron-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
        </svg>
        </div>
            <center>
            <div class="avatar">
                <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" style="height: 75px;width: 75px;border-radius:50%;border: 5px solid  rgba(233, 233, 233, 0.886) ;position: relative;display: -webkit-box;display: -ms-flexbox;display: flex;">
             </div>
             </center>
                                              
                                                <div class="col text-center" style="margin-top: 3%;">
                                                <h5 class="me-auto mb-0" style="font-size: .9995rem;">Edita la descripcion del grupo</h5>
                                                </div> 
                                                <br>
                                                <input type="text" style="width:100%; margin:auto; background-color:#ebf1f7; margin-bottom:2.5%; border:0px; border-radius:10px; height:8%; padding:4%; padding-left:5%; color: #848484; outline:none" value="Esta es la descripcion del grupo 1"  required name="gdescripcion">
                    

      </div>
     
      <div class="row text-center" style="margin-bottom:2%">
      
            <form action="" method="post">
                <a href="">
                <button style="margin:2%; margin-top:-3%; width:50%; padding-top:2%; padding-bottom:2%; border-radius:10px;" type="button" class="btn btn-primary" >Guardar</button>
                </a>
            </form>   
      </div>
     

    </div>
  </div>
</div>
<!-- Modal Editar descripcion de  un grupo -->


<!-- Modal informacion sobre un chat -->
<div class="modal fade" id="info_chat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="background-color: transparent;">
    <div class="modal-content" style="background-color:  rgba(255, 255, 255, 0.886); backdrop-filter:blur(20px)">
      <div class="modal-body">
        <br>

        <div style="margin-left: 5%;"  data-bs-dismiss="modal">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#2787f5" class="bi bi-chevron-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
        </svg>
        </div>

            <center>
            <div class="avatar">
                <img src="https://avatars.githubusercontent.com/u/74835918?s=96&v=4" alt="#" style="height: 75px;width: 75px;border-radius:50%;border: 5px solid  rgba(233, 233, 233, 0.886) ;position: relative;display: -webkit-box;display: -ms-flexbox;display: flex;">
             </div>
             </center>                    
                                                <div class="col text-center" style="margin-top: 3%;">
                                                <h5 class="me-auto mb-0" style="font-size: .9995rem;">Juan angel</h5>
                                                    <p style="margin-top: 1.5%;font-size:15px; color:#95aac9">Hola estoy usando ChatPhone</p>
                                                </div> 

                     <!--Tabs --->
                                              
                                                <ul class="ul nav nav-pills nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="pill" href="#miembros" role="tab" aria-controls="offcanvas-group-tab-members" aria-selected="true">
                                Perfil
                            </a>
                        </li>

                    </ul>
                    <!--Tabs --->
                    <br>

                    
                     <!--offcanvas miembros --->
                    <div class="tab-pane fade active show" id="miembros" role="tabpanel">
                    <div class="card-body" style="background-color: rgba(245, 245, 245, 0.896); padding-top: 3%; padding-bottom:3%; height: 17%; border-radius: 15px; margin-bottom: 4%;">
                                                <div class="row gx-5">
                                

                                                    <div class="col" style="margin-left: 0%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">Telefono</h5>
                                                            
                                                            <div style="background-color: #ebf1f7; padding:1%; padding-left:3%; border-radius:8px; padding-right:3%; position:relative; top:15px; right:2%">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#9faacc" class="bi bi-telephone-outbound" viewBox="0 0 16 16">
                                                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z"/>
                                                                </svg>
                                                            </div>

                                                        </div>

                                                        <div class="d-flex align-items-center" style="margin-top: -3%;">
                                                            <div class="line-clamp me-auto">
                                                                8714428495 
                                                            </div>
                                                        </div>

                                                        

                                                    </div>
                                                </div>
                         </div>          

                         <div class="card-body" style="background-color: rgba(245, 245, 245, 0.896); padding-top: 3%; padding-bottom:3%; height: 17%; border-radius: 15px; margin-bottom: 4%;">
                                                <div class="row gx-5">
                                

                                                    <div class="col" style="margin-left: 0%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">Correo electrónico</h5>
                                                            
                                                            <div style="background-color: #ebf1f7; padding:1%; padding-left:3%; border-radius:8px; padding-right:3%; position:relative; top:15px; right:2%">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#9faacc" class="bi bi-envelope" viewBox="0 0 16 16">
                                                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                                                </svg>
                                                            </div>

                                                        </div>

                                                        <div class="d-flex align-items-center" style="margin-top: -3%;">
                                                            <div class="line-clamp me-auto">
                                                                herbstluftwm.28@gmail.com 
                                                            </div>
                                                        </div>

                                                        

                                                    </div>
                                                </div>
                         </div>     

                         <div class="card-body" style="background-color: rgba(245, 245, 245, 0.896); padding-top: 3%; padding-bottom:3%; height: 17%; border-radius: 15px; margin-bottom: 4%;">
                                                <div class="row gx-5">
                                

                                                    <div class="col" style="margin-left: 0%;">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">Info. de estado</h5>
                                                            
                                                            <div style="background-color: #ebf1f7; padding:1%; padding-left:3%; border-radius:8px; padding-right:3%; position:relative; top:15px; right:2%">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#9faacc" class="bi bi-card-text" viewBox="0 0 16 16">
                                                                    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                                                    <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                                                                </svg>
                                                            </div>

                                                        </div>

                                                        <div class="d-flex align-items-center" style="margin-top: -3%;">
                                                            <div class="line-clamp me-auto">
                                                                Hola estoy usando ChatPhone 
                                                            </div>
                                                        </div>

                                                        

                                                    </div>
                                                </div>
                         </div>     
                                           
                        <!--offcanvas miembros --->              
      </div>
    </div>
  </div>
</div>
<!-- Modal informacion sobre grupo -->
<!-- Modals -->
</body>
</html>