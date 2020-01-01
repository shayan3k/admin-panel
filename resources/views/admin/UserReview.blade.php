@include('admin.partials.head')

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        @include('admin.partials.navbar')

        @include('admin.partials.mainSideBar')


        @include('admin.contents.userreview')


        @include('admin.partials.footer')



        @include('admin.partials.scripts')


        <script>
            $(document).ready(function () {
        $('#userReview tr button').click(function () {
            $('.edit').css('display','none');
            $(this).parent().parent().next().fadeIn().css('display','default');
                                                     })
                                            })
        </script>
</body>

</html>
