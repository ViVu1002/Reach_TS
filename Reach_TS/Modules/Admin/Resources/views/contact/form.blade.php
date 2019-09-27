
<form action="" method="POST" enctype="multipart/form-data">
	@csrf
  	<div class="form-group">
  	 	<label for="con_name">Tên bài viết</label>
    		<input type="text" class="form-control" name="con_name" placeholder="Nhập tên bài viết" value="{{old('con_name',isset($contact->con_name) ? $contact->con_name : '') }}" style="width: 70%">
    		 @if($errors->has('con_name'))
		        <div class="error-text">
		            {{$errors->first('con_name')}}
		        </div>
		    @endif
 	 </div>
 	 <div class="form-group">
  	 	<label for="con_title_seo">Tiêu đề</label>
    		<input type="text" class="form-control" name="con_title_seo" placeholder="Tiêu đề" value="{{old('con_title_seo',isset($contact->con_title_seo) ? $contact->con_title_seo : '') }}" style="width: 70%">
    		 @if($errors->has('con_title_seo'))
		        <div class="error-text">
		            {{$errors->first('con_title_seo')}}
		        </div>
		    @endif
 	 </div>
 	 <div class="form-group" style="width: 70%">
		<label for="con_content">Nội dung</label>
		<textarea name="con_content" placeholder="Nội dung bài viết" class="form-control" cols="30" rows="10" id="form_post">
			{{old('con_content',isset($contact->con_content) ? $contact->con_content : '') }}
		</textarea>	
	</div>

		@if($errors->has('con_content'))
	        <div class="error-text">
	            {{$errors->first('con_content')}}
	        </div>
	    @endif

	<div class="form-group">
		<label for="con_avatar">Avatar:</label>
		<input type="file" name="con_avatar" class="form-control" style="width: 70%">
	</div>
 	 <div class="form-group">
 	 	<div class="checkbox">
 	 		<label><input type="checkbox" name="hot"> Nổi bật </label>
 	 	</div>
 	 </div>
 	
		<button type="submit" class="btn btn-success">Submit</button>
</form>

<script>  CKEDITOR.replace('form_post')</script>