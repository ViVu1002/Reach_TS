@extends('layouts.app')
@section('content')
	<style>
		.breadcrumb-item-top{
			border-left: 5px solid #fd7522;
			list-style: none;
			background: #f7f7f7;
			font-size: 20px;
			padding: 25px;
			margin-bottom: 5px;
			margin-top: 150px;
		}
		.breadcrumb-top{
			color: #fd7522;
		}
		.breadcrumb-top:hover{
			text-decoration: none;
			color: #fd7522;
		}
		.breadcrumb-item{
			list-style: none;
			background: #f7f7f7;
			color: #222;
			font-size: 20px;
			padding: 25px;
			margin-bottom: 5px;
		}
		.breadcrumb-bottom:hover{
			text-decoration: none;
			color: #fd7522;
		}
		.xet-tuyen-bot{
			color: #fff;
			margin-top:20px;
		}
		.xet-tuyen-bot:hover{
			text-decoration: none;
			color: #fff;
		}
		.xet-tuyen{
			padding:30px 25px;
			margin-top: 40px;
			color: #fff;
			margin-bottom: 20px;
			background-image: url({{asset('img/image/bg-dangkytuyensinh.png')}});
		}
		.lien-he{
			padding:30px 25px;
			margin-bottom: 100px;
			color: #fff;
			background-image: url({{asset('img/image/bg-timvanphong.png')}});
		}
		.bong_da_reach{
			width: 700px;
			height: 400px;
			margin-top: 150px;
		}
		.xem-them-top{
			color: #555;
			margin-bottom: 30px;
		}
		.xem-them-top:hover{
			color: #fd7522;
			text-decoration: none;
		}
		.doituonghocvien{
			margin-top: 50px;
			width: 300px;
			height: 200px;
		}
		.pagination-article{
			margin:50px 0 100px 230px;
		}
	</style>
	<div class="container" style="font-size: 18px">
		<div class="row">
			@if(isset($sukien))
			<div class="col col-xl-8">
				@foreach($sukien as $sk)
				<div>
					<img class="bong_da_reach" src="{{ asset('upload/tintuc').'/'.$sk->tt_avatar }}">
					<h4 style="margin-top: 20px;">{{$sk->tt_title_seo}}</h4>
					<a href="#" class="xem-them-top">Xem thêm ></a>
				</div>
				@endforeach
				<div class="row">
					<div class="col col-xl-6">
						@foreach($xedap as $xe)
						<div>
							<img src="{{ asset('upload/tintuc').'/'.$xe->tt_avatar }}" class="doituonghocvien">
							<p>{{$xe->tt_title_seo}} </p>
							<a href="#" class="xem-them-top">Xem thêm</a>
						</div>
						@endforeach
					</div>
					<div class="col col-xl-6" >
						@foreach($canhen as $en)
						<div>
							<img src="{{ asset('upload/tintuc').'/'.$en->tt_avatar }}" class="doituonghocvien">
							<p>{{$en->tt_title_seo}} </p>
							<a href="#" class="xem-them-top">Xem thêm</a>
						</div>
						@endforeach
					</div>
				</div>

				<nav aria-label="Page navigation example">
				  	<ul class="pagination pagination-article">
				    	<li class="page-item">
				      		<a class="page-link" href="#" aria-label="Previous">
				        	<span aria-hidden="true">&laquo;</span>
				        	<span class="sr-only">Previous</span>
				      		</a>
				    	</li>
					    <li class="page-item"><a class="page-link" href="#">1</a></li>
					    <li class="page-item"><a class="page-link" href="#">2</a></li>
					    <li class="page-item"><a class="page-link" href="#">3</a></li>
					    <li class="page-item"><a class="page-link" href="#">4</a></li>
					    <li class="page-item"><a class="page-link" href="#">5</a></li>
					    <li class="page-item">
				      	<a class="page-link" href="#" aria-label="Next">
				        	<span aria-hidden="true">&raquo;</span>
				        	<span class="sr-only">Next</span>
				      	</a>
				    </li>
				  </ul>
				</nav>
				
			</div>
		@endif
			<div class="col col-xl-4">
				<div class="article_top_nav">
					<ul>
						<li class="active breadcrumb-item-top" ><a href="#" class="breadcrumb-top">Tin tức & thư viện</a></li>
						<li class="breadcrumb-item"><a href="{{route('get.list.article')}}" class="breadcrumb-bottom">Đời sống học viên</a></li>
						<li class="breadcrumb-item"><a href="{{route('get.introduce')}}" class="breadcrumb-bottom">Giới thiệu</a></li>
					</ul>
				</div>
				<div class="xet-tuyen">
					<h4 style="font-size: 25px">Nộp hồ sơ xét tuyển</h4>
					<p>Vui lòng đăng ký thông tin </p>
					<p>Tư vấn viên sẽ gọi điện cho bạn sau 24h, xin cảm ơn!</p>
					<a href="{{route('get.list.loaitin')}}" class="xet-tuyen-bot">Nộp hồ sơ ></a>
				</div>
				<div class="lien-he">
					<h3 style="margin-bottom: 40px;margin-top: 30px">Tìm văn phòng tuyển sinh</h3>
					<a href="{{route('get.contact')}}"><img class="lien-he-bot" src="{{asset('img/image/right-arrow.png')}}" style="width: 20px;height: 20px"></i></a>
				</div>
			</div>
		</div>
	</div>
@stop