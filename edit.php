 <?php
 session_start();
  include 'database.php';

  if(isset($_POST['edit'])){
    try{
      $id = $_GET['id'];
      $nombre = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      $email = $_POST['email'];
      $ra_asignatura = $_POST['ra_asignatura'];
      $da_asignatura = $_POST['da_asignatura'];
      $estado = $_POST['estado'];
      $carrera = $_POST['carrera'];
      $telefono = $_POST['telefono'];
      $celular = $_POST['celular'];
      $dirección = $_POST['direccion'];
      $genero = $_POST['genero'];
      $estado = $_POST['estado'];
      

  
      $sql = "UPDATE estudiante SET nombre = '$nombre', apellido = '$apellido', email = '$email', 1ra_asignatura = '$ra_asignatura', estado = '$estado', carrera = '$carrera', telefono = '$telefono', celular = '$celular', direccion = '$direccion', 2da_asignatura = '$da_asignatura', genero = '$genero', estado = '$estado' WHERE id = '$id' ";
      //if-else statement in executing our query
      $_SESSION['message'] = ($conn->exec($sql) ) ? 'Datos del estudiante actualizados' : 'Algo acaba de fallar. No se pudieron actualizar los datos';

    }
    catch(PDOException $e){
      $_SESSION['message'] = $e->getMessage();
    }

  }
  else{
    $_SESSION['message'] = 'Primero rellena el formulario para editar';
  }

  header('location: ingresar_estudiantes.php');

?>
