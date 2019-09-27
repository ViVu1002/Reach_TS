@extends('layouts.app')
@section('content')
	<style type="text/css">
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
            text-decoration: none;
            color: #fb9d0a;
        }
        .loai_tin_top_content{
            text-transform: uppercase;
            display: inline;
            margin-top: 10px;
            margin-left: 10px;
            font-weight: 600;
            color: #fb9d0a;
        }
    </style>
    <div class="container">
    	<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item "><a href="{{route('home')}}" class="nav_top_loaitin">Trang chủ</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Ngành học</li>
            <li class="breadcrumb-item active" aria-current="page"> Lập trình Web</li>
		  </ol>
		</nav>
        <div class="row">
            <div class="col col-3">
                <ul style="display: block;" class="nav_top_loai_tin">NGÀNH HỌC
                    <li class="nav_loai_tin" style="border-left: 5px solid #fb9d0a; color: #fb9d0a;background: #fff;">Lập trình Web</li>
                    <li class="nav_loai_tin"><a href="{{route('get.list.do.hoa.3d')}}" class="loai_tin_nav_bar">Thiết kế đồ họa 3D</a></li>
                    <li class="nav_loai_tin"><a href="{{route('get.list.do.hoa.2d')}}" class="loai_tin_nav_bar">Thiết kế đồ họa 2D</a></li>
                    <li class="nav_loai_tin"><a href="{{route('get.list.lam.toc')}}" class="loai_tin_nav_bar">Làm tóc</a></li>
                    <li class="nav_loai_tin"><a href="{{route('get.list.khach.san')}}" class="loai_tin_nav_bar">Nghiệp vụ khách sạn 5* YCI</a></li>
                    <li class="nav_loai_tin"><a href="{{route('get.list.video')}}" class="loai_tin_nav_bar">Chỉnh sửa video</a></li>
                    <li class="nav_loai_tin"><a href="{{route('get.list.nau.an')}}" class="loai_tin_nav_bar">Chế biến món ăn</a></li>
                    <li class="nav_loai_tin"><a href="{{route('get.list.pha.che')}}" class="loai_tin_nav_bar">Nghiệp vụ bàn bar pha chế</a></li>
                    <li class="nav_loai_tin"><a href="{{route('get.list.marketing')}}" class="loai_tin_nav_bar">Bán hàng và Marketing</a></li>
                </ul>
            </div>
            @if(isset($laptrinhWeb))
            <div class="col col-9">
                @foreach($laptrinhWeb as $web)
                    <img src="{{asset('img/image/arrow.png')}}" style="margin-top: -15px" alt="ảnh" title="Lập trình Web">
                    <h1 class="loai_tin_top_content">{{$web->tt_name}}</h1>
                    <div style="margin-top: 50px; font-size: 18px">
                    <p>{{$web->tt_title_seo}}</p>
                    <p style="margin-top: 50px">{!! $web->tt_content !!}</p>
                 </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>	
@stop