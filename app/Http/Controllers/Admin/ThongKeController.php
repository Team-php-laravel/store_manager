<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThongKeController extends Controller
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
        return view('admin.thong_ke.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $month = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $area = DB::select("SELECT MONTH(created_at) as 'thang', SUM(tong_tien) as 'ttien' FROM hoa_don WHERE YEAR(created_at) = 2020 GROUP BY MONTH(created_at)");
        foreach ($area as $val) {
            $month[$val->thang] = $val->ttien;
        }

        $line = DB::select("SELECT YEAR(created_at) as 'nam', SUM(tong_tien) as 'ttien' FROM hoa_don GROUP BY YEAR(created_at)");
        $label = [];
        $data = [];
        foreach ($line as $key => $val) {
            $label[$key] = "Năm " . $val->nam;
            $data[$key] = $val->ttien;
        }
        return response()->json(compact('month', 'label', 'data'));
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
    }
}
