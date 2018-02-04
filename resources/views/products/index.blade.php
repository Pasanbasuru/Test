@extends('master')


@section('content')

<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Products</li>
			</ol>
		</div>
	</div>
<!--content-->
<div class="products">
	<div class="container">
		<h2>Products</h2>
		<div class="col-md-9">
			@foreach ($products as $product)
			@if (($loop->index)%3 == 0)
				<div class="content-top1">
			@endif
				<div class="col-md-4 col-md4">
					<div class="col-md1 simpleCart_shelfItem">
						<a href={{"/products/".$product->id}}>
							<img class="img-responsive" src="images/pi.png" alt="" />
						</a>
						<h3><a href={{"/products/".$product->id}}>{{$product->title}}</a></h3>
						<h4><a href={{"/products/".$product->id}}>{{str_limit($product->description, 20)}}</a></h4>
						<div class="price">
								<h5 class="item_price">{{$product->price}}</h5>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				@if (($loop->index+1)%3 == 0)
					<div class="clearfix"> </div>
					</div>
				@endif
		@endforeach
		</div>

		<div class="col-md-3 product-bottom">
			<!--categories-->
					<div class=" rsidebar span_1_of_left">
					<h3 class="cate">Categories</h3>
					<ul class="menu-drop">
					@foreach ($main as $main_cat)
							<li class={{$main_cat->id}}><a href="#">{{$main_cat->main_cat}} </a>
								<ul class="cute">
									@foreach ($all as $sub_cat)
										@if ($sub_cat->main_cat == $main_cat->main_cat)
											<li class={{$sub_cat->id}}><a href={{"/category/".$sub_cat->id}}>{{$sub_cat->sub_cat}} </a></li>
										@endif
									@endforeach
								</ul>
							</li>
					@endforeach
					</ul>
				</div>
				<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
<!--//menu-->

							
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>

@endsection