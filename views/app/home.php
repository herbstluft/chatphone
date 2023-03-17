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
    <title>Document</title>
       <!--Boostrap-->   
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/estilos.css">
    <!--Boostrap--> 
</head>

<style>
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
</style>

<body>

<div class="row">


<!--Barra herramientas-->
<div class="col-lg-1 text-center" style="background-color:white; overflow-x:hidden; overflow-y:scroll;  height:49rem">
     <!--Logo--> 
    <a href="/" class="d-block p-3 link-dark text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only" style="margin-top:10%">
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
    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
      <li class="nav-item">
         <!--Nuevo grupo--> 
        <a href="#" class="a nav-link  py-3 rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home" data-bs-original-title="Home">
          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#96abc9" class="a bi bi-pencil-square " viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg>
        </a>
      </li>
      <li>
        <br>
        <!--Personas--> 
        <a href="#" class="nav-link py-3 rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Dashboard" data-bs-original-title="Dashboard">
          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#96abc9" class="bi bi-people" viewBox="0 0 16 16">
            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
          </svg>
        </a>
      </li>
      <li>
      <br>
        <!--Grupos--> 
        <a href="home.php?grupos=grupos" class="nav-link py-3 rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Dashboard" data-bs-original-title="Dashboard">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAErUlEQVR4nM1Wa4xdUxQe4hGPRFASCZFSaf3xakT8EG8Sj/iBCBWRYiKhXkVDxOCHCCbM9Kx1ezX1qI6ZrnUuSak3E6mZu9ZxY6bSIsUPP9pI1avqUaVXvn3OnTn3zpnOXCqxk5Ocs8/e37fWtx57d3T8X0ekdhmJrWSxd0n9oSeWjx7QuqZHPj6M1J5k8fdZ7EWS5Mx/RcriD7DaNlbrJrF7WW2E1NfnycuV2hEktonFPiC1u1msRGrbI/Hr/5mn8dDRpPYHq53RmBNZtw+Jj7JY15hx6s+y2hv1en2PnMHXkPjW8qra/u17q34li31VML+Ixd5pfJPa5yXxefk1XYODe5H6b0vET2+bmOLkUhb7oVyu7d00r/4Ui60a+xYfjdTuzK8p99VmkNjOUsVObJu4W4b3Y/WNrEYNciQNif0SiV3RWMfiC0n9G9LqCfiOZPBAFqvAoLz8bY2MaCep/QjZWb3O4i9NkFV8kNX+YvUvkIyQuRzX5kybqBRXj2O1+0msh8QXIINJ7UtWf5TF7mHxV5BwJbFbG3tY7DHMkdqKzPvHU6V8DYt1svrTwIxkeFaxd+o3s/gOUvNQi+rr4UVJquc3q2AXh3WxnU1i17H6z1RJTp2QH+p1Et9A6v3ADBUi1tlEiuwj9T9RBmMSdtX3hKek9u3il/3Q/HpW6yWxN1n9U9Rua2Kx2BYSeyQf45L4PBgcafW0vLfLWW2gVQVsJLHPWO2WZmK/JK1xrzeSalwRX8Bi64oSi9WFxJ4fnxAbQnwKIoA6XYGYj333V49HOYVES+WMMTdObD0IVREWiy8EV97KmNS4kFjsIzSNzMC5IcPVBuB1+tgA6h3/svX3sVhSTGwleN10ELD6r5H4Sc3eJtey2O+9YjMz773IQFJfQuJVvJf7a8eiV7d2M9bkZJQZEq/FM4/wI1gFSdQlZK/YDWFjZehwSAvgVmKUSvjXV5uRSXpjtndlJm8pYKv1drQ2AdRa2gRsM6t/wuo/QUKS5KrgSVybE+Lat+bgVuKlMnxI2lyS2ZmCVwf5gRGwbDOwEQZwhU3IPlZ/gdS+JrULGtmIkyhYrrYNDaPn9Q37svr3+ZLLh4TUv0tPr+rtqG1Wm99otYEj9gvBwWrPBQ70XWzCMViYEHFyXqg/GZ4Fi1HXmMv/D3Pqi9D5skZxThFWr9jMoERcvRyxHcyfr4Xk6q/hhoGmgk6UlpFtCheArH+nDce68yfXJFgP46aCFN9S0upZu1qc3iz8LRa7A1kOcBK/K/RmsVcxB4lJ/e3J+kFjoNWCExbUGzU42QjNHoSIXYGMkfq54YqUGtU5BdZccE6fOHQqmz/Zmkj9pgxresSkth33plJcvQjBL0vtIGRdKBFJZmfJ9x5KA1k7GWB2H9uKtdiDvcAAFjCBDQ5wgTNt+OKrs7qrFzwbwxEpvnZXnqTe+Nr0OA3n8UQsQV/w1eAc2wTLcD9G2SyuDJ/CcXIMLM1JXZuSWL3WkBp7gQEsYAK77atQSmwjUxPbyFQxbmsga3FRSCW3Z0jsQVa/DQ/eSW1pFo4dWNuxOwf1J0fhQkDiyxAnEvswffDuy/Cvp2JH7lbS/2L8DWpbXfMayLtNAAAAAElFTkSuQmCC">
        </a>
      </li>
      <li>
        <br>
        <!--Chats--> 
        <a href="home.php?home=home" class="nav-link py-3 rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Orders" data-bs-original-title="Orders">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#96abc9" class="bi bi-chat-left" viewBox="0 0 16 16">
          <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
        </svg>
        </a>
      </li>
      <li>
        <br>
        <!--Archivados--> 
        <a href="#" class="nav-link py-3 rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Products" data-bs-original-title="Products">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#96abc9" class="bi bi-archive" viewBox="0 0 16 16">
          <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
        </svg>
        </a>
      </li>
      <li>
        <br>
        <!--Ajustes-->
        <a href="#" class="nav-link py-3 rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Customers" data-bs-original-title="Customers">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#96abc9" class="bi bi-gear" viewBox="0 0 16 16">
          <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
          <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
        </svg>
        </a>
      </li>
    </ul>
