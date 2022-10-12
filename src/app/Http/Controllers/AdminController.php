<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BigQuestion;
use App\Models\Question;
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
    // -----大問の編集-----
    public function editQuiz(Request $request)
    {
        $big_items = BigQuestion::with('questions')->where('id', '=', $request->id )->get();
        $bq_id = $request->id;
        return view('admin.editQuestion', compact('big_items','bq_id'));
    }
    public function deleteQuiz(Request $request)
    {
        // $item = BigQuestion::with('questions')->find($request->id);
        $bq_id = $request->id;
        $item = Question::find($request->q_id);
        // idがbq_id、q_idが
        $item->delete();
        return redirect("/kuizy/admin/editQuestion/?id={$bq_id}");
    }

    // -----小問の編集-----
    public function editEachQuiz(Request $request)
    {
        $bq_id = $request->id;
        $q_id = $request->q_id;
        // $items = Question::with('choices')->where('id', '=', $q_id )->get(); またこのミスやっちゃった〜記録
        $items = Question::with('choices')->find($q_id );
        return view('admin.editEachQuestion', compact('bq_id', 'q_id', 'items'));       
    }
    public function updateEachQuiz(Request $request)
    {
        foreach ((array)$request->files as $id => $image){
            dd($image);
            
        }
        $bq_id = $request->id;
        return redirect("/kuizy/admin/editEachQuestion/?id={$bq_id}");       
    }

    // -----小問の追加-----
    public function createQuiz(Request $request)
    {
        $bq_id = $request->id;
        return view('admin.createQuestion', compact('bq_id'));       
    }
    public function createNewQuiz(Request $request)
    {
        $bq_id = $request->id;
        $items = new Question;
        $items->big_question_id = $bq_id;
        // questionsにはimageが必要、choicesにはchoicesとis_correctが必要
        // nameの付け方わからん
        $items->choices.choices = $request->choices$bq_id;
        $items->order = Question::max('order') + 1;
        $items->save();
        
        /* ファイル保存
        $dir = 'public';
        $file_name = $image[0]['originalName'];
        $image->storeAs($dir, $file_name, ['disk' => 'local']);
        $big_item = BigQuestion::with('questions')->where('id', '=', $id );
        $big_item->fill(['image' => $image['image']])->save();
        */    
        return redirect("/kuizy/admin/editQuestion/?id={$bq_id}");       
    }
}
