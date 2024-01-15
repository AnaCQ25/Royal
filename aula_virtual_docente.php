<?php  

  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, usuario, foto, password FROM docente WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $records2 = $conn->prepare('SELECT COUNT(*) FROM estudiante');
    $records2->execute();
    $num_estudiante = $records2->fetchColumn();

    $records3 = $conn->prepare('SELECT COUNT(*) FROM estudiante WHERE estado = "Activo" ');
    $records3->execute();
    $num_estudiante_activo = $records3->fetchColumn();


    $records4 = $conn->prepare('SELECT COUNT(*) FROM estudiante WHERE calificacion_1ra_asignatura && calificacion_2da_asignatura IS NOT NULL ');
    $records4->execute();
    $num_estudiante_calificados = $records4->fetchColumn();

    $user = null;

    if(count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Docente</title>
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
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
     <link rel="stylesheet" href="font/font/flaticon.css">

  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="/path/to/bootstrap-show-password.js"></script>

    <style>
   @import url('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
@import url('https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i');
@import url('https://fonts.googleapis.com/css?family=Great+Vibes');
@import url('https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
  
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
            <p style="margin-left: -px;"><h1 class="h3 mb-0" style="color: #d4a81e"><b>Inicio</b></h1></p>
          </div>
      </div>
      <div class="col-md-12">
       <div class="row">
                  <div class="col-sm-3">
                    <div class="card" style="background-color: #e9cbec;">
                      <div class="card-body">
                        <h5 class="card-title mb-4" style="color: #53125b;">Bienvenido</h5>
                        <center><?php if ($user['foto'] == ''){echo "<img class='img-profile rounded-circle' src='images/perfil.png' width=200px height=200px>";} else{
                echo "<img class='img-profile rounded-circle' src='images/".$user['foto']."' width=200px height=200px>";
            } ?></center>
                        <div class="mb-1">
                          <br>
                          <span style="color: #53125b;"><center><b><i><?= $user['usuario']; ?> </i></b></center></span>
                        </div>
                      </div>
                    </div>
                  </div>
               

                  
                  

                  
    

                  <div class="row" >
                    <table border="0px" style="margin-left: 20px; ">
                      <tr>
                        <td>

                          <div class="row">
                <div class="col" style="width: 1000px;">
                    <div class="card" >
                      <div class="card-body">
                        <span><center><img src="images/logo.png" width="700px" height="100px" ></center></span>
                      </div>
                    </div>
                  </div> 
                  </div>

                          
                        </td>
                      </tr>


                      <tr>
                        <td>
                          <div class="row">
                          <div class="col-lg-4 col-sm-6">
            <div class="card-box bg-blue">
                <div class="inner">
                    <h3> <?=  $num_estudiante ?> </h3>
                    <p> Estudiantes ingresados </p>
                </div>
                <div class="icon">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                </div>
                <a href="ingresar_estudiantes.php" class="card-box-footer">Ver más <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6">
            <div class="card-box bg-green">
                <div class="inner">
                    <h3> <?= $num_estudiante_activo ?> </h3>
                    <p> Estudiantes activos </p>
                </div>
                <div class="icon">
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                </div>
                <a href="ingresar_estudiantes.php" class="card-box-footer">Ver más <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="card-box bg-orange">
                <div class="inner">
                    <h3> <?= $num_estudiante_calificados ?> </h3>
                    <p> Estudiantes calificados </p>
                </div>
                <div class="icon">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                </div>
                <a href="calificar_estudiantes.php" class="card-box-footer">Ver más <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
  </div>


                        </td>

                      </tr>
                    </table>
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
  
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    
  
 <script>
 
$('#bar').click(function(){
  $(this).toggleClass('open');
  $('#page-content-wrapper ,#sidebar-wrapper').toggleClass('toggled' );

});
  </script>
  <?php else: ?>
  <?php echo "<script> alert('Redireccionando al login');location.replace('http://localhost/Royal/login.php');</script>"; header('Location: /Login/login.php'); ?>
  <?php endif; ?>



</body>
</html>