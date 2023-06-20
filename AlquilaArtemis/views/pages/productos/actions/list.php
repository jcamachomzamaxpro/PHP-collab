<?php
$url = "http://localhost/PHP-collab/apirest/controllers/productos.php?op=GetAll";
$curl = curl_Init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$output = json_decode(curl_exec($curl));
curl_close($curl);
?>


<?php include "new.php"; ?>
<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
              <div class="card">
              <div class="card-header">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Añadir productos
              </button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>Productos</th>
                    <th>Stock</th>
                    <th>Precio c/u</th>
                    <th>Ajustes</th>
                  </tr>
                  </thead>
                  <tbody class="">
                    <?php
                    foreach ($output as $out) {
                    ?>
                  <tr>
                    <td><?php echo $out->nombre?></td>
                    <td><?php echo $out->stock?></td>
                    <td><?php echo $out->precio?></td>
                    <td class="text-center">
                      <a href="http://localhost/PHP-collab/apirest/controllers/productos.php?op=delete&id=<?php echo $out->id?>" class="btn btn-danger" onclick="return confirm('Estas seguro de eliminar esto?')"><i class="fas fa-trash"></i></a>
                      <button class="btn btn-secondary"><i class="fas fa-edit"></i></button>
                    </td>
                  </tr>    
                  <?php
                  }
                  ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Productos</th>
                    <th>Stock</th>
                    <th>Precio c/u</th>
                    <th>Ajustes</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
              <!-- /.card-footer-->
            <!-- /.card -->
          </div>
        </div>
      </div>