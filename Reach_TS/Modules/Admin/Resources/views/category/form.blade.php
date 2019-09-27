
<form action="" method="POST" enctype="multipart/form-data">
				@csrf
			  	<div class="form-group">
			  	 	<label for="c_name">Tên thể loại</label>
			    		<input type="text" class="form-control" name="c_name" placeholder="Nhập tên thể loại" value="{{old('c_name',isset($category->c_name) ? $category->c_name : '') }}" style="width: 70%">
			    		 @if($errors->has('c_name'))
					        <div class="error-text">
					            {{$errors->first('c_name')}}
					        </div>
					    @endif
			 	 </div>
			 	 <div class="form-group">
			  	 	<label for="c_title_seo">Tiêu đề</label>
			    		<input type="text" class="form-control" name="c_title_seo" placeholder="Tiêu đề" value="{{old('c_title_seo',isset($category->c_title_seo) ? $category->c_title_seo : '') }}" style="width: 70%">
			 	 </div>
			 	 <div class="form-group">
			  	 	<label for="c_description_seo">Nội dung</label>
			    		<input type="text" class="form-control" name="c_description_seo" placeholder="Nội dung..." value="{{old('c_description_seo',isset($category->c_description_seo) ? $category->c_description_seo : '') }}" style="width: 70%">
			 	 </div>
			 	 <div class="form-group">
			 	 	<div class="checkbox">
			 	 		<label><input type="checkbox" name="hot"> Nổi bật </label>
			 	 	</div>
			 	 </div>
			 	
		  		<button type="submit" class="btn btn-success">Submit</button>
			</form>

