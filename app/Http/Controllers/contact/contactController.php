<?php

namespace App\Http\Controllers\contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact as CT;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = CT::paginate(5);
        return view('admin.contact.listsContact',compact('list'));
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate( $request,
        [
            'name'      => 'required|min:3|max:15',
            'email'     => 'required|email',
            'number'    => 'required|numeric',
            'subject'   => 'required|min:6',
            'message'   => 'required|min:6'
        ],
        [
            'name.required'     => 'name không được để trống',
            'name.min'          => 'name không được ít hơn 3 ký tự',
            'name.max'          => 'name không được nhiều hơn 15 ký tự',
            'email.required'    => 'email không được để trống',
            'email.min'         => 'bạn phải nhập đúng định dạng email',
            'subject.required'  => 'subject không được để trống',
            'subject.min'       => 'subject  không được ít hơn 6 ký tự',
            'message.required'  => 'Message không được để trống',
            'message.min'       => 'subject  không được ít hơn 6 ký tự',
            'number.required'   => 'number không được để trống',
            'number.numeric'    => 'number phải là số'
            
        ]);
        $contact = new CT();
        $contact->ho_ten         = $request->name;
        $contact->email          = $request->email;
        $contact->so_dien_thoai  = $request->number;
        $contact->chu_de         = $request->subject;
        $contact->noi_dung       = $request->message;
        $contact->save();
        return Redirect('/')->with('message','Thêm thành công');
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
        $lienhe = CT::find($id);
        return view('admin.contact.editContact',compact('lienhe'));
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
        $contact = CT::find($id);
        $contact->ho_ten         = $request->name;
        $contact->email          = $request->email;
        $contact->so_dien_thoai  = $request->phone;
        $contact->chu_de         = $request->object;
        $contact->noi_dung       = $request->message;
        $contact->trang_thai     = $request->status;
        $contact ->save();
        return Redirect('admin/contact/list')->with('message','Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = CT::find($id);
        $contact->delete();
    }
}
