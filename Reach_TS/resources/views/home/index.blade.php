@extends('layouts.app')
@section('content')
    <!--servicies-->
    <div>
        <div class="container">
             <div class="row">
                <div class="col-xl-4 servicies">
                    <div class="servicies-left">
                        <div class="servicies-1">1068<sup>+</sup></div>
                        <p class="servicies-2">Doanh nghiệp hợp tác</p>
                    </div>
                </div>
                <div class="col-xl-4 servicies">
                    <div class="servicies-center">
                        <div class="servicies-3">70<sup>+</sup></div>
                        <p class="servicies-4">Giáo viên giảng dạy</p>
                    </div>
                </div>
                <div class="col-xl-4 servicies">
                    <div class="servicies-right">
                        <div class="servicies-5">16.000<sup>+</sup></div>
                        <p class="servicies-6">Học sinh đào tạo</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end section-->
        <div class="section">
            <div class="container">
                <div class="section_1">
                    <h4><a href="{{route('get.loai.tin')}}" class="section_top">chuyên ngành đào tạo</a></h4>
                </div>
                <div class="row">
                    @if(isset($tintucHoc))
                        @foreach($tintucHoc as $hoc)
                        <div class="col-xl-4">
                        <div class="section_2">
                            <img src="{{ asset('upload/tintuc').'/'.$hoc->tt_avatar }}" alt="maytinh" style="width:100; height:100px">
                            <h4>
                                {{$hoc->tt_name}}
                            </h4>
                            <p>
                               {!! $hoc->tt_content!!}
                            </p>
                            <div>
                                <a href="{{route('get.loai.tin')}}" class="section_bottom">Tìm Hiểu Thêm...</a>
                            </div>
                        </div>
                        </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="sukien">
            <div class="container">
                <div class="sukien_1">
                    <h3>tin tức & sự kiện</h3>
                </div>
                <div class="box"></div>
                <div class="sukien_2">
                    <p>REACH tiếp tục sứ mệnh hỗ trợ cho thanh niên khó khăn được học nghề và có công việc với mức thu nhập ổn định. 
                    </p>
                </div>
                <div class="sukien_3">
                    <nav class="navbar navbar-expand-sm sukien-top">
                        <ul class="navbar-nav home">
                            <li class="nav-item">
                              <a class="nav-link" href="{{route('get.tin.tuc')}}">Tin Tức</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{route('get.loai.tin')}}">Hướng nghiệp</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{route('get.list.article')}}">Thể Thao</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="row">
                    @if(isset($tintucNews))
                        @foreach($tintucNews as $news)
                            <div class="col-xl-3">
                            <div class="sukien_4">
                                <div>
                                    <a href="{{route('get.list.article')}}"><img src="{{ asset('upload/tintuc').'/'.$news->tt_avatar }}" alt="" style="width:250px; height:200px;" ></a>
                                </div>
                                <p>{!! $news->tt_content!!}
                                </p>
                                
                                <div class="sukien_5">
                                    <a href="{{route('get.tin.tuc')}}">xem tiếp >></a>
                                </div>
                            </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                
            </div>
        </div>
    <!--tin tức-->
    @if(isset($tintucNganh))
        <div class="tintuc">
            <div class="container">
                <h3 class="tintuc_content">Giảng viên của Reach</h3>
                <div class="row">
                    @foreach($tintucNganh as $nganh)
                    <div class="col col-expand-xl 6">
                        <div class="tintuc_top_img">
                            <a href="{{route('get.tin.tuc')}}"><img class="tintuc_img" src="{{ asset('upload/tintuc').'/'.$nganh->tt_avatar }}"></a>
                        </div>
                        <div class="tintuc_top_content">
                            <h4 class="tintuc_content_top">{{$nganh->tt_name}}</h4>
                            <h5 class="tintuc_content_bot">{{$nganh->tt_title_seo}}</h5>
                            <p>{!! $nganh ->tt_content !!}</p>
                        </div>
                        <br>
                        <a style="text-decoration: none;" href="#" class="tintuc_top">Xem thêm >></a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <!--footer-->
@stop