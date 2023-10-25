<?php
require "connection.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $doc= $_POST["id"];
    $nombre1= $_POST["n1"];
    $nombre2= $_POST["n2"];
    $ape1= $_POST["p1"];
    $ape2= $_POST["p2"];
    $correo= $_POST["email"];
    $tlf=$_POST["tlf"];
    $date= $_POST["date"];
    $edad=$_POST["edad"];

    $query = $conn->prepare("UPDATE user SET nom1=?,nom2=?,ape1=?,ape2=?,correo=?,tel=?,nac=?,edad=? WHERE doc=?");
    $query->bind_param("sssssisss",$nombre1, $nombre2,$ape1,$ape2,$correo,$tlf,$date,$edad,$doc);

    if ($query->execute()) {
        // Redirige al usuario a la tabla inicial después de guardar los cambios
        header("Location: dashboard.php?mod=Usuarios");
        exit; // Asegúrate de salir del script después de redirigir
    } else {
        echo "Hubo un error al guardar los cambios.";
    }

}
?>