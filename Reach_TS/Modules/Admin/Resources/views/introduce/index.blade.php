@extends('admin::layouts.master')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{route('admin.home')}}">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">Giới thiệu</li>
            </ol>
        </div>
		<div class="table-responsive">
			<h2>Giới thiệu    <a href="{{route('admin.get.create.introduce')}}" style="float: right;"><i class="fa fa-plus-circle"></i></a></h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Tên bài viết</th>
						<th>Tiêu đề</th>
						<th>Thao tác</th>
					</tr>
				</thead>
				<tbody>
					@if(isset($introduces))
						@foreach($introduces as $in)
							<tr>
								<td>{{ $in->id }}</td>
								<td>
									{{ $in->i_name }}
									<img src="{{asset('upload/introduce').'/'.$in->i_avatar}}" style="width: 80px; height: 80px; display: block;">
								</td>
								<td>
									{{$in->i_title_seo}}
								</td>
								<td>
									<a href="{{route('admin.get.edit.introduce',$in->id)}}" style="padding: 5px 10px ; border: 1px solid #eee ; font-size: 12px"><i class="fas fa-edit"></i>Cập nhật</a>
									<a href="{{route('admin.get.action.introduce',['delete', $in->id])}}" style="padding: 5px 10px ; border: 1px solid #eee ; font-size: 12px"><i class="fas fa-trash-alt"></i>Xóa</a>
								</td>
							</tr>
						@endforeach
					@endif
				</tbody>
			</table>
		</div>
	</div>
@stop