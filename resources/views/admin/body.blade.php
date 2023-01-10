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
      </div>
     
        </div>
      </div>
       

      