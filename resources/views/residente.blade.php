<!DOCTYPE html>

<html>

@include('partials.htmlheader')

<body class="skin-blue sidebar-mini">
<div class="wrapper">

    @include('partials.residente.mainheader')<!--Sin log--->

    @include('partials.residente.sidebar')<!--Sin Log-->
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