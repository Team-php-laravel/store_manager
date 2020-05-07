<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post AS P;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = P::paginate(5);
        return view('admin.news.listsNews',compact('news'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.addNews');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'tieu_de'  => 'required|max:50',
            'mo_ta'    => 'required',
            'noi_dung' => 'required',
        ],[
            'tieu_de.required'  => 'tiêu đề không được để trống',
            'tieu_de.max'       => 'tiêu đề không được quá 50 ký tự',
            'mo_ta.required'    => 'mô tả không được để trống',
            'noi_dung.required' => 'nội dung không được để trống'
        ]);
        $news = new P();
        $news->tieu_de  =  $request ->tieu_de;
        $news->mo_ta  =  $request ->mo_ta;
        $news->noi_dung  =  $request ->noi_dung;
        $news->user_id  =  2;
        if($request->hasFile('hinh_anh'))
        {
            $file=$request->file('hinh_anh');
            $name=$file->getClientOriginalName();
            $hinh=Str::random(4)."_".$name;
            $file->move("images/tintuc",$hinh);
            $news->hinh_anh=$hinh;
        }else{
            $news->hinh_anh="";
        }
        $news->save();
        return Redirect('/admin/news/list')->with('message','Thêm tin tức thành công');
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
        $news = P::find($id);
        return view('admin.news.editNews',compact('news'));
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
        $this->validate($request,[
            'tieu_de'  => 'required|max:50',
            'mo_ta'    => 'required',
            'noi_dung' => 'required',
        ],[
            'tieu_de.required'  => 'tiêu đề không được để trống',
            'tieu_de.max'       => 'tiêu đề không được quá 50 ký tự',
            'mo_ta.required'    => 'mô tả không được để trống',
            'noi_dung.required' => 'nội dung không được để trống'
        ]);
        $news = P::find($id);
        $news->tieu_de  =  $request ->tieu_de;
        $news->mo_ta  =  $request ->mo_ta;
        $news->noi_dung  =  $request ->noi_dung;
        $news->user_id  =  2;
        if($request->hasFile('hinh_anh'))
        {
            $file=$request->file('hinh_anh');
            $name=$file->getClientOriginalName();
            $hinh=Str::random(4)."_".$name;
            $file->move("images/tintuc",$hinh);
            if($news->hinh_anh != ''){
                unlink("images/tintuc/".$news->hinh_anh);
            }
            $news->hinh_anh=$hinh;
        }else{
            $news->hinh_anh="";
        }
        $news->save();
        return Redirect('/admin/news/list')->with('message','sửa tin tức thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = P::find($id);
        if($news->hinh_anh != ''){
            unlink("images/tintuc/".$news->hinh_anh);
        }
        $news->delete();
    }
}
