<?php

include_once 'verificar_sesion.php';

/**
 * [$redireccionar description]
 * @var [type]
 */
$redireccionar = $admin1_2 ? 'home.php' : 'aprobar.php';
header("Location: $redireccionar");
