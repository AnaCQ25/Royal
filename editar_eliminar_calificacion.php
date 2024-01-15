<!-- Edit -->
<div class="modal fade" id="editar_<?php echo $results2['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <center><h4 class="modal-title" id="myModalLabel">Editar Estudiante</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
            <div class="modal-body">
			<div class="container-fluid" style="padding-left: 40px; padding-right: 40px;">
			<form method="POST" action="editar_calificacion.php?id=<?php echo $results2['id']; ?>">
				<div class="row form-group">
						<label class="control-label" style="position:relative; top:7px;">Matricula:</label>
						<input type="text" class="form-control" name="nombre" value="<?php echo $results2['matricula']; ?>" readonly>
				</div>
				<div class="row form-group">
						<label class="control-label" style="position:relative; top:7px;">Nombre:</label>
						<input type="text" class="form-control" name="nombre" value="<?php echo $results2['nombre']; ?>" readonly>
					
				</div>
				<div class="row form-group">			
						<label class="control-label" style="position:relative; top:7px;">Apellido:</label>
						<input type="text" class="form-control" name="apellido" value="<?php echo $results2['apellido']; ?>" readonly>
	
				</div>
				<div class="row form-group">
						<label class="control-label" style="position:relative; top:7px;">1ra asignatura:</label>
						<input type="text" class="form-control" name="1ra_asignatura" value="<?php echo $results2['1ra_asignatura']; ?>" readonly>
					
				</div>
				<div class="row form-group">
						<label class="control-label" style="position:relative; top:7px;">2da asignatura:</label>
						<input type="text" class="form-control" name="2da_asignatura" value="<?php echo $results2['2da_asignatura']; ?>" readonly>
				</div>
				<div class="row form-group">
						<label class="control-label" style="position:relative; top:7px;">Calificación 1ra asignatura:</label>
						<input type="text" class="form-control" name="calificacion_1ra_asignatura" value="<?php echo $results2['calificacion_1ra_asignatura']; ?>">
				</div>
				<div class="row form-group">
						<label class="control-label" style="position:relative; top:7px;">Calificación 2da asignatura:</label>
						<input type="text" class="form-control" name="calificacion_2da_asignatura" value="<?php echo $results2['calificacion_2da_asignatura']; ?>">
				</div>
            </div> 
            <div class="modal-footer">
                <button type="button" style="color: white; background-color: #ef2b2b" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="editar" class="btn btn-default" style="color: white; background-color: #53125b"><span class="glyphicon glyphicon-check"></span> Actualizar</a>
			</form>
            </div>
        </div>
            

        </div>
    </div>
</div>
