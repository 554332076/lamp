@extends('Admin.layout')
@section('content')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span><i class="icon-table"></i> 分类列表</span>
    </div>
    <div class="mws-panel-body no-padding">
        <table class="mws-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>分类名称</th>
                    <th>所属分类</th>
                    <th>分类路径</th>
                    <th>状态</th>
                    <th>操作</th>

                </tr>
            </thead>
            <tbody>
                @foreach($cates_data as $k=>$v)
                <tr >
                    <td>{{$v->id}}</td>
                    <td>{{$v->cname}}</td>
                    <td>{{$v->pid}}</td>
                    <td>{{$v->path}}</td>
                    <td>{{$v->status ==1?'激活':'禁用'}}</td>
                    <td>
                        <a href="/cates/create/{{$v->id}}" class="btn btn-info">添加子分类</a>
                        <form action="/cates/{{$v->id}}" method="post" style="display: inline-block">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                            <input type="submit" value="删除" class="btn btn-danger">
                        </form>
                      
                    </td>
                </tr>
               @endforeach
            </tbody>
        </table>
    </div>
</div>
                                                                                                    
@endsection