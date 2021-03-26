<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Administrador del Artículos</title>
    <!-- BOOTSTRAP 4  -->
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>

    <!-- NAVIGATION  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Administrador de Artículos</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <form class="form-inline my-2 my-lg-0">
            <input name="search" id="search" class="form-control mr-sm-2" type="search" placeholder="Busqueda" aria-label="Busqueda">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Busqueda</button>
          </form>
      </div>
    </nav>

    <div class="container ml-2">
      <div class="row p-4">

        <!-- TABLA PARA MODIFICAR O AGREGAR PRODUCTOS  -->

        <div class="col-md-5">

          <div class="card">
            <div class="card-body">
              <!-- FORM TO ADD TASKS -->

              <form id="task-form" enctype="multipart/form-data">
              <div class="form-group">
                  <input type="text" id="taskId" placeholder="Id" value="0" readonly class="form-control">
                </div>
                <div class="form-group">
                  <input type="text" id="name" placeholder="Nombre" class="form-control">
                </div>
                <div class="form-group">
                  <textarea id="description" cols="30" rows="10" class="form-control" placeholder="Descripcion"></textarea>
                </div>
                <div class="form-group">
                  <input type="number" step="0.01" id="price" placeholder="Precio" class="form-control">
                </div>
                <!-- 
                POR SI QUEREMOS AGREGAR EL COSTO
                <div class="form-group">
                  <input type="text" id="costo" placeholder="Costo" class="form-control">
                </div> -->


                <div class="form-group">
                  <input type="file" class="form-control" id="imgInp" name="file[]">
                  <br>
                  <img id="blah" onerror="this.src='1.jpg'" name="blah" src="preImg.png" width="150px" height="150px" alt="Imagen" />
                </div>


                <div class="form-group">
                  <select id='tipo' class="form-control">
                    <option value="dulce">Dulce</option>
                    <option value="salado">Salado</option>
                    <option value="ninguno">Ninguno</option>
                  </select>
                </div>

                <div class="form-group">
                  <select id='categoria' class="form-control">
                    <?php
                       include('database.php');
                       $query = "SELECT DISTINCTROW variante FROM config WHERE tipos = 'categoria'";
                       $result = mysqli_query($connection, $query);
                       while($row = mysqli_fetch_array($result)) {
                          ?><option value="<?php echo $row['variante'] ?>"><?php echo ucfirst($row['variante'])?></option>
                        <?php
                       }
                   
                    ?>
                  </select>
                </div>


                <!-- 
                  POR SI QUEREMOS AGREGAR ALGÚN PROVEEDOR
                  <div class="form-group">
                  <select id='proveedor' class="form-control">
                    <option value="fabrica">Fabrica</option>
                    <option value="discema">Discema</option>
                    <option value="mocay">Mocay</option>
                    <option value="tarik">Tarik</option>
                    <option value="rosa">Rosa</option>
                    <option value="velas">Velas</option>
                  </select>
                </div> -->

                <br>
                <label><input type="checkbox" id="mostrar" value="0"> ¿Mostrar en carta?</label><br><br>

                <div class="">
                  <label><input type="checkbox" id="g" value="0">Gluten</label><br>
                  <label><input type="checkbox" id="h" value="0"> Huevos</label><br>
                  <label><input type="checkbox" id="p" value="0"> Pescado</label><br>
                  <label><input type="checkbox" id="cc" value="0"> Cacahuetes</label><br>
                  <label><input type="checkbox" id="s" value="0"> Soja</label><br>
                  <label><input type="checkbox" id="l" value="0"> Lacteos</label><br>
                  <label><input type="checkbox" id="f" value="0"> Frutos Secos</label><br>
                  <label><input type="checkbox" id="a" value="0"> Apio</label><br>
                  <label><input type="checkbox" id="m" value="0"> Mostaza</label><br>
                  <label><input type="checkbox" id="gs" value="0"> Granos de Sésamo</label><br>
                  <label><input type="checkbox" id="c" value="0"> Crustaseos</label><br>
                  <label><input type="checkbox" id="d" value="0"> Sulfitos</label><br>
                  <label><input type="checkbox" id="mo" value="0"> Moluscos</label><br>
                  <label><input type="checkbox" id="al" value="0"> Altramuses</label><br>
                </div>


                <input type="hidden" id="taskId">

                <button type="submit" class="btn btn-primary btn-block text-center">
                  GUARDAR
                </button>

              </form>

            </div>
          </div>

        </div>

        <!-- TABLE CON LOS PRODUCTOS  -->
        <div class="col-md-7">
          <div class="card my-4" id="task-result">
            <div class="card-body">
              <!-- SEARCH -->
              <ul id="container"></ul>
            </div>
          </div>

          <table class="table table-bordered table-sm">
            <thead>
              <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Description</td>
                <td>Tipo</td>
                <td>Precio</td>

              </tr>
            </thead>
            <tbody id="tasks"></tbody>
          </table>
        </div>
      </div>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <!-- Frontend Logic -->
    <script src="app.js"></script>
    <script src="mostrarImg.js"></script>
    <script src="checkBox.js"></script>

  </body>

</html>
