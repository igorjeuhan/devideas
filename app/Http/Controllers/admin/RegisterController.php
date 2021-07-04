<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Idea;

class RegisterController extends Controller
{
    public function register() {
        return view('admin.register.index');
    }

    public function save(Request $request) {

        //Validar esses dados
        $request->validate([
            'title' => 'bail|required|min:5|max:16',
            'author' => 'bail|required|min:5|max:24',
            'description' => 'bail|required|min:10|max:58',
            'example' => 'bail|max:50',
            'github' => 'bail|max:50',
            'discord' => 'bail|max:4'
        ]);

        //Criar um objeto do modelo (classe) Idea
        Idea::create($request->all());

        $request->session()->flash('success', "Idea $request->title saved successfully!");

        return redirect()->route('cards');

    }
}
