<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  App\Admin\Tjws;
use DB;
use App\Http\Requests\tjwxianding;
use Illuminate\Support\Facades\Storage;

class TjwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tjws::all();
        return view('Admin.tjws_index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.tjws_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(tjwxianding $request)
    {
         $data = $request->all();
         $file_name = $request->file('tpic')->store('public');
         $create = new Tjws;
         $create->title = $data['title'];
         $create->tlink = $data['tlink'];
         $create->tdesc = $data['tdesc'];
         $create->tpic = $file_name;
         $res = $create->save();
        if($res){
            return redirect('/tjws')->with('success','添加成功');
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
        $data = Tjws::find($id);
        return view('Admin.tjws_edit',['data'=>$data]);
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
         $file = Tjws::find($id);

         if ($request->hasFile('tpic')){
           $file_name = $file->tpic;
        $res = Storage::delete($file_name);
        $new_file =  $request->file('tpic')->store('public');
        }else{
            $new_file = $file->tpic;
        }
       
          $tjws = $request->all();
          $file->title = $tjws['title'];
          $file->tlink = $tjws['tlink'];
          $file->tdesc = $tjws['tdesc'];
        
          $file->tpic = $new_file;
          $res2 = $file->save();

             if($res2){
            return redirect('/tjws')->with('success','修改成功');
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
         $res = Tjws::destroy([$id]);
          if($res){
            return redirect('/tjws')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
