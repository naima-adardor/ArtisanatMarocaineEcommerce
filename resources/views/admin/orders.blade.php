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

      <div class="main-panel">
        <div class="content-wrapper">

          <div class="row">
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0" style="margin-left: 25PX; " >Products</h3>
                        <p class="text-success ml-2 mb-0 font-weight-medium" style="font-size:20px">{{ $products->count() }}</p>
                      </div>
                    </div>
                    <div class="col-9" style="margin-left: 80PX;margin-top:30px;font-size:25px">

                      <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0" style="margin-left: 25PX; " >Orders</h3>
                        <p class="text-success ml-2 mb-0 font-weight-medium" style="font-size:20px">{{ $orders->count() }}</p>
                      </div>
                    </div>
                    <div class="col-9" style="margin-left: 80PX;margin-top:30px;font-size:25px">

                      <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0" >Registred Users</h3>
                        <p class="text-success ml-2 mb-0 font-weight-medium" style="font-size:20px">{{ $users->count() }}</p>
                      </div>
                    </div>
                    <div class="col-9" style="margin-left: 80PX;font-size:25px">

                      <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0"  style="margin-left: 25PX; ">Categories</h3>
                        <p class="text-success ml-2 mb-0 font-weight-medium" style="font-size:20px">{{ $categories->count() }}</p>
                      </div>
                    </div>
                    <div class="col-9" style="margin-left: 80PX;margin-top:30px;font-size:25px">

                      <i class="fa fa-cubes" aria-hidden="true"></i>
                    </div>
                  </div>

                </div>
              </div>
            </div>




        <!-- partial -->
        {{-- <div class="main-panel"> --}}
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
    All orders
</h2>
</div>

<table class=" table-bordered table-striped">
  <thead>
    <tr class="tr">
        <th> Id </th>
        <th> Client</th>
        {{-- <th>Product</th>
        <th>Quantity</th>
        <th>Price</th> --}}
        <th>Total</th>
        <th>Order date</th>
        <th>Payé</th>
        <th>Livrée</th>

        <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($order as $order)

    <tr>
        <td>{{$order->id_order}}</td>
        <td>{{$order->detailuser->lastName}}
          {{$order->detailuser->firstName}}
        </td>
        {{-- <td>{{$detail ->product->designation}}</td>
        <td>{{$detail ->quantity}}</td> --}}
        <td>{{$order->total}} DH</td>
        <td>{{$order->created_at}} </td>
        <td>
            @if ($order->status)
            <i class="fa fa-check text-success"></i>
           @else
           <i class="fa fa-times text-danger"></i>
           @endif
        </td>
        <td>
@if($order->delivred)
<i class="fa fa-check text-success"></i>
@else
<i class="fa fa-times text-danger"></i>
@endif

        </td>{{--
        <td>
        <img class="imgg"  src ="/product/{{$data->image}}" >
        </td>--}}
        <td>
         {{-- <a  onclick="return confirm('Are You Sure To Delete The order{{ $order->id_order }} ')"  class="btn btn-sm btn-danger mr-2" href="{{ url('delete_order',$order->id_order) }}"><i class="fa fa-trash"></i></a> --}}
         <a class="btn btn-sm btn-success" href="{{ url('edit_order',$order->id_order) }}"><i class="fa fa-check"></i></a>
         <a class="btn btn-sm btn-dark" href="{{ url('view_detail',$order->id_order) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>

        </td>

        </tr>

      @endforeach
</tbody>

</table>
{{-- <div class="d-flex justify-content-center">
  {!! $order->links()!!}
</div>  --}}
    </div> </div>
    </div>
  </div></div>
{{-- </div> --}}

</div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js')
     </body>
</html>
