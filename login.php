<?php 
    session_start();

    require 'database.php';

    if (!empty($_POST['usuario']) && !empty($_POST['email']) && !empty($_POST['password_docente'])) {
        $records = $conn->prepare('SELECT id, usuario, email, password FROM docente WHERE usuario= :usuario');
        $records->bindParam(':usuario', $_POST['usuario']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $message = '';
       

        if ($_POST['usuario'] == $results['usuario'] && count($results) > 0 && password_verify($_POST['password_docente'], $results['password'])) {
             $_SESSION['user_id'] = $results['id'];
            echo "<script> 
            location.replace('http://localhost/Royal/aula_virtual_docente.php');
            </script>";
        } else {
            $message = 'Ha ocurrido un error';
        }
}   else{

} 

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!--fontawesome-->
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    
     <link rel="stylesheet" href="font/font/flaticon.css">

    <style type="text/css">
       *, *:before, *:after {
     box-sizing: border-box;
     margin: 0;
     padding: 0;
}
 body {
     font-family: 'Open Sans', Helvetica, Arial, sans-serif;
     background: #ededed;
}
 input, button {
     border: none;
     outline: none;
     background: none;
     font-family: 'Open Sans', Helvetica, Arial, sans-serif;
}
 .tip {
     font-size: 20px;
     margin: 40px auto 50px;
     text-align: center;
}
 .cont {
     overflow: hidden;
     position: relative;
     width: 900px;
     height: 650px;
     margin: 0 auto;
     background: #fff;
}
 .form {
     position: relative;
     width: 640px;
     height: 100%;
     transition: transform 1.2s ease-in-out;
     padding: 50px 30px 0;
}
 .sub-cont {
     overflow: hidden;
     position: absolute;
     left: 640px;
     top: 0;
     width: 900px;
     height: 100%;
     padding-left: 260px;
     background: #fff;
     transition: transform 1.2s ease-in-out;
}
 .cont.s--signup .sub-cont {
     transform: translate3d(-640px, 0, 0);
}
 button {
     display: block;
     margin: 0 auto;
     width: 260px;
     height: 36px;
     border-radius: 30px;
     color: #fff;
     font-size: 15px;
     cursor: pointer;
}
 .img {
     overflow: hidden;
     z-index: 2;
     position: absolute;
     left: 0;
     top: 0;
     width: 260px;
     height: 100%;
     padding-top: 360px;
}
 .img:before {
     content: '';
     position: absolute;
     right: 0;
     top: 0;
     width: 900px;
     height: 100%;
     background-image: url('images/banner-login.png');
     background-size: cover;
     transition: transform 1.2s ease-in-out;
}
 .img:after {
     content: '';
     position: absolute;
     left: 0;
     top: 0;
     width: 100%;
     height: 100%;
     background: rgba(0, 0, 0, 0.6);
}
 .cont.s--signup .img:before {
     transform: translate3d(640px, 0, 0);
}
 .img__text {
     z-index: 2;
     position: absolute;
     left: 0;
     top: 50px;
     width: 100%;
     padding: 0 20px;
     text-align: center;
     color: #fff;
     transition: transform 1.2s ease-in-out;
}
 .img__text h2 {
     margin-bottom: 10px;
     font-weight: normal;
}
 .img__text p {
     font-size: 14px;
     line-height: 1.5;
}
 .cont.s--signup .img__text.m--up {
     transform: translateX(520px);
}
 .img__text.m--in {
     transform: translateX(-520px);
}
 .cont.s--signup .img__text.m--in {
     transform: translateX(0);
}
 .img__btn {
     overflow: hidden;
     z-index: 2;
     position: relative;
     width: 150px;
     height: 36px;
     margin: 0 auto;
     background: transparent;
     color: #fff;
     text-transform: uppercase;
     font-size: 15px;
     cursor: pointer;
}
 .img__btn:after {
     content: '';
     z-index: 2;
     position: absolute;
     left: 0;
     top: 0;
     width: 100%;
     height: 100%;
     border: 2px solid #fff;
     border-radius: 30px;
}
 .img__btn span {
     position: absolute;
     left: 0;
     top: 0;
     display: flex;
     justify-content: center;
     align-items: center;
     width: 100%;
     height: 100%;
     transition: transform 1.2s;
}
 .img__btn span.m--in {
     transform: translateY(-72px);
}
 .cont.s--signup .img__btn span.m--in {
     transform: translateY(0);
}
 .cont.s--signup .img__btn span.m--up {
     transform: translateY(72px);
}
 h2 {
     width: 100%;
     font-size: 26px;
     text-align: center;
}
 label {
     display: block;
     width: 260px;
     margin: 25px auto 0;
     text-align: center;
}
 label span {
     font-size: 12px;
     color: #650290;
     text-transform: uppercase;
}
 input {
     display: block;
     width: 100%;
     margin-top: 5px;
     padding-bottom: 5px;
     font-size: 16px;
     border-bottom: 1px solid rgba(0, 0, 0, 0.4);
     text-align: center;
}
 .forgot-pass {
     margin-top: 15px;
     text-align: center;
     font-size: 12px;
     color: #cfcfcf;
}
 .submit {
     margin-top: 40px;
     margin-bottom: 20px;
     background: #650290;
     text-transform: uppercase;
}
 .fb-btn {
     border: 2px solid #c7b0d8;
     color: #8fa1c7;
}
 .fb-btn span {
     font-weight: bold;
     color: #455a81;
}
 .sign-in {
     transition-timing-function: ease-out;
}
 .cont.s--signup .sign-in {
     transition-timing-function: ease-in-out;
     transition-duration: 1.2s;
     transform: translate3d(640px, 0, 0);
}
 .sign-up {
     transform: translate3d(-900px, 0, 0);
}
 .cont.s--signup .sign-up {
     transform: translate3d(0, 0, 0);
}
 .icon-link {
     position: absolute;
     left: 5px;
     bottom: 5px;
     width: 32px;
}
 .icon-link img {
     width: 100%;
     vertical-align: top;
}
 .icon-link--twitter {
     left: auto;
     right: 5px;
}
 


    </style>
</head>

<body>
<div class="cont">
     <form action="login.php" method="post">
  <div class="form sign-in">
    <p align="center"><img src="images/logo2.png" width="300px" height="60px"></p>
    <label><span style="color: #d4a81e;">Docente</span></label>
    <br>
    <h2>Iniciar sesión</h2>
    <label>
      <span>Usuario</span>
      <input type="text" name="usuario" required="" />
    </label>
    <label>
      <span>Email</span>
      <input type="email" name="email" required="" />
    </label>
    <label>
        <span>Contraseña</span>
            <table>
        <tr>
            <td>
                <input type="password" id="password_docente" name="password_docente" style="width: 240px;" required="" />
            </td>
            <td>
               <button id="show_password"  type="button" onclick="mostrarPassword()" class="btn" style="color:#9F2EBB; width: 30px"> <span class="fa fa-eye icon"></span></button> 
            </td>
        </tr>
    </table>
      
    </label>

    <p class="forgot-pass"><a href="recuperar_docente.php" style="color:  #c7b0d8;">Olvidó su contraseña?</a></p>
    <p class="forgot-pass"><a href="registrar_docente.php" style="color:  #c7b0d8;">Registrese aquí</a></p>
    <button type="submit" class="submit">Ingresar</button>
    <?php if(!empty($message)): ?>
        <p> <?= $message ?></p>
        <?php endif; ?>
  </div>
  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
        <h2 style="color: #d4a81e;"><b>Estudiante</b></h2>
        <p><i>Si es estudiante, haga click en el botón de debajo</i></p>
      </div>
      <div class="img__btn">
        <span class="m--up"><a>Estudiante</a></span>
      </div>
    </div>
  </div>
</form>
</div>



<!-- JQUERY - SCRIPTS -->
<script>
document.querySelector('.img__btn').addEventListener('click', function() {
  location.replace('http://localhost/Royal/login2.php');
});
</script>

<!-- OJITO -->
  <!-- Contraseña -->
    <script type="text/javascript">
    function mostrarPassword(){
    var cambio = document.getElementById("password_docente");
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
</body>
</html>