<br>
</div>
<!--Barra herramientas-->



<?php
if(isset($_GET['home']))
{
?>
<!--Barra de Chats-->
<div class="col-lg-4" style="background-color:#f6f9fb; overflow-x:hidden; overflow-y:scroll; height:49rem; padding:2%">
  <p style="font-size: 24px; font-weight: 600;">Chats</p>
  
<div style="margin-top:-2% ;"></div>

  <img src="https://img.icons8.com/ios/23/a2b5cf/search--v1.png" style="position:relative; top:5.9%; left:5%"/>
  <input type="text"  style="width:100%; background-color:#ebf1f7; border:0px; border-radius:10px; height:8%; padding:5%; padding-left:15%; color: #848484; outline:none" placeholder="Busca chats o usuarios">
  
  <br><br><br>
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
<!--Barra de Chats-->
<?php
}
?>

<?php
if(isset($_GET['grupos']))
{
?>
<!--Barra de grupos-->
<div class="col-lg-4" style="background-color:#f6f9fb; overflow-x:hidden; overflow-y:scroll; height:49rem; padding:2%">
  <p style="font-size: 24px; font-weight: 600;">Grupos</p>
  
<div style="margin-top:-2% ;"></div>

  <img src="https://img.icons8.com/ios/23/a2b5cf/search--v1.png" style="position:relative; top:5.9%; left:5%"/>
  <input type="text"  style="width:100%; background-color:#ebf1f7; border:0px; border-radius:10px; height:8%; padding:5%; padding-left:15%; color: #848484; outline:none" placeholder="Busca chats o usuarios">
  
  <br><br><br>
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
<!--Barra de grupos-->
<?php
}
?>


<!--Barra de conversacion-->
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
                                                            <h5 class="me-auto mb-0" style="font-size: .9375rem;">William Wright</h5>
                                                            <div style="position:relative; left:5%; top: 10px;"  data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg  xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#2787f5" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                                                  </svg>
                                                            </div>
                                                            <div class="dropdown-center">
                                                               
                                                                <ul style="background-color:#ffffff; backdrop-filter: blur(35px); border: 0.5px; margin: 60%;" class="sombras dropdown-menu">
                                                                  <li><a class="dropdown-item" style="margin-top: 5%;" href="#">Info. del contacto</a></li>
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
<!--Barra de conversacion-->
    





</body>
</html>