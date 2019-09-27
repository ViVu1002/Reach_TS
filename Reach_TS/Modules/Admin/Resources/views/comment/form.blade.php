
<form action="" method="POST" enctype="multipart/form-data">
	@csrf
  	<div class="form-group">
  	 	<label for="cmt_name">User</label>
    		<input type="text" class="form-control" name="cmt_name" placeholder="Nhập tên người dùng" value="{{old('cmt_name',isset($comment->cmt_name) ? $comment->cmt_name : '') }}" style="width: 70%">
 	 </div>
 	 @if($errors->has('cmt_name'))
	        <div class="error-text">
	            {{$errors->first('cmt_name')}}
	        </div>
	    @endif
 	
 	 <div class="form-group">
		<label for="cmt_content">Nội dung</label>
		<textarea name="cmt_content" placeholder="Nội dung bài viết" class="form-control" cols="30" rows="10" id="form_post" style="width: 70%">
			{{old('con_content',isset($comment->cmt_content) ? $comment->cmt_content : '') }}
		</textarea>	
		@if($errors->has('cmt_content'))
	        <div class="error-text">
	            {{$errors->first('cmt_content')}}
	        </div>
	    @endif
	</div>
	<div class="form-group">
		<label for="avatar">Avatar:</label>
		<input type="file" name="avatar" class="form-control" style="width: 70%">
	</div>
 	 <div class="form-group">
 	 	<div class="checkbox">
 	 		<label><input type="checkbox" name="hot"> Nổi bật </label>
 	 	</div>
 	 </div>
 	
		<button type="submit" class="btn btn-success">Submit</button>
</form>

