<!DOCTYPE html>

<html>

@include('partials.htmlheader')

<body class="skin-blue sidebar-mini">
<div class="wrapper">

    @include('partials.compras.mainheader')<!--Sin log--->

    @include('partials.compras.sidebar')<!--Sin Log-->
    <div class="content-wrapper">
        @include('partials.contentheader')
        <section class="content">
            @yield('main-content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    @include('partials.controlsidebar')
    @include('partials.footer')
</div><!-- ./wrapper -->

@include('partials.scripts')

</body>
</html>