<!DOCTYPE html>
<html lang="en">
  <head>
      @include('admin.css')
   </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     {{-- @include('admin.sidebar') --}}
      <!-- partial -->
      {{-- @include('admin.header') --}}
        <!-- partial -->
     @include('admin.orders')
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js')
    
     </body>
</html>