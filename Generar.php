<?php
include_once 'cabecera.php';
include_once 'verificar_sesion.php';
include_once 'navegacion.php';

?>
<div class="row">
	<div class="col-12 mb-3">
		<h1 class="h2">Registrar bienes o espacios f&iacute;sicos</h1>
	</div>
	<div class="col-lg-12 mb-3">
		<form action="guardar_espacio.php" method="post" class="form-control bg-light mb-5">
		<?php if (isset($_GET['falta_espacio'])) { ?>
				<div class="alert alert-warning">
					Ingrese el bien o espacio a registrar *
				</div>
			<?php } ?>
			<form action="guardar_espacio.php" method="post" class="form-control bg-light mb-5">
			<div class="col-12 mb-3">
				<div class="table-responsive">
					<table class="table table-hover">
						<caption>Registrar bien o espacio</caption>
						<tr>
							<th colspan="3">
								<div class="form-floating mb-3">
									<input required name="espacio" class="form-control" type="text">
									<label class="form-label" for="espacio">Nombre del espacio o bien: </label>
								</div>
							</th>
						</tr>
		            </table>
					<div class="form-group ml-2 mb-3">
						<button class="btn btn-danger" style="background: #f00;">Registrar</button>
					</div>	
		       </div>
		    </div>			
        </form>
    </div>
</div>
<?php include_once 'pie.php';