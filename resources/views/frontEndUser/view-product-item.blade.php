@extends('frontEndUser.layout.default')
@section('slide-header')
@endsection()

@section('view-product-item')
	<div class="container">
		
			<div class="content">
				
					<div class="breadcrumb-slux">
				        <div class="btn-group btn-breadcrumb breadcrumb-default">
				            <a href="#" class="btn btn-default"><i class="glyphicon glyphicon-home"></i></a>
				            <a href="#" class="btn btn-default broder-bottom">LINH PHỤ KIỆN</a>
				            
				        </div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-9">
							<h1 style="float: left;">Tên sản phẩm</h1>
						</div>
						<div class="col-md-3">
							<button type="button" class="btn btn-primary" style="float: right;"><span class="badge">7</span> Hài lòng</button>
							<button type="button" class="btn btn-primary" style="float: right;"><span class="badge">7</span> Đã bán</button>
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

									    <div class="item active srle">
										    <img src="images/1.jpg" alt="1.jpg" class="img-responsive">
										    <div class="carousel-caption">
										      	<p> 1.jpg </p>
										    </div>
									    </div>

									    <div class="item">
										    <img src="images/2.jpg" alt="2.jpg" class="img-responsive">
										    <div class="carousel-caption">
										        <p> 2.jpg </p>
										    </div>
									    </div>

									    <div class="item">
										    <img src="images/3.jpg" alt="3.jpg" class="img-responsive">
										    <div class="carousel-caption">
										        <p> 3.jpg </p>
										    </div>
									    </div>

									    <div class="item">
										    <img src="images/4.jpg" alt="4.jpg" class="img-responsive">
										    <div class="carousel-caption">
										        <p> 4.jpg </p>
										    </div>
									    </div>

									</div>


									<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
									    <span class="glyphicon glyphicon-chevron-left"></span>
									</a>
									<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
									    <span class="glyphicon glyphicon-chevron-right"></span>
									</a>

									<ul class="thumbnails-carousel clearfix">
									  	<li><img src="images/1_tn.jpg" alt="1_tn.jpg"></li>
										<li><img src="images/2_tn.jpg" alt="1_tn.jpg"></li>
										<li><img src="images/3_tn.jpg" alt="1_tn.jpg"></li>
										<li><img src="images/4_tn.jpg" alt="1_tn.jpg"></li>
									</ul>
								</div>
								
							</div>
							<div class="col-md-4">thông số kỹ thuật</div>
							<div class="col-md-3">thông số</div>
						</div>
					</div>
				
			</div>
		
	</div>
@endsection()