@extends('admin::layouts.master')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{route('admin.home')}}">
                    <em class="fa fa-home"></em>
                </a></li>
                <li><a href="{{route('admin.get.list.category')}}">Thể loại</a></li>
                <li class="active">Loại tin</li>
            </ol>
        </div>
		<div class="table-responsive">
			<h2>Quản lí loại tin    <a href="{{route('admin.get.create.loaitin')}}" style="float: right;"><i class="fa fa-plus-circle"></i></a></h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Tên loại tin</th>
						<th>Thể loại</th>
						<th>Trạng thái</th>
						<th>Nổi bật</th>
						<th>Thao tác</th>
					</tr>
				</thead>
				<tbody>
					@if(isset($loaitin))
						@foreach($loaitin as $lt)
							<tr>
								<td>{{ $lt->id }}</td>
								<td>
									{{ $lt->lt_name }}
									<img src="{{asset('upload/loaitin').'/'.$lt->lt_avatar}}" style="width: 80px; height: 80px; display: block;">
								</td>
								<td>{{ isset($lt->category->c_name) ? $lt->category->c_name : '[N\A]' }}</td>
								<td>
									<a href="{{route('admin.get.action.loaitin', ['active', $lt->id] )}}" class="label {{$lt->getStatus($lt->lt_active)['class']}}">{{$lt->getStatus($lt->lt_active)['name']}}</a>
								</td>
								<td>
									<a href="{{route('admin.get.action.loaitin', ['hot',$lt->id])}}" class="label {{$lt->getHot($lt->lt_hot)['class']}}">{{$lt->getHot($lt->lt_hot)['name']}}</a>
								</td>
								<td>
									<a href="{{route('admin.get.edit.loaitin',$lt->id)}}" style="padding: 5px 10px ; border: 1px solid #eee ; font-size: 12px"><i class="fas fa-edit"></i>Cập nhật</a>
									<a href="{{route('admin.get.action.loaitin',['delete', $lt->id])}}" style="padding: 5px 10px ; border: 1px solid #eee ; font-size: 12px"><i class="fas fa-trash-alt"></i>Xóa</a>
								</td>
							</tr>
						@endforeach
					@endif
				</tbody>
			</table>

			<nav aria-label="Page navigation example">
			  <ul class="pagination">
			    <li class="page-item">
			      <a class="page-link" href="#" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			        <span class="sr-only">Previous</span>
			      </a>
			    </li>
			    @for($i=1; $i<=$loaitin->lastPage(); $i=$i+1)
			    <li class="page-item">
			    	<a class="page-link" href="{!! $loaitin->url($i) !!}">{!! $i !!}</a>
			    </li>
			    @endfor
			    <li class="page-item">
			      <a class="page-link" href="#" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			        <span class="sr-only">Next</span>
			      </a>
			    </li>
			  </ul>
			</nav>

		</div>
	</div>
@stop