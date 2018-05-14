@extends('frontEndUser.layout.default')
@section('slide-header')
	@include('frontEndUser.layout.slide-header')
@endsection()
@section('product-list')
	<div class="container">
		<div class="row">
			<div class="content">
				<div class="col-md-9">
					<div class="breadcrumb-slux">
				        <div class="btn-group btn-breadcrumb breadcrumb-default">
				            <a href="/" class="btn btn-default"><i class="glyphicon glyphicon-home"></i></a>
				            <?php 
				            	 	$categories = App\Categories::whereIn('id',$idCateParents)->get();
				            ?>
				            @foreach($categories as $categorie)
				            	<a href="{{url('/'.$categorie["url"])}}" class="btn btn-default border-bottom">{{$categorie->name}}</a>
				            @endforeach
				        </div>
					</div>
					<br>
					<div class="product-list">
						<div class="row">
							@foreach($products as $pr)
								@if($pr->display ==1)
			                        <div class="col-sm-4 product-item">
			                            <div class="col-item">
			                                <div class="photo">
			                                    <a href="{{url('/'.$pr["url"])}}"><img src="{{url('/uploads/images/products/'.$pr["image"])}}" alt="a" /></a>
			                                </div>
			                                <div class="info">
			                                    <div class="row">
			                                        <div class="price col-md-12" style="text-align: center;">
			                                            <h5 style="text-transform: uppercase; font-weight: 700;">{{$pr->name}}</h5>
			                                            <h5 class="price-text-color">{{$pr->price}}</h5>
			                                        </div>
			                                        <!-- <div class="rating hidden-sm col-md-12">
			                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
			                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
			                                            </i><i class="fa fa-star"></i>
			                                        </div> -->
			                                    </div>
			                                    <div class="separator clear-left">
			                                        <p class="btn-add">
			                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
			                                        <p class="btn-details">
			                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
			                                    </div>
			                                    <div class="clearfix">
			                                    </div>
			                                </div>
			                            </div>

			                        </div>
		                        @endif
		                    @endforeach
	                    </div>
					</div>
					
					<div class="pagination text-center">
					  	<a href="#">&laquo;</a>
					  	<a href="#">1</a>
					  	<a class="active" href="#">2</a>
					  	<a href="#">3</a>
					  	<a href="#">4</a>
					  	<a href="#">5</a>
					  	<a href="#">&raquo;</a>
					</div>
				</div>
				@include('frontEndUser.page-content.sidebar')
			</div>
		</div>
	</div>
@endsection()