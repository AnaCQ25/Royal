 <?php  

  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, usuario, nombre, apellido, genero, email, cedula, telefono, celular, direccion, asignatura, foto FROM docente WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;
    

    if(count($results) > 0) {
      $user = $results;
      $_SESSION['foto'] = $user['foto'];
    }
  }



?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Editar Perfil</title>
  <link rel="icon" type="image/png" href="assets/img/NebulosaPNG.png" />
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
      <!--fontawesome-->
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    
     <link rel="stylesheet" href="font/font/flaticon.css">

  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="/path/to/bootstrap-show-password.js"></script>

   
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
  
body {
    position: relative;
    overflow-x:hidden;
   background-repeat: no-repeat;
    background: url(images/fondo_aula_virtual.jpg) no-repeat center center fixed;
    background-size: 100%;
     font-family: 'Poppins', sans-serif;
}

.imagen{
    height: 300px;
    width: 320px;
    position: relative;
    border: 5px solid #fff;
    border-radius: 50%;
    margin: 70px auto;
    overflow: hidden;
    margin-left: -140px;
}


.form-control-file{
    position: absolute;
    bottom: 0;
    outline: none;
    color: transparent;
    width: 100%;
    box-sizing: border-box;
    padding: 15px 120px;
    cursor: pointer;
    transition: 0.5s;
    background: rgba(0,0,0,0.5);
    opacity: 0;
}

.form-control-file::-webkit-file-upload-button{
    visibility: hidden;
}

.form-control-file::before{
    content: '\f030';
    margin-left: 5px;
    font-family: fontAwesome;
    font-size: 50px;
    color: white;
    display: inline-block;
    -webkit-user-select: none;
}

.form-control-file::after{
    content: 'Cambiar';
     margin-left: 7px;
    font-family: 'arial';
    font-weight: bold;
    color: white;
    display: block;
    top: 70px;
    font-size: 14px;
    position: absolute;
}

.form-control-file:hover{
    opacity: 1;
}

a:hover{
  color:white;
  text-decoration:none;
}

body,
html { height: 100%;}

.main{
  background-color: lightgray; 
    width: 93vw;
    margin-left: 2rem;

    padding-left: 2rem;
    padding-top: 2rem;
    padding-right: 2rem;
    padding-bottom: 2rem;

    border-radius: .2rem;
}

.radio_check{
  width: 46% !important;
  text-align: center;
}

.video_container{
  width: 100%;
  padding: 25px;
}

@media only screen and (max-width: 700px) {
      video {
        max-width: 100%;
      }
    }

.none{
  display: none;
}

/*---------------------------------
sidebar
----------------------*/

#sidebar-wrapper {
    z-index: 1000;
    height: 100%;
  width:0px;
  left: -50px;
    overflow-y: auto;
    overflow-x: hidden;
    background: #53125b;
    transition: all 0.5s ease;
}

#sidebar-wrapper::-webkit-scrollbar {
    width: 8px;
    background: #53125b;
}

#sidebar-wrapper::-webkit-scrollbar-thumb {
    background-color:#989898;
  border-radius:10px;
}


.sidebar-brand {
    font-weight: 600;
    font-size: 1.15rem;
    padding: 1.15rem 1.5rem;
    display: block;
    color: #f8f9fa;
}
.sidebar-header{
    padding: 1.5rem 1.5rem .375rem!important;
    font-size: 14px;
    color: #ced4da;
}

.navbar-nav > li > a ,.submenu-box ul li a{
    color:white!important;
    font-size: 14px;
    padding:10px 10px 10px 20px!important;
    display: block;
    font-weight: 400;
    position: relative;
    z-index: 2;
   font-family: 'Poppins', sans-serif;
    letter-spacing: .2px;
}

.submenu-box ul li a{
 padding:4px 10px 4px 20px!important;
  color: #e4a1ec!important;
}



.navbar-nav > li > a.active{
     color: #e9ecef!important;
    background: linear-gradient(90deg,rgba(59,125,221,.1),rgba(59,125,221,.0875) 50%,transparent);
    border-left:4px solid #9800ab;
}

.navbar-nav .has-sub > a.collapsed::after {
    transition: 0.4s ease;
}

