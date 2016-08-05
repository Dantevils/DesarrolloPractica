<!DOCTYPE html>
<html>
@include('partials.htmlheader')
<body class="skin-blue sidebar-mini">
<div class="wrapper">
    @include('partials.residente.mainheader')
    @include('partials.residente.sidebar')

    <div class="content-wrapper">
        @include('partials.contentheader')
                <!-- Main content -->
        <section class="content">

         <h5> <strong>Agrupación N°: </strong>{{$agrupacion->agr_nombre}}</h5> <h5><a><h5>     </h5></a> <strong>Partida N°:</strong>{{$partida->par_nombre}}</h5>

            <!---Cubicaciones y pedido de material-->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Insumos de la Partida</h3>
                </div>
<!--{url('insumos',$partida->par_id)    'url' => 'lala','action'-->

                <div class="box-body"> {!! Form::open(array('url' => url('lala',$partida->par_id),'action' => 'InsumoController@store' )) !!}
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Material</th>
                            <th>Unidad</th>
                            <th>Cantidad</th>
                            <th> </th><!--variar-->
                            <th>Fecha Critica</th>
                        </tr>
                        </thead>

                        <tbody>

                         @foreach($insumos as $insumo)

                                <tr>
                                    <td>{!!  Form::text('ins_material[]', $insumo->ins_material,array('class' => 'form-control'),Input::old('ins_cantidad'))!!}</td>
                                    <td>{!!  Form::text('ins_um[]',$insumo->ins_um, array('class' => 'form-control'), Input::old('ins_um')) !!}</td>
                                    <td WIDTH="90">{!!  Form::text('ins_cantidad[]', Input::old('ins_cantidad'), array('class' => 'form-control','placeholder'=>$insumo->ins_cantidad)) !!}</td>
                                    <td WIDTH="60"><strong>  {{ $insumo->ins_cantidad }}</strong></td>
                                    <td>{!!  Form::text('fecha[]', Input::old('fecha'), array('class' => 'form-control','placeholder'=>\Carbon\Carbon::today() )) !!}</td>
                                </tr>

                            @endforeach
                        @for ($i = 0; $i < 3; $i++)
                            <tr>
                                <td>{!!  Form::text('extra_material[]', Input::old('extra_material'), array('class' => 'form-control')) !!}</td>
                                <td>{!!  Form::text('extra_um[]', Input::old('extra_um'), array('class' => 'form-control')) !!}</td>
                                <td>{!!  Form::text('extra_cantidad[]', Input::old('extra_cantidad'), array('class' => 'form-control')) !!}</td>
                                <td></td>
                                <td>{!!  Form::date('extra_fecha[]', Input::old('extra_fecha'), array('class' => 'form-control')) !!}</td>
                            </tr>
                        @endfor
                        </tbody>

                    </table>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Enviar Pedido</button>
                </div> {!! Form::close() !!}
            </div>

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