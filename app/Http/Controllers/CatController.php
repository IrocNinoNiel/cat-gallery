<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CatController extends Controller
{
    //

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function add(){
        return view('cat.add');
    }

    public function store(Request $request){

        $this->validate($request,[
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'size' => 'required',
            'coat' => 'required',
            'color' => 'required',
            'temperament'=>'required',
            'characteristics'=>'required',
            'lifespan' => 'required',
            'foods' => 'required',
            'history'=>'required',
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('img'), $imageName);

        $cat = new Cat;

        $cat->image = $imageName;
        $cat->name = $request->name;
        $cat->size = $request->size;
        $cat->coat = $request->coat;
        $cat->color = $request->color;
        $cat->temperament = $request->temperament;
        $cat->characteristics = $request->characteristics;
        $cat->lifespan = $request->lifespan;
        $cat->foods = $request->foods;
        $cat->history = $request->history;
        $cat->status = 1;

        $cat->save();

        return Redirect::route('home')->with('success','Cat Added');

    }

    public function show($id){
        $cat = Cat::find($id);

        return view('cat.show')->with('cat',$cat);
    }
}
