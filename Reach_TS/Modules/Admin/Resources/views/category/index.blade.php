@extends('admin::layouts.master')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
                <li>Danh mục</li>
                <li class="active">Thể loại</li>
            </ol>
        </div>
		<div class="table-responsive">
			<h2>Quản lí thể loại    <a href="{{route('admin.get.create.category')}}" style=" float: right;"><i class="fa fa-plus-circle"></i></a></h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th style="width: 300px">Tên thể loại</th>
						<th style="width: 500px">Tiêu đề</th>
						<th>Trạng thái</th>
						<th style="width: 300px">Thao tác</th>
					</tr>
				</thead>
				<tbody>
					@if(isset($categories))
						@foreach($categories as $category)
							<tr>
								<td>{{ $category->id }}</td>
								<td>{{ $category->c_name }}</td>
								<td>{{ $category->c_title_seo }}</td>
								<td>
									<a href="{{ route('admin.get.action.category', ['active', $category->id] ) }}" class="label {{ $category->getStatus($category->c_active)['class'] }}">{{ $category->getStatus($category->c_active)['name'] }}</a>	
								</td>
								<td>
									<a href="{{ route('admin.get.edit.category',$category->id) }}" style="padding: 5px 10px ; border: 1px solid #eee ; font-size: 12px"><i class="fas fa-edit"></i>Cập nhật</a>
									<a href="{{ route('admin.get.action.category',['delete', $category->id]) }}" style="padding: 5px 10px ; border: 1px solid #eee ; font-size: 12px"><i class="fas fa-trash-alt"></i>Xóa</a>
								</td>
							</tr>
						@endforeach
					@endif
				</tbody>
			</table>
		</div>
	</div>
@stop