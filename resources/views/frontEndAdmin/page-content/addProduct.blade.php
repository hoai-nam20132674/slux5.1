@extends('frontEndAdmin.layout.default')
@section('css')
	<link rel="stylesheet" href="{{asset('admin/vendor/bootstrap4/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/themify-icons/themify-icons.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/animate.css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/jscrollpane/jquery.jscrollpane.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/waves/waves.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/switchery/dist/switchery.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/css/upload-image.css')}}">
@endsection()
@section('content')
	<div class="content-area py-1">
		<div class="container-fluid">
			<h4>Basic Form Elements</h4>
			<ol class="breadcrumb no-bg mb-1">
				<li class="breadcrumb-item"><a href="forms-basic.html#">Home</a></li>
				<li class="breadcrumb-item"><a href="forms-basic.html#">Forms</a></li>
				<li class="breadcrumb-item active">Basic Form Elements</li>
			</ol>
			<div class="box box-block bg-white">
				@if( count($errors) > 0)
		    	<div class="alert alert-danger">
		    		<ul>
		    			@foreach($errors->all() as $error)
		    				<li>{{$error}}</li>
		    			@endforeach
		    		</ul>
		    	</div>
		    	@endif
				<h5>Form controls</h5>
				<p class="font-90 text-muted mb-1">Bootstrap provides several form control styles, layout options, and custom components for creating a wide variety of forms.</p>
				<form action="{{URL::route('postAddProduct')}}" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{ csrf_token()}}">
					<div class="row">
						<div class="col-md-9">
							<div class="row">

								<div class="col-md-3">
									<a href="http://slux.vn/" target="_blank"><button class="btn btn-primary" style="width: 100%;">http://slux.vn/</button></a>
								</div>
								<div class="col-md-9">
									<div class="form-group">	
										<input type="text" class="form-control" name="url" placeholder="Nhập Url" value="{{old('url')}}">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleTextarea">Thông số kỹ thuật</label>
								<textarea class="form-control" name="tskt" rows="3">{{old('tskt')}}</textarea>
								<script type="text/javascript">
							      var editor = CKEDITOR.replace('tskt',{
							       language:'vi',
							       filebrowserImageBrowseUrl : '../admin/ckfinder/ckfinder.html?type=Images',
							       filebrowserFlashBrowseUrl : '../admin/ckfinder/ckfinder.html?type=Flash',
							       filebrowserImageUploadUrl : '../admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
							       filebrowserFlashUploadUrl : '../admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
							       });
							     </script>﻿
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Tên sản phẩm</label>
								<input type="text" class="form-control" name="name" placeholder="Nhập tiêu đề danh mục" value="{{old('name')}}">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Giá</label>
								<input type="text" class="form-control" name="price" placeholder="Nhập tiêu đề danh mục" value="{{old('price')}}">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Tiêu đề</label>
								<input type="text" class="form-control" name="title" placeholder="Nhập tiêu đề danh mục" value="{{old('title')}}">
							</div>
							
							<div class="form-group">
								<label for="exampleInputEmail1">Seo keywords</label>
								<input type="text" class="form-control" name="seo_keyword" placeholder="Keywords Seo" value="{{old('seo_keyword')}}">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Seo description</label>
								<input type="text" class="form-control" name="seo_description" placeholder="Description Seo" value="{{old('seo_description')}}">
							</div>
							<div class="form-group">
								<label for="exampleTextarea">Thông tin khuyến mãi</label>
								<textarea class="form-control" name="sale" rows="3">{{old('sale')}}</textarea>
								<script type="text/javascript">
							      var editor = CKEDITOR.replace('sale',{
							       language:'vi',
							       filebrowserImageBrowseUrl : '../admin/ckfinder/ckfinder.html?type=Images',
							       filebrowserFlashBrowseUrl : '../admin/ckfinder/ckfinder.html?type=Flash',
							       filebrowserImageUploadUrl : '../admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
							       filebrowserFlashUploadUrl : '../admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
							       });
							     </script>﻿
							</div>
							
							<div class="form-group">
								<label for="exampleTextarea">Mô tả sản phẩm</label>
								<textarea class="form-control" name="description" rows="3">{{old('description')}}</textarea>
								<script type="text/javascript">
							      var editor = CKEDITOR.replace('description',{
							       language:'vi',
							       filebrowserImageBrowseUrl : '../admin/ckfinder/ckfinder.html?type=Images',
							       filebrowserFlashBrowseUrl : '../admin/ckfinder/ckfinder.html?type=Flash',
							       filebrowserImageUploadUrl : '../admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
							       filebrowserFlashUploadUrl : '../admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
							       });
							     </script>﻿
							</div>
							
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<select class="form-control" name="categorie_id">
									@foreach($categories as $cate)
									<option value="{{$cate->id}}">{{$cate->name}}</option>
									@endforeach
								</select>
							</div>
							<div class="checkbox">
								<label>
									<input type="radio" name="display" value="1" checked>Hiển thị
								</label>
								<label>
									<input type="radio" name="display" value="0">Tắt hiển thị
								</label>
							</div>
							<div class="file-upload">	
							  	<div class="image-upload-wrap image-upload-wrap0">
								    <input class="file-upload-input file-upload-input0" type='file' name="image" onchange="readURL(this);" accept="image/*" />
								    <div class="drag-text">
								      <h3>Ảnh đại diện </h3>
								    </div>
							  	</div>
							  	<div class="file-upload-content file-upload-content0">
							    	<img class="file-upload-image file-upload-image0" src="#" alt="your image" />
							    	<div class="image-title-wrap image-title-wrap0">
							      		<button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title image-title0 text-center">Uploaded Image</span></button>
							    	</div>
							  	</div>
							</div>
							<div class="file-upload">	
							  	<div class="image-upload-wrap image-upload-wrap1">
								    <input class="file-upload-input file-upload-input1" type='file' name="image1" onchange="readURL1(this);" accept="image/*" />
								    <div class="drag-text">
								      <h3>Ảnh detail</h3>
								    </div>
							  	</div>
							  	<div class="file-upload-content file-upload-content1">
							    	<img class="file-upload-image file-upload-image1" src="#" alt="your image" />
							    	<div class="image-title-wrap image-title-wrap1">
							      		<button type="button" onclick="removeUpload1()" class="remove-image">Remove <span class="image-title image-title1 text-center">Uploaded Image</span></button>
							    	</div>
							  	</div>
							</div>
							<div class="file-upload">	
							  	<div class="image-upload-wrap image-upload-wrap2">
								    <input class="file-upload-input file-upload-input2" type='file' name="image2" onchange="readURL2(this);" accept="image/*" />
								    <div class="drag-text">
								      <h3>Ảnh detail</h3>
								    </div>
							  	</div>
							  	<div class="file-upload-content file-upload-content2">
							    	<img class="file-upload-image file-upload-image2" src="#" alt="your image" />
							    	<div class="image-title-wrap image-title-wrap2">
							      		<button type="button" onclick="removeUpload2()" class="remove-image">Remove <span class="image-title image-title2 text-center">Uploaded Image</span></button>
							    	</div>
							  	</div>
							</div>
							<div class="file-upload">	
							  	<div class="image-upload-wrap image-upload-wrap3">
								    <input class="file-upload-input file-upload-input3" type='file' name="image3" onchange="readURL3(this);" accept="image/*" />
								    <div class="drag-text">
								      <h3>Ảnh detail</h3>
								    </div>
							  	</div>
							  	<div class="file-upload-content file-upload-content3">
							    	<img class="file-upload-image file-upload-image3" src="#" alt="your image" />
							    	<div class="image-title-wrap image-title-wrap3">
							      		<button type="button" onclick="removeUpload3()" class="remove-image">Remove <span class="image-title image-title3 text-center">Uploaded Image</span></button>
							    	</div>
							  	</div>
							</div>
						</div>
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			
		</div>
	</div>
@endsection()
@section('js')
	<!-- Vendor JS -->
		<script type="text/javascript" src="{{asset('admin/vendor/jquery/jquery-1.12.3.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/tether/js/tether.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/bootstrap4/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/detectmobilebrowser/detectmobilebrowser.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/jscrollpane/jquery.mousewheel.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/jscrollpane/mwheelIntent.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/jscrollpane/jquery.jscrollpane.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/jquery-fullscreen-plugin/jquery.fullscreen-min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/waves/waves.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/switchery/dist/switchery.min.js')}}"></script>

		<!-- Neptune JS -->
		<script type="text/javascript" src="{{asset('admin/js/app.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/js/demo.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/js/upload-image.js')}}"></script>
@endsection