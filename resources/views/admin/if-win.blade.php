@include('admin.partials.head')

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        @include('admin.partials.navbar')

        <!-- Left side column. contains the logo and sidebar -->
        @include('admin.partials.mainSideBar')



        @include('admin.contents.if-win')


        @include('admin.partials.footer')


    </div>
    <!-- /.tab-pane -->

    @include('admin.partials.controlSideBarBg')


    @include('admin.partials.scripts')

</body>

</html>
