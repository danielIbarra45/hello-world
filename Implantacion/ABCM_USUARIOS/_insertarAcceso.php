<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>insertarAcceso</title>
</head>

<body>
  <?php
  include '../CONEXION/conexion.php';
  $a = $_POST['no_acceso'];
  $b = $_POST['tipo_acceso'];
  $c = $_POST['status_acceso'];

  $sql = "insert into acceso values ('$a','$b','$c');";

  if ($conn->query($sql) === TRUE) {
    echo "<div class='alert alert-success' role='alert'>¡Registro agregado exitosamente!</div>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
  ?>
  <a href="F01.php">Regresar</a>
</body>

</html>