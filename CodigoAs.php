<?php
session_start();
include "connection.php";

date_default_timezone_set("America/Bogota");
if(isset($_POST["registro"])){
    $documentoas= $_POST["doc"];
    $Materia= $_POST["materia"];
    $Datea= date('Y-m-d');
    $Registrador=$_SESSION['doc'];

    $registro= mysqli_query($conn,"INSERT INTO `asistencia` (`id_estudiante`, `estado`, `fk_materia`, `fecha`, `usuario_registra`) VALUES ('$documentoas', 'si', ' $Materia', '$Datea', '$Registrador')") or die ("Error en el registro");
    echo"<script>alert('registro exitoso')</script>" ;
    echo"<script>window.location='dashboard.php?mod=asistencia';</script>";
}
?>

