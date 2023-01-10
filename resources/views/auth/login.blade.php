@extends('layouts.app')

@section('content')
<div class="distance">
    <div class="login-wrap" style="background:url(images/tapis.png) no-repeat center;">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">
                <div class="sign-in-htm">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="group">
                        <label for="user" class="label">Nom d'utilisateur</label>
                        <input id="email"  class="input" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror</div>
                    <div class="group">
                        <label for="pass" class="label">Mot de passe</label>
                        <input id="password"  class="input"  type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror	</div>
                    <div class="group">
                        <input class="form-check-input" class="check" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember"> Enregister</label>
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign In">
                    </div>
                    @if (Route::has('password.request'))
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="{{ route('password.request') }}"> <u>Mot de passe oublié?</u></a><br><br><br>
                        @endif
                        <label for="tab-2"><b ><u style="color:black;">S'inscrice</u></b></a>
                    </div>
                </div>
            </form>
                <div class="sign-up-htm">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                    <div class="group">
                        <label for="user" class="label">Nom </label>
                        <input id="name" type="text" class="input"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                    <div class="group">
                        <label for="pass" class="label">Email </label>

                            <input id="email" type="email"  class="input" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                             </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="password"  class="input" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  </div>
                    <div class="group">
                        <label for="pass" class="label">Confirmer Mot de Passe</label>
                        <input id="password-confirm" class="input" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="group">
                        <input type="submit" class="button" value="Sign Up">

                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <label for="tab-1"><u>deja Membre?</u></a>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
    </div></div>
    <footer class="bg3 p-t-75 p-b-32">

    </footer>
    <script src="{{ asset('js/footer.js') }}"></script>
        <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
        <script>
            $(".js-select2").each(function(){
                $(this).select2({
                    minimumResultsForSearch: 20,
                    dropdownParent: $(this).next('.dropDownSelect2')
                });
            })
        </script>
    <!--===============================================================================================-->
        <script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
        <script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('vendor/slick/slick.min.js') }}"></script>
        <script src="{{ asset('js/slick-custom.js') }}"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('vendor/parallax100/parallax100.js') }}"></script>
        <script>
            $('.parallax100').parallax100();
        </script>
    <!--===============================================================================================-->
        <script src="{{ asset('vendor/MagnificPopup/jquery.magnific-popup.min.js') }}"></script>
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
        <script src="{{ asset('vendor/isotope/isotope.pkgd.min.js') }}"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('vendor/sweetalert/sweetalert.min.js') }}"></script>
        <script>
            $('.js-addwish-b2').on('click', function(e){
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
        <script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
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
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/active.js') }}"></script>
    </body>
        </html>

@endsection
