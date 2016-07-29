<!DOCTYPE html>
<html>

@include('partials.htmlheader')

<body class="skin-blue sidebar-mini">
<div class="wrapper">

    @include('partials.mainheader2')

    @include('partials.sidebar2')

            <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @include('partials.contentheader')
        <!-- Main content -->
        <section class="content">

            <!-- SELECT2 EXAMPLE -->
        <!--Busqueda y boton-->
            <!-- general form elements -->
           <!-- <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Seccion de busqueda</h3>
                </div>
                <!-- /.box-header
                <!-- form start --
                <form role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ingresar numero de partida</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Numero de partida">
                        </div>
                    </div>
                    <!-- /.box-body --

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Enviar Consulta</button>
                    </div>
                </form>
            </div>-->
            <!-- /.box -->


            <!--Tabla de pedidos-->



                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Nuevo Pedido</h3>
                        </div>
                        <!-- /.box-header -->
                        <form action="#" method="get" class="sidebar-form">
                            <div class="input-group">
                                <input type="text" name="q" class="form-control" placeholder="Buscar...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                            </div>
                        </form>
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>SubPartida</th>
                                    <th>Fecha Inicio</th>
                                    <th>Fecha Termino</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>UM</th>
                                    <th>Accion</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($subpartida as $subpartida)
                                    <tr>
                                        <!--<td><a href="{url('prueba')}}"><span>{$subpartida->sub_id}}</span></a></td>-->
                                        <td><a href="{{url('cubicacion',$subpartida->sub_id  )}}"><span>{!! $subpartida->sub_id!!}</span></a></td>
                                        <td>{{$subpartida->sub_nombre}}</td>
                                        <td>{{$subpartida->sub_fechaini}}</td>
                                        <td>{{$subpartida->sub_fechater}}</td>
                                        <td>{{$subpartida->sub_precio}}</td>
                                        <td>{{$subpartida->sub_cantidad}}</td>
                                        <td>{{$subpartida->sub_um}}</td>
                                        <td><a href="{{url('cubicacion',$subpartida->sub_id  )}}"><span class="label label-success">Ir</span></a></td>
                                        <!-- <td>{}}</td>-->
                                        <!-- href="{$subpartida->sub_id}}<td><span class="label label-warning">Pending</span></td>
                                         <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    --></tr>

                                @endforeach

                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>

                    <!-- /.box -->










{{--$cc}}
            {{$user--}}
            @yield('main-content')

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('partials.controlsidebar')

    @include('partials.footer')

</div><!-- ./wrapper -->

@include('partials.scripts')

</body>

<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>


</html>