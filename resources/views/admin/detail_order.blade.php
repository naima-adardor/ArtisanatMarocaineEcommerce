<!DOCTYPE html>
<html lang="en">
  <head> <base href="/public">
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
            <div class="content-wrapper">
                 @if (session()->has('message'))
              <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                  {{ session()->get('message') }}
              </div>
             @endif<div class="center">

              <div class="card">

<div class="card-header">




<h2 class="h2_font">
 All items
</h2>

</div>
<table class=" table-bordered table-striped">
  <thead>
    <tr class="tr">
        <th> product name</th>
        <th> product category</th>
        {{-- <th>Product</th>
        <th>Quantity</th>
        <th>Price</th> --}}
        <th>Quantity</th>
        <th>price</th>
         <th>Total</th>
   </tr>
  </thead>
  <tbody>

   @foreach ($order->orderitems as  $detaill)
    <tr>
        <td>{{$detaill->product->designation}}</td>
        <td>{{$detaill->product->category->name_categ}}</td>

        <td>{{$detaill->quatity}}</td>
        <td>${{$detaill->price}}</td>
        <td>
            ${{$detaill->price*$detaill->quatity}}
        </td>
      {{--
        <td>
        <img class="imgg"  src ="/product/{{$data->image}}" >
        </td>--}}


        </tr>

    @endforeach
</tbody>

</table>


{{-- <div class="d-flex justify-content-center">
  {!! $data->links()!!}
</div> --}}
    </div> </div>
    </div>
  </div></div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js')
     </body>
</html>
