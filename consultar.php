<?php
// Datos de conexión a la base de datos
$host = "localhost";
$db_user = "fromero";
$db_password = "H(t3mvAN7nxriCWO";
$db_name = "fromero";

// Establecer conexión con la base de datos
$conexion = mysqli_connect($host, $db_user, $db_password, $db_name);

// Verificar si la conexión fue exitosa
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Consultar los datos de la tabla personas
$sql = "SELECT * FROM personas";
$resultado = mysqli_query($conexion, $sql);

// Crear la tabla HTML para mostrar los datos
 echo '<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>


<div class="container"
<h2>Datos de la Tabla Personas</h2>
<table border="1" class="table">
<tr><th>Nombre</th><th>Apellido</th><th>Empresa</th></tr>';





while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<tr>";
    echo "<td>".$fila['Nombre']."</td>";
    echo "<td>".$fila['Apellido']."</td>";
    echo "<td>".$fila['Empresa']."</td>";
    echo "</tr>";
}

echo "</table>";

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>