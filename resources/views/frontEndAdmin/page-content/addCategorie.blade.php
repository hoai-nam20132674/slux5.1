@extends('frontEndAdmin.layout.default')
@section('css')
	<link rel="stylesheet" href="{{asset('admin/vendor/bootstrap4/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/themify-icons/themify-icons.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/animate.css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/jscrollpane/jquery.jscrollpane.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/waves/waves.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/switchery/dist/switchery.min.css')}}">
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
				<form action="{{URL::route('postAddCategorie')}}" method="POST">
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
								<label for="exampleInputEmail1">Tên danh mục</label>
								<input type="text" class="form-control" name="name" placeholder="Nhập tên danh mục" value="{{oll('name')}}">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Tiêu đề</label>
								<input type="text" class="form-control" name="title" placeholder="Nhập tiêu đề danh mục" value="{{old('title')}}">
							</div>
							
							<div class="form-group">
								<label for="exampleInputEmail1">Keywords</label>
								<input type="text" class="form-control" name="seo_keyword" placeholder="Keywords Seo" value="{{old('seo_keyword')}}">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Description</label>
								<input type="text" class="form-control" name="seo_description" placeholder="Description Seo" value="{{old('seo_description')}}">
							</div>
							<div class="form-group">
								<label for="exampleTextarea">Nội dung</label>
								<textarea class="form-control" name="content" rows="3">{{old('content')}}</textarea>
								<script type="text/javascript">
							      var editor = CKEDITOR.replace('content',{
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
								<select class="form-control" name="parent_id">
									<option value="0">Thư Mục Gốc</option>
									@foreach($categories as $cate)
									<option value="{{$cate->id}}">{{$cate->name}}</option>
									@endforeach
								</select>
							</div>
							<fieldset class="form-group">
									
									<label>
										<input type="radio" name="type" id="optionsRadios1" value="0" checked>
										Tin Tức
									</label>
								
								
									<label>
										<input type="radio" name="type" id="optionsRadios2" value="1">
										List Sản phẩm
									</label>
								
							</fieldset>
							<div class="checkbox">
								<label>
									<input type="radio" id="optionsRadios1" name="display" value="1" checked>Hiển thị
								</label>
								<label>
									<input type="radio" id="optionsRadios2" name="display" value="0">Tắt hiển thị
								</label>
								
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
@endsection