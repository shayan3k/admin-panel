@include('admin.partials.head')

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        @include('admin.partials.navbar')

        @include('admin.partials.mainSideBar')


        @include('admin.contents.if-all')

        @include('admin.partials.footer')



    </div>
    <!-- /.tab-pane -->

    @include('admin.partials.controlSidebarBg')

    @include('admin.partials.scripts')

</body>

</html>
