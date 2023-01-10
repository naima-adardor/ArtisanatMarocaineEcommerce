<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="{{ route('admin') }}"><img src="assets/images/ZZZZ.png" alt="logo" /><span style="font-size: x-large;font-family: 'Sansita Swashed', cursive;color:rgb(188, 187, 186);"><b>Tazerzit</b></span>
      </a>
      <a class="sidebar-brand brand-logo-mini" href="{{ route('admin') }}"><img src="assets/images/ZZZZ.png" alt="logo" /></a>
    </div>
    <ul class="nav">
      {{-- <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">Admin1</h5>
              <span>Admin</span>
            </div>
          </div>
          <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
          <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-settings text-primary"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-onepassword  text-info"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
              </div>
            </a>
            
        </div>
      </li>--}}
      <li class="nav-item nav-category">
        <span class="nav-link">----------------</span>
      </li> 
      <hr>
      
      <li class="nav-item {{ Request::is('admin') ?'active':'' }} ">
        <a class="nav-link" href="{{ route('admin') }}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
          </span>
          <span class="menu-title">Product</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item {{ Request::is('/view_product') ?'active':'' }}"> <a class="nav-link" href="{{ url('/view_product') }}">Add Products</a></li>
            <li class="nav-item {{ Request::is('/show_product') ?'active':'' }}"> <a class="nav-link" href="{{ url('/show_product') }}">Show Products</a></li>
        
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items {{ Request::is('view_category')?'active':'' }}">
        <a class="nav-link" href="{{ url('view_category') }}">
          <span class="menu-icon">
            <i class="fa fa-cubes" aria-hidden="true"></i>
          </span>
          <span class="menu-title">Category</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="fa fa-bolt" aria-hidden="true"></i>
          </span>
          <span class="menu-title">Promotion</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item {{ Request::is('/view_promotion')?'active':'' }}"> <a class="nav-link" href="{{ url('/view_promotion') }}">Add Promotion</a></li>
            <li class="nav-item {{ Request::is('/show_promotion')?'active':'' }}"> <a class="nav-link" href="{{ url('/show_promotion') }}">Show Promotions</a></li>
         </ul>
        </div>
      </li>
      {{-- <li class="nav-item menu-items {{ Request::is('/show_orders')?'active':'' }} ">
        <a class="nav-link" href="{{ url('show_orders') }}">
          <span class="menu-icon">
            <i class="fa fa-credit-card" aria-hidden="true"></i>
          </span>
          <span class="menu-title">Orders</span>
        </a>
      </li> --}}
      <li class="nav-item menu-items{{ Request::is('/show_users')?'active':'' }} ">
        <a class="nav-link" href="{{ url('show_users') }}">
          <span class="menu-icon">
            <i class="fa fa-users" aria-hidden="true"></i>
          </span>
          <span class="menu-title">Users</span>
        </a>
      </li>
      
    </ul>
  </nav>