<!DOCTYPE html>

<html>

@include('partials.htmlheader')

<body class="skin-blue sidebar-mini">
<div class="wrapper">

    @include('partials.mainheader2')<!--Sin log--->

    @include('partials.sidebar2')<!--Sin Log-->

            <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @include('partials.contentheader')

                <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('main-content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('partials.controlsidebar')

    @include('partials.footer')

</div><!-- ./wrapper -->

@include('partials.scripts')

</body>
</html>