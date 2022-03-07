<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class TodoController extends Controller
{
    public function index()
    {
        $items = Todo::all();
        return view('index', ['items'=>$items]);
    }

    public function create(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $form = ['content' => $request->content];
        Todo::create($form);
        return redirect('/');
    }

    public function update(Request $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Todo::where('id',$request->id)->update($form);
        return redirect('/');
    }

    public function delete(Request $request)
    {
        Todo::find($request->id)->delete();
        return redirect('/');

    }
}
