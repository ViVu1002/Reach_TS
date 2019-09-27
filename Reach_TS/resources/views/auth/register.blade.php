@extends('layouts.app')

@section('content')
@if(isset($dangki))
<div class="container">
    @foreach($dangki as $ki)
    <h1 class="register_top">{{$ki->tt_name}}</h1>
    <div class="register_line"></div>
    <p>
        {!! $ki->tt_content !!}
    </p>
    <p class="register_content_top">
        {{$ki->tt_title_seo}}
    </p>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-bottom: 100px">
                <div class="card-header">{{ __('Đăng kí') }}</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Họ và tên') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- form-item -->
                        <div class="form-group row">
                            <label class="form__label phone-number">Số điện thoại*</label>

                            <div class="col-md-6">
                                <input id="phone-number" class="form-control" type="number" name="phone" aria-required="true" autocomplete="text" required />

                                @error('phone-number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><!-- End / form-item -->
                        
                        <div class="form-group row">
                            <label class="form__label date_register">Ngày sinh</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="date" placeholder="dd/mm/yyyy" />
                            </div>   
                        </div><!-- End / form-item -->
                        
                        <!-- form-item -->
                        <div class="form-group row">
                            <label class="form__label register_nganh_hoc">Ngành học</label>
                            <div class="col-md-6">
                                <select class="form-control" name="nganh_hoc" aria-required="true" required >
                                <option value="Lập trình Web" >Lập trình Web</option>
                                <option value="Thiết kế đồ họa 2D" >Thiết kế đồ họa 2D</option>
                                <option value="Thiết kế đồ họa 3D" >Thiết kế đồ họa 3D</option>
                                <option value="Nghiệp vụ Bàn Bar pha chế ">Nghiệp vụ Bàn Bar pha chế </option>
                                <option value="Chế biến món ăn ">Chế biến món ăn </option>
                                <option value="Nghiệp vụ khách sạn 5 sao YCI ">Nghiệp vụ khách sạn 5 sao YCI </option>
                                <option value="Chỉnh sửa video ">Chỉnh sửa video </option>
                                <option value="Làm tóc và vẽ móng ">Làm tóc và vẽ móng </option>
                                <option value="Bán hàng Marketing ">Bán hàng Marketing </option>
                            </select>
                            </div>
                        </div><!-- End / form-item -->
                        
                        <!-- form-item -->
                        <div class="form-group row">
                            <label class="form__label register_co_so">Bạn muốn học tại*</label>

                            <div class="form-group row">
                                <select class="form-control" name="co_so" aria-required="true" required style="width: 330px ; margin-left: 40px" >
                                <option value="">Chọn cơ sở</option>
                                <option value="Hà Nội">Hà Nội</option>
                                <option value="Hồ Chí Minh" >Hồ Chí Minh</option>
                                <option value="Đà Nẵng" >Đà Nẵng</option>
                                <option value="Huế">Huế</option>
                                <option value="Hải Dương">Hải Dương</option>
                                <option value="Hội An">Hội An</option>
                            </select>
                            </div>
                        </div><!-- End / form-item -->
                        
                        <div class="checkbox register_bot">
                            <label>
                                <input type="checkbox" required > Trung tâm Reach có toàn quyền sử dụng những thông tin trên để truyền tải thông tin tuyển sinh cần thiết.
                            </label>
                        </div><!-- End / form-item -->
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary" value="Đăng kí">
                                {{ __('Đăng kí') }}
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endif
@endsection
