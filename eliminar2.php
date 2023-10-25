<?php
require("connection.php");

if (isset($_GET["id"])) {
    $documento = $_GET["id"];
    
    // Ejecutar la consulta de eliminación
    $sql_delete = "DELETE FROM user WHERE doc='$documento'";
    
    if ($conn->query($sql_delete) === TRUE) {
        // Redirigir a la página principal o mostrar un mensaje de éxito
        header("Location: dashboard.php?mod=Usuarios");
        exit();
    } else {
        echo "Error al eliminar el registro: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Eliminar Registro</title>
</head>

<body>
    <h1>Eliminar Registro</h1>
    <p>¿Desea eliminar este registro?</p>
    <a href="dashboard.php?mod=dropdowns">Cancelar</a>
</body>

</html>

