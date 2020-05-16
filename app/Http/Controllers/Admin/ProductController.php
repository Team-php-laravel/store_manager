<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Store::all();
        return view('admin.product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if ($request->hasFile('hinh_anh')) {
            $image = Str::random() . '.' . $request->hinh_anh->getClientOriginalExtension();
            $request->hinh_anh->move("uploads/product/", $image);
        }
        $data = collect($request->all())->merge([
            'hinh_anh' => $request->hasFile('hinh_anh') ? $image : null
        ])->toArray();

        Store::create($data);

        return redirect('admin/product')->with("message", "Thêm món ăn/đồ uống thành công !");
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = Store::find($id);
        return view('admin.product.update', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $post = Store::findOrFail($id);
        if ($request->hasFile('hinh_anh')) {
            $image = Str::random() . '.' . $request->hinh_anh->getClientOriginalExtension();
            $request->hinh_anh->move("uploads/product/", $image);
            $data = collect($request->all())->merge([
                'hinh_anh' => $request->hasFile('hinh_anh') ? $image : null
            ])->toArray();
        } else {
            $data = collect($request->all())->merge([
                'hinh_anh' => $post->hinh_anh
            ])->toArray();
        }

        $post->update($data);
        return redirect('admin/product')->with("message", "Cập nhật món ăn/đồ uống thành công!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Store::findOrFail($id)->delete();
        return redirect('admin/product')->with("message", "Xóa món ăn/đồ uống thành công !");
    }
}
