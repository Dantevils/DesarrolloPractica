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
<h4>Partida N°</h4> <h4><a><h4>     </h4></a>Sub Partida N°</h4>

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Cubicaciones de la SubPartida</h3>
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
                                <th>Material</th>
                                <th>UM</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Total</th>
                                <th>Tipo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$cubicacion->cub_id}}</td>
                                <td>{{$cubicacion->cub_material}}</td>
                                <td>{{$cubicacion->cub_um}}</td>
                                <td>{{$cubicacion->cub_cantidad}}</td>
                                <td>{{$cubicacion->cub_precio}}</td>
                                <td>{{$cubicacion->cub_total}}</td>
                                <td>{{$cubicacion->cub_tipo}}</td>
                            </tr>
                        </tbody>

                   <!-- foreach($cubicacion as $cubicacion)
                        <tr>
                            <td>{$cubicacion->cub_id}}</td>
                            <td>{$cubicacion->cub_material}}</td>
                            <td>{$cubicacion->cub_um}}</td>
                            <td>{$cubicacion->cub_cantidad}}</td>
                            <td>{$cubicacion->cub_precio}}</td>
                            <td>{$cubicacion->cub_total}}</td>
                            <td>{$cubicacion->cub_tipo}}</td>
                            <!--<td><a href="{url('prueba')}}"><span class="label label-success">Ir</span></a></td>
                             <td>{}}</td>-->
                                <!-- href="{$subpartida->sub_id}}<td><span class="label label-warning">Pending</span></td>
                                 <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                         </tr>
                        endforeach-->
                    </table>
                </div>
            </div>
            <!--Formulario de pedidos-->
            <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Formulario Pedido Insumos</h3>
                    </div>
                    <div class="box-body">
                        @for ($i = 0; $i < 4; $i++)

                        <div class="row">
                            <div class="col-xs-2">
                                <label>Material</label>
                                <input type="text" class="form-control" placeholder="Material" value="{{$cubicacion->cub_material}} " disabled>
                            </div>

                            <div class="col-xs-2">
                                <label>Unidad</label>
                                <input type="text" class="form-control" placeholder="Unidad" value="{{$cubicacion->cub_um}}">
                            </div>

                            <div class="col-xs-2">
                                <label>Cantidad</label>
                                <input type="text" class="form-control" placeholder="Cantidad" value="{{$cubicacion->cub_cantidad}}">

                            </div>

                            <div class="col-xs-2">
                                <label>Precio</label>
                                <input type="text" class="form-control" placeholder="Precio" value="{{$cubicacion->cub_precio}}">
                            </div>

                            <div class="col-xs-2">
                                <label>Material</label>
                                <input type="text" class="form-control" placeholder="" value="">
                            </div>
                            <div class="col-xs-2">
                                <label>Ocupado</label>
                                <input type="text" class="form-control" placeholder="" value="">
                            </div>
                            <div class="col-xs-2">
                                <label>Nueva Cantidad</label>
                                <input type="text" class="form-control" placeholder="" value="">
                            </div>
                            <div class="col-xs-2">
                                <label>Nueva UM</label>
                                <input type="text" class="form-control" placeholder="" value="">
                            </div>
                            <div class="col-xs-2">
                                <label>Nuevo Precio</label>
                                <input type="text" class="form-control" placeholder="" value="">
                            </div>
                            <div class="col-xs-2">
                                <label>Fecha Critica</label>
                                <input type="text" class="form-control" placeholder="" value="">
                            </div>
                            <div class="col-xs-2">
                                <label>Nuevo Material</label>
                                <input type="text" class="form-control" placeholder="" value="">
                            </div>

                        </div>
                        @endfor


                    </div>
                <div class="box-footer">
                    <label> </label>
                    <button type="submit" class="btn btn-primary">Enviar Pedido</button>
                </div>

                </div>

                        </tfoot>
                    </table>
















            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Cubicaciones de la SubPartida</h3>
                </div>

                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Material</th>
                            <th>Unidad</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Tipo</th>
                            <th>Ocupado</th>
                            <th>Nueva Cantidad</th>
                            <th>Nueva UM</th>
                            <th>Nuevo Precio</th>
                            <th>Fecha Critica</th>
                            <th>Nuevo Material</th>
                        </tr>
                        </thead>
                        <tbody>
                    @for ($i = 0; $i < 4; $i++)
                        <tr>
                            <td><input type="text" class="form-control" placeholder="Material" value="{{$cubicacion->cub_material}} " disabled></td>
                            <td><input type="text" class="form-control" placeholder="" value="{{$cubicacion->cub_um}} "disabled ></td>
                            <td><input type="text" class="form-control" placeholder="" value="{{$cubicacion->cub_cantidad}} " ></td>
                            <td><input type="text" class="form-control" placeholder="" value="{{$cubicacion->cub_precio}} " ></td>
                            <td><input type="text" class="form-control" placeholder="" value="{{$cubicacion->cub_tipo}} " ></td>
                            <td><input type="text" class="form-control" placeholder="" value=" " ></td>
                            <td><input type="text" class="form-control" placeholder="" value=" " ></td>
                            <td><input type="text" class="form-control" placeholder="" value=" " ></td>
                            <td><input type="text" class="form-control" placeholder="" value=" " ></td>
                            <td><input type="text" class="form-control" placeholder="" value=" " ></td>
                            <td><input type="text" class="form-control" placeholder="" value=" " ></td>
                        </tr>
                    @endfor <!--Cambiar por un foreach-->

                        </tbody>

                        <tbody>
                        @for ($i = 0; $i < 3; $i++)
                            <tr>
                                <td><input type="text" class="form-control" placeholder="" value=" " ></td>
                                <td><input type="text" class="form-control" placeholder="" value=" " ></td>
                                <td><input type="text" class="form-control" placeholder="" value=" " ></td>
                                <td><input type="text" class="form-control" placeholder="" value=" " ></td>
                                <td><input type="text" class="form-control" placeholder="" value=" " ></td>
                                <td><input type="text" class="form-control" placeholder="" value=" " ></td>
                                <td><input type="text" class="form-control" placeholder="" value=" " ></td>
                                <td><input type="text" class="form-control" placeholder="" value=" " ></td>
                                <td><input type="text" class="form-control" placeholder="" value=" " ></td>
                                <td><input type="text" class="form-control" placeholder="" value=" " ></td>
                                <td><input type="text" class="form-control" placeholder="" value=" " ></td>
                            </tr>
                            @endfor <!--Cambiar por un foreach-->

                        </tbody>





                    </table>
                </div>
                <div class="box-footer">
                    <label> </label>
                    <button type="submit" class="btn btn-primary">Enviar Pedido</button>
                </div>
            </div>









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