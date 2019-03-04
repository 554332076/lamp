<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Lbts;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\lbtxianding;

class LbtsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Lbts::all(); 
        return view('Admin.lbts_index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('Admin.Lbts_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(lbtxianding $request)
    {
        $file = $request->file('logoname');
        $file_name = $file->store('images');
        $data = $request->all();
        $lbts = new Lbts;
        $lbts->title = $data['title'];
        $lbts->status = $data['status'];
        $lbts->link = $data['link'];
        $lbts->logoname = $file_name;
        $res = $lbts->save();
        if($res){
            return redirect('/lbts')->with('success','添加成功');
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
        $data = Lbts::find($id);
        return view('Admin.lbts_edit',['data'=>$data]);
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
        $file = Lbts::find($id);

         if ($request->hasFile('logoname')) {
           $file_name = $file->logoname;
        $res = Storage::delete($file_name);
        $new_file =  $request->file('logoname')->store('images');
        }else{
            $new_file = $file->logoname;
        }
       
          $lbts = $request->all();
          $file->title = $lbts['title'];
          $file->status = $lbts['status'];
         
          $file->logoname = $new_file;
          $res2 = $file->save();

             if($res2){
            return redirect('/lbts')->with('success','修改成功');
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
        $res = Lbts::destroy([$id]);
          if($res){
            return redirect('/sets')->with('success','保存成功');
        }else{
            return back()->with('error','保存失败');
        }
    }
}
