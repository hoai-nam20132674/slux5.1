@extends('frontEndUser.layout.default')
@section('slide-header')
@endsection()

@section('view-product-item')
	<div class="container">
		<div class="row">
			<div class="content">
				<div class="col-md-12">
					<div class="breadcrumb-slux">
				        <div class="btn-group btn-breadcrumb breadcrumb-default">
				            <a href="#" class="btn btn-default"><i class="glyphicon glyphicon-home"></i></a>
				            <a href="#" class="btn btn-default broder-bottom">LINH PHỤ KIỆN</a>
				            
				        </div>
					</div>
					<br>
					<div class="view-product-content">
						
						<div class="col-md-3">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
								  <!-- Indicators -->
								  <ol class="carousel-indicators">
								    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
								    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
								    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
								    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
								  </ol>

								  <!-- Wrapper for slides -->
								  <div class="carousel-inner">

								    <div class="item active srle">
								      <img src="http://dienthoaidangcap.vn/product_images/w/024/vertu-cu-signature-s-navy-alligator-01__15055_thumb.png" alt="1.jpg" class="img-responsive">
								      <!-- <div class="carousel-caption">
								        <p> 1.jpg </p>
								      </div> -->
								    </div>

								    <div class="item">
								      <img src="http://dienthoaidangcap.vn/product_images/t/134/vertu-cu-signature-s-red-calf-01__40264_thumb.png" alt="2.jpg" class="img-responsive">
								      <!-- <div class="carousel-caption">
								        <p> 2.jpg </p>
								      </div> -->
								    </div>

								    <div class="item">
								      <img src="http://dienthoaidangcap.vn/product_images/c/627/hublot-classic-fusion-542-ox-1181-lr-1104-01__29139_thumb.png" alt="3.jpg" class="img-responsive">
								      <!-- <div class="carousel-caption">
								        <p> 3.jpg </p>
								      </div> -->
								    </div>

								    <div class="item">
								      <img src="http://dienthoaidangcap.vn/product_images/l/835/hublot-classic-fusion-aerofusion-moonphase-king-gold-01__68180_thumb.png" alt="4.jpg" class="img-responsive">
								      <!-- <div class="carousel-caption">
								        <p> 4.jpg </p>
								      </div> -->
								    </div>

								  </div>

								  <!-- Controls -->
								  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
								    <span class="glyphicon glyphicon-chevron-left"></span>
								  </a>
								  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
								    <span class="glyphicon glyphicon-chevron-right"></span>
								  </a>

								  <!-- Thumbnails --> 
								  <ul class="thumbnails-carousel clearfix">
								  	<li><img width="10%" height="auto" src="http://dienthoaidangcap.vn/product_images/w/024/vertu-cu-signature-s-navy-alligator-01__15055_thumb.png" alt="1_tn.jpg"></li>
									<li><img width="10%" height="auto" src="http://dienthoaidangcap.vn/product_images/t/134/vertu-cu-signature-s-red-calf-01__40264_thumb.png" alt="1_tn.jpg"></li>
									<li><img width="10%" height="auto" src="http://dienthoaidangcap.vn/product_images/c/627/hublot-classic-fusion-542-ox-1181-lr-1104-01__29139_thumb.png.png" alt="1_tn.jpg"></li>
									<li><img width="10%" height="auto" src="http://dienthoaidangcap.vn/product_images/l/835/hublot-classic-fusion-aerofusion-moonphase-king-gold-01__68180_thumb.png" alt="1_tn.jpg"></li>
								  </ul>
							</div>
							
						</div>
						<div class="col-md-4">thông số kỹ thuật</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection()