<?php  

  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id2'])) {
    $records = $conn->prepare('SELECT * FROM estudiante WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id2']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);


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
  <title>Estudiante</title>
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

.imagen{
    height: 300px;
    width: 320px;
    position: relative;
    border: 5px solid #fff;
    border-radius: 50%;
    margin: 70px auto;
    overflow: hidden;
    margin-left: 140px;
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


/* About Me 
---------------------*/
.about-text h3 {
  font-size: 45px;
  font-weight: 700;
  margin: 0 0 6px;
}
@media (max-width: 767px) {
  .about-text h3 {
    font-size: 35px;
  }
}
.about-text h6 {
  font-weight: 600;
  margin-bottom: 15px;
}
@media (max-width: 767px) {
  .about-text h6 {
    font-size: 18px;
  }
}
.about-text p {
  font-size: 18px;
  max-width: 450px;
}
.about-text p mark {
  font-weight: 600;
  color:#53125b;
}

.about-list {
  padding-top: 10px;
}
.about-list .media {
  padding: 5px 0;
}
.about-list label {
  color: #53125b;
  font-weight: 600;
  width: 88px;
  margin: 0;
  position: relative;
}
.about-list label:after {
  
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0px;
  width: 1px;
  height: 12px;
  background: #20247b;
  -moz-transform: rotate(15deg);
  -o-transform: rotate(15deg);
  -ms-transform: rotate(15deg);
  -webkit-transform: rotate(15deg);
  transform: rotate(15deg);
  margin: auto;
  opacity: 0.5;
}
.about-list p {
  margin: 0;
  font-size: 15px;
}

@media (max-width: 991px) {
  .about-avatar {
    margin-top: 30px;
  }
}

.about-section .counter {
  padding: 22px 20px;
  background: #ffffff;
  border-radius: 10px;
  box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
}
.about-section .counter .count-data {
  margin-top: 10px;
  margin-bottom: 10px;
}
.about-section .counter .count {
  font-weight: 700;
  color: #20247b;
  margin: 0 0 5px;
}
.about-section .counter p {
  font-weight: 600;
  margin: 0;
}
mark {
    background-image: linear-gradient(rgba(252, 83, 86, 0.6), rgba(252, 83, 86, 0.6));
    background-size: 100% 3px;
    background-repeat: no-repeat;
    background-position: 0 bottom;
    background-color: transparent;
    padding: 0;
    color: currentColor;
}
.theme-color {
    color: #d4a81e;
}
.dark-color {
    color: #53125b;
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
        <a class="sidebar-brand" href="aula_virtual_estudiante.php">
         <span class="align-middle" style="margin-left: -6px;"><img src="images/logo-blanco.png" width="230px" height="50px"></span>
        </a>

         <ul class="navbar-nav align-self-stretch">
   

  <li class=""> 
      <a class="nav-link text-left active" href="aula_virtual_estudiante.php" role="button" 
      aria-haspopup="true" aria-expanded="false">
       <i class="flaticon-bar-chart-1"></i><i class="bi bi-house-fill" style="color: white;"></i> Inicio
         </a>
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
                      <li><a href="editar_perfil_estudiante.php">Editar Perfil</a></li>
                      <li><a href="cambiar_contraseña_estudiante.php">Cambiar Contraseña</a></li>
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
                <span class="mr-2 d-none d-lg-inline text-gray-600 medium"><b><i> <?php echo $user['nombre'];?> <?php echo $user['apellido']; ?></i></b></span>
                <?php if ($user['foto'] == ''){echo "<img class='img-profile rounded-circle' src='images/perfil.png'>";} else{
                echo "<img class='img-profile rounded-circle' src='images/".$user['foto']."'>";
            } ?>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="editar_perfil_estudiante.php">Editar perfil</a></li>
          <li><a class="dropdown-item" href="cambiar_contraseña_estudiante.php">Editar contraseña</a></li>
          <li><a class="dropdown-item" href="logout.php">Cerrar sesión</a></li>
        </ul>
            </li>

          </ul>
        </nav>
        <!-- End of Topbar -->





         <!-- Begin Page Content -->
        <div class="container-fluid px-lg-4">

      <section class="section about-section gray-bg" style="background-color: #e6bde6;" id="about">
            <div class="container">
  
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">

                        <div class="about-text go-to" style="padding-top:  100px;">
                          
                            <h3 class="dark-color"><?= $user['nombre'];?> <?= $user['apellido'];?></h3>
                            <h6 class="theme-color lead">Estado: <?= $user['estado'];?></h6>
                            <p><mark><?= $user['carrera'];?></mark> <?php if ($user['carrera'] == 'Ingenieria en Sistemas'){echo "<p> La carrera de Ingeniería en Sistemas de Computación se enfoca a los componentes de hardware y las redes de comunicación. El estudiante adquiere la titulación de Ingeniero en Sistemas.</p>";} elseif ($user['carrera'] == 'Seguridad en Redes'){
                echo "<p> La carrera de Seguridad en Redes se enfoca en diseñar, planificar, gestionar y ejecutar programas que protegeran la privacidad de la información.</p>";
            } elseif ($user['carrera'] == 'Odontología'){ echo "<p> La carrera de Odontología está enfocada en prestar un servicio de cuidado y mejora bucal de los pacientes.</p>";} elseif($user['carrera'] == 'Derecho'){echo "<p> La carrera de Derecho capacita a profesionales que se desempeñarán tanto en el sector público como en el privado o social dentro del campo jurídico.</p>";} elseif ($user['carrera'] == 'Medicina'){echo "<p> La Medicina forma profesionales en el área de la salud con el fin de ayudar en el tratamiento y la recuperación de pacientes.</p>";}else{}


            ?>
                            <div class="row about-list">
                                <div class="col-md-6">
                                    
                                        <label>Matricula</label>
                                        <p><?= $user['matricula'];?></p>
                                        <p></p>
                                        <label>Carrera</label>
                                        <p><?= $user['carrera'];?></p>
                                        <p></p>
                                    
                                        <label>Direccion</label>
                                        <p><?= $user['direccion'];?></p>
                                        <p></p>
                                    
                                        <label>1ra_asignatura</label>
                                        <p><?= $user['1ra_asignatura'];?></p>
                                    
                                </div>
                                <div class="col-md-6">
                                    
                                        <label>Email</label>
                                        <p><?= $user['email'];?></p>
                                        <p></p>
                                   
                                        <label>Telefono</label>
                                        <p><?= $user['telefono'];?></p>
                                        <p></p>
                                
                                        <label>Celular</label>
                                        <p><?= $user['celular'];?></p>
                                        <p></p>
                                    
                                    
                                        <label>2da_asignatura</label>
                                        <p><?= $user['2da_asignatura'];?></p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-avatar">
                          <div class="imagen">
                       <?php if ($user['foto'] == ''){echo "<img src='images/perfil.png' class='image' id='imagenPrevisualizacion' width=310px height=310px>";} else{
                echo "<img src='images/".$user['foto']."'  class='image' id='imagenPrevisualizacion' width=310px height=310px>";
            } ?>
            </div>
                        </div>
                    </div>
                </div>
                <div class="counter">
                    <div class="row">
                        <div class="col-6 col-lg-6">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="150" data-speed="150"><?= $user['calificacion_1ra_asignatura'];?></h6>
                                <p class="m-0px font-w-600">Calificación 1ra asignatura</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-6">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="850" data-speed="850"><?= $user['calificacion_2da_asignatura'];?></h6>
                                 <p class="m-0px font-w-600">Calificación 2da asignatura</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
      
      
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
  <?php echo "<script> alert('Redireccionando al login'); windows.location='login.php';</script>"; header('Location: /Login/login.php'); ?>
  <?php endif; ?>



</body>
</html>