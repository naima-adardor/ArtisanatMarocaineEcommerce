
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
      @include('admin.css')
      <style type="text/css">
      .div_center{
        text-align: center;
        padding-top:40px;
      }
      .font_size{
        font-size: 40PX;
        padding-bottom: 40px;
      }
      .text_color{
        color:black;
        padding-bottom: 20px;
      }
      label{
        display: inline-block;
        width:200px;
      }
      </style>
   </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
         
              @if (session()->has('message'))
              <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                  {{ session()->get('message') }} 
              </div>  
             @endif  
             <div class="div_center">
                <h2 CLASS="font_size"> Edit category</h2>
                </div>
                <form action="{{ url('/update_category',$data->id_categ) }}" method="POST" enctype="multipart/form-data">
              
              @csrf
              <div class="row">
                  <div class="col-md-6 mb-3">
                <label>  Promotion name :</label>
              <input type="text" name="category"  class="form-control text-light" placeholder="Write a name " required="" value="{{ $data->name_categ}}">
              </div>
              <div class="col-md-6 mb-3 ">
                <label>  Current Category Image  :</label>
                <img height="100" width="100" src="/category/{{$data->img_categ}}">
                </div>
                <div class="col-md-12 ">
                <label>  Change Category Image  :</label>
                <input  type="file"   name="image"  class="form-control" >
                </div>
                <hr><hr>  
              
             
                  
            <div class="col-md-12">
                <hr>
          <input  type="submit"  value="Edit Category" class="btn btn-primary" >
          
        </div>
              </form>
          </div>
        </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js')
     </body>
</html>
