@extends('layouts.app')
@section('content')
	<div class="contact_header">
		<div class="container">
			<h1 class="lien_he_header">
				Liên hệ
			</h1>
			<div class="lien_he_line"></div>
			<div class="row">
				@if(isset($contacts))
				<div class="col col-8">
					@foreach($contacts as $contact)
					<img class="lien_he_img" src="{{ asset('upload/contact').'/'.$contact->con_avatar }}">
					@endforeach
				</div>
				<div class="col col-4">
					@foreach($contacts as $con)
					<div style="margin-bottom: 180px">
						<h3 class="lien_he_content">{{$con->con_name}}</h3>
						<p>{{$con->con_title_seo}}</p>
						<p>{!! $con->con_content!!}</p>
					</div>
					@endforeach
				</div>
				@endif
			</div>
		</div>
	</div>
@stop