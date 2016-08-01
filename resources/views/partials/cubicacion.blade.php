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
         <h4>Agrupación N°</h4> <h4><a><h4>     </h4></a>Partida N°</h4>

            <!---Cubicaciones y pedido de material-->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Cubicaciones de la Partida</h3>
                </div>

                <div class="box-body">
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
                        {!! Form::open(array('url' => 'cubicacion','action' => 'CubicacionController@store' )) !!}
                    @for ($i = 0; $i < 4; $i++)
                    <tr>
                        <td>{!!  Form::text('cub_material', Input::old('cub_material'), array('class' => 'form-control')) !!}</td>
                        <td>{!!  Form::text('cub_um', Input::old('cub_um'), array('class' => 'form-control')) !!}</td>
                        <td>{!!  Form::text('cub_cantidad', Input::old('cub_cantidad'), array('class' => 'form-control')) !!}</td>
                        <td>{!!  Form::text('fecha', Input::old('fecha'), array('class' => 'form-control')) !!}</td>

                        <td><input type="text" id="cub_material" class="form-control" placeholder="Material" value="{{$cubicacion->cub_material}} " disabled></td>
                        <td><input type="text" id="cub_um" class="form-control" placeholder="" value="{{$cubicacion->cub_um}} " ></td>
                        <td><input type="text" id="cub_cantidad" class="form-control" placeholder="" value="{{$cubicacion->cub_cantidad}} " ></td>
                        <td><input type="date" id="fecha" class="form-control" placeholder="Ej: 2016-05-30" value="" ></td> <!-- Se ingresa en la traza-->

                    </tr>
                    @endfor <!--Cambiar por un foreach-->
                        </tbody>

                        <tbody><!--Seccion de Nuevo Materiales-->
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




            {{--}}<div>
                <h1>Prueba de error</h1>

                {{ HTML::ul($errors->all()) }}

                {{array('url' => 'home') }}

                <div class="form-group">
                    {{ Form::label('name', 'Name') }}
                    {{ Form::text('name', Input::old('cub_id'), array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('email', 'Email') }}
                    {{ Form::email('email', Input::old('cub_material'), array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('nerd_level', 'Level') }}
                    {{ Form::select('nerd_level', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), Input::old('cub_um'), array('class' => 'form-control')) }}
                </div>

                {{ Form::submit('Crear', array('class' => 'btn btn-primary')) }}

                {{ Form::close() }}

            </div>-->--}}



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