@extends('layouts.app')
@section('content')

	<!-- Cart -->
    @include('navcart')

	<!-- breadcrumb -->


    <br>
    <br>
    <br>

    <br>

	@if(session('success'))
	<div class="alert alert-success">
		{{ session('success') }}
	</div>
	@endif
	@if(session('error'))
    <div class="alert alert-danger">{{session('error')}}</div>
@endif
	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class=""></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">


								<div class="item-slick3">
									<div class="wrap-pic-w pos-relative">
										<img src="/product/{{$product->image}}" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="product/{{$product->image}}">
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
						<h4 class="mtext-105 cl5 js-name-detail p-b-14">
				        <b>{{$product->designation}}</b>  <br>

						@php $rate_num=number_format($rating_value)
						@endphp
						<div class="rating">


						<span class="mtext-106 cl5" style="font-size: large;font-family: 'Sansita Swashed', cursive;">
						@if($rating->count()>0)
						({{$rating->count()}})
						@else
							Aucun Avis
						@endif
							@for($i=1;$i<=$rate_num;$i++)
							<i class="fa fa-star checked"></i>
							@endfor
							@for($j=$rate_num+1;$j<=5;$j++)
							<i class="fa fa-star"></i>
							@endfor
						</span>
						</div>
			            </h4>
							@if($product->quantity==0)
						<h4 style= "color:red;">Rupture de stock</h4>
								@else
								<h4 style= "color:green;">En stock</h4>
								@endif
	<p class="stext-102 cl3 p-t-23">
                            {{$product->description}}
						</p>


						<span class="mtext-106 cl5" style="font-size: x-large;font-family: 'Sansita Swashed', cursive;">
							${{$product->price}}
						</span>




						<!--  -->
						<div class="p-t-33">
							<!-- <div class="flex-w flex-r-m p-b-10">
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
							 </div>  -->

							<!-- <div class="flex-w flex-r-m p-b-10">
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
							</div> -->
                       <form action="addcart/{{$product->id_product}}" method="POST">
	                     @csrf
							<div class="flex-w  p-b-10">
								<div class="size-204 flex-w  respon6-next">

									<div class="size-203 flex-c-m respon6">
										<b>Quantité :</b>
									</div>
									<div class="wrap-num-product flex-w m-r-20 m-tb-10">
										<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-minus"></i>
										</div>

										<input class="mtext-104 cl3 txt-center num-product" type="number" name="quantity" value="1">

										<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-plus"></i>
										</div>

								     </div>
                                    <div style="padding-top: 50px;">
									<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn-add p-lr-15 trans-04 js-addcart-detail" type="submit">
									Ajouter Au Panier
									</button>
								</div>
								</div>
							</div><form>
						</div>

						<!--  -->

					</div>
				</div>
			</div>

			<div class="bor10 m-t-50 p-t-43 p-b-40" STYLE="margin-left:120px;">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#information" role="tab">Informations Aditonnelles</a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#reviews" role="tab">

								@if($reviews->count()>0)
							Commentaires	({{$reviews->count()}})
								@else
								Auncun commentaire
								@endif</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content p-t-43">
						<!-- - -->


						<!-- - -->
						<div class="tab-pane fade" id="information" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<ul class="p-lr-28 p-lr-15-sm">
										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Weight
											</span>

											<span class="stext-102 cl6 size-206">
												0.79 kg
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Dimensions
											</span>

											<span class="stext-102 cl6 size-206">
												110 x 33 x 100 cm
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Materials
											</span>

											<span class="stext-102 cl6 size-206">
												60% cotton
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Color
											</span>

											<span class="stext-102 cl6 size-206">
												Black, Blue, Grey, Green, Red, White
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Size
											</span>

											<span class="stext-102 cl6 size-206">
												XL, L, M, S
											</span>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- - -->
						<div class="tab-pane fade" id="reviews" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<div class="p-b-30 m-lr-15-sm">
										<!-- Review -->

                                      <div class="flex-w flex-t p-b-68">


												@foreach ($reviews as $item)

												<div class="col-md-8">
												<div class="flex-w flex-sb-m p-b-17">
													<p class="mtext-107 cl5 p-r-20"><b>
														{{ $item->user->name }}</b>
													</p>
											 @if($item->id_user==Auth::id())
											 <a  onclick="return confirm('Are You Sure To Delete The Review ')"   href="{{ url('delete_review', $item->id_review) }}"><i class="fa fa-trash red"></i></a>
                                  @endif
											<small> <i>Commente en {{ $item->created_at->format('d M Y') }}</i></small>


<div>
												<p class="stext-90 cl6">
													{{ $item->review }}
												</p></div>
											</div></div></div>
