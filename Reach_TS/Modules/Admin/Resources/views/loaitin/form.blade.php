
<form action="" method="POST" enctype="multipart/form-data">
	@csrf
	<div class="row">
		<div class="col-sm-8">
			<div class="form-group">
				<label for="lt_name">Tên loại tin</label>
				<input type="text" class="form-control" name="lt_name" placeholder="Nhập tên loại tin" value="{{old('lt_name',isset($category->lt_name) ? $category->lt_name : '') }}">
				@if($errors->has('lt_name'))
					<div class="error-text">
						{{$errors->first('lt_name')}}
					</div>
				@endif
			</div>
			<div class="form-group">
				<label for="lt_category_id">Thể loại</label>
				<select name="lt_category_id" id="" class="form-control">
					<option value="">--Chọn thể loại--</option>
					@if(isset($categories))
						@foreach($categories as $category)
							<option value="{{$category->id}}" {{ old('lt_category_id',isset($loaitin->lt_category_id) ? $loaitin->lt_category_id : '') == $category->id ? "selected='selected'" : ""}}>{{$category->c_name}}</option>
						@endforeach
					@endif
				</select>
			</div>
			<div class="form-group">
				<label for="lt_title_seo">Tiêu đề</label>
				<input type="text" class="form-control" name="lt_title_seo" placeholder="Nội dung..." value="{{old('lt_title_seo',isset($category->lt_title_seo) ? $category->lt_title_seo : '') }}">
				@if($errors->has('lt_title_seo'))
					<div class="error-text">
						{{$errors->first('lt_title_seo')}}
					</div>
				@endif
			</div>
		
			<div class="form-group">
				<label for="lt_avatar">Avatar:</label>
				<input type="file" name="lt_avatar" class="form-control">
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

