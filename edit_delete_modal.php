<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $results2['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<center><h4 class="modal-title" id="myModalLabel">Editar Estudiante</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
            <div class="modal-body">
			<div class="container-fluid" style="padding-left: 40px; padding-right: 40px;">
			<form method="POST" action="edit.php?id=<?php echo $results2['id']; ?>">
				<div class="row form-group">
						<label class="control-label" style="position:relative; top:7px;">Matricula:</label>
						<input type="text" class="form-control" name="nombre" value="<?php echo $results2['matricula']; ?>" readonly>
				</div>
					<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="estado">Estado: </label>
						<div class="form-check">
               <input type="radio" name="estado" class="form-check-input" id="Activo" value="Activo" <?php if($results2['estado'] == 'Activo'){ echo 'checked';} ?>>
                <label class="form-check-label" for="Activo">Activo</label>
               </div>
						</div>
						<div class="form-group">
						<div class="form-check">
                <input type="radio" name="estado" class="form-check-input" id="Inactivo" value="Inactivo" <?php if($results2['estado'] == 'Inactivo'){ echo 'checked';} ?>>
                <label class="form-check-label" for="Inactivo">Inactivo</label>
              </div>
						</div>
					</div>
				</div>
				<div class="row form-group">
						<label class="control-label" style="position:relative; top:7px;">Nombre:</label>
						<input type="text" class="form-control" name="nombre" value="<?php echo $results2['nombre']; ?>">
					
				</div>
				<div class="row form-group">			
						<label class="control-label" style="position:relative; top:7px;">Apellido:</label>
						<input type="text" class="form-control" name="apellido" value="<?php echo $results2['apellido']; ?>">
	
				</div>
				<div class="row form-group">
						<label class="control-label" style="position:relative; top:7px;">Email:</label>
						<input type="email" class="form-control" name="email" value="<?php echo $results2['email']; ?>">
	
				</div>
				<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="genero">Género: </label>
						<div class="form-check">
               <input type="radio" name="genero" class="form-check-input" id="masculino" value="Masculino" <?php if($results2['genero'] == 'Masculino'){ echo 'checked';} ?>>
                <label class="form-check-label" for="masculino">Masculino</label>
               </div>
						</div>
						<div class="form-group">
						<div class="form-check">
                <input type="radio" name="genero" class="form-check-input" id="femenino" value="Femenino" <?php if($results2['genero'] == 'Femenino'){ echo 'checked';} ?>>
                <label class="form-check-label" for="femenino">Femenino</label>
              </div>
						</div>
					</div>
				</div>
				<div class="row form-group">
						<label class="control-label" style="position:relative; top:7px;">Telefono:</label>
						<input type="text" class="form-control" name="telefono" value="<?php echo $results2['telefono']; ?>">
			
				</div>
				<div class="row form-group">
						<label class="control-label" style="position:relative; top:7px;">Celular:</label>
						<input type="text" class="form-control" name="celular" value="<?php echo $results2['celular']; ?>">
					
				</div>
				<div class="row form-group">
						<label class="control-label" style="position:relative; top:7px;">Dirección:</label>
						<input type="text" class="form-control" name="direccion" value="<?php echo $results2['direccion']; ?>">
				
				</div>
				<div class="row form-group">
						<label class="control-label" style="position:relative; top:7px;">Carrera:</label>
						<input type="text" class="form-control" name="carrera" value="<?php echo $results2['carrera']; ?>">
					
				</div>
				<div class="row form-group">
						<label class="control-label" style="position:relative; top:7px;">1ra asignatura:</label>
						<input type="text" class="form-control" name="ra_asignatura" value="<?php echo $results2['1ra_asignatura']; ?>">
					
				</div>
				<div class="row form-group">
						<label class="control-label" style="position:relative; top:7px;">2da asignatura:</label>
						<input type="text" class="form-control" name="da_asignatura" value="<?php echo $results2['2da_asignatura']; ?>">
				</div>
				
            </div> 
            <div class="modal-footer">
                <button type="button" style="color: white; background-color: #ef2b2b" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="edit" style="color: white; background-color: #53125b" class="btn btn-default"><span class="glyphicon glyphicon-check"></span> Actualizar</a>
			</form>
            </div>
        </div>
            

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $results2['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <center><h4 class="modal-title" id="myModalLabel">Borrar Estudiante</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Está seguro de que quiere eliminar este estudiante?</p>
				<h3 style="color: #d4a81e;" class="text-center"><?php echo $results2['nombre'].' '.$results2['apellido'];?> 
				<p></p>
				<p>Matricula: <?php echo $results2['matricula']; ?></p></h3>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" style="color: white; background-color: #ef2b2b" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="delete.php?id=<?php echo $results2['id']; ?>" class="btn btn-purple"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>