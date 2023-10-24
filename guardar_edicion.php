<?php
require("connection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $estado = $_POST["estado"];
    $id_asistencia = $_POST["id_asistencia"];

    $query = $conn->prepare("UPDATE asistencia SET estado=? WHERE id_asistencia=?");
    $query->bind_param("si", $estado, $id_asistencia); // "si" indica que $estado es una cadena (string) y $id_asistencia es un entero (integer)
    
    if ($query->execute()) {
        // Redirige al usuario a la tabla inicial después de guardar los cambios
        header("Location: dashboard.php?mod=dropdowns");
        exit; // Asegúrate de salir del script después de redirigir
    } else {
        echo "Hubo un error al guardar los cambios.";
    }
}
?>
