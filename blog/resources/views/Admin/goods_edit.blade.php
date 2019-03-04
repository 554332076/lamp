@extends('Admin.layout')
@section('content')
<div class="mws-panel grid_8">
		

	<div class="mws-panel-header">
    	<span>添加商品</span>
    </div>
    <div class="mws-panel-body no-padding">
			
    	<form class="mws-form" action="/goods/{{$data->id}}" method="post" enctype="multipart/form-data">


    		                   {{csrf_field()}}
    		                   {{method_field('PUT')}}
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">商品名称</label>
    				<div class="mws-form-item">
    					<input type="text" name="gname" class="small" value="{{$data->gname}}">
    				</div>

    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">商品价格</label>
    				<div class="mws-form-item">
    					<input type="text" name="gprice" class="medium" value="{{$data->gprice}}">p

    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">库存</label>
    				<div class="mws-form-item">
    					<input type="text" name="stock" class="large" value="{{$data->stock}}">
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">商品描述</label>
    				<div class="mws-form-item">
    					<textarea rows="" cols="" name = "gdesc" class="large">{{$data->gdesc}}</textarea>
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">商品状态</label>
    				<div class="mws-form-item">
    					<input type="text" name="status" class="small" value="{{$data->status}}">
    				</div>
    			</div>
    				<div class="mws-form-row">
    				<label class="mws-form-label">商品图片</label>
    				<div class="mws-form-item">
    					<img src="/uploads/{{$data->gpic}}" width="100px">
    					
    				</div>
    			</div>
                  <div class="mws-form-row">
                    <label class="mws-form-label">修改图片</label>
                    <div class="mws-form-item">
                        <input  type="file" multiple accept="image/*" name="gpic" / width="100px" height="100px">
                    </div>
                </div>
    			<div class="mws-form-row">
					<label class="mws-form-label">所属类别</label>
					<div class="mws-form-item">
						<select class="small" name="cid">
							
							@foreach($common_cates_data as $kk=>$vv)
							<option value="{{$data->cid}}" selected >{{$vv->cname}}</option>
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