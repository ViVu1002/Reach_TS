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
        .tuyen_sinh_nav{
        	margin-left: 20px;
        }
        .tuyen_sinh_content{
        	margin-top: 50px;
        	margin-bottom: 25px;
        }
	</style>
    <div class="container" style="margin-bottom: 100px">
    	<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item "><a href="{{route('home')}}" class="nav_top_loaitin">Trang chủ</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Tuyển sinh</li>
            <li class="breadcrumb-item active" aria-current="page"> Hồ sơ trực tiếp</li>
		  </ol>
		</nav>

		<div class="row">
			<div class="col col-3">
				<ul style="display: block;" class="nav_top_loai_tin">Tuyển sinh
                    <li class="nav_loai_tin active" style="border-left: 5px solid #fb9d0a; color: #fb9d0a;background: #fff;">Hồ sơ trực tiếp</li>
                    <li class="nav_loai_tin"><a href="{{route('get.register')}}" class="loai_tin_nav_bar">Đăng kí Online</a></li>
                </ul>
			</div>
			@if(isset($hoso))
			<div class="col col-9">
				@foreach($hoso as $ho)
				<img src="{{ asset('upload/tintuc').'/'.$ho->tt_avatar}}" style="margin-top: -15px" alt="ảnh" title="Lập trình Web">
                <h1 class="loai_tin_top_content">{{$ho->tt_name}}</h1>
                <p style="margin-top: 30px">{{$ho->tt_title_seo}}</p>
                <h3 style="margin-top: 50px">Hồ sơ bao gồm:</h3>
                <ul style="list-style: square;">
                	{!! $ho->tt_content !!}
				</table>
				@endforeach
			</div>
			@endif
		</div>
    </div>
@stop