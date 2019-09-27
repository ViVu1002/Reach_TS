
<form action="" method="POST" enctype="multipart/form-data">
	@csrf
	<div class="row">
		<div class="col-sm-8">
			<div class="form-group">
				<label for="tt_name">Tên bài viết</label>
				<input type="text" class="form-control" name="tt_name" placeholder="Nhập tên bài viết" value="{{old('tt_name',isset($tintuc->tt_name) ? $tintuc->tt_name : '') }}">
				@if($errors->has('tt_name'))
					<div class="error-text">
						{{$errors->first('tt_name')}}
					</div>
				@endif
			</div>
			
			<div class="form-group">
				<label for="tt_category_id">Thể loại</label>
				<select name="tt_category_id" id="" class="form-control">
					<option value="">--Chọn thể loại--</option>
					@if(isset($categories))
						@foreach($categories as $category)
							<option value="{{$category->id}}" {{ old('tt_category_id',isset($tintuc->tt_category_id) ? $tintuc->tt_category_id : '') == $category->id ? "selected='selected'" : ""}}>{{$category->c_name}}</option>
						@endforeach
					@endif
				</select>
			</div>

			<div class="form-group">
				<label for="tt_title_seo">Tiêu đề</label>
				<input type="text" class="form-control" name="tt_title_seo" placeholder="Nội dung..." value="{{old('tt_title_seo',isset($tintuc->tt_title_seo) ? $tintuc->tt_title_seo : '') }}">
				@if($errors->has('tt_title_seo'))
					<div class="error-text">
						{{$errors->first('tt_title_seo')}}
					</div>
				@endif
			</div>

			<div class="form-group">
				<label for="tt_avatar">Avatar:</label>
				<input type="file" name="tt_avatar" class="form-control">
			</div>

			<div class="form-group">
				<label for="tt_content">Nội dung</label>
				<textarea name="tt_content" placeholder="Nội dung bài viết" class="form-control" cols="30" rows="10" id="form_post">
					{{old('tt_content',isset($tintuc->tt_content) ? $tintuc->tt_content : '') }}
				</textarea>	
			</div>

			@if($errors->has('tt_content'))
					<div class="error-text">
						{{$errors->first('tt_content')}}
					</div>
				@endif

			<div class="form-group">
				<div class="checkbox">
					<label><input type="checkbox" name="hot"> Nổi bật </label>
				</div>
			</div>
		</div>
	</div>
	<button type="submit" class="btn btn-success">Submit</button>
</form>
<script>  CKEDITOR.replace('form_post')</script>

