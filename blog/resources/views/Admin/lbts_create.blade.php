@extends('Admin.layout')
@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>轮播图添加</span>
    </div>
    <div class="mws-panel-body no-padding">
            @if (count($errors) > 0)
                <div class="mws-form-message error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

    	<form class="mws-form" action="/lbts" method="post" enctype="multipart/form-data">
    		{{csrf_field()}}
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">轮播图标题</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" name="title">
    				</div>
    			</div>
                <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">轮播图链接</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name="link">
                    </div>
                </div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">商品图片上传</label>
    				<div class="mws-form-item">
    					<input  type="file" multipled accept="image/*" name="logoname" />
    				</div>
    			</div>
    			
    			<div class="mws-form-row">
    				<label class="mws-form-label">轮播状态</label>
    				<div class="mws-form-item">
    					<select class="small" name="status">
    						<option value="0">禁用</option>
    						<option value="1">激活</option>
    						<option value ="2">恢复</option>
    						
    					</select>
    				</div>
    			</div>
    			
    		</div>
    		<div class="mws-button-row">
    			<input type="submit" value="提交" class="btn btn-info">
    			<input type="reset" value="重置" class="btn ">
    		</div>
    	</form>
    </div>    	
</div>



@endsection