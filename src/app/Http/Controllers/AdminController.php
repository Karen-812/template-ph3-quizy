<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BigQuestion;
// use App\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        // $admin = Admin::all();
        // $user = Auth::user();
        // $items = BigQuestion::all();
        $items = BigQuestion::orderBy('order', 'asc')->get();
        return view('admin.index', compact('items'));
    }
    public function create(Request $request)
    {
        $big_items = new BigQuestion;
        $big_items->name = $request->title;
        $big_items->order = BigQuestion::max('order') + 1;
        $big_items->save();
        return redirect('/kuizy/admin/add');
    }
    public function editBigQuestions(Request $request)
    {
        $items = BigQuestion::orderBy('order', 'asc')->get();
        $count = $items->count();
        return view('admin.editBigQuestions', compact('items','count'));
    }
    public function update(Request $request)
    {
        foreach ($request->big_questions as $id => $big_question){
            $big_item = BigQuestion::find($id);
            $big_item->fill(['name' => $big_question['title'], 'order' => $big_question['order']])->save();
        }
        // dd($request->title);
        return redirect('/kuizy/admin/edit');
    }
    public function delete(Request $request)
    {
        $big_item = BigQuestion::find($request->id);
        $big_item->delete();
        return redirect('/kuizy/admin/edit');
    }
    public function editQuiz(Request $request)
    {
        $big_items = BigQuestion::with('questions')->where('id', '=', $request->id )->get();
        return view('admin.editQuestions', compact('big_items'));
    }
    public function updateQuiz(Request $request)
    {
        foreach ($request->questions as $id => $question){
            $big_item = BigQuestion::with('questions')->where('id', '=', $id );
        }
    }
    public function updateEachQuiz(Request $request)
    {
        foreach ((array)$request->files as $id => $image){
            dd($image);
            $dir = 'public';
            $file_name = $image[0]['originalName'];
            $image->storeAs($dir, $file_name, ['disk' => 'local']);
            $big_item = BigQuestion::with('questions')->where('id', '=', $id );
            $big_item->fill(['image' => $image['image']])->save();
        }
        $bq_id = $request->id;
        return redirect("/kuizy/admin/editEachQuestion/?id={{$bq_id}}");       
    }
}
