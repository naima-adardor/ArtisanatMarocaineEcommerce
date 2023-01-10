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
    All promotions
</h2>
</div>

<table class=" table-bordered table-striped">
  <thead>
    <tr class="tr">
        <th> Promotion name </th>
        <th>Discount</th>
        <th>Start date</th>
        <th>End date</th>
        <th>Promotion image</th>
        <th>Available</th>
      
        <th>Action</th>
    </tr>
  </thead> 
  <tbody>
    @foreach ($promotion as $promotion)
   
    <tr>
        <td>{{$promotion->designation}}</td>
       
        <td>{{$promotion->discount}} %</td>
        <td>{{$promotion->dateD}}</td>
        <td>{{$promotion->dateF}}</td>
         <td>
        <img class="imgg"  src ="/promotion/{{$promotion->img_promo}}" >
        </td>
        <td>
@if($promotion->dateF>now())
<i class="fa fa-check text-success"></i>
@else 
<i class="fa fa-times text-danger"></i>
@endif

        </td>
       
        <td> 
         <a  onclick="return confirm('Are You Sure To Delete The Promotion {{ $promotion->designation }}')"  class="btn btn-sm btn-danger mr-2" href="{{ url('delete_promotion',$promotion->id_promo) }}"><i class="fa fa-trash"></i></a>
         <a class="btn btn-sm btn-warning mr-2" href="{{ url('edit_promotion',$promotion->id_promo) }}"><i class="fa fa-edit"></i></a>
        </td>
   
        </tr>
    
    @endforeach
</tbody>

</table>
    </div> </div>
    </div>
  </div></div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js')
     </body>
</html>