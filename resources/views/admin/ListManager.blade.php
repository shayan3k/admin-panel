{{-- Problems in Js form in this file
     --}}

@include('admin.partials.head')

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        @include('admin.partials.navbar')

        @include('admin.partials.mainSideBar')


        @include('admin.contents.listmanager')

        @include('admin.partials.footer')


        @include('admin.partials.controlSideBar')

        @include('admin.partials.scripts')



        <script>
            $(document).ready(function(){
          $('.hiddenValue').hide();
          $('.addNew').on('click',function(){
            $('.hiddenValue').show();

          });

          $('#submit_data').on('click',function(){
            $('.hiddenValue').hide();

          })
        })
        $(function() {

          $('#makeEditable').SetEditable({ $addButton: $('#but_add')});

          $('#submit_data').on('click',function() {
            var td = TableToCSV('makeEditable', ',');
            console.log(td);
            var ar_lines = td.split("\n");
            var each_data_value = [];
            for(i=0;i<ar_lines.length;i++)
            {
              each_data_value[i] = ar_lines[i].split(",");
            }

            for(i=0;i<each_data_value.length;i++)
            {
              if(each_data_value[i]>1)
              {
                console.log(each_data_value[i][2]);
                console.log(each_data_value[i].length);
              }

            }

          });
        });

        </script>
        <!--// You Can use-->
        <script type="text/javascript">
            var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

        </script>
</body>

</html>
