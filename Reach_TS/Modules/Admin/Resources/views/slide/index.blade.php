@extends('admin::layouts.master')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{route('admin.home')}}">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">Slide</li>
            </ol>
        </div>
		<div class="table-responsive">
			<h2>Quản lí hình ảnh    <a href="{{route('admin.get.create.slide')}}" style="float: right;"><i class="fa fa-plus-circle"></i></a></h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Slide</th>
						<th>Ảnh</th>
						<th>Thao tác</th>
					</tr>
				</thead>
				<tbody>
					@if (isset($slides))
						@foreach($slides as $slide)
							<tr>
								<td>{{$slide->id}}</td>
								<td>
									{{$slide->s_name}}
									<img src="{{asset('upload/slide').'/'.$slide->s_avatar}}" style="width: 80px; height: 80px; display: block;">
								</td>
								<td>{{$slide->s_avatar}}</td>
								<td>
									<a href="{{route('admin.get.edit.slide',$slide->id)}}" style="padding: 5px 10px ; border: 1px solid #eee ; font-size: 12px"><i class="fas fa-edit"></i>Cập nhật</a>
									<a href="{{route('admin.get.action.slide',['delete', $slide->id])}}" style="padding: 5px 10px ; border: 1px solid #eee ; font-size: 12px"><i class="fas fa-trash-alt"></i>Xóa</a>
								</td>
							</tr>
						@endforeach
					@endif
				</tbody>
			</table>
		</div>
	</div>
@stop