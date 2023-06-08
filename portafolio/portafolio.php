<?php include("cabecera.php"); ?>

  <br/>

  <div class="container">
    <div class="row">

      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            Datos del Proyecto
          </div>
      
          <div class="card-body">
            <form action="portafolio.php" method="post">
              Nombre del Proyecto: <input class="form-control" type="text" name="nombre" id="">
              <br/>
              Imagen del Proyecto: <input class="form-control" type="file" name="archivo" id="">
              <br/>
          
              <input class="btn btn-success" type="submit" value="Enviar Proyecto">
          
            </form>
          </div>
        </div>
      </div>

      <div class="col-6">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Imagen</th>
              </tr>
            </thead>
            <tbody>
              <tr class="">
                <td>2</td>
                <td>Aplicación Web</td>
                <td>imagen.jpg</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      
    </div>
  </div>


  
  

<?php include("pie.php"); ?>