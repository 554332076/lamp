@extends('Admin.layout')
@section('content')
<div class="mws-panel grid_8">
			@if (count($errors) > 0)
			    <div class="mws-form-message error">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif

	<div class="mws-panel-header">
    	<span>添加商品</span>
    </div>
    <div class="mws-panel-body no-padding">

			
    	<form class="mws-form" action="/goods" method="post" enctype="multipart/form-data">


    		                   {{csrf_field()}}
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">商品名称</label>
    				<div class="mws-form-item">
    					<input type="text" name="gname" class="small">
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">商品价格</label>
    				<div class="mws-form-item">
    					<input type="text" name="gprice" class="medium">
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">库存</label>
    				<div class="mws-form-item">
    					<input type="text" name="stock" class="large">
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">商品描述</label>
    				<div class="mws-form-item">
    					<textarea rows="" cols="" name = "gdesc" class="large"></textarea>
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">商品状态</label>
    				<div class="mws-form-item">
    					<input type="text" name="status" class="small">
    				</div>
    			</div>
    				<div class="mws-form-row">
    				<label class="mws-form-label">商品图片上传</label>
    				<div class="mws-form-item">
    					<input  type="file" multiple accept="image/*" name="gpic" />
    				</div>
    			</div>
    			<div class="mws-form-row">
					<label class="mws-form-label">所属类别</label>
					<div class="mws-form-item">
						<select class="small" name="cid">
							
							@foreach($common_cates_data as $k=>$v)
							<option value="{{$v->id}}">{{$v->cname}}</option>
							@endforeach
						</select>
					</div>
				</div>
    			
    		</div>
    		<div class="mws-button-row">
    			<input type="submit" value="提交" class="btn btn-danger">
    			<input type="reset" value="重置" class="btn btn-info">
    		</div>
    	</form>
    </div>    	
</div>


@endsection