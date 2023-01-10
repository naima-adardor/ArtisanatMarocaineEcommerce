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
    Registred users
</h2>
</div>

<table class=" table-bordered table-striped">
  <thead>
    <tr class="tr">
        <th> Id </th>
        <th> Name</th>
        {{-- <th>Product</th>
        <th>Quantity</th>
        <th>Price</th> --}}
        <th>Email</th>
        
    
    </tr>
  </thead> 
  <tbody>
    @foreach ($user as $user)
  
    <tr>
    
        <td>{{$user->id_user}}</td>
        <td>{{$user->name}}</td>
        {{-- <td>{{$detail ->product->designation}}</td>
        <td>{{$detail ->quantity}}</td> --}}
        <td>{{$user->email}} </td>
     
       
    {{--  
        <td>
        <img class="imgg"  src ="/product/{{$data->image}}" >
        </td>--}}
        
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
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js')
     </body>
</html>