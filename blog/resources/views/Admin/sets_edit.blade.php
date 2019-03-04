@extends('Admin.layout')
@section('content')

<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>网站信息修改</span>
    </div>
    <div class="mws-panel-body no-padding">
    	<form class="mws-form" action="/sets/{{$data['id']}}" method="post" enctype="multipart/form-data">
    		{{csrf_field()}}
    		{{method_field('PUT')}}
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">网站维护者</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" name="weihu" value="{{$data['weihu']}}">
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">LOGO</label>
    				<div class="mws-form-item">
    					<img src="/uploads/{{$data['logo']}}" alt="原图片" style="width: 100px">

    				</div>
                </div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">修改图片</label>
    				<div class="mws-form-item">
    					<input  type="file" multipled accept="image/*" name="logo" />
    				</div>
    			</div>
                 <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label">许可证</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name="xukezheng" value="{{$data['xukezheng']}}">
                        </div>
                    </div>
                 </div>
                 <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label">备案号</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name="beianhao" value="{{$data['beianhao']}}">
                        </div>
                    </div>
                 </div>
                 <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label">公司地址</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name="address" value="{{$data['address']}}">
                        </div>
                    </div>
                 </div>
                 <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label">网站地址</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name="kefuphone" value="{{$data['kefuphone']}}">
                        </div>
                    </div>
                 </div>
    		<div class="mws-button-row">
    			<input type="submit" value="保存" class="btn btn-info">
    			<input type="reset" value="重置" class="btn ">
    		</div>
    	</form>
    </div>    	
</div>

@endsection()