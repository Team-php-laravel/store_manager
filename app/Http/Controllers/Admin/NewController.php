<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class NewController extends Controller
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
        $post = Post::with('user')->get();
        return view('admin.news.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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
            $request->hinh_anh->move("uploads/news/", $image);
        }
        $data = collect($request->all())->merge([
            'hinh_anh' => $request->hasFile('hinh_anh') ? $image : null,
            'user_id' => 1
        ])->toArray();
        Post::create($data);

        return redirect('admin/news')->with("message", "Thêm tin tức thành công !");
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
        $post = Post::findOrFail($id);
        return view('admin.news.update', compact('post'));
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
        $post = Post::findOrFail($id);
        if (isset($request->trang_thai)) {
            $post->update(['trang_thai' => $request->trang_thai]);
            return redirect('admin/news')->with("message", "Đổi trạng thái thành công !");
        } elseif ($request->hasFile('hinh_anh')) {
            $image = Str::random() . '.' . $request->hinh_anh->getClientOriginalExtension();
            $request->hinh_anh->move("uploads/news/", $image);
            $data = collect($request->all())->merge([
                'hinh_anh' => $request->hasFile('hinh_anh') ? $image : null,
                'user_id' => 1
            ])->toArray();
        } else {
            $data = collect($request->all())->merge([
                'hinh_anh' => $post->hinh_anh,
                'user_id' => 1
            ])->toArray();
        }

        $post->update($data);

        return redirect('admin/news')->with("message", "Cập nhật tin tức thành công !");
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
        Post::findOrFail($id)->delete();
        return redirect('admin/news')->with("message", "Xóa tin tức thành công !");
    }
}
