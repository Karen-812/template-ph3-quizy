<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Big_question;
// use App\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        // $admin = Admin::all();
        // $user = Auth::user();
        $items = Big_question::all();
        return view('admin.index', compact('items'));
    }
    public function create(Request $request)
    {
        $big_items = new Big_question;
        $big_items->name = $request->title;
        $big_items->save();
        return redirect('/kuizy/model2');
    }
}