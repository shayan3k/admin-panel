@include('admin.partials.head')


  @include('admin.partials.navbar')

  <!-- Left side column. contains the logo and sidebar -->
  @include('admin.partials.mainSideBar')


  @include('admin.contents.modals')

  @include('admin.partials.footer')

 

 <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

{{--   MISSING SOME JS DEPANDANCIES -> USED THE MAIN SCRIPTS INSTEAD -> MAIN SCRIPT : SCRIPTS2.BLADE.PHP  --}}
@include('admin.partials.scripts')

</body>
</html>
