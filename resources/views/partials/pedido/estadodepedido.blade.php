<!DOCTYPE html>
<html>

@include('partials.htmlheader')

<body class="skin-blue sidebar-mini">
<div class="wrapper">

    @include('partials.mainheader2')

    @include('partials.sidebarNOT')

            <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @include('partials.contentheader')
                <!-- Main content -->
        <section class="content">
            <h4>Partida N°</h4> <h4><a><h4>     </h4></a>Sub Partida N°</h4>

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Estado de Pedidos</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Fehca Pedido</th>
                            <th>Fecha Sujerida</th>
                            <th>Centro de Costo</th>
                            <th>SubPartida</th>
                            <th>Materiales</th>
                            <th>UM</th>
                            <th>Cantidad</th>
                            <th>Fecha de Orden Compra</th>
                            <th>Proveedor</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($traza as $traza)
                        <tr>
                            <td>{{$traza->tra_fecha}}</td>
                            <td>{{$traza->tra_fechasugerida}}</td>
                            <td>{{$traza->cc_id}}</td>
                            <td>{{$traza->sub_id}}</td>
                            <td><a href="{{url('cubicacion',$traza->tra_materiales)}}"><span>{!! $traza->tra_materiales!!}</span></a></td>
                            <td>{{$traza->tra_um}}</td>
                            <td>{{$traza->tra_cantidad}}</td>


                            <td>#</td>
                            <td>{{$traza->pro_id}}</td>

                        </tr>
                            @endforeach
                        </tbody>


                    </table>
                </div>
            </div>



            </tfoot>
            </table>

                <!--<div class="box-footer">
                    <label> </label>
                    <button type="submit" class="btn btn-primary">Enviar pedido</button>
                </div>-->













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