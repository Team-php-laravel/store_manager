<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Storey;
use Illuminate\Http\Request;

class TangController extends Controller
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
        $tang = Storey::all();
        return view('admin.tang.index', compact('tang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.tang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Storey::create($request->all());
        return redirect('admin/tang')->with(['message' => 'Thêm thành công']);
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
        $tang = Storey::findOrFail($id);
        return view('admin.tang.update', compact('tang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tang = Storey::find($id);
        $book = Book::where('tang_id', $id)->orderBy('created_at', 'desc')->get();
        return view('admin.book.index', compact('book', 'tang'));
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
        Storey::findOrFail($id)->update($request->all());
        return redirect('admin/tang')->with(['message' => 'Cập nhật thành công']);
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
        if (Book::where('tang_id', $id)->first()) {
            return redirect('admin/tang')->with(['message' => 'Dữ liệu bị ràng buộc, không thể xóa']);
        } else {
            Storey::findOrFail($id)->delete();
            return redirect('admin/tang')->with(['message' => 'Xóa thành công']);
        }
    }

    public function search(Request $request, $id)
    {
        if (!isset($request->name)) {
            return redirect('admin/tang/' . $id . '/edit');
        }
        $tang = Storey::find($id);
        $book = Book::where('tang_id', $id)->where('nguoi_dat', 'like', '%' . $request->name . '%')->orderBy('created_at', 'desc')->get();
        $name = $request->name;
        return view('admin.book.index', compact('book', 'tang', 'name'));
    }
}
