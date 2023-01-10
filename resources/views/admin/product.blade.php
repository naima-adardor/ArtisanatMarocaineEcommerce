<!DOCTYPE html>
<html lang="en">
  <head>
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
             @endif   <div class="div_center">
              <h2 CLASS="font_size"> Add product</h2>
              </div>
              <form action="{{ url('/add_product') }}" method="POST" enctype="multipart/form-data">
            
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
              <label>  Product Designation :</label>
            <input type="text" name="designation"  class="form-control text-light" placeholder="Write a designation" required="">
            </div>
            
            <div class="col-md-6 mb-3">
              <label>  Product Quantity :</label>
            <input  type="number"  min="0" name="quantity"  class="form-control text-light" placeholder="Write a quantity" required="">
            </div>
            <div class="col-md-12 mb-3">
              <label>  Product Description :</label>
            <textarea type="text" rows="3" name="description" class="form-control text-light" placeholder="Write a description" required=""></textarea>
            </div>
            <div class="col-md-6 mb-3">
              <label>  Product Price :</label>
            <input  type="number"  min="0" name="price" class="form-control text-light" placeholder="Write a price"  required="">
            </div>
            <div class="col-md-6 mb-3">
              <label>  Product Old Price :</label>
            <input type="number"  min="0" name="oldprice" class="form-control text-light" placeholder="Write a oldprice" required="" >
            </div>
            <div class="col-md-6 mb-3">
              <label>  Category :</label>
            <select  name="category" required="" class="form-control text-light"> 
            <option value="" selected>Add a category here </option>
              @foreach ($category as $category)
              <option value="{{ $category->id_categ }}" > {{ $category->name_categ }} </option>
               @endforeach
              </select>
              </div>
              <div class="col-md-6 mb-3">
                <label>  Promotion :</label>
              <select  name="promotion"  class="form-control text-light"> 
              <option value="" selected>Add a promotion here </option>
                
              @foreach ($promotion as $promotion)
              <option value="{{$promotion->id_promo}}" > {{ $promotion->designation}} </option>
               @endforeach               
                </select>
                </div>
              <div class="col-md-6 mb-3 ">
              <label>  Product Image Here :</label>
            <input  type="file"   name="image"  class="form-control" required="">
            </div>
            <div class="col-md-12">
          <input  type="submit"  value="Add Product" class="btn btn-primary" >
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