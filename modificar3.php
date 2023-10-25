<?php
require("connection.php");

if (isset($_GET["id"])) {
    $id_asistencia = $_GET["id"];
    $query = $conn->prepare("SELECT * FROM user WHERE doc = ?");
    $query->bind_param("i", $id_asistencia);
    $query->execute();
    $resultado = $query->get_result()->fetch_assoc();

    if (!$resultado) {
        echo "La asistencia no existe.";
        exit;
    }
}
?>

                <div class="col-lg-7" >
                    <div class="p-5">
                        <div class="text-center">
                            <h1 style="font-size:x-large;" class="h4 text-gray-900 mb-4">Modifica datos de docentes</h1>
                        </div>
                        <form class="user" action="guardar_edicion3.php" method="POST">
                        <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="hidden" class="form-control" name="id" required  
                                        placeholder="Identificación" value="<?php echo $resultado["doc"]?>">
                                </div>


                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control" name="n1" required  
                                    placeholder="Pimer nombre" value="<?php echo $resultado["nom1"]?>">
                            </div>

                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control" name="n2"   
                                    placeholder="Segundo nombre" value="<?php echo $resultado["nom2"]?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control" name="p1" required  
                                    placeholder="Primer apellido" value="<?php echo $resultado["ape1"]?>">
                            </div>

                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control" name="p2" required  
                                    placeholder="Segundo apellido" value="<?php echo $resultado["ape2"]?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" name="email"
                                    placeholder="Dirrección de correo electrónico" value="<?php echo $resultado["correo"]?>">
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control" name="tlf" required  
                                        placeholder="Teléfono" value="<?php echo $resultado["tel"]?>">
                                </div>

                                <div class="col-sm-6 mb-3 mb-sm-0">
                                  
          <input class="form-control" id="date" name="date" placeholder="Fecha de nacimiento" type="date" value="<?php echo $resultado["nac"]?>">
                                                                               
                                </input>
                                </div>
                            </div>

                            <div class="form-group row">
        

                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control" name="edad" required  
                                        placeholder="Edad" value="<?php echo $resultado["edad"]?>">
                                </div>
                            </div>
                        
                            <hr>
                            

                            <button style="background-color:#091d36; color: white;" type="submit" class="btn btn- btn-user btn-block" name="actualizar"><i class="fas fa-sign-in-alt"></i>  Actualizar</button>
                        </form>
                       
                                                        

    </div> 
                      
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <center>
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Studcents Copyright © 2023.  <a href="#" target="_blank"></a>Todos los derechos reservados.</span>
            
          </div>
          </center>
         
</footer> 
       <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="../../vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
  <script src="../../js/typeahead.js"></script>
  <script src="../../js/select2.js"></script>
  <!-- End custom js for this page-->
