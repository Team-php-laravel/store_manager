<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User as US;
use Illuminate\Support\Str;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = US::paginate(5);
        return view('admin.members.listsMember',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.members.addMember');
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
            'name'      => 'required|max:15',
            'email'     => 'required|email',
            'password'  => 'required',
            'phone'     => 'required|max:13',
            'ngaysinh' => 'required',
            'chamngon' => 'required',
            'diachi'   => 'required',
            'kynang'   => 'required',
            'ghichu'   => 'required',
        ],
        [
            'name.required'       => 'name không được để trống',
            'name.max'            => 'name không được quá 15 ký tự',
            'password.required'   => 'password không được để trống',
            'email.required'      => 'email không được để trống',
            'email.email'         => 'email không đúng định dạng',
            'phone.required'      => 'phone không được để trống',
            'phone.max'           => 'phone không được quá 13 số',
            'ngaysinh.required'  => 'ngày sinh không được để trống',
            'chamngon.required'  => 'châm ngôn không được để trống',
            'diachi.required'    => 'địa chỉ không được để trống',
            'kynang.required'    => 'kỹ năng không được để trống',
            'ghichu.required'    => 'ghi chú không được để trống'
        ]);
        $user = new US();
        $user->name = bcrypt($request->name);
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->ngay_sinh = date('y/m/d',strtotime($request->ngaysinh));
        $user->cham_ngon = $request->chamngon;
        $user->dia_chi = $request->diachi;
        $user->ki_nang = $request->kynang;
        $user->ghi_chu = $request->ghichu;
        $user->vi_tri_id  = $request->vitriid;
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            $hinh=Str::random(4)."_".$name;
            $file->move("images/avatars",$hinh);
            $user->avatar=$hinh;
        }else{
            $user->avatar="";
        }
        $user->save();
        return Redirect('admin/user/list')->with('message','thêm thành công');
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
        $user = US::find($id);
        return view('admin.members.EditMember',compact('user'));
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
            'name'      => 'required',
            'email'     => 'required|email',
            'password'  => 'required',
            'phone'     => 'required|max:13',
            'ngaysinh'  => 'required',
            'chamngon'  => 'required',
            'diachi'    => 'required',
            'kynang'    => 'required',
            'ghichu'    => 'required',
        ],
        [
            'name.required'       => 'name không được để trống',
            'password.required'   => 'password không được để trống',
            'email.required'      => 'email không được để trống',
            'email.email'         => 'email không đúng định dạng',
            'phone.required'      => 'phone không được để trống',
            'phone.max'           => 'phone không được quá 13 số',
            'ngaysinh.required'   => 'ngày sinh không được để trống',
            'chamngon.required'   => 'châm ngôn không được để trống',
            'diachi.required'     => 'địa chỉ không được để trống',
            'kynang.required'     => 'kỹ năng không được để trống',
            'ghichu.required'     => 'ghi chú không được để trống'
        ]);
        $user = US::find($id);
        $user->name = bcrypt($request->name);
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->ngay_sinh = date('y/m/d',strtotime($request->ngaysinh));
        $user->cham_ngon = $request->chamngon;
        $user->dia_chi = $request->diachi;
        $user->ki_nang = $request->kynang;
        $user->ghi_chu = $request->ghichu;
        $user->vi_tri_id  = $request->vitriid;
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            $hinh=Str::random(4)."_".$name;
            $file->move("images/avatars",$hinh);
            if($user->avatar != ''){
                unlink("images/avatars/".$user->avatar);
            }
            $user->avatar=$hinh;
        }else{
            $user->avatar="";
        }
        $user->save();
        return Redirect('admin/user/list')->with('message','sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = US::find($id);
        if($user->avatar != ''){
            unlink("images/avatars/".$user->avatar);
        }
        $user->delete();
    }
}
