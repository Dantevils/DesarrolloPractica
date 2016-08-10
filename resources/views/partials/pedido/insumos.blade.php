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

 <h5> <strong>Agrupación N°: </strong>{{$agrupacion->agr_nombre}}</h5> <h5><a><h5></h5></a> <strong>Partida N°:</strong>{{$partida->par_nombre}} </h5>


<div class="row">
                    <div class="col-sm-3 col-xs-6">
                        <div class="description-block border-right">
                            <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> {{$ss= (($partida->par_precio/$partida->par_pptovta)*100)%100}}%</span>
                            <h5 class="description-header">$ {{$partida->par_precio}}</h5>
                            <span class="description-text">OCUPADO</span>
                        </div>

                   </div>

                    <div class="col-sm-3 col-xs-6">
                        <div class="description-block border-right">
                            <span class="description-percentage text-green"><i class="fa fa-caret-left"></i> 100%</span>
                            <h5 class="description-header">$ {{$partida->par_pptovta}}</h5>
                            <span class="description-text">PRESUPUESTO</span>
                        </div>
                    </div>
                </div>

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
                            <th>Cantidad PPTO</th><!--variar-->
                            <th>Fecha Critica</th>
                        </tr>
                        </thead>

                        <tbody>

                         @foreach($insumos as $insumo)
                            @if($insumo->ins_tipo !='MOD')
                                <tr>
                                    <td>{!!  Form::text('ins_material[]', $insumo->ins_material,array('class' => 'form-control'),Input::old('ins_cantidad'))!!}</td>
                                    <td WIDTH="90">{!!  Form::text('ins_um[]',$insumo->ins_um, array('class' => 'form-control'), Input::old('ins_um')) !!}</td>
                                    <td WIDTH="90">{!!  Form::text('ins_cantidad[]', Input::old('ins_cantidad'), array('class' => 'form-control','placeholder'=>$insumo->ins_cantidad)) !!}</td>
                                    <td WIDTH="60"><strong>  {{ $insumo->ins_cantidad }}</strong></td>
                                    <td WIDTH="200">{!!  Form::text('fecha[]',\Carbon\Carbon::today()->addWeek(1)->toDateString(),array('class' => 'form-control pull-right','placeholder'=>\Carbon\Carbon::today()->toFormattedDateString() )) !!}</td>
                                </tr>
                                @endif
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
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
                {
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function (start, end) {
                    $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                }
        );

        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        });

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
            showInputs: false
        });
    });
</script>


<!--<script>
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
</script>-->



</html>