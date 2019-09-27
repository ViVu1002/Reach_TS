@extends('admin::layouts.master')

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{route('admin.home')}}">
                    <em class="fa fa-home"></em>
                </a></li>
                <li><a href="{{route('admin.get.list.user')}}">Hồ sơ</a></li>
                <li class="active">Danh sách</li>
            </ol>
        </div>
		<div class="table-responsive">
			<h2>Quản lí hồ sơ    <a href="{{route('admin.get.create.user')}}" style="float: right;"><i class="fa fa-plus-circle"></i></a></h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th style="width: 250px">Tên người đăng kí</th>
						<th>Email</th>
						<th>Số điện thoại</th>
						<th>Ngày sinh</th>
						<th>Ngành học</th>
						<th>Cơ sở</th>
					</tr>
				</thead>
				<tbody>
					@if(isset($users))
						@foreach($users as $user)
							<tr>
								<td>{{ $user->id }}</td>
								<td>
									{{ $user->name }}
								</td>
								<td>{{$user->email}}</td>
								<td>{{$user->phone}}</td>
								<td>{{$user->date}}</td>
								<td>{{$user->nganh_hoc}}</td>
								<td>{{$user->co_so}}</td>
							</tr>
						@endforeach
					@endif
				</tbody>
			</table>

			<nav aria-label="Page navigation example">
			  <ul class="pagination" style="float: right;">
			    <li class="page-item">
			      <a class="page-link" href="#" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			        <span class="sr-only">Previous</span>
			      </a>
			    </li>
			    @for($i=1; $i<=$users->lastPage(); $i=$i+1)
			    <li class="page-item">
			    	<a class="page-link" href="{!! $users->url($i) !!}">{!! $i !!}</a>
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