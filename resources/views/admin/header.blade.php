<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
        <a class="navbar-brand brand-logo-mini" href="/body"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav w-100">
          <li class="nav-item w-100">
            <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search" action="{{ url('show_product') }}" method="GET">
              @csrf
              <input type="text" class="form-control" name="product_name" placeholder="Search products">
            </form>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
        
          
         
       
    
    

    
          {{-- <div class="wrap-icon-header flex-w flex-r-m">
            <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      
              {{ Auth::user()->name }}
          </a>
                                                 
          <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
               
                 {{ __('Logout') }}
               
              </a>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </li>
            </ul>
          </div>
                --}}
                <li class="nav-item dropdown">
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                    
                  </button>
                  
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item preview-item" href="#">   <i class="fa fa-user" aria-hidden="true"></i> Profile</a>
                    <a class="dropdown-item preview-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                                
                                   
                      <i class="mdi mdi-logout text-danger"></i>
  
                      {{ __('Logout') }}
                  
                      
                                   
                      
                       
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
          
      </div>
    </div>
                </li>
  </div>
    </nav>