
<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Inventarios</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
              <div class="card">
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
                    <tr>
                      <td>Martillo</td>
                      <td>17</td>
                      <td>10000</td>
                      <td class="text-center">
                        <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        <button class="btn btn-secondary"><i class="fas fa-edit"></i></button>
                      </td>
                    </tr>                 
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
    </section>
    <!-- /.content -->
  </div>

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
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputNameProduct">Nombre del producto</label>
                    <input type="text" class="form-control" id="inputNameProduct" placeholder="Nombre producto">
                  </div>
                  <div class="form-group">
                    <label for="inputStock">Stock</label>
                    <input type="number" class="form-control" id="inputStock" placeholder="Stock">
                  </div>

                  <div class="form-group">
                    <label for="inputPrecio">Precio</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                      </div>
                      <input type="number" class="form-control" id="inputPrecio" placeholder="Precio">
                    </div>
                  </div>                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Enviar">
                </div>
              </form>
            </div>
    </div>
  </div>
</div>

  


  <script>

$(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

</script>