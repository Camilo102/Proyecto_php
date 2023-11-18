<?php
require_once("../config/conexion.php");
sessin_destroy();
header("Location:".conectar::ruta()."index.php");
exit();
?>