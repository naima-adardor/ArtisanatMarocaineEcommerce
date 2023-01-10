
                        <script src="{{ asset('js/footer.js') }}"></script>
 
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
                            <script src="js/active.js"></script>
                            <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
                            <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
                            <script>
                               var availableTags = [];
                                 $.ajax({
                                 method:"GET",
                                 url:"/product-list",
                                 success:function(response){
                                    startAutoComplete(response);
                                }
                                  });
                                 function startAutoComplete(availableTags){ 
                                  $( "#search_product" ).autocomplete({
                                    source: availableTags
                                  });
                                }
                               </script> 
    {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(session('status'))
      <script>
      swal("{{ session('status') }}");
      </script>  
      @endif  