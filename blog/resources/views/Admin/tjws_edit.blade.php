@extends('Admin.layout')
@section('content')

<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>轮播图添加</span>
    </div>
    <div class="mws-panel-body no-padding">
    	<form class="mws-form" action="/tjws/{{$data['id']}}" method="post" enctype="multipart/form-data">
    		{{csrf_field()}}
    		{{method_field('PUT')}}
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">推荐位标题</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" name="title" value="{{$data['title']}}">
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">推荐位片上传</label>
    				<div class="mws-form-item">
    					<img src="/uploads/{{$data['tpic']}}" alt="原图片" style="width: 100px">

    				</div>
    			</div>
                 <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label">推荐位链接</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name="tlink" value="{{$data['tlink']}}">
                        </div>
                </div>

    		</div>
                <div class="mws-form-row">
                    <label class="mws-form-label">推荐位描述</label>
                    <div class="mws-form-item">
                        <textarea rows="" cols="" name = "tdesc" class="small" >{{$data['tdesc']}}</textarea>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">修改图片</label>
                    <div class="mws-form-item">
                        <input  type="file" multiple accept="image/*" name="tpic" />
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