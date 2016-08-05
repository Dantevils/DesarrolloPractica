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
                    <h3 class="box-title">Nuevo Pedido</h3>
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
                            <th>ID</th>
                            <th>Partida</th>
                            <th>Precio</th>
                            <th>Presupuesto</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Termino</th>
                            <th>UM</th>
                            <th>Cantidad</th>
                            <th>Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                       {{--@foreach($partida as $partida)
                            <tr>
                                <td><a href="{{url('insumos',$partida->par_id  )}}"><span>{!! $partida->par_id!!}</span></a></td>
                                <td>{{$partida->par_nombre}}</td>
                                <td><strong>$</strong>{{$partida->par_precio}}</td>
                                <td><strong>$</strong>{{$partida->par_pptovta}}</td>
                                <td>{{$partida->par_fechaini}}</td>
                                <td>{{$partida->par_fechaini}}</td> {{--$subpartida->sub_fechaini-}}
                                <td>{{$partida->par_um}}</td>
                                <td>{{$partida->par_cantidad}}</td>
                                <td><a href="{{url('insumos',$partida->par_id)}}"><span class="label label-success">Ir</span></a></td>
                            </tr>
                        @endforeach--}}
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