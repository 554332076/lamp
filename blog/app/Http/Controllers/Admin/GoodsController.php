<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Goods;
use DB;
use Illuminate\Support\Facades\Storage;
use  App\Http\Requests\StoreBlogPost;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $count = $request->input('count',5);
        $search = $request->input('search','');

        $data = Goods::where('gname','like','%'.$search.'%')->paginate($count);

        return view('Admin.goods_index',['data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin/goods_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogPost $request)
    {
         $request->flash(); 

             $data = $request->except('_token');
           
            $file = $request->file('gpic');
           $file_name = $file->store('images');
             $goods = new Goods;

            $goods->gname = $data['gname'];
            $goods->gprice = $data['gprice'];
            $goods->gpic = $file_name;
            $goods->status = $data['status'];
            $goods->stock = $data['stock'];
            $goods->gdesc = $data['gdesc'];
            $goods->cid = $data['cid'];
           $res =  $goods->save();
        if($res){
                    return redirect('/goods')->with('success','添加成功');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $data = Goods::find($id);
        return view('Admin.goods_edit',['data'=>$data]);
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
       
       $data=$request->all();
        $goods = Goods::find($id);
       
         if ($request->hasFile('gpic')){
           $file_name = $goods->gpic;
        $res = Storage::delete($file_name);
        $new_file =  $request->file('gpic')->store('images');
        $goods->gpic = $new_file;
        }
        $goods->gname = $data['gname'];
        $goods->gprice = $data['gprice'];
        $goods->status = $data['status'];
        $goods->stock = $data['stock'];
        $goods->gdesc = $data['gdesc'];
        $goods->cid = $data['cid'];
        $res = $goods->save();
        
        if($res){
                    return redirect('/goods')->with('success','修改成功');
            }else{
                    return back()->with('error','修改失败');
            }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $res=Goods::destroy([$id]);

             if($res){
                    return redirect('/goods')->with('success','删除成功');
            }else{
                    return back()->with('error','删除失败');
            }
    }
}
