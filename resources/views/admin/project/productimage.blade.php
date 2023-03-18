@extends('admin.layouts.master')
@section('customstyle')
<style>
.image-upload-from {
    position: relative;
    margin-top: 1.5rem;
    margin-bottom: 1.5rem;
}

#uploadFile {
    position: relative;
}
.media-wrapper{
	background:#2a2d36;
	padding:25px 10px 10px;
	border-radius:5px;
	position:relative;
}
.product-preview-img{
	display:inline-block;
	width:100%;
	height:150px;
	/* border-radius:1px;
	border: 1px dashed #FFF; */
	margin-bottom:10px;
}
.product-preview-img img{
	width: 100%;
	height: 100%;
	display: inline-block;
	margin-bottom: 10px;
}
.edit-product-img, .delete-product-img{
	/* position: absolute; */
	padding: 0;
	/* display: inline-block;
	top: 21%;
	left: 32%; */
	color: #e22e2e;
	/* width:25px;
	height:25px; */
}
.update-product-image{
	position:absolute;
	top:0px;
	right:6px;
}
.image-upload{
	display:inline-block;
	position:absolute;
	opacity:0;
}
</style>
@endsection
@section('content')
<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">

					<div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 mt-4 product_images_grid">
						@if(!empty($productImages) && count($productImages) > 0) 
							@foreach($productImages as $imageData)
							<div class="col mb-3">
								<div class="media-wrapper">
									<div class="product-preview-img">
									@php 
										$productImg = '/assets/admin/img/testimonial-1.jpg'; 
									@endphp
									@if(file_exists(public_path('/uploads/products/').$imageData->image))
										@php 
											$productImg = asset('/uploads/products').'/'.$imageData->image;
										@endphp
									@endif
										<img src="{{$productImg}}" alt="Product Image" id="productImagePreview_{{$imageData->id}}">
									</div>
									<div class="update-product-image">
										<a href="javascript:void(0);" class="btn delete-product-img image-delete" data-productimage-id="{{$imageData->id}}" data-product-id="{{$productId}}"><i class="fa fa-trash"></i></a>
										|
										<button class="btn btn-default edit-product-img"><i class="fa fa-edit"></i> </button>
										<input type="file" class="image-upload"  data-productImage-id="{{$imageData->id}}" data-product-id="{{$productId}}" accept="image/*"/>	
									</div>
								</div>
							</div>
							@endforeach
						@endif
						<div class="col mb-3">
							<div class="media-wrapper">
								<div class="product-preview-img">
									<img src="/assets/admin/img/upload.png" alt="" id="productImagePreview">
								</div>
								<div class="update-product-image">
									<button class="btn btn-default edit-product-img"><i class="fa fa-edit"></i> </button>
									<input type="file" class="image-upload" data-productImage-id="" data-product-id="{{$productId}}" accept="image/*"/>
								</div>
							</div>
						</div>
					</div>
		
</div>
<!-- Widgets End -->
@endsection
@section('customscript')
<script src="{{asset('assets/admin/js/product.js')}}"></script>
<script>
	var options = {};
	let Products = new product_manager(options);
</script>
@endsection