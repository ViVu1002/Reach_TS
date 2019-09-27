@extends('admin::layouts.master')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{route('admin.home')}}">
                    <em class="fa fa-home"></em>
                </a></li>
                <li><a href="{{route('admin.get.list.category')}}">Thể loại</a></li>
                <li class="active">Bài viết</li>
            </ol>
        </div>
		<div class="table-responsive">
			<h2>Quản lí bài viết    <a href="{{route('admin.get.create.tintuc')}}" style="float: right;"><i class="fa fa-plus-circle"></i></a></h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th width="10%">Tên bài viết</th>
						<th>Thể loại</th>
						<th style="width: 500px">Nội dung chính</th>
						<th>Trạng thái</th>
						<th>Ngày tạo</th>
						<th>Thao tác</th>
					</tr>
				</thead>
				<tbody>
					@if(isset($tintucs))
						@foreach($tintucs as $tt)
							<tr>
								<td>{{ $tt->id }}</td>
								<td>
									{{ $tt->tt_name }}
									<img src="{{asset('upload/tintuc').'/'.$tt->tt_avatar}}" style="width: 80px; height: 80px; display: block;">
								</td>
								<td>{{ isset($tt->category->c_name) ? $tt->category->c_name : '[N\A]' }}</td>
								<td>
									{{$tt->tt_title_seo}}
								</td>
								<td>
									<a href="{{route('admin.get.action.tintuc', ['active', $tt->id] )}}" class="label {{$tt->getStatus($tt->tt_active)['class']}}">{{$tt->getStatus($tt->tt_active)['name']}}</a>
								</td>
								<td>
									{{$tt->created_at}}
								</td>
								<td>
									<a href="{{route('admin.get.edit.tintuc',$tt->id)}}" style="padding: 5px 10px ; border: 1px solid #eee ; font-size: 12px"><i class="fas fa-edit"></i>Cập nhật</a>
									<a href="{{route('admin.get.action.tintuc',['delete', $tt->id])}}" style="padding: 5px 10px ; border: 1px solid #eee ; font-size: 12px"><i class="fas fa-trash-alt"></i>Xóa</a>
								</td>
							</tr>
						@endforeach
					@endif
				</tbody>
			</table>

		</div>

		<nav aria-label="Page navigation example" class="pull-right">
			  <ul class="pagination">
			    <li class="page-item">
			      <a class="page-link" href="#" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			        <span class="sr-only">Previous</span>
			      </a>
			    </li>
			    @for($i=1; $i<=$tintucs->lastPage(); $i=$i+1)
			    <li class="page-item">
			    	<a class="page-link" href="{!! $tintucs->url($i) !!}">{!! $i !!}</a>
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
@stop