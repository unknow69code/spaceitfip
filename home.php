<?php
include_once 'cabecera.php';
include_once 'verificar_sesion.php';
include_once 'navegacion.php';

use app\SpaceItfip\Controladores\PrestamosControlador;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <h2 class="mt-4 mb-4 mx-4">Bienvenido Sr. <b><cite title="Source Title">Secretaria:</cite></b></h2>
   <!-- The code you provided is creating a navigation bar using HTML and Bootstrap classes. Here's a
   breakdown of what each part of the code is doing: */-->
    <nav aria-label="Page navigation example">
        <ul class="pagination mx-4">
           <!-- <li class="page-item">
             <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a> 
            </li>-->
            <li class="page-item"><a class="page-link border border-primary" href="registrar.php"><b>Registrar Prestamo</b></a></li>
            <li class="page-item"><a class="page-link border border-primary" href="aprobar_prestamo.php"><b>Aprobar prestamo</b></a></li>
            <li class="page-item"><a class="page-link border border-primary" href="Generar.php"><b>Registrar bien</b></a></li>
            <!-- <li class="page-item">
               <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li> -->
        </ul>
    </nav>
</body>

</html>
<?php include_once 'pie.php';
