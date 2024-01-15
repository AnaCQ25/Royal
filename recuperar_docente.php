

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
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
     height: 550px;
     margin: 0 auto 100px;
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
     margin-bottom: 10px;
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
    <?php
        if(isset($_POST['recuperar'])){

            $aviso = '';

            require "database.php";

            $email = $_POST['email'];

             $records3 = $conn->prepare('SELECT nombre, email FROM docente WHERE email = :email');
             $records3->bindParam(':email', $_POST['email']);
             $records3->execute();
             $results3 = $records3->fetch(PDO::FETCH_ASSOC);


         
             if(count($results3) > 0){
                $token = uniqid();

                $sql4 = "UPDATE `docente` SET token = '$token' WHERE `email` = :email";
                $stmt4 = $conn->prepare($sql4); 
                $stmt4->bindParam(':email', $_POST['email']);
                $results4 = $stmt4->fetch(PDO::FETCH_ASSOC);

                if($stmt4->execute()){

                $to = $email;
                $subject = "Recuperar Contraseña";
                $from = "RoyalKnowledge@gmail.com";

                $message = "Hola, para recuperar o cambiar tu contraseña, ingresa al siguiente link: 
                http://localhost/Royal/nuevacontra_docente.php?email=".$results3['email']."&token=".$token."\n\n";

                $headers = 'From: '.$from."\r\n";
                'Reply-To: '.$from."\r\n";
                'X-Mailer: PHP/' . phpversion();
                @mail($to, $subject, $message, $headers);

                    $aviso = 'Te hemos enviado un email para recuperar tu contraseña';
                }else{
                    $aviso = 'Ha ocurrido un error al recuperar la contraseña';
                 }

             }else{
                $aviso = 'Este correo electrónico no está registrado en nuestra base de datos';
             }


        }
        ?>
     <form action="" method="post">

        <div class="form sign-in" style="margin-left: 120px">
        <p align="center"><img src="images/logo2.png" width="300px" height="60px"></p>
        <label><span style="color: #d4a81e;">Docente</span></label>
    <br>
      <h2 style="font-family: 'Open Sans', Helvetica, Arial, sans-serif;"> Recuperar contraseña </h2>
      <label>
        <span>Email de Recuperación</span>
        <input type="email" name="email" id="email" placeholder="Ingresa tu email" required="" />
      </label>
        <p>
        <?php if(!empty($aviso)): ?>
        <p style="margin-left: 70px; color:  #a79b31; "><b> <?= $aviso ?></b></p>
        <?php endif; ?>

        <div>
          
                      <button type="submit" class="submit" name="recuperar">Enviar</button>  
                   
                         <button style="color: white; background-color: #a79b31;" class="submit" id="cancelar" name="cancelar" onclick="self.location.href = 'login.php'" onkeypress="self.location.href = 'login.php'"> Volver </button>
     
      
       
        </div>
    </div>
</form>
</div>




</body>
</html>