<?php
//Se almacena la conexion en la variable $enlace, 
$enlace = mysqli_connect('localhost', 'root', '', 'empresa');
//La condiciona que permite verificar que se logro conectar y envia el respective mensaje en cualquiera de los casos
if (!$enlace) {
    die('Error de Conexión (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

?>