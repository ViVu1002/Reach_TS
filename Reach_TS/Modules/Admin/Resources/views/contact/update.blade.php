@extends('admin::layouts.master')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{route('admin.home')}}">
                    <em class="fa fa-home"></em>
                </a></li>
                <li><a href="{{route('admin.get.list.contact')}}">Liên hệ</a></li>
                <li class="active">Cập nhật</li>
            </ol>
        </div>
        <br>
        <br>
        <br>
		<div class="">
			@include("admin::contact.form")
		</div>
	</div>
@stop