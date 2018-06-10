<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;
use app\Kategori;
use App\Supplier;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $user = User::all();
        $supplier = Supplier::all();
        return view('Master.main', compact('user', 'supplier'));
    }
}
