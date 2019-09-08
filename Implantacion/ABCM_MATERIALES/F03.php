﻿<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <title>CRUD MATERIALES</title>
  <link rel="icon" href="logo.png">
  <style media="screen">
    @keyframes giro {
      50% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    footer {
      background-image: url('./IMAGENES/fondo1.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }

    #border3 {
      width: 330px;
      height: 330px;
      border: 10px outset green;
      border-radius: 100%;
      animation-name: giro;
      animation-duration: 25s;
      animation-iteration-count: infinite;
    }

    #border2 {
      width: 310px;
      height: 310px;
      border: 10px double red;
      border-radius: 100%;
      animation-name: giro;
      animation-duration: 20s;
      animation-iteration-count: infinite;
    }

    #border1 {
      width: 290px;
      height: 290px;
      border: 10px dashed #048998;
      border-radius: 100%;
      animation-name: giro;
      animation-duration: 15s;
      animation-iteration-count: infinite;
    }

    p {
      color: white;
    }
  </style>

</head>

<body style="background-color:#f6f5f5">

  <header>
    <div id="navbarHeader" style="background-color:#048998;       
      background-image: url('../IMAGENES/fondo1.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <br>
            <h4 class="text-white"><a href="../index.php"><span style="color:white;">Floweb<br><h6>Alfa</h6></span></a></h4>
            <p class="text-muted">
              <br>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar" style="background-color:#7fe7cc;">
      <div class="container d-flex justify-content-between">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <strong style="color:white;">Materiales</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <h3><i class="fas fa-bars" style="color:white;"></i></h3>
          </span>
        </button>
      </div>
    </div>
  </header>
  <div class="container-fluid" style="margin-top: 5%;">
    <div class="row">
      <div class="col-sm-4">
        <table class="table">
          <thead>
            <tr>
              <th scope="col" colspan="4" style="text-align:center; color:gray;">
                <h2>Consultar</h2>
              </th>
            </tr>
          </thead>
          <thead>
            <tr>
              <th scope="col">Núm. de Material</th>
              <th scope="col">Nombre</th>
              <th scope="col">Cantidad</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include '../CONEXION/conexion.php';
            $sql = "select * from material";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo "<tr>
                <th scope='row'>" . $row['no_material'] . "</th>" .
                  "<td>" . $row['nom_material'] . "</td>" .
                  "<td>" . $row['cant_material'] . "</td>" .
                  "<td>" . $row['status_material'] . "</td>
                </tr>";
              }
            } else { }
            $conn->close();
            ?>
          </tbody>
        </table>
      </div>
      <div class="col-sm-4">
        <center>
          <div id="border3">
            <div id="border2">
              <div id="border1">
                <div id="border0">
                  <img src="../IMAGENES/Flor.png" style="width:95%;height:260px;border-radius: 100%;">
                </div>
              </div>
            </div>
          </div>
        </center>
        <form method="post">
          <div class="form-group">
            <label>Núm. de Material:</label><input class="form-control" type="text" id="no_material" name="no_material">
            <label>Nombre:</label><input class="form-control" type="text" id="nom_material" name="nom_material">
            <label>Cantidad:</label><input class="form-control" type="text" id="cant_material" name="cant_material">
          </div>
          <div class="form-group">
            <label>Status:</label>
            <select id="status_material" name="status_material" class="form-control">
              <option Selected value="Activo">Activo</option>
              <option value="Inactivo">Inactivo</option>
            </select>
          </div>
          <input type="submit" class="btn btn-info" onclick="this.form.action = '_modificarMaterial.php'" value="Modificar">
          <input type="submit" class="btn btn-primary" style="float:right;" onclick="this.form.action = '_insertarMaterial.php'" value="Agregar">
        </form>
        </form>
        <br> <br>
      </div>
      <div class="col-sm-4">
        <table class="table">
          <thead>
            <tr>
              <th scope="col" colspan="4" style="text-align:center; color:gray;">
                <h2>Eliminar Material</h2>
              </th>
            </tr>
          </thead>
        </table>
        <form method="post">
          <div class="form-group">
            <label>Núm. de Material:</label><input class="form-control" type="text" id="no_material" name="no_material">
            <br>
            <input type="submit" class="btn btn-danger" onclick="this.form.action = '_borrarMaterial.php'" style="float:right;" value="Eliminar">
        </form>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="page-footer font-small teal pt-4">

    <!-- Footer Text -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row" style="background-color:#5D6D7E;      
      background-image: url('../IMAGENES/fondo1.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">

                    <!-- Content -->
                    <h5 class="text-uppercase font-weight-bold">
                        <span style="background-color:white;"><br>Equipo Núm.#2</span></h5>
                    <p>Abundiz Muro Laura Lizzeth</p>
                    <p>Ibarra Contreras Daniel Alejandro</p>
                    <p>Manuel Martinez Maya</p>
                    <p>Talamantes Jim Erik</p>

                </div>

                <!-- Grid column -->
                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-6 mb-md-0 mb-3">

                    <!-- Content -->
                    <h5 class="text-uppercase font-weight-bold">
                        <span style="background-color:white;"><br>UABC</h5></span>
                    <p>Facultad de Contaduría y Administración</p>
                    <p>Licenciatura de informática</p>
                    <p>Ingeniería de Software / Herramientas de código abierto</p>
                    <p>Proyecto Final</p>

                </div>
                <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Text -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style="background-color:#048998; color:white;">©2019 Floweb
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>