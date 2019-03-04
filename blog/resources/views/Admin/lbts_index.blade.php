@extends('Admin.layout')
@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-table"></i> 轮播图列表</span>
    </div>
<div class="mws-panel-body no-padding">
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
       
         <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
        <thead>
            <tr >
                  <th>轮播图编号</th>
                  <th>轮播图标题</th>
                  <th>轮播图创建时间</th>
                  <th>轮播图片</th>
                  <th>轮播图链接</th>
                  <th>轮播图状态</th>
                  <th>轮播图操作</th>
            </tr>
        </thead>
        
            <tbody role="alert" aria-live="polite" aria-relevant="all">
            @foreach($data as $k=>$v)
                    <tr class="odd" align="center">
                        <td >{{$v->id}}</td>
                        <td>{{$v->title}}</td>
                        <td>{{$v->created_at}}</td>
                        <td>
              <img src="/uploads/{{$v->logoname}}" width="100px"/>
                        </td>
                        <td>{{$v->link}}</td>
                        @if($v->status==0)
                        <td>下架</td>
                        @elseif($v->status==1)
                        <td>激活</td>
                        @else
                        <td>恢复</td>
                        @endif
                        <td>
              <a href="/lbts/{{$v->id}}/edit" class="btn btn-info">替换</a>
              <form action="/lbts/{{$v->id}}" method="post" style="display: inline-block">
              {{csrf_field()}}
              {{method_field('DELETE')}}
              <button class="btn btn-danger">删除</button>  
                  
            </form>
                        </td>

                    </tr>
                  @endforeach
            
            </tbody>
            </table>
          
                     
                     </div>
            </div>
                    </div>
                </div>


@endsection