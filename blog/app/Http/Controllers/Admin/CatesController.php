<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Cates;
use DB;


class CatesController extends Controller
{
    public static function getCates()
    {
         $cates_data = Cates::select('*',DB::raw("concat(path,',',id) as paths"))->orderBy('paths','asc')->get();
       foreach($cates_data as $key=>$value){
          $n = substr_count($value->path,',');
          $cates_data[$key]->cname = str_repeat('|----',$n).$value->cname;
       }
       return $cates_data;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       // $cates_data = Cates::all();
      
      return view('Admin.cates_index',['cates_data'=>self::getCates()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = 0)
    {
          $cates_data =Cates::all();
        return view('Admin.cates_create',['id'=>$id,'cates_data'=>self::getCates()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
        {
         
            //接受数据
            $data = $request->all();
            //处理分类路径
            //顶级分类
             if($data['pid']==0){
                $data['path'] = 0;
             }else{
                //获取父级分类
                $parent_data = Cates::find($data['pid']);
                //获取父级分类的信息 path ,id
                 $data['path'] = $parent_data->path.','.$parent_data->id;
             }



            $cates = new Cates;
            $cates->cname = $data['cname'];
            $cates->pid =  $data['pid'];
            $cates->path = $data['path'];
            //执行添加
            if($cates->save()){
                    return redirect('/cates')->with('success','添加成功');
            }else{
                    return back()->with('error','添加失败');
            }


        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $url = $_SERVER['HTTP_REFERER'];
        
        $child_data = Cates::where('pid',$id)->first();

        if($child_data) {
            
            return redirect("$url")->with('error','当前下面有子分类,不能删除');
             
        }
        if(Cates::destroy($id)){
            return redirect('/cates')->with('success','删除成功');
        }else{
            return back('$url')->with('error','删除失败');
        }
       
    }
}
