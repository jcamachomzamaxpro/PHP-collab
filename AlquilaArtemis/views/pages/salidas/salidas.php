
<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Salidas</h1>
            <h5>Alquiler</h5>
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
                Añadir Salidas
              </button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>Cliente</th>
                    <th>Empleado</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Ajustes</th>
                  </tr>
                  </thead>
                  <tbody class="">
                  <tr>
                    <td>Marval</td>
                    <td>Teofilo Gutierrez</td>
                    <td>06/20/2023</td>
                    <td>5:34 AM</td>
                    <td class="text-center">
                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                      <button class="btn btn-secondary"><i class="fas fa-edit"></i></button>
                    </td>
                  </tr>                 
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Cliente</th>
                    <th>Empleado</th>
                    <th>Fecha</th>
                    <th>Hora</th>
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
                <h3 class="card-title">Añadir Salida</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label>Clientes</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Seleccione el Cliente</option>
                      <option>Marval (Ejemplo)</option>
                      <option>HG (Ejemplo)</option>
                      <option>Valco (Ejemplo)</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Empleado</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Seleccione al Empleado</option>
                      <option>Teofilo Gutierrez</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Fecha</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                  </div>
                  <div class="bootstrap-timepicker">
                    <div class="form-group">
                      <label>Hora</label>

                      <div class="input-group date" id="timepicker" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#timepicker"/>
                        <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                        </div>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Producto</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Seleccione el Producto</option>
                      <option>Martillo</option>
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


    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })


</script>


