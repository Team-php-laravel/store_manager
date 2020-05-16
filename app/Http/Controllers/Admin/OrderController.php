<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Store;
use Illuminate\Http\Request;

class OrderController extends Controller
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
        $order = Order::with('book')->orderBy('created_at', 'desc')->get();
        return view('admin.order.index', compact('order'));
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
        return OrderDetail::with('store')->where('hoa_don_id', $id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::with('tang', 'order')->findOrFail($id);
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
        try {
            OrderDetail::where('hoa_don_id', $id)->delete();
            foreach ($request->san_pham as $val) {
                OrderDetail::create([
                    'so_luong' => $val['sl_mua'],
                    'mat_hang_id' => $val['id'],
                    'hoa_don_id' => $id
                ]);
            }
            Order::find($id)->update(['tong_tien' => $request->many, 'trang_thai' => 0]);
            Book::find(Order::find($id)->dat_ban_id)->update(['trang_thai' => 0]);

            return 1;
        } catch (\Exception $e) {
            return 0;
        }
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
        $order = Order::find($id);
        $order->delete();
        Book::find($order->dat_ban_id)->delete();
        return redirect('admin/order')->with('message', 'Xóa thành công');
    }
}
