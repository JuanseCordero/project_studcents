<?php
require("connection.php");

if (isset($_GET["id"])) {
    $id_asistencia = $_GET["id"];
    $query = $conn->prepare("SELECT * FROM asistencia WHERE id_asistencia = ?");
    $query->bind_param("i", $id_asistencia);
    $query->execute();
    $resultado = $query->get_result()->fetch_assoc();

    if (!$resultado) {
        echo "La asistencia no existe.";
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar Asistencia</title>
</head>
<body>
    <h1>Editar Asistencia</h1>
    <form method="post" action="guardar_edicion.php">
        <input type="hidden" name="id_asistencia" value="<?php echo $resultado["id_asistencia"]; ?>">

        <select name="estado">
            <option value="si" <?php if ($resultado["estado"] === "si") echo "selected"; ?>>Asistió</option>
            <option value="no" <?php if ($resultado["estado"] === "no") echo "selected"; ?>>No Asistió</option>
            <option value="ex" <?php if ($resultado["estado"] === "ex") echo "selected"; ?>>Excusa</option>
        </select><br><br>
        <input type="submit" value="Guardar Cambios">
    </form>
</body>
</html>
