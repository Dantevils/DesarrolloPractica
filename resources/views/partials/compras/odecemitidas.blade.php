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
                    <h3 class="box-title">OdeC Emitidas</h3>
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
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Fecha Pedido</th>
                            <th>Centro Costo</th>
                            <th>Partida</th>
                            <th>Materiales</th>
                            <th>UM</th>
                            <th>Cantidad</th>
                            <th>Fecha ODCompra</th>
                            <th>Proveedor</th>
                            <th>SOLIC Num</th>
                            <th>ODEC NUM</th>
                            <th>Cant ODEC</th>
                            <th>Pendiente</th>
                        </thead>
                        <tbody>
                        @foreach($traza as $tra_mov)
                            @if($tra_mov->tra_nomdocumento != NULL)
                                <tr>
                                    <td>{{$tra_mov->tra_fechasugerida}}</td>
                                    <td>{{$cc->find($tra_mov->cc_id)->cc_nombre}}</td>
                                    <td>{{$partida->find($tra_mov->par_id)->par_nombre}}</td>
                                    <td>{{$tra_mov->tra_materiales}}</td>
                                    <td>{{$tra_mov->tra_um}}</td>
                                    <td>{{$tra_mov->tra_cantidad}}</td>
                                    <td>{{$tra_mov->tra_fecha}}</td>
                                    <td>{{$proveedor->find($tra_mov->pro_id)->pro_nombre}}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                        @endif
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