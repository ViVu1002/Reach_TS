
<form action="" method="POST" enctype="multipart/form-data">
	@csrf
  	<div class="form-group">
  	 	<label for="i_name">Tên bài viết</label>
    		<input type="text" class="form-control" name="i_name" placeholder="Nhập tên bài viết" value="{{old('i_name',isset($introduce->i_name) ? $introduce->i_name : '') }}" style="width: 70%">
    		 @if($errors->has('i_name'))
		        <div class="error-text">
		            {{$errors->first('i_name')}}
		        </div>
		    @endif
 	 </div>
 	 <div class="form-group">
  	 	<label for="i_title_seo">Tiêu đề</label>
    		<input type="text" class="form-control" name="i_title_seo" placeholder="Tiêu đề" value="{{old('i_title_seo',isset($introduce->i_title_seo) ? $introduce->i_title_seo : '') }}" style="width: 70%">
    		 @if($errors->has('i_title_seo'))
		        <div class="error-text">
		            {{$errors->first('i_title_seo')}}
		        </div>
		    @endif
 	 </div>
 	 <div class="form-group" style="width: 70%">
		<label for="i_content">Nội dung</label>
		<textarea name="i_content" placeholder="Nội dung bài viết" class="form-control" cols="30" rows="10" id="form_post">
			{{old('i_content',isset($introduce->i_content) ? $introduce->i_content : '') }}
		</textarea>	
		@if($errors->has('i_content'))
	        <div class="error-text">
	            {{$errors->first('i_content')}}
	        </div>
	    @endif
	</div>
	<div class="form-group">
		<label for="i_avatar">Avatar:</label>
		<input type="file" name="i_avatar" class="form-control" style="width: 70%">
	</div>
 	 <div class="form-group">
 	 	<div class="checkbox">
 	 		<label><input type="checkbox" name="hot"> Nổi bật </label>
 	 	</div>
 	 </div>
 	
		<button type="submit" class="btn btn-success">Submit</button>
</form>
<script>  CKEDITOR.replace('form_post')</script>