.navbar-nav .has-sub > a.collapsed::after {
    color:white;
    font-size: 10px;
    content: "\f078";
}
.navbar-nav .has-sub > a.collapsed::after {
   color:white;
}

.navbar-nav .has-sub > a::after {
    position: absolute;
    right: 0px;
    top: 50%;
    height: 30px;
    width: 30px;
    text-align: center;
    color:gray;
    display: block;
    content: "\f077";
    font-family: 'Font Awesome\ 5 Free';
    font-weight: 900;
    font-size: 13px;
    line-height: 30px;
    margin-top: -15px;
}



#wrapper.toggled {
    padding-left: 270px;
}



.toggled#sidebar-wrapper {
    width:270px!important;
    height: 100%;
     left: 0px;
    overflow-y:auto;
    overflow-x:hidden;
    transition: all 0.5s ease;
}

.navbar-nav li{
  display:block!important;
  margin:2px 0px;
}


.nav-item .nav-link{
    display:block;
    color:white!important;
    text-decoration: none;
    padding:6px 10px; 
    transition:0.4s ease; 
}

.navbar-nav > li > a i:before{
  margin:0px 5px 0px 0px;
  font-size:14px;
}


/*---------------------------------
sidebar
----------------------*/






/*---------------------------------
  main-content
----------------------*/

#page-content-wrapper {
    width: 100%;
  transition: all 0.5s ease;
}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -270px;

  transition: all 0.5s ease;
}

 .toggled#page-content-wrapper{
  margin-left:270px;
  transition: all 0.5s ease;
 }
 
 @media only screen and (min-width:992px){
 .toggled#page-content-wrapper{
    width:calc(100% - 270px); 
  }
 }

/*---------------------------------
  main-content
----------------------*/



/*---------------------------------
cross-bar animation
----------------------*/


.nav-icon1{
  z-index: 999;
  position:relative;
  display: block;
  width:23px;
  margin:0px 30px 0px 25px;
   cursor:pointer;
  height: 25px;
}


.nav-icon1 span{
  position:absolute;
  top:0;
  width:100%;
  height:3px;
  cursor:pointer;
  background-color:white;
  left:0;
  transform:rotate(0deg);
  transition:.30s ease-in-out;
}

.nav-icon1:hover span:nth-of-type(1){
  top:-3px
}

.nav-icon1:hover span:nth-of-type(3){
  top:19px;
}

.nav-icon1 span:nth-of-type(1){
   top:0;
}

.nav-icon1 span:nth-of-type(2){
   top:8px;
}

.nav-icon1 span:nth-of-type(3){
   top:16px;
}

.nav-icon1.open span:nth-of-type(1){
   top:8px;
   transform:rotate(135deg);
}

.nav-icon1.open span:nth-of-type(2){
   top:8px;
   opacity:0;
   left:-30px;
}

.nav-icon1.open span:nth-of-type(3){
   top:8px;
   transform:rotate(-135deg);
}


/*---------------------------------
cross-bar animation
----------------------*/



/*---------------------------------
header navbar design
----------------------*/
.my-navbar{
  padding:0px;
  background-color:#53125b;
  box-shadow: 0 1px 1px 0 rgba(0,0,0,.16);
}

.text-gray-600 {
    color: white!important;
}
.nav-link .img-profile {
    height:40px;
    width:40px;
}

.navbar-nav > li > a >i{
    font-size: 18px;
    color:#b3b3b3;
  margin:8px 0px 0px 0px;
  padding:0px;
}

.badge-counter {
    position: absolute;
    transform:scale(.7);
    transform-origin: top right;
    right:6px;
  margin-top:4px;
}


.dropdown, .dropleft, .dropright, .dropup {
    position: relative;
}

.nav-flag, .nav-icon {
    padding: .1rem .8rem;
    display: block;
    font-size: 1.5rem;
    color: #6c757d;
    transition: background .1s ease-in-out,color .1s ease-in-out;
    line-height: 1.4;
}


.navbar-expand .navbar-nav .dropdown-menu {
    position: absolute;
}
.navbar-nav .dropdown-menu {
    box-shadow: 0 0.1rem 0.2rem rgba(0,0,0,.05);
}
.navbar-nav .dropdown-menu {
    position: static;
    float: none;
}
.dropdown-menu-lg {
    min-width: 20rem;
}


