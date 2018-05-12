@extends('frontEndUser.layout.default')
@section('slide-header')
@endsection()

@section('view-product-item')
	<div class="container">
			<div class="content">
				
					<div class="breadcrumb-slux">
				        <div class="btn-group btn-breadcrumb breadcrumb-default">
				            <a href="/" class="btn btn-default"><i class="glyphicon glyphicon-home"></i></a>
				            @foreach($categories as $categorie)
				            	<a href="{{url('/'.$categorie["url"])}}" class="btn btn-default broder-bottom">{{$categorie->name}}</a>
				            @endforeach
				            <a href="{{url('/'.$pr["url"])}}" class="btn btn-default broder-bottom">{{$pr->name}}</a>
				        </div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-10">
							<h1 >{{$pr->name}}</h1>
						</div>
						<div class="col-md-2" style="margin-top: 45px;">
							<span style="width: 48%; float: left; background: #4267b2; font-size: 12px; color:#fff; border-radius: 3px;" class="text-center">Order 10</span>
							<span style="width: 48%; float: right; background: #4267b2; font-size: 12px; color:#fff; border-radius:3px; " class="text-center">Like 10</span>
							<!-- <button type="button" class="btn btn-primary btn-xs" >Like <span class="badge">7</span> </button> -->
						</div>
					</div>
					<hr>
					<div class="view-product-content">
						<div class="row">
							<div class="col-md-5">
								<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">

									<ol class="carousel-indicators">
									  	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
									    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
									    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
									</ol>
									

									<div class="carousel-inner">
										<?php
											$i=0;
										?>
										@foreach($product_images as $prim)
											<?php 
												$image= App\Images::where('id',$prim->image_id)->get()->first();
											?>
											@if($i==0)
											    <div class="item active srle">
												    <img src="{{url('/uploads/images/products/'.$prim["url_image"])}}" alt="{{$image->alt}}" class="img-responsive">
											    </div>
											@else 
												<div class="item">
												    <img src="{{url('/uploads/images/products/'.$prim["url_image"])}}" alt="{{$image->alt}}" class="img-responsive">
											    </div>
											@endif
											<?php 
												$i++;
											?>
										@endforeach

									</div>


									<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
									    <span class="glyphicon glyphicon-chevron-left"></span>
									</a>
									<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
									    <span class="glyphicon glyphicon-chevron-right"></span>
									</a>

									<ul class="thumbnails-carousel clearfix">
										@foreach($product_images as $prim)
									  		<li><img src="{{url('/uploads/images/products/'.$prim["url_image"])}}" alt="{{$prim->alt}}"></li>
									  	@endforeach
									</ul>
								</div>
								
							</div>
							<div class="col-md-4">
								
									<div class="panel panel-success">
										<div class="panel-heading text-center"><span class="fw-700"> Giá: {{$pr->price}}</span></div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading text-center">Thông tin ưu đãi</div>
										<div class="panel-body text-center ">{!!$pr->sale!!}</div>
									</div>
									
									<button type="button" class="btn btn-danger width-100 fw-700">MUA NGAY</button>
									
									
									<br>
									
									<button type="button" class="btn btn-primary width-100 fw-700">MUA TRẢ GÓP QUA THẺ</button>
								
							</div>
							<div class="col-md-3">
								<div class="panel panel-default">
									<div class="panel-heading text-center">Thông tin sản phẩm
										
									</div>
									<div class="panel-body text-center ">
										{!!$pr->ttsp!!}

									</div>
								</div>
							</div>
						</div>
						<br>
						<br>
						<div class="row">
							<div class="col-md-9">
								<ul class="nav nav-tabs">
								    <li class="active"  "><a data-toggle="tab" href="#gt" style="color: #000;" >GIỚI THIỆU</a></li>
								    <li ><a data-toggle="tab" href="#tskt" style="color: #000;">THÔNG SỐ KỸ THUẬT</a></li>
								    
								    
								</ul>
								<br>
								<div class="tab-content">
								    <div id="gt" class="tab-pane fade in active">
								    	<h3>Giới thiệu sản phẩm</h3>
								    	{!!$pr->description!!}
								    </div>
								    <div id="tskt" class="tab-pane fade">
								    	<h3>Menu 1</h3>
								    	{!!$pr->tskt!!}
								    </div>
								    
								</div>
							</div>
							<div class="col-md-3">
								<div class="panel-default">
									<div class="panel-heading text-center">Bài viết liên quan</div>
									<br>
									<div class="blog-new">
										<div class="blog-new-item box-shadows">
											<div class="row"> 
							                    <div class="col-xs-12 col-sm-12 col-md-12">
							                        <a href="#">
							                            <img src="http://i.huffpost.com/gen/2038950/thumbs/s-BANGKOK-NOODLES-large.jpg" class="img-responsive img-box img-thumbnail"> 
							                        </a>
							                    </div>
							                    <br>
							                    <br>
							                    <div class="col-xs-12 col-sm-12 col-md-12">
							                    	<h4><a href="#">These Are The Best Noodle Spots In Bangkok</a></h4>
							                        <div class="list-group">
							                            <div class="list-group-item">
							                                <div class="row-content">
							                                    <small>
							                                        <i class="glyphicon glyphicon-time"></i> 1 month ago via <span class="twitter"> <i class="fa fa-twitter"></i> <a target="_blank" href="https://twitter.com/sintret" alt="sintret" title="sintret">@sintret</a></span>
							                                        <br>
							                                    </small>
							                                </div>
							                            </div>
							                        </div>
							                        <div class="read-more"><button class="btn-primary">Xem thêm</button></div>
							                        <div class="clear"></div>
							                        
							                    </div> 
							                </div>
										</div>
										<br>
										<div class="blog-new-item box-shadows">
											<div class="row"> 
							                    <div class="col-xs-12 col-sm-12 col-md-12">
							                        <a href="#">
							                            <img src="http://i.huffpost.com/gen/2038950/thumbs/s-BANGKOK-NOODLES-large.jpg" class="img-responsive img-box img-thumbnail"> 
							                        </a>
							                    </div>
							                    <br>
							                    <br>
							                    <div class="col-xs-12 col-sm-12 col-md-12">
							                    	<h4><a href="#">These Are The Best Noodle Spots In Bangkok</a></h4>
							                        <div class="list-group">
							                            <div class="list-group-item">
							                                <div class="row-content">
							                                    <small>
							                                        <i class="glyphicon glyphicon-time"></i> 1 month ago via <span class="twitter"> <i class="fa fa-twitter"></i> <a target="_blank" href="https://twitter.com/sintret" alt="sintret" title="sintret">@sintret</a></span>
							                                        <br>
							                                    </small>
							                                </div>
							                            </div>
							                        </div>
							                        <div class="read-more"><button class="btn-primary">Xem thêm</button></div>
							                        <div class="clear"></div>
							                        
							                    </div> 
							                </div>
										</div>
										<br>
										<div class="blog-new-item box-shadows">
											<div class="row"> 
							                    <div class="col-xs-12 col-sm-12 col-md-12">
							                        <a href="#">
							                            <img src="http://i.huffpost.com/gen/2038950/thumbs/s-BANGKOK-NOODLES-large.jpg" class="img-responsive img-box img-thumbnail"> 
							                        </a>
							                    </div>
							                    <br>
							                    <br>
							                    <div class="col-xs-12 col-sm-12 col-md-12">
							                    	<h4><a href="#">These Are The Best Noodle Spots In Bangkok</a></h4>
							                        <div class="list-group">
							                            <div class="list-group-item">
							                                <div class="row-content">
							                                    <small>
							                                        <i class="glyphicon glyphicon-time"></i> 1 month ago via <span class="twitter"> <i class="fa fa-twitter"></i> <a target="_blank" href="https://twitter.com/sintret" alt="sintret" title="sintret">@sintret</a></span>
							                                        <br>
							                                    </small>
							                                </div>
							                            </div>
							                        </div>
							                        <div class="read-more"><button class="btn-primary">Xem thêm</button></div>
							                        <div class="clear"></div>
							                        
							                    </div> 
							                </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<ul class="nav nav-tabs">
								    <li class="active" ><a href="/linh-phu-kien.html" style="color: #000;" >Xem thêm sản phẩm</a></li>
								</ul>
								<br>
								<div class="product-list">
									<div class="row">
				                        <div class="col-sm-3 product-item">
				                            <div class="col-item">
				                                <div class="photo">
				                                    <a href="/view-product-item.html"><img src="http://www.timeswissshop.com/hublot/hbulot-replica-watch-big-bang-gold-ceramic-bezel-2009-7750.jpg" alt="a" /></a>
				                                </div>
				                                <div class="info">
				                                    <div class="row">
				                                        <div class="price col-md-6">
				                                            <h5>
				                                                Sample Product</h5>
				                                            <h5 class="price-text-color">
				                                                $199.99</h5>
				                                        </div>
				                                        <div class="rating hidden-sm col-md-6">
				                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
				                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
				                                            </i><i class="fa fa-star"></i>
				                                        </div>
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
				                        <div class="col-sm-3 product-item">
				                            <div class="col-item">
				                                <div class="photo">
				                                    <img src="http://www.timeswissshop.com/hublot/hublot-big-bang-uefa-limited-gold-7750-replica-watch.jpg" alt="a" />
				                                </div>
				                                <div class="info">
				                                    <div class="row">
				                                        <div class="price col-md-6">
				                                            <h5>
				                                                Product Example</h5>
				                                            <h5 class="price-text-color">
				                                                $249.99</h5>
				                                        </div>
				                                        <div class="rating hidden-sm col-md-6">
				                                        </div>
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
				                        <div class="col-sm-3 product-item">
				                            <div class="col-item">
				                                <div class="photo">
				                                    <img src="http://www.timeswissshop.com/hublot/hbulot-replica-watch-big-bang-gold-ceramic-bezel-2009-7750.jpg" class="img-responsive" alt="a" />
				                                </div>
				                                <div class="info">
				                                    <div class="row">
				                                        <div class="price col-md-6">
				                                            <h5>
				                                                Next Sample Product</h5>
				                                            <h5 class="price-text-color">
				                                                $149.99</h5>
				                                        </div>
				                                        <div class="rating hidden-sm col-md-6">
				                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
				                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
				                                            </i><i class="fa fa-star"></i>
				                                        </div>
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
				                        <div class="col-sm-3 product-item">
				                            <div class="col-item">
				                                <div class="photo">
				                                    <img src="http://www.timeswissshop.com/hublot/hbulot-replica-watch-big-bang-gold-ceramic-bezel-2009-7750.jpg" class="img-responsive" alt="a" />
				                                </div>
				                                <div class="info">
				                                    <div class="row">
				                                        <div class="price col-md-6">
				                                            <h5>
				                                                Next Sample Product</h5>
				                                            <h5 class="price-text-color">
				                                                $149.99</h5>
				                                        </div>
				                                        <div class="rating hidden-sm col-md-6">
				                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
				                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
				                                            </i><i class="fa fa-star"></i>
				                                        </div>
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
				                    </div>
								</div>
							</div>
						</div>
					</div>
				
			</div>
		
	</div>
@endsection()