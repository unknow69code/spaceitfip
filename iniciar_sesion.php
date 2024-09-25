<?php

/**
 * [$correo description]
 * @var [type]
 */
$correo = ucfirst(strtolower($_POST['correo']));
/**
 * [$clave description]
 * @var [type]
 */
$contraseña = $_POST['contraseña'];
/**
 * [$politicas description]
 * @var [type]
 */
$politicas = $_POST['politicas'] ? $_POST['politicas'] : '0';

if (!$correo) {
    header('Location: login.php?correo_vacio');
    exit;
}

if (!$contraseña) {
    header('Location: login.php?clave_vacia');
    exit;
}

if (!$politicas  === '1') {
    header('Location: login.php?Selecciona_politicas');
    exit;
}

if (!preg_match('/^[_.0-9a-zA-Z-]+@[itfip]+.[edu]+.[co]{2,6}$/i', $correo)) {
    header('Location: login.php?correo_invalido');
    exit;
}

if (strlen($contraseña) <= 8) {
    header('Location: login.php?clave_invalida');
    exit;
}

include_once 'vendor/autoload.php';

use app\SpaceItfip\Controladores\SesionControlador;

if (!SesionControlador::iniciarSesion($correo, $contraseña)) {
    header('Location: login.php?credenciales_incorrectas');
    exit;
} else {
    header('Location: redireccionar.php');
}
