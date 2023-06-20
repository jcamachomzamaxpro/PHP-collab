<?php
if (isset($_POST['nuevoProducto'])) {
    $url = "http://localhost/PHP-collab/apirest/controllers/productos.php?op=insert";
    $data = array(
        'nombre' => $_POST['nombre'], 
        'stock' => $_POST['stock'], 
        'precio' => $_POST['precio']
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST,true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data)); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    $response = curl_exec ($ch);
    curl_close($ch);
    print $response;

    echo "<script>alert('Datos guardados');document.location='productos'</script>";
}
?>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Añadir Productos</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputNameProduct">Nombre del producto</label>
                    <input type="text" class="form-control" id="inputNameProduct" placeholder="Nombre producto" name="nombre">
                  </div>
                  <div class="form-group">
                    <label for="inputStock">Stock</label>
                    <input type="number" class="form-control" id="inputStock" placeholder="Stock" name="stock">
                  </div>

                  <div class="form-group">
                    <label for="inputPrecio">Precio</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                      </div>
                      <input type="number" class="form-control" id="inputPrecio" placeholder="Precio" name="precio">
                    </div>
                  </div>                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Enviar" name="nuevoProducto">
                </div>
              </form>
            </div>
    </div>
  </div>
</div>