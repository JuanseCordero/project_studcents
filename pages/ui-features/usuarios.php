<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/styles.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<center>

      <!-- partial -->
      <div class="main-panel" style="width: 100%;">
        <div class="content-wrapper">
        <form action="dashboard.php?mod=gestion_usuarios" method="post">
              <input type="text" class="form-control" placeholder="Buscar por nombre" name="txtbuscar" style="width: 50%;">
              <br>
              <button type="submit" class="btn btn-primary" name="btnbuscar">Buscar</button>
          </form>
          <div class="row">

          
          <div class="col-lg-11 grid-margin stretch-card" style="margin-left: 4%; width: 400px; margin-top: 2%;">
              <div class="card" style="width: 100;">
                <div class="card-body">
                  
                  
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Documento</th>
                          <th>Tipo de documento</th>
                          <th>Primer nombre</th>
                          <th>Segundo nombre</th>
                          <th>Primer apellido</th>
                          <th>Segundo Apellido</th>
                          <th>Email</th>
                          <th>Teléfono</th>
                          <th>Rol</th>
                          <th>Fecha de nacimiento</th>
                          <th>Edad</th>
                          <th>Grupo</th>
                          <th>U</th>
                          <th>D</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php
                          require ("connection.php");

                            $sql = $conn -> query("SELECT doc, tipo_doc, nom1, nom2, ape1, ape2, correo, tel, rol.nom_rol,nac,edad,grupo.nom_num
                            FROM user
                            INNER JOIN rol ON user.id_rol_fk = rol.id_rol
                            INNER JOIN grupo ON user.fk_grupo = grupo.id_grupo; 
                            ");
                          
                          
                            while ($resultado = $sql->fetch_assoc()) {
                                echo "<tr>";
                               
                                echo "<td>" . $resultado["doc"] . "</td>";
                                echo "<td>" . $resultado["tipo_doc"] . "</td>";
                                echo "<td>" . $resultado["nom1"] . "</td>";
                                echo "<td>" . $resultado["nom2"] . "</td>";
                                echo "<td>" . $resultado["ape1"] . "</td>";
                                echo "<td>" . $resultado["ape2"] . "</td>";
                                echo "<td>" . $resultado["correo"] . "</td>";
                                echo "<td>" . $resultado["tel"] . "</td>";
                                echo "<td>" . $resultado["nom_rol"] . "</td>";
                                echo "<td>" . $resultado["nac"] . "</td>";
                                echo "<td>" . $resultado["edad"] . "</td>";
                                echo "<td>" . $resultado["nom_num"] . "</td>";
                              

                              echo "<td style='color: blue'><a href='modificar2.php?id=" . $resultado["doc"] . "' style='color: blue;'>Modificar</a></td>";


    
                                // Eliminar
                                echo "<td style='color: red'><a href='eliminar2.php?id=" . $resultado["doc"] . "' style='color: red;'>Eliminar</a></td>";

                                
                                echo "</tr>";
                                
                                
                            }
                            ?>
                        <?php

                          

                        ?>
 
 
                        

                       

                        
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>
            
          </div>
        </div>
        </center>       
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <center>
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Studcents Copyright © 2023.  <a href="#" target="_blank"></a>Todos los derechos reservados.</span>
            
          </div>
          </center>
         
</footer> 
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