</div>
											@endforeach






						@if(Auth::id())

												<form class="w-full"  style="background:#dacf92; margin-left:auto; "action="{{url('/add_rating')}}" method="POST">
											@csrf
											<input type="hidden" name="id_product" value="{{ $product->id_product }}">

                                            </form>



												{{-- <span >{{ $rating->count() }} Ratings</span> --}}





										<form class="w-full"  style="margin-left:auto;text-align:center;padding-left:60PX"action="{{url('/add_rating')}}" method="POST">
											@csrf
											<input type="hidden" name="id_product" value="{{ $product->id_product }}">


											<div class="flex-w flex-m p-t-50 p-b-23">
												<span class="stext-102 cl3 m-r-16">
													<b>Votre avis</b>
												</span>
												<div class="rating-css">
													<div class="star-icon">
                                                   @if($user_rating)
												   @for($i=1;$i<=$user_rating->stars_rated;$i++)

														<input type="radio" value="{{$i}}" name="rating" checked id="rating{{$i}}">
														<label for="rating{{$i}}" class="fa fa-star"></label>
					                                  @endfor
													  @for($j=$user_rating->stars_rated+1;$j<=5;$j++)

													  <input type="radio" value="{{$j}}" name="rating"  id="rating{{$j}}">
													  <label for="rating{{$j}}" class="fa fa-star"></label>
													@endfor
							                        {{-- @for($i=$user_rating+1;$i<=5;$i++)
							                        <i class="fa fa-star"></i>
							                        @endfor --}}

													@else
													<input type="radio" value="1" name="rating" checked id="rating1">
													<label for="rating1" class="fa fa-star"></label>
													<input type="radio" value="2" name="rating" id="rating2">
													<label for="rating2" class="fa fa-star"></label>
													<input type="radio" value="3" name="rating" id="rating3">
													<label for="rating3" class="fa fa-star"></label>
													<input type="radio" value="4" name="rating" id="rating4">
													<label for="rating4" class="fa fa-star"></label>
													<input type="radio" value="5" name="rating" id="rating5">
													<label for="rating5" class="fa fa-star"></label>

												@endif
											</div>
											</div>
												{{-- <span >{{ $rating->count() }} Ratings</span> --}}




											<button class="flex-c-m stext-101 cl0 size-90 bg1 bor1 hov-btn2 p-lr-15 trans-04" style="margin-left:50px">
												Envoyer votre avis
											</button></div>
										</form>
										 {{-- @if($verified_purchase->count()0)
										<h5>you're writing a review for{{ $product->designation }}
										</h5>  --}}

										<form  class="w-full" action="{{url('/add_review')}}"   method="POST">
											@csrf
											<input type="hidden" name="id_productt" value="{{ $product->id_product }}">

											<h5 class="mtext-108 cl5 p-b-7">
												Add a review
											</h5>

											{{-- <p class="stext-102 cl6">
												Your email address will not be published. Required fields are marked *
											</p> --}}
										<div class="row p-b-25">
											{{-- <div class="col-sm-6 p-b-5">
												  <label class="stext-102 cl3" for="name">Name</label>
												  <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name" type="text" name="name">
											  </div>

											  <div class="col-sm-6 p-b-5">
												  <label class="stext-102 cl3" for="email">Email</label>
												  <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="email" type="text" name="email">
											  </div> --}}
											  <div class="col-12 p-b-5">
												  <label class="stext-102 cl3" for="review"><b>Commentaire</b></label>
												  <textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="review"></textarea>
											  </div>
										  </div>
										  <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
											Envoyer commentaire
										</button>
										</form>

										 @else
										<div class="alert alert-danger">
											<h5>
												Vous n'avez pas le droit de commenter ou donner un avis
											</h5>
											<p>Pour la fiabilité .Seul les clients peuvent commenter ou evaluer un produit
										   </p>
										   <a href="{{url('login') }}" class="btn btn-primary">login</a>
										</div>

										@endif
									</div>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		 </div>
		{{--<div class="modal"   id="editModal" >
			<div class="modal-dialog" role="document">
			  <div class="modal-content">
				<div class="modal-header">
				  <h5 class="modal-title">Edit review</h5>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div><form  class="w-full" action="{{ url('/edit_review') }}" method="POST">
						@csrf
						@method('PUT')
				<div class="modal-body">

						<input type="hidden" name="id_review" value="">

					<div class="row p-b-25">
					<div class="col-12 p-b-5">
						<label class="stext-102 cl3" for="review"><b>Your review</b></label>
						<textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="review"></textarea>
					</div>
				</div>


				</div>
				<div class="modal-footer">
				  <button type="button" class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
		Save changes</button>
				  <button type="button" class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04" data-dismiss="modal">Close</button>
				</form></div>
			  </div>
			</div> --}}
		  </div>
	</section>


	<!-- Related Products -->


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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="{{ asset('js/footer.js') }}"></script>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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

		/---------------------------------------------/

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.map"></script>
@endsection
