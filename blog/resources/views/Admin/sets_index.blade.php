@extends('Admin.layout')
@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-table"></i> 网站信息列表</span>
    </div>
<div class="mws-panel-body no-padding">
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
       
         <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
        <thead>
            <tr >
                  
                  <th>网站logo</th>
                  <th>网站维护者</th>
                  <th>网站许可证</th>
                  <th>客服电话</th>
                  <th>公司地址</th>
                  <th>网站备案号</th>
                  <th>操作</th>
            </tr>
        </thead>
        
            <tbody role="alert" aria-live="polite" aria-relevant="all">
            @foreach($data as $k=>$v)
                    <tr class="odd" align="center">
                        <td>
              <img src="/uploads/{{$v->logo}}" width="100px"/>
                        </td>
                       
                        <td>{{$v->weihu}}</td>
                        <td>{{$v->xukezheng}}</td>
                        <td>{{$v->kefuphone}}</td>
                      
                        <td>{{$v->address}}</td>
                        <td>{{$v->beianhao}}</td>
                      
                       
                      
                        <td>
              <a href="/sets/{{$v->id}}/edit" class="btn btn-info">修改</a>
              
                        </td>
s
                    </tr>
                  @endforeach
            
            </tbody>
            </table>
          
                     
                     </div>
            </div>
                    </div>
                </div>


@endsection