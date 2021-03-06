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
                    <h3 class="box-title">Status de Pedido</h3>
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
                            <th>N° Pedido</th>
                            <th>Fecha Pedido</th>
                            <th>Fecha Critica</th>
                            <th>Centro de Costo</th>
                            <th>Partida</th>
                            <th>Materiales</th>
                            <th>UM</th>
                            <th>Cantidad</th>


                        </tr>
                        </thead>
                        <tbody>
                       @foreach($traza as $tra_mov)
                           @if($tra_mov->tra_nomdocumento == NULL)
                            <tr>
                                <td>{{$tra_mov->tra_numero}}</td>
                                <td>{{$tra_mov->tra_fecha}}</td>
                                <td>{{$tra_mov->tra_fechasugerida}}</td>
                                <td>{{$tra_mov->cc_id}}</td>
                                <td>{{$partida->find($tra_mov->par_id)->par_nombre}}</td>
                                <td>{{$tra_mov->tra_materiales}}</td>
                                <td>{{$tra_mov->tra_um}}</td>
                                <td>{{$tra_mov->tra_cantidad}}</td>
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