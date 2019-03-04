@extends('Admin.layout')
@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-table"></i> 商品列表</span>
    </div>
<div class="mws-panel-body no-padding">
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
        <form action="/goods" method="get">
      <div id="DataTables_Table_1_length" class="dataTables_length">
        <label>
       显示
        <select size="1" name="count" aria-controls="DataTables_Table_1">
        <option value="5" @if(isset($request['count'])&& $request['count']==5) selected @endif>5</option>
        <option value="10" @if(isset($request['count'])&& $request['count']==10) selected @endif>10</option>
        <option value="15" @if(isset($request['count'])&& $request['count']==15) selected @endif>15</option>
        <option value="50"@if(isset($request['count'])&& $request['count']==50) selected @endif>50</option>
        </select>
         条
         </label>
         </div>
         <div class="dataTables_filter" id="DataTables_Table_1_filter">
         <label>搜索关键字: <input type="text" name="search" value="{{$request['search'] or ''}}" aria-controls="DataTables_Table_1">
         </label>
         <button class="btn btn-info">搜索</button>
         </div>
        </form>
         <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
        <thead>
            <tr >
                  <th>商品编号</th>
                  <th>商品名称</th>
                  <th>商品价格</th>
                  <th>商品库存</th>
                  <th>商品图片</th>
                  <th>商品状态</th>
                  <th>商品描述</th>
                  <th>商品类别</th>
                  <th>商品操作</th>
            
            </tr>
        </thead>
        
            <tbody role="alert" aria-live="polite" aria-relevant="all">
            @foreach($data as $k=>$v)
                    <tr class="odd" align="center">
                        <td>{{$v->id}}</td>
                        <td>{{$v->gname}}</td>
                        <td>{{$v->gprice}}</td>
                        <td>{{$v->stock}}</td>
                        <td>
              <img src="/uploads/{{$v->gpic}}" width="100px"/>
                        </td>
                        <td>{{$v->status==1?'激活':'禁用'}}</td>
                        <td>{{$v->gdesc}}</td>
                        <td>{{$v->goods->cname}}</td>
                        <td>
              <a href="/goods/{{$v->id}}/edit" class="btn btn-info">修改</a>
              <form action="/goods/{{$v->id}}" method="post" style="display: inline-block">
              {{csrf_field()}}
              {{method_field('DELETE')}}
              <button class="btn btn-danger">删除</button>  
                  
            </form>
                        </td>

                    </tr>
                  @endforeach
            
            </tbody>
            </table>
           
                      <div class="dataTables_paginate paging_full_numbers" id="page_page">
                      
                       
                      {{ $data->links() }}
                     </div>
            </div>
                    </div>
                </div>


@endsection