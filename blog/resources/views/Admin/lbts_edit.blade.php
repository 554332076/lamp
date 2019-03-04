@extends('Admin.layout')
@section('content')

<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>轮播图添加</span>
    </div>
    <div class="mws-panel-body no-padding">
    	<form class="mws-form" action="/lbts/{{$data['id']}}" method="post" enctype="multipart/form-data">
    		{{csrf_field()}}
    		{{method_field('PUT')}}
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">轮播图标题</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" name="title" value="{{$data['title']}}">
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">轮播图片</label>
    				<div class="mws-form-item">
    					<img src="/uploads/{{$data['logoname']}}" alt="原图片" style="width: 100px">

    				</div>
    			</div>
                 <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label">轮播图链接</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name="link" value="{{$data['link']}}">
                        </div>
                </div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">修改图片</label>
    				<div class="mws-form-item">
    					<input  type="file" multipled accept="image/*" name="logoname" />
    				</div>
    			</div>
    			
    			<div class="mws-form-row">
    				<label class="mws-form-label">轮播状态</label>
    				<div class="mws-form-item">
    					<select class="small" name="status">
    						<option value="0" @if($data['status']==0)selected @endif>禁用</option>
    						<option value="1" @if($data['status']==1)selected @endif>激活</option>
    						<option value="2" @if($data['status']==2)selected @endif>恢复</option>
    						
    						
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

@endsection()