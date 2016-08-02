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
         <h4>Agrupación N°</h4> <h4><a><h4>     </h4></a>Partida N°</h4>

            <!---Cubicaciones y pedido de material-->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Cubicaciones de la Partida</h3>
                </div>

                <div class="box-body"> {!! Form::open(array('url' => 'cubicacion','action' => 'CubicacionController@store' )) !!}
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Material</th>
                            <th>Unidad</th>
                            <th>Cantidad</th>
                            <th>Fecha Critica</th>
                        </tr>
                        </thead>

                        <tbody>


{{--$cub--}}
{{$data}}

{{--  @foreach ($tiene as $tienes)
                      {{-- @if($tienes->sub_id)

                           @endif
<li>{{$tienes->sub_id}}</li>
<li>{{-- $cubicacion->tra_odecerp</li>
@endforeach--}}

                      {{--  @foreach($cubicacion as $cubicacions)
                            <tr>
                                <td>{!!  Form::text('cub_material', $cubicacion->cub_material ,Input::old('cub_material'), array('class' => 'form-control')) !!}</td>
                                <td>{!!  Form::text('cub_um',$cubicacion->cub_um, Input::old('cub_um'), array('class' => 'form-control')) !!}</td>
                                <td>{!!  Form::text('cub_cantidad',$cubicacion->cub_cantidad, Input::old('cub_cantidad'), array('class' => 'form-control')) !!}</td>
                                <td>{!!  Form::text('fecha', Input::old('fecha'), array('class' => 'form-control','placeholder'=>'EJ: 2016-05-30')) !!}</td>
                            </tr>
                        @endforeach--}}

                        @for ($i = 0; $i < 3; $i++)
                            <tr>
                                <td>{!!  Form::text('extra_material', Input::old('extra_material'), array('class' => 'form-control')) !!}</td>
                                <td>{!!  Form::text('extra_um', Input::old('extra_um'), array('class' => 'form-control')) !!}</td>
                                <td>{!!  Form::text('extra_cantidad', Input::old('extra_cantidad'), array('class' => 'form-control')) !!}</td>
                                <td>{!!  Form::date('extra_fecha', Input::old('extra_fecha'), array('class' => 'form-control')) !!}</td>
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