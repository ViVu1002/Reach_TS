
<form action="" method="POST" enctype="multipart/form-data">
	@csrf
	<div class="row">
		<div class="col-sm-8">
			<div class="form-group">
				<label for="s_name">Tên ảnh</label>
				<input type="text" class="form-control" name="s_name" placeholder="Nhập tên của ảnh" value=" {{old('s_name',isset($slide->s_name) ? $slide->s_name : '') }}">
				@if($errors->has('s_name'))
					<div class="error-text">
						{{$errors->first('s_name')}}
					</div>
				@endif
			</div>
			<div class="form-group">
				<label for="s_avatar">Avatar:</label>
				<input type="file" name="s_avatar" class="form-control">
			</div>
			<div class="form-group">
				<div class="checkbox">
					<label><input type="checkbox" name="hot"> Nổi bật </label>
				</div>
			</div>
		</div>
	</div>
	<button type="submit" class="btn btn-success">Submit</button>
</form>

