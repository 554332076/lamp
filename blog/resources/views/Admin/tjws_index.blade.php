@extends('Admin.layout')
@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-table"></i>推荐位列表</span>
    </div>
<div class="mws-panel-body no-padding">
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
       
         <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
        <thead>
            <tr >
                  <th>推荐位编号</th>
                  <th>推荐位标题</th>
                  <th>推荐位描述</th>
                  <th>推荐位创建时间</th>
                  <th>推荐位图片</th>
                  <th>推荐位链接</th>
                  <th>推荐位操作</th>
            </tr>
        </thead>
        
            <tbody role="alert" aria-live="polite" aria-relevant="all">
            @foreach($data as $k=>$v)
                    <tr class="odd" align="center">
                        <td >{{$v->id}}</td>
                        <td>{{$v->title}}</td>
                        <td>{{$v->tdesc}}</td>
                        <td>{{$v->created_at}}</td>
                        <td>
              <img src="/uploads/{{$v->tpic}}" width="100px"/>
                        </td>
                        <td>{{$v->tlink}}</td>
                        <td>
              <a href="/tjws/{{$v->id}}/edit" class="btn btn-info">修改</a>
              <form action="/tjws/{{$v->id}}" method="post" style="display: inline-block">
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