<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Tazerzit</title>

    <!-- Scripts -->



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link rel="icon" type="image/png" href="{{ asset('images/S.png') }}"/>

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('fonts/linearicons-v1.0.0/icon-font.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/slick/slick.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/MagnificPopup/magnific-popup.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
       <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ asset ('css/login.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link  href="https://fontawesome.com" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300&family=Open+Sans:ital,wght@1,300;1,400&family=Sansita+Swashed&family=Titillium+Web:ital,wght@1,200&display=swap" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <style type="text/css">
  .checked
  {
      color:#ffd900;

  }
  .rating-css div {
  color: #ffe400;
  font-size: 30px;
  font-family: sans-serif;
  font-weight: 800;
  text-align: center;
  text-transform: uppercase;
  padding: 10px 0;
}
.rating-css input {
  display: none;
}
.rating-css input + label {
  font-size: 20px;
  text-shadow: 1px 1px 0 #8f8420;
  cursor: pointer;
}
.rating-css input:checked + label ~ label {
  color: #b4afaf;
}
.rating-css label:active {
  transform: scale(0.8);
  transition: 0.3s ease;
}</style>
    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <base href="/public">
</head>

    <body class="animsition">

        {{-- <div class="preloader">
            <div class="preloader-inner">
                <div class="preloader-icon">
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div> --}}
   <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
           <div class="container">

                <header>
                    <!-- Header desktop -->
                    <div class="container-menu-desktop">
                        <!-- Topbar -->


                        <div class="wrap-menu-desktop">
                             <nav class="limiter-menu-desktop container">

                                <!-- Logo desktop -->
                                <a href="{{ route('home') }}" class="logo">
                                    <img src="images/S.png" alt="IMG-LOGO"><span style="font-size: x-large;font-family: 'Sansita Swashed', cursive;color:rgb(133, 71, 40);"><b>Tazerzit</b></span>
                                </a>

                                <!-- Menu desktop -->
                                <div class="menu-desktop">
                                    <ul class="main-menu">
                                        <li class="active-menu">
                                            <a href="{{ route('home') }}">Accueil</a>

                                        </li>




                                        <li>
                                            <a href="{{ url('/allpromo') }}">Promotion</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/contact') }}">Contact</a>
                                        </li>
                                        <li>
                                            <a href="blog.html">Blog</a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Icon header -->
                                <div class="wrap-icon-header flex-w flex-r-m">
                                   <form action="{{ url('searchproduct') }}" method="GET">
                                    @csrf
                                    <div class="search-box">
                                        <button class="btn-search">
                                            <div class="icon-header-item cl5 hov-cl1 trans-04 p-l-22 p-r-11 "><i class="fas fa-search"></i></div></button>
                                        <input type="search" class="input-search" placeholder=" Recherche..." id="search_product" name="product_name" value="{{ request()->input('product_name') }}"required="">
                                      </div>
                                   </form>
                                <div class="wrap-icon-header flex-w flex-r-m">
                                    <ul class="navbar-nav ms-auto">
                                        <!-- Authentication Links -->
                                        @guest
                                            @if (Route::has('register')||Route::has('login'))
                                             <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">
                                                    <div class="icon-header-item cl5 hov-cl1 trans-04 p-l-22 p-r-11 ">
                                                        <i class="bi bi-person-fill"></i>
                                                        </div> </a>
                                                </li>



                                        @endif
                                        @else
                                        <li class="nav-item dropdown">
                                            <div class="dropdown">
                                              <button class="btn btn-secondary dropdown-toggle" style=" background:transparent;height:30px;text-align:center;padding-top:5px;width:180px ;color:black;"ype="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                {{ Auth::user()->name }}

                                              </button>

                                              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item preview-item" href="#">   <i class="fa fa-user" aria-hidden="true"></i> Profile</a>
                                                <a class="dropdown-item preview-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                              document.getElementById('logout-form').submit();">


                                                            <i class="fa fa-sign-out" aria-hidden="true"></i>

                                                  {{ __('Se deconnecter') }}





                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                  @csrf
                                              </form>           </div></div>
                                            </li>

                                        @endguest
                                    </ul>
                                </div>


                                <div class="icon-header-item cl5 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify=" @auth {{ $count }} @endauth @guest 0 @endguest">
                                    <i class="zmdi zmdi-shopping-cart"></i>
                                </div>


                        <!-- Authentication Links -->

                                </div>

                            </nav>
                        </div>




                    </div>



                </header>
 </div>
</nav>
 </div>

        <main class="py-4" style="margin-top: -40px">
            @yield('content')
        </main>
</div>
</div>
</div>
{{-- <script src="{{ asset('js/footer.js') }}"></script>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

	</script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

<script>
$(document).ready(function(){
	$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
	$(document).on('click','.editbtn',function(){
		 var id_review=$(this).val();
		$('#editModal').modal('show');
	});
});

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.map"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.map"></script> --}}


</body>
</html>
