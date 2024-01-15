 <?php
 session_start();
  include 'database.php';

  if(isset($_POST['editar'])){
    try{
      $id = $_GET['id'];
      $calificacion_1ra_asignatura = $_POST['calificacion_1ra_asignatura'];
      $calificacion_2da_asignatura = $_POST['calificacion_2da_asignatura'];



      $sql = "UPDATE estudiante SET  calificacion_1ra_asignatura = '$calificacion_1ra_asignatura', calificacion_2da_asignatura = '$calificacion_2da_asignatura' WHERE id = '$id'";
      //if-else statement in executing our query
      $_SESSION['message'] = ( $conn->exec($sql) ) ? 'Estudiante Calificado' : ' Hubo un error al calificar al estudiante';

    }
    catch(PDOException $e){
      $_SESSION['message'] = $e->getMessage();
    }

  }
  else{
    $_SESSION['message'] = 'Primero rellena el formulario para editar';
  }

  header('location: calificar_estudiantes.php');

?>