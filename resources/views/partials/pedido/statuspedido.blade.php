<!DOCTYPE html>
<html>
@include('partials.htmlheader')
<body class="skin-blue sidebar-mini">
<div class="wrapper">
    @include('partials.residente.mainheader') <!--mainheader2-->
    @include('partials.residente.sidebar') <!--sidebar2-->
    <div class="content-wrapper">
        @include('partials.contentheader')
        <section class="content">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Status de Sus Pedidos</h3>
                </div>
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
                    <table id="status" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>N°Pedido</th>
                            <th>Fecha Pedido</th>
                            <th>Fecha Critica</th>
                            <th>UM</th>
                            <th>Cantidad Pedida</th>
                            <th>Fecha OdeC</th>
                            <th>Proveedor OdeC</th>
                            <th>Cantidad OdeC</th>
                            <th>Numero OdeC</th>
                            <th>Pendiente en Obra</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($mov as $status)
                            <tr>
                                <td WIDTH="10">{{$status->tra_numero}}</td>
                                <td>{{$status->tra_fecha}}</td>
                                <td>{{$status->tra_fechasugerida}}</td>
                                <td>{{$status->tra_um}}</td>
                                <td>{{$status->tra_cantidad}}</td>
                                <td> </td><!--Falta Fecha Orden de Compra-->
                                <td>{{$status->pro_id}}</td> <!--Anexar con Tabla de proveedor-->
                                <td> </td><!--Falta Cantidad de Orden de compra-->
                                <td>{{$status->tra_nomdocumento}}</td>
                                <td> </td><!--Falta Pendiente en Obra-->
                            </tr>
                        @endforeach
                        </tfoot>
                    </table>
                </div>
            </div>
            <div>
                {!! Form::open(array('url' => 'foo/bar')) !!}
                {!! Form::close() !!}
            </div>
            @yield('main-content')
        </section>
    </div>
    @include('partials.controlsidebar')
    @include('partials.footer')
</div>
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