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
        if(isset($request->submit)) {
            $form = ['content' => $request->content];
            Todo::create($form);
            return redirect('/');
        }
        return redirect('/');
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}