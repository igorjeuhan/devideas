<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Idea;

class CardsController extends Controller
{
    public function cards(){

        $ideas = Idea::all();

        return view('admin.cards.index', compact('ideas'));
    }

}
