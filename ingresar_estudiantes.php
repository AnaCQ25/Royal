

<?php

  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {

$records = $conn->prepare('SELECT * FROM docente WHERE id = :id');
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
  <title>Ingresar Estudiantes</title>
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

a:hover{
  color:white;
  text-decoration:none;
}

body,
html { height: 100%;}





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
    color: white!important;
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
Snippets Box
----------------------*/
.card-box {
    position: relative;
    color: #fff;
    padding: 20px 10px 40px;
    margin: 20px 0px;
    border-radius: 5px;
}
.card-box:hover {
    text-decoration: none;
    color: #f1f1f1;
}
.card-box:hover .icon i {
    font-size: 100px;
    transition: 1s;
    -webkit-transition: 1s;
}
.card-box .inner {
    padding: 5px 10px 0 10px;
}
.card-box h3 {
    font-size: 27px;
    font-weight: bold;
    margin: 0 0 8px 0;
    white-space: nowrap;
    padding: 0;
    text-align: left;
}
.card-box p {
    font-size: 15px;
}
.card-box .icon {
    position: absolute;
    top: auto;
    bottom: 5px;
    right: 5px;
    z-index: 0;
    font-size: 72px;
    color: rgba(0, 0, 0, 0.15);
}
.card-box .card-box-footer {
    position: absolute;
    left: 0px;
    bottom: 0px;
    text-align: center;
    padding: 3px 0;
    color: rgba(255, 255, 255, 0.8);
    background: rgba(0, 0, 0, 0.1);
    width: 100%;
    text-decoration: none;
}
.card-box:hover .card-box-footer {
    background: rgba(0, 0, 0, 0.3);
}
.bg-blue {
    background-color:#182052 !important;
}
.bg-green {
    background-color: #3a805f !important;
}
.bg-orange {
    background-color: #f39c12 !important;
}
.bg-red {
    background-color: #d9534f !important;
}



</style>
  

</head>
<body>
  <?php if(!empty($user)): ?>
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
                <span class="mr-2 d-none d-lg-inline text-gray-600 medium"><b><i> <?= $user['usuario']; ?></i></b></span>
                <?php if ($user['foto'] == ''){echo "<img class='img-profile rounded-circle' src='images/perfil.png'>";} else{
                echo "<img class='img-profile rounded-circle' src='images/".$user['foto']."'>";
            } ?>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="ver_perfil_docente.php">Ver perfil</a></li>
          <li><a class="dropdown-item" href="editar_perfil_docente.php">Editar perfil</a></li>
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
            <p style="margin-left: -px;"><h1 class="h3 mb-0" style="color: #d4a81e!important;"><b>Inicio</b></h1></p>
             
          </div>
      </div>
    </div>


      <div class="container">
        <div class="row">
          <div class="col">
            <?php 
                if(isset($_SESSION['message'])){
                    ?>
                    <div class="alert alert-info text-center" style="margin-top:20px;">
                        <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php

                    unset($_SESSION['message']);
                }
            ?>
          </div>
        </div>

      <div class="row">
  
   
        <div class="card">
          <div class="card-body">

            <div class="card-title">
              <div class="row">
                <div class="col">
              <center><h3 class="mr-2" style="color: #53125b;"><span><b>Estudiantes</b></span><small class="px-1"></small></h3></center>
                </div>
                <div class="col">
              <center><button class="btn btn-success btn-block" type="button" data-toggle="modal" data-target="#user-form-modal" style="width: 200px; background-color: #d4a81e; border-color: #d4a81e;">Nuevo Estudiante</button></center>
               </div>
              </div>
              <div class="row">
                <div class="col">
                    <?php if(!empty($message1)): ?>
        <p> <?= $message1 ?></p>
        <?php endif; ?>
                </div>
              </div>
            </div>

            <br>

            <div class="e-table">
              <div class="table-responsive table-xl mt-3">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th class="align-top">
                        ID
                      </th>
                      <th>Foto</th>
                      <th class="sortable">Estado</th>
                      <th class="max-width">Matricula</th>
                      <th class="max-width">Nombre</th>
                      <th class="max-width">Género</th>
                      <th class="max-width">Email</th>
                      <th class="max-width">Teléfono</th>
                      <th class="max-width">Celular</th>
                      <th class="max-width">Dirección</th>
                      <th class="max-width">Carrera</th>
                      <th class="max-width">1ra Asignatura</th>
                      <th class="max-width">2da Asignatura</th>
                      
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                    require 'database.php';

                     $records2 = $conn->prepare('SELECT id, foto, estado, nombre, apellido, email, genero, matricula, telefono, celular, direccion, carrera, 1ra_asignatura, 2da_asignatura, password_estudiante FROM estudiante');
                     $records2->execute();
    
                      while($results2 = $records2->fetch(PDO::FETCH_ASSOC)){
                    ?>

                    <tr>
                      <td class="align-middle">
                        <div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
                          <?php echo $results2['id']; ?>
                        </div>
                      </td>
                      <td class="align-middle text-center">

                        <div class="bg-light d-inline-flex justify-content-center align-items-center align-top" style="width: 35px; height: 35px; border-radius: 3px;"><?php if ($results2['foto'] == ''){echo "<img src='images/perfil.png' class='image' id='imagenPrevisualizacion' width=60px height=60px>";} else{
                echo "<img src='images/".$results2['foto']."'  class='image' id='imagenPrevisualizacion' width=60px height=60px>";
            } ?></div>
                      </td>

                      <td class='text-nowrap align-middle'><span><?php echo $results2['estado']; ?></span></td>
                      <td class="text-nowrap align-middle"><span><?php echo $results2['matricula']; ?></span></td>
                      <td class="text-nowrap align-middle"><?php echo $results2['nombre'];?> <?php echo $results2['apellido']; ?></td>
                      <td class="text-nowrap align-middle"><span><?php echo $results2['genero'];?></span></td>
                      <td class="text-nowrap align-middle"><span><?php echo $results2['email'];?></span></td>
                      <td class="text-nowrap align-middle"><span><?php echo $results2['telefono'];?></span></td>
                      <td class="text-nowrap align-middle"><span><?php echo $results2['celular'];?></span></td>
                      <td class="text-nowrap align-middle"><span><?php echo $results2['direccion'];?></span></td>
                      <td class="text-nowrap align-middle"><span><?php echo $results2['carrera'];?></span></td>
                      <td class="text-nowrap align-middle"><span><?php echo $results2['1ra_asignatura'];?></span></td>
                      <td class="text-nowrap align-middle"><span><?php echo $results2['2da_asignatura'];?></span></td>
                      <td class="text-center align-middle">
                        <div class="btn-group align-top">
                            <a href="#edit_<?php echo $results2['id']; ?>" class="btn btn-default btn-sm" style="color: white; background-color: #53125b" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Editar </a>
                            <a href="#delete_<?php echo $results2['id']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> Eliminar</a>
                        </div>
                      </td>
                      <?php include('edit_delete_modal.php'); ?>
                    </tr>

                    <?php
                    }
                    ?>

                    
                  
                
                  
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      




  

    <!-- User Form Modal -->
    <div class="modal fade" role="dialog" tabindex="-1" id="user-form-modal">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Registrar estudiante</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="py-1">
              <form class="form" action="ingresar_estudiantes.php" method="post">
                <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Nombre</label>
                          <input class="form-control" type="text" name="nombre" placeholder="Nombre">
                        </div>
                      </div>
                      <div class="col">
                      <div class="form-group">
                          <label>Apellido</label>
                          <input class="form-control" type="text" name="apellido" placeholder="Apellido">
                        </div>
                      </div>
                   
                  </div>

                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Género</label>
                          <div class="form-check">
               <input type="radio" name="genero" class="form-check-input" id="masculino" value="Masculino" >
                <label class="form-check-label" for="Masculino">Masculino</label>
               </div>
                <div class="form-check">
                <input type="radio" name="genero" class="form-check-input" id="femenino" value="Femenino" >
                <label class="form-check-label" for="Femenino">Femenino</label>
              </div>
                        </div>
                      </div>
                       <div class="col">
                        <div class="form-group">
                          <label>Email</label>
                          <input class="form-control" type="email" name="email" placeholder="usuario@ejemplo.com">
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Carrera</label>
                          <input class="form-control" type="text" name="carrera" placeholder="Carrera">
                      </div>
                    </div>
                      <div class="col">
                        <div class="form-group">
                          <label>1ra Asignatura</label>
                          <input class="form-control" type="text" name="1ra_asignatura" placeholder="1ra asignatura">
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label>2da Asignatura</label>
                          <input class="form-control" type="text" name="2da_asignatura" placeholder="2da asignatura">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Teléfono</label>
                          <input class="form-control" type="text" name="telefono" placeholder="Teléfono">
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label>Celular</label>
                          <input class="form-control" type="text" name="celular" placeholder="Celular">
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label>Dirección</label>
                          <input class="form-control" type="text" name="direccion" placeholder="Dirección">
                        </div>
                      </div>
                    </div>

                <div class="row">
                  <div class="col-12 col-sm-6 mb-3">
                    <div class="mb-2"><b>Contraseñas</b></div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Contraseña</label>
                          <div class="input-group">
                                  <!-- DIFUCULTAD DE CONTRASEÑA -->
            <script type="text/javascript">
            function validatePassword(password_estudiante) {
                
                if (password_estudiante.length === 0) {
                    document.getElementById("mensaje").innerHTML = "";
                    return;
                }
                
                var matchedCase = new Array();
                matchedCase.push("[$@$!%*#?&]"); 
                matchedCase.push("[A-Z]");     
                matchedCase.push("[0-9]");      
                matchedCase.push("[a-z]");     

                var ctr = 0;
                for (var i = 0; i < matchedCase.length; i++) {
                    if (new RegExp(matchedCase[i]).test(password_estudiante)) {
                        ctr++;
                    }
                }
             
                var color = "";
                var dificultad = "";
                 var bt = document.getElementById('guardar');
               switch (ctr) {
                    case 0:
                    bt.disabled=true;
                      dificultad = "Débil";
                        color = "red";
                        bt.disabled=true;
                        break;
                    break;
                    case 1:
                    bt.disabled=true;
            dificultad = "Débil";
                        color = "red";
                        bt.disabled=true;
                        break;
                    break;
                    case 2:
                       dificultad = "Débil";
                        color = "red";
                        bt.disabled=true;
                        break;
                    case 3:
                        dificultad = "Media";
                        color = "orange";

                        bt.disabled=false;
                        break;
                    case 4:
                        dificultad = "Fuerte";
                        color = "green";

                       bt.disabled=false;
                        break;
                    }
                document.getElementById("mensaje").innerHTML = dificultad;
                document.getElementById("mensaje").style.color = color;
            }
        </script>
                          <input class="form-control" id="password_estudiante" onkeyup="validatePassword(this.value);" name="password_estudiante" type="password" placeholder="Ingrese la contraseña">
                           <div class="input-group-append">
                  <button id="show_password"  type="button" onclick="mostrarPassword()" class="btn" style="color: white; background-color:#9F2EBB"> <span class="fa fa-eye icon"></span></button>
                </div>
                          </div>
                          <b><div id="mensaje" style="font-size: 13px;"></div></b>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Confirmar Contraseña <span class="d-none d-xl-inline"></span></label>
                          <div class="input-group">

                          <input class="form-control" id="confirm_password" type="password" placeholder="Confirme la contraseña">
                          <div class="input-group-append">
                  <button id="show_password"  type="button" onclick="mostrar()" class="btn" style="color: white; background-color:#9F2EBB"> <span class="fa fa-eye icon"></span></button>
                </div>
                        </div>

                        </div>
                        <!--MENSAJE COINDICENDIA DE CONTRASEÑAS -->
          <div id="error2" style="position: absolute; display: block; margin-left: 0px; margin-top: 0px;">
          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-5 offset-sm-1 mb-3">
                    <div class="mb-2"><b>Estado</b></div>
                    <div class="row">
                      <div class="col">
                        <div class="custom-controls-stacked px-2">
                           <div class="form-check">
               <input type="radio" name="estado" class="form-check-input" id="activo" value="Activo" >
                <label class="form-check-label" for="Activo">Activo</label>
               </div>
                <div class="form-check">
                <input type="radio" name="estado" class="form-check-input" id="inactivo" value="Inactivo" >
                <label class="form-check-label" for="Inactivo">Inactivo</label>
              </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col d-flex justify-content-end">
                    <input class="btn" style="color: white; background-color: #53125b" type="submit" name="guardar" id="guardar" value="Guardar">
                    <button type="button" style="color: white; background-color: #ef2b2b" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>




   
  





  
</div>
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
  <script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    
  
 <script>
 
$('#bar').click(function(){
  $(this).toggleClass('open');
  $('#page-content-wrapper ,#sidebar-wrapper').toggleClass('toggled' );

});
  </script>

  
<!-- OJITO -->
  <!-- Contraseña -->
    <script type="text/javascript">
    function mostrarPassword(){
    var cambio = document.getElementById("password_estudiante");
    if(cambio.type == "password"){
      cambio.type = "text";
      $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
    }
    else{
      cambio.type = "password";
      $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
      }
  } 
    </script>

    <!-- Confirmar Contraseña -->
    <script type="text/javascript">
    function mostrar(){
    var cambio2 = document.getElementById("confirm_password");
    if(cambio2.type == "password"){
      cambio2.type = "text";
       $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
    }
    else{
      cambio2.type = "password";
      $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
      }
  } 
  
    </script> 




<!-- COINCIDENCIA DE CONTRASEÑAS -->
<script>
  $('#confirm_password').keyup(function(){
    var pass1 = $('#password_estudiante').val();
    var pass2 = $('#confirm_password').val();
    var button = document.getElementById('guardar');

    if (pass1 === pass2){
      $('#confirm_password:focus').css("border-color", "green");
      $('#error2').text('Las contraseñas coinciden').css('color','green');
      button.disabled=false;
    }else{
      $('#confirm_password:focus').css("border-color", "red");
      $('#error2').text('Las contraseñas no coinciden').css('color','red');
      button.disabled=true;
    }

    if (pass2 === ''){
      $('#confirm_password:focus').css("border-color", "#00bfff");
      $('#error2').text('');
    }


  });

</script> 
  



  <?php else: ?>
  <?php echo "<script> alert('Redireccionando al login'); windows.location='login.php';</script>"; header('Location: /Login/login.php'); ?>
  <?php endif; ?>



</body>
</html>

<?php

$message1 = '';

if (isset($_POST['guardar'])) {
  $sql1 = "INSERT INTO estudiante (estado, nombre, apellido, genero, email, 1ra_asignatura, 2da_asignatura, carrera, telefono, celular, direccion, matricula, password_estudiante) VALUES (:estado, :nombre, :apellido, :genero, :email, :1ra_asignatura, :2da_asignatura, :carrera, :telefono, :celular, :direccion, :matricula, :password_estudiante)";
  $stmt1 = $conn->prepare($sql1);
  $stmt1->bindParam(':estado', $_POST['estado']);
  $stmt1->bindParam(':nombre', $_POST['nombre']);
  $stmt1->bindParam(':apellido', $_POST['apellido']);
  $stmt1->bindParam(':genero', $_POST['genero']);
  $stmt1->bindParam(':email', $_POST['email']);
  $stmt1->bindParam(':1ra_asignatura', $_POST['1ra_asignatura']);
  $stmt1->bindParam(':2da_asignatura', $_POST['2da_asignatura']);
  $stmt1->bindParam(':carrera', $_POST['carrera']);
  $stmt1->bindParam(':telefono', $_POST['telefono']);
  $stmt1->bindParam(':celular', $_POST['celular']);
  $stmt1->bindParam(':direccion', $_POST['direccion']);
  $password1 = password_hash($_POST['password_estudiante'], PASSWORD_BCRYPT);
  $stmt1->bindParam(':password_estudiante', $password1);
  $stmt1->bindParam(':matricula', $token);
  $token = uniqid();

    $records1 = $conn->prepare("SELECT id, estado, nombre, apellido, genero, email, 1ra_asignatura, 2da_asignatura, carrera, telefono, celular, direccion, password_estudiante FROM estudiante WHERE matricula = :matricula");
    $records1->bindParam(':matricula', $_POST['matricula']);
    $records1->execute();
    $results1 = $records1->fetch(PDO::FETCH_ASSOC);


  
 if ($stmt1->execute()) {
    echo "<script> 
  alert('Estudiante registrado correctamente');
 location.replace('http://localhost/Royal/ingresar_estudiantes.php');</script>";
  } else {
     echo "<script> Swal.fire(
  'Error al registar al estudiante',
  'Inténtelo de nuevo.',
  'error'
); windows.location='ingresar_estudiantes.php';</script>";
  }


}

?>



