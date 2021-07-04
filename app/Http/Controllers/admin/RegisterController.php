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

        //Criar um objeto do modelo (classe) Idea
        Idea::create($request->all());

        $request->session()->flash('success', "Idea $request->title saved successfully!");

        return redirect()->route('cards');

    }
}
