@extends('layouts.app')

@section('content')



@include('navcart')

                        <!-- Slider -->
                        <section class="section-slide" style="margin-top:0px">
                            <div class="wrap-slick1"style="margin-top:0px">
                                <div class="slick1"style="margin-top:0px">
                                    <div class="item-slick1" style="background-image: url(images/c700x420.png);margin-top:0px;">
                                        <div class="container h-full" style="margin-top:0px">
                                            <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                                                <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                                                    <span class="ltext-101 cl1 respon2">
                                                      Tapis Berbere
                                                    </span>
                                                </div>

                                                <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                                                    <h2 class="ltext-201 cl1 p-t-19 p-b-43 respon1">
                                                      Nouvelle Saison
                                                    </h2>
                                                </div>

                                                <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                                                    <a href="" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                                       <i>Achetez Maintenant</i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item-slick1" style="background-image: url(images/m-concept-store-paris.png);">
                                        <div class="container h-full">
                                            <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                                                <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                                                    <span class="ltext-101 cl1 respon2">
                                                        Decoration
                                                    </span>
                                                </div>

                                                <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                                                    <h2 class="ltext-201 cl1 p-t-19 p-b-43 respon1">
                                                   Nouvelle Saison
                                                    </h2>
                                                </div>

                                                <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                                                    <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                                        <i>Achetez Maintenant</i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                        </div>
                        </section>


                        <!-- Banner -->
                        <div class="sec-banner bg0 p-t-80 p-b-50">
                            <div class="container">
                                <div class="row">
                                     @foreach ($category as $category)
                                     <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                                        <!-- Block1 -->
                                      <div class="block1 wrap-pic-w">

                                            <img src="/category/{{$category->img_categ}}" height="300" width="150"  alt="IMG-BANNER">

                                            <a href="{{ url('view_category/'.$category->id_categ) }}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                                                <div class="block1-txt-child1 flex-col-l">
                                                    <span class="block1-name ltext-102 trans-04 p-b-8">
                                                        {{$category->name_categ}}
                                                    </span>

                                                    {{-- <span class="block1-info stext-102 trans-04">
                                                        New collection
                                                    </span> --}}
                                                </div>

                                                <div class="block1-txt-child2 p-b-4 trans-05">
                                                    <div class="block1-link stext-101 cl0 trans-09">
                                                        <i>Achetez Maintenant</i>
                                                    </div>
                                                </div>
                                            </a>


                                    </div>

                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                                    {{-- <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                                        <!-- Block1 -->
                                        <div class="block1 wrap-pic-w">
                                            <img src="images/categdeco.png" alt="IMG-BANNER">

                                            <a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                                                <div class="block1-txt-child1 flex-col-l">
                                                    <span class="block1-name ltext-102 trans-04 p-b-8">
                                                        Decoration
                                                    </span>

                                                    <span class="block1-info stext-102 trans-04">
                                                    New arrivage
                                                    </span>
                                                </div>

                                                <div class="block1-txt-child2 p-b-4 trans-05">
                                                    <div class="block1-link stext-101 cl0 trans-09">
                                                        Shop Now
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                                        <!-- Block1 -->
                                        <div class="block1 wrap-pic-w">
                                            <img src="images/categbijoux.png" alt="IMG-BANNER">

                                            <a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                                                <div class="block1-txt-child1 flex-col-l">
                                                    <span class="block1-name ltext-102 trans-04 p-b-8">
                                                        Accessories
                                                    </span>

                                                    <span class="block1-info stext-102 trans-04">
                                                        New Trend
                                                    </span>
                                                </div>

                                                <div class="block1-txt-child2 p-b-4 trans-05">
                                                    <div class="block1-link stext-101 cl0 trans-09">
                                                        Shop Now
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
<div >

    <a href="/allpromo">
        <img src="images/gif4.gif" height="200" width="1400" alt="IMG-BANNER">

    </a>
</div>

                        <!-- Product -->
                        <section class="bg0 p-t-23 p-b-140">
                            <div class="container">
                                <div class="p-b-10">
                                    <h3 class="ltext-103 cl5">
                                       PRODUITS
                                    </h3>
                                </div>

                                <div class="flex-w flex-sb-m p-b-52">



                                        <!-- <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women">
                                            Women
                                        </button>

                                        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".men">
                                            Men
                                        </button>

                                        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".bag">
                                            Bag
                                        </button>

                                        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".shoes">
                                            Shoes
                                        </button>

                                        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".watches">
                                            Watches
                                        </button> -->


                                    <div class="flex-w flex-c-m m-tb-10">


                                        <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                                            <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                                            <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                                            Recherche
                                        </div>
                                    </div>

                                    <!-- Search product -->
                                    <div class="dis-none panel-search w-full p-t-10 p-b-15">
                                        <div class="bor8 dis-flex p-l-15">
                                            <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                                                <i class="zmdi zmdi-search"></i>
                                            </button>

                                            <input class="mtext-107  size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
                                        </div>
                                    </div>

                                    <!-- Filter -->
                                    <div class="dis-none panel-filter w-full p-t-10">

                                    </div>
                                </div>


                                 <div class="row isotope-grid">
                                    @foreach ($data as $product)

                                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                                        <!-- Block2 -->
                                        <div class="block2">
                                            <div class="block2-pic hov-img0">
                                                <span style="background-color: #f6931d;
                                                display: inline-block;
                                                font-size: 11px;
                                                color: #fff;
                                                right: 20px;
                                                top: 20px;
                                                padding: 1px 16px;
                                                font-weight: 700;
                                                border-radius: 0;
                                                text-align: center;
                                                position: absolute;
                                                text-transform: uppercase;
                                                border-radius: 30px;
                                                height: 26px;
                                                line-height: 25px;">

                                                <i class="fa fa-bolt" aria-hidden="true" style="margin-right:7px"></i> @if($product->id_promo !="") {{$product->promotion->discount}} @else {{ number_format((1-($product->price/$product->old_price))*100)}}@endif  % off</span>
                                                <img src="/product/{{$product->image}}" height="300" width="150" alt="IMG-PRODUCT">

                                                <a href="/product-detail/{{$product->id_product}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                                                    Voir Produit
                                                </a>

                                            </div>

                                            <div class="block2-txt flex-w flex-t p-t-14">
                                                <div class="block2-txt-child1 flex-col-l ">
                                                    <a href="/product-detail/{{$product->id_product}}"  class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                    {{$product->designation}}
                                                    </a>

                                                    <span class="stext-105 cl3">
                                                    ${{$product->price}}
                                                    <span style="font-weight: 500;
                                                        color: #b9b4c7;
                                                        text-decoration: line-through;
                                                        line-height: 30px;
                                                        margin-top: 21px;
                                                        margin-left:110px">${{$product->old_price}}</span>
                                                  </span>

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                      <!-- Load more -->

                            </div>
                            <div class="d-flex justify-content-center">
                                {!! $data->links()!!}

                            </div>

                        </section>


                        <!-- Footer -->
                        <footer class="bg3 p-t-75 p-b-32">
                        </footer>




                        <!-- Back to top -->
                        <div class="btn-back-to-top" id="myBtn">
                            <span class="symbol-btn-back-to-top">
                                <i class="zmdi zmdi-chevron-up"></i>
                            </span>
                        </div>

                        <!-- Modal1 -->

	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
		<div class="overlay-modal1 js-hide-modal1"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="images/icons/icon-close.png" alt="CLOSE">
				</button>

				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="images/product-detail-01.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-01.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="images/product-detail-02.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-02.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-02.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="images/product-detail-03.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-03.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-03.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								Lightweight Jacket
							</h4>

							<span class="mtext-106 cl2">
								$58.79
							</span>

							<p class="stext-102 cl3 p-t-23">
								Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
							</p>

							<!--  -->
							<div class="p-t-33">
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Size
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Size S</option>
												<option>Size M</option>
												<option>Size L</option>
												<option>Size XL</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Color
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Red</option>
												<option>Blue</option>
												<option>White</option>
												<option>Grey</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>

										<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
											Add to cart
										</button>
									</div>
								</div>
							</div>

							<!--  -->
							<div class="flex-w flex-m p-l-100 p-t-40 respon7">
								<div class="flex-m bor9 p-r-10 m-r-11">
									<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
										<i class="zmdi zmdi-favorite"></i>
									</a>
								</div>
                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
									<i class="fa fa-facebook"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
									<i class="fa fa-twitter"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>



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
</body>
                    </html>
                    @endsection


