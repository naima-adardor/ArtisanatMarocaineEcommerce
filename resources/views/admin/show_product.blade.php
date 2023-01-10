<!DOCTYPE html>
<html lang="en">
  <head>
      @include('admin.css')
      <style type="text/css">
      .center{
          margin:auto;
          width:100%;
          border:1PX solid gray;
          text-align: center;
          margin-top: 40px;
      }
      .h2_font{
text-align:center;
font-size:40px;  }
.imgg{
  width:100px;
  height:100px;
}
.tr{background: rgb(38, 38, 75);

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
            <div class="content-wrapper"> @if (session()->has('message'))
              <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                  {{ session()->get('message') }}
              </div>
             @endif<div class="center">

              <div class="card">

<div class="card-header">

<h2 class="h2_font">
    All product
</h2>
</div>

<table class=" table-bordered table-striped">
  <thead>
    <tr class="tr">
        <th> Product designation </th>
        <th> Description</th>
        <th>Quantity</th>
        <th>Category</th>
        <th>Price</th>
        <th>Old price</th>
        <th>Available</th>
        <th>Product Image</th>
        <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $data)

    <tr>
        <td>{{$data->designation}}</td>
        <td>{{$data->description}}</td>
        <td>{{$data->quantity}}</td>
        <td>{{$data->category->name_categ}}</td>
        <td>${{$data->price}}</td>
        <td>${{$data->old_price}}</td>
        <td>
@if($data->quantity>0)
<i class="fa fa-check text-success"></i>
@else
<i class="fa fa-times text-danger"></i>
@endif

        </td>
        <td>
        <img class="imgg"  src ="/product/{{$data->image}}" >
        </td>
        <td>
         <a  onclick="return confirm('Are You Sure To Delete The Product {{ $data->designation }}')"  class="btn btn-sm btn-danger mr-2" href="{{ url('delete_product',$data->id_product) }}"><i class="fa fa-trash"></i></a>
         <a class="btn btn-sm btn-warning mr-2" href="{{ url('edit_product',$data->id_product) }}"><i class="fa fa-edit"></i></a>
        </td>

        </tr>

    @endforeach
</tbody>

</table>
{{-- <div class="d-flex justify-content-center">
  {!! $data->links()!!}
</div>  --}}
    </div> </div>
    </div>
  </div></div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js')
     </body>
</html>
