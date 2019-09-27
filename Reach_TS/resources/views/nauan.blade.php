@extends('layouts.app')
@section('content')
	<style>
		.breadcrumb{
    		background: #f9f9f9;
    		font-size: 18px;
            margin-top: 20px;
    	}
    	.nav_top_loaitin{
    		color: #6c757d;
    	}
    	.nav_top_loaitin:hover{
    		color: #fb9d0a;
    		text-decoration: none;
    	}
        .nav_top_loai_tin{
            font-size: 20px;
        }
        .nav_loai_tin{
            text-decoration: none;
            list-style: none;
            margin-top: 10px;
            margin-bottom: 10px;
            color: #6c757d;
            padding: 10px;
        }
        .nav_loai_tin:hover{
            background: #fff;
            color: #fb9d0a;
        }
        .loai_tin_nav_bar{
            color: #6c757d;
        }
        .loai_tin_nav_bar:hover{
            display: block;
            background: #fff;
            color: #fb9d0a;
            text-decoration: none;
        }
        .loai_tin_top_content{
            text-transform: uppercase;
            display: inline;
            margin-top: 10px;
            margin-left: 10px;
            font-weight: 600;
            color: #fb9d0a;
        }
        p{
            margin-left: 10px;
        }
        h3{
            margin-top: 30px;
        }
	</style>
	<div class="container" style="font-size: 16px">
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item "><a href="{{route('home')}}" class="nav_top_loaitin">Trang chủ</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Ngành học</li>
            <li class="breadcrumb-item active" aria-current="page">Chế biến món ăn</li>
		  </ol>
		</nav>

		<div class="row">
            <div class="col col-3">
                <ul style="display: block;" class="nav_top_loai_tin">NGÀNH HỌC
                    <li class="nav_loai_tin" style="border-left: 5px solid #fb9d0a; color: #fb9d0a;background: #fff;">Chế biến món ăn</li>
                    <li class="nav_loai_tin"><a href="{{route('get.loai.tin')}}" class="loai_tin_nav_bar">Lập trình Web</a></li>
                    <li class="nav_loai_tin"><a href="{{route('get.list.do.hoa.3d')}}" class="loai_tin_nav_bar">Thiết kế đồ họa 3D</a></li>
                    <li class="nav_loai_tin"><a href="{{route('get.list.do.hoa.2d')}}" class="loai_tin_nav_bar">Thiết kế đồ họa 2D</a></li>
                    <li class="nav_loai_tin"><a href="{{route('get.list.khach.san')}}" class="loai_tin_nav_bar">Nghiệp vụ khách sạn 5* YCI</a></li>
                    <li class="nav_loai_tin"><a href="{{route('get.list.video')}}" class="loai_tin_nav_bar">Chỉnh sửa video</a></li>
                    <li class="nav_loai_tin"><a href="{{route('get.list.nau.an')}}" class="loai_tin_nav_bar">Chế biến món ăn</a></li>
                    <li class="nav_loai_tin"><a href="{{route('get.list.pha.che')}}" class="loai_tin_nav_bar">Nghiệp vụ bàn bar pha chế</a></li>
                    <li class="nav_loai_tin"><a href="{{route('get.list.marketing')}}" class="loai_tin_nav_bar">Bán hàng và Marketing</a></li>
                </ul>
            </div>
            @if(isset($chebien))
            <div class="col col-9">
                @foreach($chebien as $che)
                <img src="{{asset('upload/tintuc').'/'.$che->tt_avatar}}" style="margin-top: -15px" alt="ảnh" title="Lập trình Web">
                <h1 class="loai_tin_top_content">{{$che->tt_name}}</h1>
                <p>{{$che->tt_title_seo}}</p>

                <p>{!! $che->tt_content !!}</p>
                @endforeach
			</div>
            @endif
		</div>
	</div>
@stop