.position-relative {
    position: relative!important;
}

.nav-item .indicator {
    background: #3b7ddd;
    box-shadow: 0 0.1rem 0.2rem rgba(0,0,0,.05);
    border-radius: 50%;
    display: block;
    height: 18px;
    width: 18px;
    padding: 1px;
    position: absolute;
    top: 0;
    right: -8px;
    text-align: center;
    transition: top .1s ease-out;
    font-size: .675rem;
    color: #fff;
}

/*---------------------------------
 header navbar design
----------------------*/



/*---------------------------------
main-top card
----------------------*/

.card {
    margin-bottom: 24px;
  border:none;
    box-shadow: 0 0 0.875rem 0 rgba(33,37,41,.05);
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1.25rem;
}
.card-title {
    font-size: .875rem;
    color: #495057;
}

.card-body h1{
font-size: 1.75rem;
font-weight: 400;
    line-height: 1.2;
    color: #000;
}


.text-gray-800 {
    color: #d4a81e!important;
  font-size: 1.75rem;
  font-weight: 400;
    line-height: 1.2;
}
.shadow-sm {
    box-shadow: 0 .125rem .25rem 0 rgba(58,59,69,.2)!important;
}


.btn-sm {
    padding: .25rem .5rem;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: .2rem;
}


.font-16 {
    font-size: 16px;
}



/*---------------------------------
main-top card
----------------------*/




/*---------------------------------
main-table
----------------------*/


 .m-r-10 {
    margin-right: 10px;
}
.btn-circle {
    border-radius: 100%;
    width: 40px;
    height: 40px;
    padding: 10px;
}

.btn-info {
    color: #fff;
    background-color: #2962FF;
    border-color: #2962FF;
}

.btn-orange {
    color: #212529;
    background-color: #fb8c00;
    border-color: #fb8c00;
}

.btn-success {
    color: #fff;
    background-color: #36bea6;
    border-color: #36bea6;
}
.btn-purple {
    color: #fff;
    background-color: #7460ee;
    border-color: #7460ee;
}

.card .card-title {
    position: relative;
    font-weight: 600;
    margin-bottom: 10px;
}


.card .card-subtitle {
    font-weight: 300;
    margin-bottom: 10px;
    color: #a1aab2;
    margin-top: -0.375rem;
}


