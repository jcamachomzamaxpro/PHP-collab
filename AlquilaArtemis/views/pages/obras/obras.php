
<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Obras</h1>
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
              <div class="card-header">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Añadir Obras
              </button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>Nombre Obra</th>
                    <th>Cliente</th>
                    <th>Ajustes</th>
                  </tr>
                  </thead>
                  <tbody class="">
                  <tr>
                    <td>HighWay Expansion</td>
                    <td>Marval</td>
                    <td class="text-center">
                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                      <button class="btn btn-secondary"><i class="fas fa-edit"></i></button>
                    </td>
                  </tr>                 
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Nombre Obra</th>
                    <th>Cliente</th>
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
                <h3 class="card-title">Añadir Obra</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputNameProduct">Nombre Obra</label>
                    <input type="text" class="form-control" id="inputNombre" placeholder="Nombre de la Obra">
                  </div>
                  <div class="form-group">
                    <label>Cliente</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Seleccione el Cliente</option>
                      <option>Marval</option>
                    </select>
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
