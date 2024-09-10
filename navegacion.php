<?php use app\SpaceItfip\Controladores\BienesItfipControlador; ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
	<div class="container-fluid">
		<span class="navbar-brand">
            <img class="d-inline-block align-top" src="img/Space_itfip_logotype.png" alt="Logo SpaceItfip" width="42" height="42">
		</span>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link active" href="home.php"><b>Inicio</b></a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="registrar.php"><b>Registrar pr&eacute;stamo</b></a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="aprobar.php"><b>Aprobar pr&eacute;stamo</b></a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="prestamos.php"><b>Todos los pr&eacute;stamos</b></a>
				</li>
				<li class="nav-item">
					<div>
						<a class="nav-link active" href="Generar.php"><b>Registrar bien</b></a>
					</div>
				</li>
				<!--<li class="nav-item">
					<div>
						<a class="nav-link active" href="cerrar_sesion.php"><b>Cerrar sesi&oacute;n(<?=$_SESSION['correo_administrador']?>)</b></a>
					</div>
				</li>-->
			</ul>
			<ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="https://via.placeholder.com/40" alt="Avatar" class="rounded-circle" width="40" height="40">
                </a>
				<div class="dropdown-menu custom-left" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">FAQS</a>
                        <a class="dropdown-item" href="#">Configuración</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="cerrar_sesion.php">Cerrar sesión</a>
                    </div>
            </li>
        </ul>
		</div>
	</div>
</nav>

