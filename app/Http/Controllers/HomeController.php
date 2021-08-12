<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TiemChung;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dangKyTiem(Request $request)
    {
        $request->validate([
            'userid' => 'required',
            'noitiem' => 'required',
            'doituonguutien' => 'required',
            'ngayhen' => 'required'
        ]);
        dkytiem::create($request->all());
        return redirect('/home')->with('success', 'Đăng ký thành công!');
    }
    public function dsTiem()
    {
        $tiems = dkytiem::all();
        return view('dkytiemcovid', compact('tiems'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
