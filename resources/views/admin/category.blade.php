<!DOCTYPE html>
<html lang="en">
  <head>
      @include('admin.css')
      <style type="text/css">
      .div_center
      {
          text-align:center;
          padding-top:40px;
      }
      .h2_font{
          font-size:30px;
          padding-bottom:30px;
      }
      .input_color{
          color:black;
          height: 42px;
      }
      .center{
          margin: auto;
          width: 50%;
          text-align: center;
          margin-top:30px;
          border: 1px solid gray;
      }
      .tr{background: rgb(130, 130, 156);
       
        

}
      </style>
      <link  rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
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
               <div  class="center">  
              <div class="card">          

            
              
                <div class="card-header">
       
             





<h2 class="h2_font">
    Add Category
</h2>
                
<form action="{{ url('/add_category') }}" method="POST" enctype="multipart/form-data">
   @csrf 
   <div class="row">
   <div class="col-md-4 mb-3 ">
    <input  class="form-control text-light" type="text" name="category"  placeholder="write category name" required="" value="">
   </div>
    <div class="col-md-5 mb-3 ">
      
      <input  type="file"   name="image"  class="form-control" required="">
      </div>
      <div class="col-md-3">
    <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
      </div>
    </div>
</form> 
              
 
             
    
  <hr>
    <div style="margin-left:60px">  
    <table  class="table-bordered table-striped">

        <thead>
    <tr class="tr">
        <th> Category Name </th>
        
        <th> Category image </th>
        
        <th> Action </th>
    </tr>
        </thead>
    @foreach ($data as $data)
    
    <tbody>
    <tr>
    <td> {{$data->name_categ}}</td>
    <td>
        <img  height="100" width="100" src ="/category/{{$data->img_categ}}" >
        </td>
    <td> <a  onclick="return confirm('Are You Sure To Delete The Category {{ $data->name_categ}}')" class="btn btn-sm btn-danger mr-2" href="{{ url('delete_category',$data->id_categ) }}"><i class="fa fa-trash"></i></a>
    <a class="btn btn-sm btn-warning mr-2"   href="{{ url('edit_category',$data->id_categ) }}"><i class="fa fa-edit"></i></a></td>
    </td>
    </tr>
   </tbody>
    @endforeach
</table>
    </div>
</div>
    </div></div>
</div></div>
     </body>
</html>