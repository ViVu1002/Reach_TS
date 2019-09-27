@extends('layouts.app')
@section('content')
	<style type="text/css">
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
	</style>
	<div class="container" style="font-size: 16px">
		<div class="row">
			@if(isset($introduces))
				<div class="col col-xl-8">
					@foreach($introduces as $intro)
					<h1 class="content_top_header">{{$intro->i_name}}</h1>
					<div class="line_header_top"></div>
					<p class="timeline_top_header">
						{!! $intro->i_content!!}
					</p>
				@endforeach
				</div>
				<div class="col col-xl-4">
					<div class="article_top_nav">
						<ul>
							<li class="active breadcrumb-item-top" ><a href="#" class="breadcrumb-top">Giới thiệu</a></li>
							<li class="breadcrumb-item"><a href="{{route('get.list.article')}}" class="breadcrumb-bottom">Đời sống học viên</a></li>
							<li class="breadcrumb-item"><a href="{{route('get.tin.tuc')}}" class="breadcrumb-bottom">Tin tức & thư viện</a></li>
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
			@endif
		</div>
	</div>
@stop