.table td, .table th {
    padding: 1rem;
  font-size:14px;
  color:#333;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}

.table h5{
      font-size: 16px;
    font-weight:600;
    color:#585858;
}



/*---------------------------------
main-table
----------------------*/




/*---------------------------------
 footer
----------------------*/

footer.footer {
  margin-top: 1rem;
    padding: 1rem .875rem;
    direction: ltr;
}

footer.footer ul {
    margin:0px;
  list-style:none;
}

.footer ul  li{
 display:inline-block;
 margin:0px 7px;
}

.text-muted {
    color: white!important;
  font-size:14px;
}
 

/*---------------------------------
footer
----------------------*/





</style>

  

</head>
<body>
    <div id="wrapper">
   <div class="overlay"></div>
    
        <!-- Sidebar -->
    <nav class="fixed-top align-top" id="sidebar-wrapper" role="navigation">
       <div class="simplebar-content" style="padding: 0px;">
        <a class="sidebar-brand" href="aula_virtual_docente.php">
         <span class="align-middle" style="margin-left: -6px;"><img src="images/logo-blanco.png" width="230px" height="50px"></span>
        </a>

         <ul class="navbar-nav align-self-stretch">
   

  <li class=""> 
      <a class="nav-link text-left active" href="aula_virtual_docente.php" role="button" 
      aria-haspopup="true" aria-expanded="false">
       <i class="flaticon-bar-chart-1"></i><i class="bi bi-house-fill" style="color: white;"></i> Inicio
         </a>
      </li>
        
      <li class="has-sub"> 
      <a class="nav-link collapsed text-left" href="#collapseExample3" role="button" data-toggle="collapse" >
        <i class="flaticon-user"></i><i class="fa fa-graduation-cap" aria-hidden="true" style="color: white;"></i> Estudiantes
         </a>
      <div class="collapse menu mega-dropdown" id="collapseExample3">
        <div class="dropmenu" aria-labelledby="navbarDropdown">
    <div class="container-fluid ">
              <div class="row">
                <div class="col-lg-12 px-2">
                  <div class="submenu-box"> 
                    <ul class="list-unstyled m-0">
                      <li><a href="ingresar_estudiantes.php">Ingresar estudiantes</a></li>
                      <li><a href="calificar_estudiantes.php">Calificar estudiantes</a></li>
                        <!-- <li><a href="">Asp.net</a></li> -->
                    </ul>
                  </div>
                </div>
                
              </div>
            </div>
         </div>
      </div>
      </li>


       <li class="has-sub"> 
      <a class="nav-link collapsed text-left" href="#collapseExample2" role="button" data-toggle="collapse" >
        <i class="flaticon-user"></i><i class="bi bi-person-circle" style="color: white;"></i> Perfil
         </a>
      <div class="collapse menu mega-dropdown" id="collapseExample2">
        <div class="dropmenu" aria-labelledby="navbarDropdown">
    <div class="container-fluid ">
              <div class="row">
                <div class="col-lg-12 px-2">
                  <div class="submenu-box"> 
                    <ul class="list-unstyled m-0">
                      <li><a href="ver_perfil_docente.php">Ver Perfil</a></li>
                      <li><a href="editar_perfil_docente.php">Editar Perfil</a></li>
                      <li><a href="cambiar_contraseña_docente.php">Cambiar Contraseña</a></li>
                        <!-- <li><a href="">Asp.net</a></li> -->
                    </ul>
                  </div>
                </div>
                
              </div>
            </div>
         </div>
      </div>
      </li>
      <li class=""> 
      <a class="nav-link text-left" href="logout.php" role="button" >
       <i class="flaticon-bar-chart-1"></i><i class="bi bi-box-arrow-right" style="color: white;"></i>  Cerrar Sesión
         </a>
      </li>
     
      
      
      </ul>

        
      </div>
     
     
    </nav>
        <!-- /#sidebar-wrapper -->




 <!-- Page Content -->
        <div id="page-content-wrapper">
         
      
      <div id="content">

       <div class="container-fluid p-0 px-lg-0 px-md-0">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light my-navbar">

          <!-- Sidebar Toggle (Topbar) -->
            <div type="button" id="bar" class="nav-icon1 hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
               <span></span>
          <span></span>
         <span></span>
            </div>
      

          
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown  d-sm-none">
            
            

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown">
                <span class="mr-2 d-none d-lg-inline text-gray-600 medium"><b><i><?= $user['usuario'];?></i></b></span>
                <?php if ($user['foto'] == ''){echo "<img class='img-profile rounded-circle' src='images/perfil.png'>";} else{
                echo "<img class='img-profile rounded-circle' src='images/".$user['foto']."'>";
            } ?>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="aula_virtual_docente.php">Inicio</a></li>
          <li><a class="dropdown-item" href="ver_perfil_docente.php">Ver perfil</a></li>
          <li><a class="dropdown-item" href="cambiar_contraseña_docente.php">Editar contraseña</a></li>
          <li><a class="dropdown-item" href="logout.php">Cerrar sesión</a></li>
        </ul>
            </li>

          </ul>
        </nav>
        <!-- End of Topbar -->





        <!-- Begin Page Content -->
        <div class="container-fluid px-lg-4">
<div class="row">
<div class="col-md-12 mt-lg-4 mt-4">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <br>
            <p style="margin-left: -px;"><h1 class="h3 mb-0 text-gray-800"><b>Editar Perfil</b></h1></p>
            <br>
          </div>
      </div>

   <div class="main">
    <form action="editar_perfil_docente.php" id="frm_foto" role="form" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col col-6">
              <div class="row">
            <h2 style="color: #53125b;"> Editar foto de perfil</h2>

              <!-- FOTO -->
            <div class="imagen">
            <?php if ($user['foto'] == ''){echo "<img src='images/perfil.png' class='image' id='imagenPrevisualizacion' width=310px height=310px>";} else{
                echo "<img src='images/".$user['foto']."'  class='image' id='imagenPrevisualizacion' width=310px height=310px>";
            } ?>
            <input type="file" name="file" id="file" class="form-control-file"  accept="image/*">
            </div>
            <script type="text/javascript">
              // Obtener referencia al input y a la imagen

              const $file = document.querySelector("#file"),
             $imagenPrevisualizacion = document.querySelector("#imagenPrevisualizacion");

              // Escuchar cuando cambie
              $file.addEventListener("change", () => {
             // Los archivos seleccionados, pueden ser muchos o uno
             const archivos = $file.files;
              // Si no hay archivos salimos de la función y quitamos la imagen
               if (!archivos || !archivos.length) {
               $imagenPrevisualizacion.src = "";
              return;
                 }
               // Ahora tomamos el primer archivo, el cual vamos a previsualizar
               const primerArchivo = archivos[0];
               // Lo convertimos a un objeto de tipo objectURL
               const objectURL = URL.createObjectURL(primerArchivo);
               // Y a la fuente de la imagen le ponemos el objectURL
                $imagenPrevisualizacion.src = objectURL;
                });
            </script>
              <div>
             <!-- BOTON Enviar -->
             <center>
          <input class="btn" style="color: white; background-color: #d4a81e; width: 100px;" type="submit" name="subir" id="subir" value="Subir foto">
        </center>
          <br>
            <p size="10px"><code style: font-size: 10px;>Nota:</code> Debe darle al botón de subir para poder guardar la imagen y establecerla de foto de perfil.</p>
          </div>
          </div>
        </div>
            






              <div class="col col-6">
              <div class="row">
            <!-- Usuario -->
           <label for="Nombre"><b> Usuario: </b></label>
           <input class="form-control" type="text" id="usuario" name="usuario" value="<?= $user['usuario']; ?>" maxlength="50" required disabled>
         </div>
             <p></p>


             <div class="row">
              <div class="col-md">
          <!-- Nombre -->
          <label for="Nombre"><b>Nombre</b></label>
          <input class="form-control" type="text" id="nombre" value="<?= $user['nombre']; ?>" name="nombre" placeholder="Ingrese su nombre" maxlength="30">
            </div>

      <div class="col-md">
          <!-- Apellido -->
          <label for="Apellido"><b>Apellido</b></label>
          <input class="form-control" type="text" id="apellido" name="apellido" value="<?= $user['apellido']; ?>" placeholder="Ingrese su apellido" maxlength="30">
          </div>
        </div>
          <p></p>

          <div class="row">
            <div class="col-md">
           <!--Genero-->
          <label for="genero"><b>Género</b></label>
          <div class="form-check">
               <input type="radio" name="genero" class="form-check-input" id="masculino" value="Masculino" <?php if($user['genero'] == 'Masculino'){ echo 'checked';} ?>>
                <label class="form-check-label" for="masculino">Masculino</label>
               </div>
                <div class="form-check">
                <input type="radio" name="genero" class="form-check-input" id="femenino" value="Femenino" <?php if($user['genero'] == 'Femenino'){ echo 'checked';} ?>>
                <label class="form-check-label" for="femenino">Femenino</label>
              </div>
                </div>
              <div class="col-md">
            <!-- Cedula -->
           <label for="Nombre"><b> Cédula </b></label>
           <input class="form-control" type="text" id="cedula" name="cedula" value="<?= $user['cedula']; ?>" placeholder="Ingresa tu cedula" maxlength="50"  >
            </div>
          </div>
           <p></p>


           <div class="row">
             <div class="col-md">
            <!-- Telefono -->
           <label for="Nombre"><b> Telefono </b></label>
           <input class="form-control" type="text" id="telefono" name="telefono" value="<?= $user['telefono']; ?>" placeholder="Ingresa tu telefono" maxlength="50"  >
            </div>
           <div class="col-md">
            <!-- Celular -->
           <label for="Nombre"><b> Celular </b></label>
           <input class="form-control" type="text" id="celular" name="celular" value="<?= $user['celular']; ?>" placeholder="Ingresa tu celular" maxlength="50"  >
            </div>
            </div>
           <p></p>

            <!-- Email -->
           <label for="Nombre"><b> Email </b></label>
           <input class="form-control" type="text" id="email" name="email" value="<?= $user['email']; ?>" placeholder="Ingresa tu email secundario" maxlength="50">

           <p></p>
         

            <!-- Direccion -->
           <label for="Nombre"><b> Dirección </b></label>
           <input class="form-control" type="text" id="direccion" name="direccion" value="<?= $user['direccion']; ?>" placeholder="Ingresa tu direccion" maxlength="50"  >

           <p></p>

            



          
          <br>
          <div> 
           <?php if(!empty($message)): ?>
             <p> <?= $message ?></p>
            <?php endif; ?>
          </div>

          <center>
          <!-- BOTON Enviar -->
          <input type="hidden" name="id" value="<?php $_SESSION['user_id']; ?>">
          <input class="btn" style="color: white; background-color: #53125b" type="submit" name="actualizar" id="actualizar" value="Actualizar">
          
          

          <!-- BOTON Cancelar -->
          <input class="btn" type="button" style="color: white; background-color: #d4a81e" value="Cancelar" id="cancelar" name="cancelar" onclick="self.location.href = 'index.php'" onkeypress="self.location.href = 'index.php'" /> 
          </center>



        </div>
          </div>
      </div>
          </form>
      </div>
      

      
      <footer class="footer">
        <div class="container-fluid">
          <div class="row text-muted">
            <div class="col-6 text-left">
              <p class="mb-0">
                <a href="index.html" style="color: purple;"><strong>© Copyrights 2021 design by Ana Contreras #4 - Iriangy Feliz #27 </strong></a> &copy
              </p>
            </div>
        </div>
      </div>
      </footer>
      
        </div>
    </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

  
  
  
  <!-- FINAL DE PAGINA -->
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    
  
 <script>
 
$('#bar').click(function(){
  $(this).toggleClass('open');
  $('#page-content-wrapper ,#sidebar-wrapper').toggleClass('toggled' );

});
  </script>

 <?php

  require 'database.php';

  if (isset($_POST['subir'])){
        move_uploaded_file($_FILES['file']['tmp_name'], "images/".$_FILES['file']['name']);


        $sql2 = "UPDATE `docente` SET `foto` = :foto WHERE `id` = :id";
        $stmt2 = $conn->prepare($sql2); 
        $stmt2->bindParam(':foto', $_FILES['file']['name']); 
        $stmt2->bindParam(':id', $_SESSION['user_id']);  
        $results2 = $stmt2->fetch(PDO::FETCH_ASSOC);
        $user2 = $results2;   

        if ($stmt2->execute()){
        echo "<script> 
        alert('Foto actualizada correctamente');
       location.replace('http://localhost/Royal/editar_perfil_docente.php');</script>";
 
  
          }else{
         echo "<script> 
         Swal.fire(
         'Error al modificar la foto',
         'Inténtelo de nuevo.',
           'error'
          ); 
          location.replace('http://localhost/Royal/editar_perfil_docente.php');</script>";
        }     

      }
  ?>
  


<?php

$message = '';

if(isset($_POST['actualizar'])){


$sql1 = "UPDATE `docente` SET `nombre` = :nombre, `apellido` = :apellido, `genero` = :genero, `cedula` = :cedula, `email` = :email, `telefono` = :telefono, `celular` = :celular, `direccion` = :direccion WHERE `id` = :id";
$stmt1 = $conn->prepare($sql1);                  
$stmt1->bindParam(':nombre', $_POST['nombre']);
$stmt1->bindParam(':apellido', $_POST['apellido']);
$stmt1->bindParam(':genero',  $_POST['genero']);
$stmt1->bindParam(':cedula', $_POST['cedula']);
$stmt1->bindParam(':email', $_POST['email']);
$stmt1->bindParam(':telefono', $_POST['telefono']);
$stmt1->bindParam(':celular', $_POST['celular']);
$stmt1->bindParam(':direccion', $_POST['direccion']);
$stmt1->bindParam(':id', $_SESSION['user_id']); 
$results1 = $stmt1->fetch(PDO::FETCH_ASSOC);
$user1 = $results1;

if ($stmt1->execute()){
  echo "<script> 
  alert('Datos modificados correctamente');
 location.replace('http://localhost/Royal/editar_perfil_docente.php');</script>";
 
  
}else{
   echo "<script> Swal.fire(
  'Error al modificar las datos',
  'Inténtelo de nuevo.',
  'error'
); windows.location='editar_perfil_docente.php';</script>";
}

}

?>




</body>
</html>