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
        return redirect('/kuizy/admin/add');
    }
    public function editBigQuestions(Request $request)
    {
        $items = Big_question::all();
        return view('admin.editBigQuestions', compact('items'));
    }
    public function update(Request $request)
    {
        foreach ($request->titles as $id => $title){
            $big_item = Big_question::find($id);
            // $form = $request->all();
            $big_item->fill(['name'=> $title])->save();
        }
        // dd($request->title);
        return redirect('/kuizy/admin/edit');
    }
    public function delete(Request $request)
    {
        $big_item = Big_question::find($request->id);
        $big_item->delete();
        return redirect('/kuizy/admin/edit');
    }
    public function editQuiz(Request $request)
    {
        $big_item = Big_question::find($request->id);
        $big_item->delete();
        return redirect('/kuizy/admin/edit');
    }
}
