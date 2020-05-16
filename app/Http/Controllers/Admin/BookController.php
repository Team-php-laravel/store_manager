<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Store;
use App\Models\Storey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tang = Storey::all();
        return view('admin.book.create', compact('tang'));
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
        $book = Book::create($request->all());
        Order::create([
            'dat_ban_id' => $book->id,
            'user_id' => Auth::user()->id
        ]);
        return redirect('admin/tang/' . $request->tang_id . '/edit')->with(['message' => 'Đặt bàn thành công']);
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
        $book = Book::findOrFail($id);
        $tang = Storey::all();
        return view('admin.book.update', compact('book', 'tang'));
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
        $book = Book::with('tang', 'order')->findOrFail($id);
        if ($book->order == null) {
            Order::create([
                'dat_ban_id' => $book->id,
                'user_id' => Auth::user()->id
            ]);
            $book = Book::with('tang', 'order')->findOrFail($id);
        }
        $order = OrderDetail::with('store')->where('hoa_don_id', $book->order->id)->get();
        $store = Store::all();
        return view('admin.book.detail', compact('book', 'store', 'order'));
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
        Book::findOrFail($id)->update($request->all());
        return redirect('admin/tang/' . $request->tang_id . '/edit')->with(['message' => 'Cập nhật thành công']);
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
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect('admin/tang/' . $book->tang_id . '/edit')->with(['message' => 'Xóa thành công']);
    }
}
