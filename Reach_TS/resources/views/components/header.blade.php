 
 <header>
    <div class="container">
        <div class="header_top">
            @if(isset($lienhe))
            <div class="row">
                @foreach($lienhe as $he)
                <div class="col-xl-3">
                    <div class="header_phone">
                        <a href="#">
                            <img src="{{asset('upload/tintuc').'/'.$he->tt_avatar}}" alt="phone" width="15px;" height="15px;">
                           {{$he->tt_name}}
                        </a>    
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</header>   

<nav class="sticky-top nav_top">
    <div class="container-fluid">
        <div class="nav">
            <div class="nav-logo">
                <a href="{{route('home')}}">
                    <img src="{{asset('img/image/logo.png')}}" alt="" width="100px" height="100px">
                </a>
            </div>
            <div class="nav-home">
                <a href="{{route('home')}}" class="icon-home">
                    <img src="{{asset('img/image/home.png')}}" alt="" width="20px" height="23px">
                </a>
            </div>
            <div class="navbar navbar-expand-xl">
              <ul class="navbar-nav nav-menu">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('get.introduce')}}">Giới thiệu</a>
                </li>
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ngành học
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{route('get.loai.tin')}}">Lập trình Web</a>
                        <a class="dropdown-item" href="{{route('get.list.do.hoa.3d')}}">Thiết kế đồ họa 3D</a>
                        <a class="dropdown-item" href="{{route('get.list.do.hoa.2d')}}">Thiết kế đồ họa 2D</a>
                        <a class="dropdown-item" href="{{route('get.list.lam.toc')}}">Làm tóc</a>
                        <a class="dropdown-item" href="{{route('get.list.nau.an')}}">Chế biến món ăn</a>
                        <a class="dropdown-item" href="{{route('get.list.khach.san')}}">Nghiệp vụ khách sạn 5* YCI</a>
                        <a class="dropdown-item" href="{{route('get.list.video')}}">Chỉnh sửa video</a>
                        <a class="dropdown-item" href="{{route('get.list.pha.che')}}">Nghiệp vụ bàn bar pha chế</a>
                        <a class="dropdown-item" href="{{route('get.list.marketing')}}">Bán hàng và Marketing</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tuyển sinh
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{route('get.list.loaitin')}}">Hồ sơ trực tiếp</a>
                        <a class="dropdown-item" href="{{route('get.register')}}">Đăng kí Online</a>
                    </div>
                </div>
                   <li class="nav-item">
                    <a class="nav-link" href="{{route('get.tin.tuc')}}">Tin tức và thư viện</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('get.list.article')}}">Đời sống học viên</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('get.contact')}}">Liên hệ</a>
                </li>
              </ul>
            </div>
            <div class="nav-book">
                <a href="{{route('get.register')}}">
                    <img src="{{asset('img/image/book.png')}}" alt="" width="20px" height="23px">
                    <span>Đăng ký<small>Nhập học</small></span>
                </a>
            </div>
            
        </div>
    </div>
</nav>
    <!-- start section-->
    <!--section-carousel-->
<div class="section-carousel">
    <div class="container-fluid">
        <div id="bibi" class="carousel slide" data-ride="carousel">
            
            <ul class="carousel-indicators">
                @foreach($slide as $sl) 
                <li data-target="#bibi" data-slide-to="{{$loop->index}}" class="{{$loop->first ? 'active' : ''}}"></li>
                @endforeach
            </ul>
            
            <div class="carousel-inner ">
                @foreach($slide as $sl)
                    <div class="carousel-item {{$loop->first ? 'active' : ''}} ">
                      <img src="{{ asset('upload/slide').'/'.$sl->s_avatar }}" alt="" width="100%" height="800px">
                    </div>
                @endforeach           
            </div>
            
            <a class="carousel-control-prev" href="#bibi" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#bibi" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
</div>
    <!--start nav-->